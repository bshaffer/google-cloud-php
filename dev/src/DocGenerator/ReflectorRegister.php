<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\DocGenerator;

use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\Element;
use phpDocumentor\Reflection\File\LocalFile;
use phpDocumentor\Reflection\Php\Project;
use phpDocumentor\Reflection\Php\ProjectFactory;
use phpDocumentor\Reflection\Php\File;
use phpDocumentor\Reflection\Php\Interface_;
use phpDocumentor\Reflection\Php\Trait_;

class ReflectorRegister
{
    private $project;
    private $elementMap;
    private $fileMap;
    private $skippedFqsen;

    public function __construct(Project $project)
    {
        $this->project = $project;
        foreach ($this->project->getFiles() as $path => $file) {
            foreach ($file->getClasses() as $fqsen => $class) {
                $this->elementMap[$fqsen] = $class;
                $this->fileMap[$fqsen] = $file;
            }
            foreach ($file->getInterfaces() as $fqsen => $interface) {
                $this->elementMap[$fqsen] = $interface;
                $this->fileMap[$fqsen] = $file;
            }
            foreach ($file->getTraits() as $fqsen => $trait) {
                $this->elementMap[$fqsen] = $trait;
                $this->fileMap[$fqsen] = $file;
            }
        }
        $this->skippedFqsen = [];
    }

    public function getProject()
    {
        return $this->project;
    }

    public function getElementFromFqsen(Fqsen $elementFqsen): ?Element
    {
        $fqsen = (string) $elementFqsen;
        if (isset($this->elementMap[$fqsen])) {
            return $this->elementMap[$fqsen];
        }

        $this->skippedFqsen[$fqsen] = true;

        return null;
    }

    public function getFileFromFqsen(Fqsen $elementFqsen): File
    {
        $fqsen = (string) $elementFqsen;
        if (isset($this->fileMap[$fqsen])) {
            return $this->fileMap[$fqsen];
        }

        throw new \Exception('File not found for Fqsen ' . $fqsen);
    }

    public function getSkipped()
    {
        return array_values($this->skippedFqsen);
    }

    /**
     * @param FileReflector $fileReflector
     * @return File|Trait_|Interface_|null
     */
    public function getElementFromFile(File $file)
    {
        if (is_null($file)) {
            throw new \LogicException('null file reflector');
        }

        $classes = $file->getClasses();
        if (count($classes) > 0) {
            return array_shift($classes);
        }

        $interfaces = $file->getInterfaces();
        if (count($interfaces) > 0) {
            return array_shift($interfaces);
        }

        $traits = $file->getTraits();
        if (count($traits) > 0) {
            return array_shift($traits);
        }

        // No classes, interfaces, or traits found in file
        return null;
    }
}
