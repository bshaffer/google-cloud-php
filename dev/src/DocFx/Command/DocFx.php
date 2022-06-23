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
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use SimpleXMLElement;
use RuntimeException;
use Google\Cloud\Dev\DocFx\Node\ClassNode;

class DocFx extends Command
{
    protected function configure()
    {
        $this->setName('docfx')
            ->setDescription('Generate DocFX yaml from a phpdoc strucutre.xml')
            ->addArgument('component', InputArgument::REQUIRED, 'Generate docs only for a single component.')
            ->addArgument('structure_xml', InputArgument::REQUIRED, 'Path to phpdoc structure.xml')
            ->addArgument('version', InputArgument::OPTIONAL, 'The version of the docs to generate.')
            ->addArgument('namespace', InputArgument::OPTIONAL, 'Root namespace the docs are for. Will be the root of the TOC.')
            ->addOption('out', '', InputOption::VALUE_REQUIRED, 'Path where to store the generated output.', realpath(__DIR__ . '/../../../out'))
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $component = $input->getArgument('component');
        $xml = $input->getArgument('structure_xml');
        $version = $input->getArgument('version');
        $out = $input->getOption('out');

        if (!file_exists($xml)) {
            throw new RuntimeException('provided path to structure.xml does not exist');
        }

        $releaseLevel = $this->getReleaseLevel($component);

        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        $twig = new Environment($loader, ['autoescape' => false]);
        $classTemplate = $twig->load('class.yml.twig');

        $structure = new SimpleXMLElement(file_get_contents($xml));
        foreach ($structure->file as $file) {
            // Skip metadata files
            if (0 === strpos($file['path'], 'metadata/')) {
                continue;
            }

            // Skip test files
            if (0 === strpos($file['path'], 'tests/')) {
                continue;
            }

            // only document classes for now
            if (!isset($file->class[0])) {
                continue;
            }

            $classNode = new ClassNode($file->class[0]);

            $yaml = $classTemplate->render($classNode->toArray());
            var_dump($yaml);exit;

            $outFile = sprintf('%s/%s.yml', $out, str_replace('\\', '.', $class->getFullname()));
            file_put_contents($outFile, $yaml);
        }

        // if (!is_dir($out)) {
        //     mkdir($out);
        // }

    }

    private function getReleaseLevel(string $component): string
    {
        $componentPath = realpath(sprintf(__DIR__ . '/../../../../%s', $component));

        if (!is_dir($componentPath)) {
            throw new RuntimeException(sprintf('component "%s" not found', $component));
        }
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
}
