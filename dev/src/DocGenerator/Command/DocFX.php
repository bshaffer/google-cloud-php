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

namespace Google\Cloud\Dev\DocGenerator\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DocFX extends Command
{
    protected function configure()
    {
        $this->setName('docfx')
            ->setDescription('Generate DocFX yaml')
            ->addArgument('component', InputArgument::REQUIRED, 'Generate docs only for a single component.')
            ->addOption('out', '', InputOption::VALUE_REQUIRED, 'Path where to store the generated output.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $component = $input->getArgument('component');
        $out = $input->getOption('out');

        $componentPath = realpath(sprintf(__DIR__ . '/../../../../%s', $component));
        if (!is_dir($componentPath)) {
            throw new \RuntimeException(sprintf('component "%s" not found', $component));
        }
        $phpdocPath = trim(shell_exec('which phpdoc'));
        if (empty($phpdocPath)) {
            throw new \RuntimeException('phpdoc not found');
        }

        $output->writeln(sprintf('Writing documentation for %s', $component));

        $templatePath = realpath(__DIR__ . '/../../../templates/docfx');

        $cmd = sprintf(
            '%s --directory=%s --template=%s',
            $phpdocPath,
            $componentPath,
            $templatePath
        );

        if (!empty($out)) {
            $cmd .= '  --target=' . $out;
        }

        passthru($cmd);
    }
}
