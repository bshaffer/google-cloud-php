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

class MethodNode
{
    use NodeTrait;

    private $xmlNode;

    public function __construct(SimpleXMLElement $methodNode)
    {
        $this->xmlNode = $methodNode;
    }

    public function getName(): string
    {
        return (string) $this->xmlNode->name;
    }

    public function isInherited(): bool
    {
        if ($this->xmlNode->inherited_from) {
            return true;
        }

        return false;
    }

    public function isPublic(): bool
    {
        return 'public' === (string) $this->xmlNode['visibility'];
    }

    public function getReturnType(): string
    {
        if ($this->xmlNode->docblock) {
            foreach ($this->xmlNode->docblock->tag as $tag) {
                if ($tag['name'] == 'return') {
                    if ((string) $tag['type']) {
                        return (string) $tag['type'];
                    }
                    break;
                }
            }
        }
        return '';
    }

    public function getReturnDescription(): string
    {
        if ($this->xmlNode->docblock) {
            foreach ($this->xmlNode->docblock->tag as $tag) {
                if ($tag['name'] == 'return') {
                    if ((string) $tag['description']) {
                        return (string) $tag['description'];
                    }
                    break;
                }
            }
        }
        return '';
    }

    public function getSummary(): string
    {
        return (string) $this->xmlNode->description;
    }

    public function getParameters(): array
    {
        $parameters = [];
        foreach ($this->xmlNode->argument as $parameterNode) {
            $parameter = new ParameterNode(
                (string) $parameterNode->name,
                (string) $parameterNode->type
            );

            // Determine the description of the parameter
            $description = '';
            if ($this->xmlNode->docblock) {
                foreach ($this->xmlNode->docblock->tag as $tag) {
                    if ($tag['name'] == 'param') {
                        if ((string) $tag['variable'] === $parameter->getName()) {
                            $description = (string) $tag['description'];
                        }
                    }
                }
            }
            $parameter->setDescription($description);

            // For option arrays with nested parameters.
            // Example:
            // @param $options {
            //    @type string $key
            //         Some description of the "key" option
            // }
            if ($parameter->hasNestedParams()) {
                $parameters[] = $parameter;
                $parameters = array_merge(
                    $parameters,
                    $parameter->getNestedParams()
                );

                continue;
            }

            $parameters[] = $parameter;
        }

        return $parameters;
    }
}
