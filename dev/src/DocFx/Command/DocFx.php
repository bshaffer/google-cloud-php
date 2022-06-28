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
use Symfony\Component\Yaml\Yaml;
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
            ->addOption('outdir', '', InputOption::VALUE_REQUIRED, 'Path where to store the generated output.', 'out')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $component = $input->getArgument('component');
        $xml = $input->getArgument('structure_xml');
        $outDir = $input->getOption('outdir');

        if (!file_exists($xml)) {
            throw new RuntimeException('provided path to structure.xml does not exist');
        }

        $releaseLevel = $this->getReleaseLevel($component);
        $namespace = $this->getNamespace($component);

        $structure = new SimpleXMLElement(file_get_contents($xml));

        if (!is_dir($outDir)) {
            if (!mkdir($outDir)) {
                throw new RuntimeException('out directory doesn\'t exist and cannot be created');
            }
        }

        $tocArray = [
            'name' => $namespace,
            'items' => [],
        ];

        // List of pages, to sort alphabetically by key
        $pages = [];

        // YAML dump configuration
        $inline = 4; // The level where you switch to inline YAML
        $indent = 2; // The amount of spaces to use for indentation of nested nodes
        $flags = Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK;

        foreach ($structure->file as $file) {
            // only document classes for now
            if (!isset($file->class[0])) {
                continue;
            }

            $classNode = new ClassNode($file);

            // Skip the protobuf classes with underscores, they're all deprecated
            if (false !== strpos($classNode->getName(), '_')) {
                continue;
            }

            $pages[$classNode->getFullname()] = $classNode;
        }

        // Sort pages alphabetically by full class name
        ksort($pages);

        foreach ($pages as $classNode) {
            $docFxArray = $this->getDocFxClassArray($classNode);

            // Add the class to the TOC
            $tocArray['items'][] = array_filter([
                'uid' => $classNode->getFullname(),
                'name' => $classNode->getName(),
                'status' => $classNode->getStatus(),
            ]);

            // Dump the YAML for the class node
            $yaml = Yaml::dump($docFxArray, $inline, $indent, $flags);

            // Write the YAML to a file
            $outFile = sprintf('%s/%s.yml', $outDir, $classNode->getFilename());
            file_put_contents($outFile, $yaml);

        }

        // Write the TOC to a file
        $tocYaml = Yaml::dump([$tocArray], $inline, $indent, $flags);
        $outFile = sprintf('%s/toc.yml', $outDir);
        file_put_contents($outFile, $tocYaml);

        // Todo: create index.yml
    }

    private function getComponentPath(string $component): string
    {
        $componentPath = realpath(sprintf(__DIR__ . '/../../../../%s', $component));

        if (!is_dir($componentPath)) {
            throw new RuntimeException(sprintf('component "%s" not found', $component));
        }

        return $componentPath;
    }

    private function getReleaseLevel(string $component): string
    {
        $componentPath = $this->getComponentPath($component);
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

    private function getNamespace(string $component): string
    {
        $componentPath = $this->getComponentPath($component);
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

    private function getDocFxClassArray(ClassNode $class)
    {
        $children = [];
        foreach ($class->getMethods() as $method) {
            $children[] = sprintf('%s::%s()', $class->getFullname(), $method->getName());
        }
        $classItem = array_filter([
            'uid' => $class->getFullname(),
            'name' => $class->getName(),
            'id' => $class->getName(),
            'summary' => $class->getSummary(),
            'status' => $class->getStatus(),
            'type' => 'class',
            'langs' => ['php'],
            'children' => $children,
            'implements' => $class->getImplements(),
            'properties' => $class->getProperties(),
        ]);

        $items = [$classItem];

        foreach ($class->getMethods() as $method) {
            $methodItem = array_filter([
                'uid' => sprintf('%s::%s()', $class->getFullname(), $method->getName()),
                'name' => $method->getName(),
                'id' => $method->getName(),
                'summary' => $method->getSummary(),
                'parent'  => $class->getFullname(),
                'type' => 'method',
                'langs' => ['php'],
                'parameters' => $method->getParameters(),
            ]);
            $items[] = $methodItem;
        }

        return ['items' => $items];
    }
}
