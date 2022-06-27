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

namespace Google\Cloud\Dev\DocFx\Node;

use SimpleXMLElement;

class ClassNode
{
    use NodeTrait;

    private $xmlNode;

    public function __construct(SimpleXMLElement $classNode)
    {
        $this->xmlNode = $classNode;
    }

    public function getName(): string
    {
        return (string) $this->xmlNode->name;
    }

    public function getStatus(): string
    {
        if (!$this->xmlNode->docblock) {
            return '';
        }

        foreach ($this->xmlNode->docblock->tag as $tag) {
            if ((string) $tag['name'] === 'deprecated') {
                return 'deprecated';
            }
        }

        return '';
    }

    public function getFullname(): string
    {
        return $this->xmlNode->full_name;
    }

    public function getMethods(): array
    {
        $methods = [];
        foreach ($this->xmlNode->method as $methodNode) {
            $method = new MethodNode($methodNode);
            if (!$method->isInherited()) {
                $methods[] = $method;
            }
        }

        return $methods;
    }

    public function getImplements(): array
    {
        return (array) $this->xmlNode->implements;
    }

    /** TODO: remove this */
    public function getInheritedMembers(): array
    {
        $inheritedMembers = [];

        foreach ($this->xmlNode->property as $propertyNode) {
            if (isset($propertyNode->inherited_from)) {
                $inheritedMembers[] = $propertyNode->full_name;
            }
        }
        foreach ($this->xmlNode->method as $methodNode) {
            if ($methodNode->inherited_from) {
                $inheritedMembers[] = $methodNode->full_name;
            }
        }

        return $inheritedMembers;
    }

    /** TODO: remove this */
    public function getProperties(): array
    {
        $properties = [];
        foreach ($this->xmlNode->property as $propertyNode) {
            if (isset($propertyNode->inherited_from)) {
                // Skip inherited properties
                continue;
            }
            $type = '';
            if ($propertyNode->docblock) {
                foreach ($propertyNode->docblock->tag as $tag) {
                    if ($tag['name'] == 'var') {
                        $type = (string) $tag['type'];
                        break;
                    }
                }
            }

            $properties[] = [
                'name' => (string) $propertyNode->name,
                'type' => $type,
            ];
        }
        return $properties;
    }
}
