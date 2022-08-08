<?php
/**
 * Copyright 2022 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\DocFx\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;
use Symfony\Component\Yaml\Yaml;
use RuntimeException;
use Google\Cloud\Dev\DocFx\Pages;

class DocFx extends Command
{
    protected function configure()
    {
        $this->setName('docfx')
            ->setDescription('Generate DocFX yaml from a phpdoc strucutre.xml')
            ->addOption('xml', '', InputOption::VALUE_REQUIRED, 'Path to phpdoc structure.xml')
            ->addOption('component', 'c', InputOption::VALUE_REQUIRED, 'Generate docs only for a single component.', '')
            ->addOption('out', '', InputOption::VALUE_REQUIRED, 'Path where to store the generated output.', 'out')
            ->addOption('metadata-version', '', InputOption::VALUE_REQUIRED, 'version to write to docs.metadata using docuploader')
            ->addOption('staging-bucket', '', InputOption::VALUE_REQUIRED, 'Upload to the specified staging bucket using docuploader.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $component = $input->getOption('component') ?: basename(getcwd());
        $componentPath = $this->checkComponent($component);
        $xml = $input->getOption('xml');
        if (empty($xml)) {
            $output->write('Running "phpdoc" to generate structure.xml... ');
            // Run "phpdoc"
            $process = new Process([
                'phpdoc',
                '-d',
                sprintf('%s/src', $componentPath),
                '--template',
                'xml'
            ]);
            $process->mustRun();
            $output->writeln('Done.');
            $xml = '.phpdoc/build/structure.xml';
        }
        if (!file_exists($xml)) {
            throw new \Exception($input->getOption('xml') ? 'Unable to load provided structure.xml'
                : sprintf('Default structure.xml file "%s" not found.', $xml));
        }
        $outDir = $input->getOption('out');

        if (!file_exists($xml)) {
            throw new RuntimeException('provided path to structure.xml does not exist');
        }

        $releaseLevel = $this->getReleaseLevel($componentPath);
        $namespace = $this->getNamespace($componentPath);

        if (!is_dir($outDir)) {
            if (!mkdir($outDir)) {
                throw new RuntimeException('out directory doesn\'t exist and cannot be created');
            }
        }

        $output->write(sprintf('Writing output to "%s"... ', $outDir));

        // YAML dump configuration
        $inline = 9; // The level where you switch to inline YAML
        $indent = 2; // The amount of spaces to use for indentation of nested nodes
        $flags = Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK;

        $pages = new Pages($xml, $namespace);

        foreach ($pages->getPages() as $page) {
            $docFxArray = ['items' => $page->getItems()];

            // Dump the YAML for the class node
            $yaml = '### YamlMime:UniversalReference' . PHP_EOL;
            $yaml .= Yaml::dump($docFxArray, $inline, $indent, $flags);

            // Write the YAML to a file
            $outFile = sprintf('%s/%s.yml', $outDir, $page->getFilename());
            file_put_contents($outFile, $yaml);
        }

        $tocItems = $pages->getTocItems();

        // Add an "overview" file if it exists
        $overviewFile = sprintf('%s/README.md', $componentPath);
        if (file_exists($overviewFile)) {
            $outFile = sprintf('%s/index.md', $outDir);
            file_put_contents($outFile, file_get_contents($overviewFile));
            // Add "overview" as the first item on the TOC
            array_unshift($tocItems, ['name' => 'Overview', 'href' => 'index.md']);
        }

        // Write the TOC to a file
        $tocYaml = Yaml::dump($tocItems, $inline, $indent, $flags);
        $outFile = sprintf('%s/toc.yml', $outDir);
        file_put_contents($outFile, $tocYaml);

        $output->writeln('Done.');

        if ($metadataVersion = $input->getOption('metadata-version')) {
            $output->write(sprintf('Writing docs.metadata with version "%s"... ', $metadataVersion));
            $process = new Process([
                'docuploader',
                'create-metadata',
                '--language',
                'php',
                '--name',
                strtolower($component),
                '--version',
                $metadataVersion
            ]);
            $process->mustRun();
            $output->writeln('Done.');
        }

        if ($stagingBucket = $input->getOption('staging-bucket')) {
            $output->write(sprintf('Running "docuploader" to upload to staging bucket "%s"... ', $stagingBucket));
            $process = new Process([
                'docuploader',
                'upload',
                $outDir,
                '--staging-bucket',
                $stagingBucket,
                '--destination-prefix',
                'docfx-'
            ]);
            $process->mustRun();
            $output->writeln('Done.');
        }
    }

    private function getReleaseLevel(string $componentPath): string
    {
        $repoMetadataPath = $componentPath . '/.repo-metadata.json';
        if (!file_exists($repoMetadataPath)) {
            throw new RuntimeException(sprintf('repo metadata not found for component "%s"', $component));
        }
        $repoMetadataJson = json_decode(file_get_contents($repoMetadataPath), true);
        if (empty($repoMetadataJson['release_level'])) {
            throw new RuntimeException(sprintf(
                'repo metadata does not contain "release_level" for component "%s"',
                $component
            ));
        }

        return $repoMetadataJson['release_level'];
    }

    private function getNamespace(string $componentPath): string
    {
        $composerPath = $componentPath . '/composer.json';
        if (!file_exists($composerPath)) {
            throw new RuntimeException(sprintf('composer.json not found for component "%s"', $component));
        }
        $composerJson = json_decode(file_get_contents($composerPath), true);
        if (empty($composerJson['autoload']['psr-4'])) {
            throw new RuntimeException(sprintf(
                'composer does not contain autoload.psr-4 for component "%s"',
                $component
            ));
        }

        foreach ($composerJson['autoload']['psr-4'] as $namespace => $dir) {
            if ($dir == 'src') {
                return rtrim($namespace, '\\');
            }
        }

        throw new RuntimeException(sprintf(
            'composer autoload.psr-4 does not contain a namespace for component "%s"',
            $component
        ));
    }

    private function checkComponent(string $component): string
    {
        $rootDir = __DIR__ . '/../../../../';

        $components = scandir($rootDir);
        foreach ($components as $i => $c) {
            if (!is_dir($rootDir . $c) || !preg_match('/^[A-Z]/', $c)) {
                unset($components[$i]);
            }
        }
        if (!in_array($component, $components)) {
            throw new \Exception($input->getOption('component') ? 'Invalid component provided'
                : 'You are not in a component directory. Run this command from a valid component'
                  . ' directory or provide a valid component using the "component" option.');
        }

        $componentPath = realpath(sprintf(__DIR__ . '/../../../../%s', $component));

        if (!is_dir($componentPath)) {
            throw new RuntimeException(sprintf('component "%s" not found', $component));
        }

        return $componentPath;
    }
}
