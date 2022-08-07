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

namespace Google\Cloud\Dev\DocFx;

use Google\Cloud\Dev\DocFx\Node\ClassNode;

/**
 * Class to output the DocFX Table of Contents
 */
class Dumper
{
    public function combineGapicClients(array $pages)
    {
        // Combine GAPIC client classes
        foreach ($pages as $className => $classNode) {
            if ('Client' == substr($className, -6) && 'GapicClient' != substr($className, -11)) {
                // Find Gapic Classname
                $parts = explode('\\', $className);
                $clientName = substr(array_pop($parts), 0, -6) . 'GapicClient';
                $parts[] = 'Gapic';
                $parts[] = $clientName;
                $gapicClientName = implode('\\', $parts);
                if (isset($pages[$gapicClientName])) {
                    $classNode->setChildNode($pages[$gapicClientName]);
                    unset($pages[$gapicClientName]);
                }
            }
        }
        return $pages;
    }

    public function getClassItems(ClassNode $class): array
    {
        $children = [];
        foreach ($class->getMethods() as $method) {
            $children[] = sprintf('%s::%s()', $class->getFullname(), $method->getName());
        }
        $classItem = array_filter([
            'uid' => $class->getFullname(),
            'name' => $class->getName(),
            'id' => $class->getName(),
            'summary' => $class->getContent(),
            'status' => $class->getStatus(),
            'type' => 'class',
            'langs' => ['php'],
            'children' => $children,
            'implements' => $class->getImplements(),
        ]);

        $items = [$classItem];

        foreach ($class->getMethods() as $method) {
            $methodItem = array_filter([
                'uid' => sprintf('%s::%s()', $class->getFullname(), $method->getName()),
                'name' => $method->getName(),
                'id' => $method->getName(),
                // 'summary' => $method->getSummary(),
                'summary' => $method->getContent(),
                'parent'  => $class->getFullname(),
                'type' => 'method',
                'langs' => ['php'],
                'syntax' => array_filter([
                    // 'content' => $method->getContent(),
                ]),
            ]);
            if ($parameters = $method->getParameters()) {
                $methodItem['syntax']['parameters'] = [];
                foreach ($parameters as $parameter) {
                    $methodItem['syntax']['parameters'][] = [
                        'id' => $parameter->getName(),
                        'var_type' => $parameter->getType(),
                        'description' => $parameter->getDescription(),
                    ];
                }
            }
            if ($returnType = $method->getReturnType()) {
                $methodItem['syntax']['return'] = array_filter([
                    'type' => [$returnType],
                    'description' => $method->getReturnDescription(),
                ]);
            }
            $items[] = $methodItem;
        }

        return ['items' => $items];
    }
}