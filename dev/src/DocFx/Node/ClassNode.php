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
    use DocblockTrait;
    use NameTrait;

    private $xmlNode;
    private $filePath;
    private $childNode;

    public function __construct(SimpleXMLElement $fileNode)
    {
        $this->filePath = $fileNode['path'];
        $this->xmlNode = $fileNode->class[0];
    }

    public function getFilename(): string
    {
        $filename = str_replace(['src/', '.php'], '', $this->filePath);

        return str_replace('/', '.', $filename);
    }

    public function getLongDescription(): string
    {
        if (empty($this->xmlNode->docblock)) {
            return '';
        }

        if (empty($this->xmlNode->docblock->{'long-description'})) {
            return '';

        }

        return (string) $this->xmlNode->docblock->{'long-description'};
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

    public function getExtends(): string
    {
        return (string) $this->xmlNode->extends;
    }

    public function isInternal(): bool
    {
        if (!$this->xmlNode->docblock) {
            return '';
        }

        foreach ($this->xmlNode->docblock->tag as $tag) {
            if ((string) $tag['name'] === 'internal') {
                return 'true';
            }
        }

        return false;
    }

    public function getMethods(): array
    {
        $methods = [];
        foreach ($this->xmlNode->method as $methodNode) {
            $method = new MethodNode($methodNode);
            if ($method->isPublic() && !$method->isInherited()) {
                $methods[] = $method;
            }
        }

        if ($this->childNode) {
            foreach ($this->childNode->getMethods() as $childMethod) {
                $childMethod->setParentNode($this);
                $methods[] = $childMethod;
            }
        }

        return $methods;
    }

    public function getConstants(): array
    {
        $constants = [];
        foreach ($this->xmlNode->constant as $constantNode) {
            $constant = new ConstantNode($constantNode);
            if ($constant->isPublic() && !$constant->isInherited()) {
                $constants[] = $constant;
            }
        }

        if ($this->childNode) {
            foreach ($this->childNode->getConstants() as $childConstant) {
                $childConstant->setParentNode($this);
                $constants[] = $childConstant;
            }
        }

        return $constants;
    }

    public function getImplements(): array
    {
        return (array) $this->xmlNode->implements;
    }

    /**
     * TODO: remove this, or add it in case we ever use public properties. Right now this is unused.
     */
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

        if ($this->childNode) {
            $properties = array_merge($properties, $this->childNode->getProperties());
        }
        return $properties;
    }

    public function setChildNode(ClassNode $childNode)
    {
        $this->childNode = $childNode;
    }
}
