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

trait XrefTrait
{
    private function normalizeTypedVariables(
        string $type, bool $replaceWithLink = true
    ): string {
        $types = explode('|', $type);

        // Remove redundant "RepeatedField" type for protobuf parameters
        if (count($types) == 2 && '\Google\Protobuf\Internal\RepeatedField' === $types[1]) {
            array_pop($types);
        }

        foreach ($types as $i => $type) {
            if (0 === strpos($type, '\\')) {
                if ('[]' === substr($type, -2)) {
                    $type = substr($type, 0, -2);
                    $types[$i] = $this->normalizeArrayType($type, $replaceWithLink);
                } elseif ($replaceWithLink) {
                    $types[$i] = $this->replaceUidWithLink($type);
                }
            } elseif (0 === strpos($type, 'array<\\')) {
                $types[$i] = preg_replace_callback(
                    '/^array<([^ ]*)>$/',
                    function ($matches) use ($replaceWithLink) {
                        return $this->normalizeArrayType($matches[1], $replaceWithLink);
                    },
                    $type
                );
            }
        }

        return implode('|', $types);
    }

    private function normalizeArrayType(string $type, bool $replaceWithLink): string
    {
        return sprintf(
            htmlentities('array<%s>'),
            $replaceWithLink ? $this->replaceUidWithLink($type) : $type
        );
    }

    private function replaceSeeTag(string $description): string
    {
        return preg_replace_callback(
            '/{@see ([^ ]*)}/',
            function ($matches) {
                return $this->replaceUidWithLink($matches[1]);
            },
            $description
        );
    }

    private function replaceUidWithLink(string $uid): string
    {
        // Remove proceeding "\" from namespace
        $name = substr($uid, 1);

        // Check for external package namespaces
        switch (true) {
            case 0 === strpos($uid, '\Google\ApiCore\\'):
                $extLinkRoot = 'https://googleapis.github.io/gax-php#';
                break;
            case 0 === strpos($uid, '\Google\Auth\\'):
                $extLinkRoot = 'https://googleapis.github.io/google-auth-library-php/main/';
                break;
            case 0 === strpos($uid, '\Google\Protobuf\\'):
                // @TODO: link to reference docs for Protobuf
                return $name;
            default:
                $extLinkRoot = '';
        }

        // Create external link
        if ($extLinkRoot) {
            $path = str_replace(['::', '\\', '()'], ['#method_', '/'], $name);
            return sprintf('<a href="%s">%s</a>', $extLinkRoot . $path, $name);
        }

        return sprintf('<xref uid="%s">%s</xref>', $uid, $name);
    }
}
