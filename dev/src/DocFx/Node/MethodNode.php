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

    public function getParameters(): array
    {
        $parameters = [];
        foreach ($this->xmlNode->argument as $parameterNode) {
            $parameter = [
                'name' => (string) $parameterNode->name,
                'type' => (string) $parameterNode->type,
            ];

            // Determine the description of the parameter
            $description = '';
            if ($this->xmlNode->docblock) {
                foreach ($this->xmlNode->docblock->tag as $tag) {
                    if ($tag['name'] == 'param') {
                        if ((string) $tag['variable'] === (string) $parameterNode->name) {
                            $description = (string) $tag['description'];
                        }
                    }
                }
            }

            // For option arrays with nested parameters.
            // Example:
            // @param $options {
            //    @type string $key
            //         Some description of the "key" option
            // }
            if ($this->hasNestedParams($description)) {
                $parameters = array_merge(
                    $parameters,
                    $this->getNestedParams($parameter, $description)
                );

                continue;
            }

            if ($description) {
                $parameter['description'] = $description;
            }

            $parameters[] = $parameter;
        }
        return $parameters;
    }


    /**
     * PHPDoc has no support for nested params. This is a workaround to parse
     * our custom format.
     */
    private function getNestedParams(array $parentParameter, string $description): array
    {
        // Remove "optional" prefix (in handwritten clients).
        $parameterString = trim(str_replace('[optional]', '', $description));

        // Remove wrapping "{}".
        $parameterString = substr($parameterString, 1, -1);

        // Create an array item for each parameter.
        $nestedParameters = explode('@type', $parameterString);

        // Remove the first, since that's the wrapping array param,
        // and use it for the wrapping param description
        if ($parentDescription = trim(array_shift($nestedParameters))) {
            $parentParameter['description'] = $parentDescription;
        }
        $parameters[] = $parentParameter;
        foreach ($nestedParameters as $param) {
            // Parse "@type string $key" syntax
            $paramInfo = explode(' ', trim($param), 3);
            if (count($paramInfo) < 3) {
                // No parameter description
                list($type, $name) = $paramInfo;
                $description = '';
            } else {
                list($type, $name, $description) = $paramInfo;
            }

            // remove "$" prefix from parameter name and add "↳ " for UX to indicate it's nested.
            $name = '↳ ' . ltrim($name, '$');
            // Trim newline whitespace
            $description = preg_replace('/\s+/', ' ', $description);

            $parameters[] = [
                'name' => $name,
                'type' => $type,
                'description' => trim($description),
            ];
        }

        return $parameters;
    }

    private function hasNestedParams(string $description): bool
    {
        $description = trim(str_replace('[optional]', '', $description));

        if (strlen($description) === 0) {
            return false;
        }

        return $description[0] === '{';
    }
}
