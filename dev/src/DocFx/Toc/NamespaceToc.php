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

namespace Google\Cloud\Dev\DocFx\Toc;

use Google\Cloud\Dev\DocFx\Node\ClassNode;

/**
 * Class to output the DocFX Table of Contents
 */
class NamespaceToc
{
    protected array $items = [];

    public function __construct(private string $namespace, private string $name)
    {
    }

    public function addNode(ClassNode $classNode): void
    {
        $uid = $classNode->getFullname();
        $namespace = $this->namespace . '\\';
        $parts = explode('\\', str_replace('\\' . $namespace, '', $uid));
        if (count($parts) > 1) {
            $nestedNs = $this->namespace . '\\' . $parts[0];
            $nestedUid = 'ns:' . $nestedNs;
            if (!isset($this->items[$nestedUid])) {
                $this->items[$nestedUid] = new NamespaceToc($nestedNs, $parts[0]);
            }
            $this->items[$nestedUid]->addNode($classNode);
        } else {
            $this->items[$uid] = new ClassToc($classNode);
        }
    }

    public function toToc(): array
    {
        $tocArray = [
            'name' => $this->name,
            'uid'  => 'ns:' . $this->namespace,
            'items' => [],
        ];

        foreach ($this->items as $item) {
            $tocArray['items'][] = $item->toToc();
        }

        return $tocArray;
    }
}