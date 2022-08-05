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

trait NodeTrait
{
    public function getContent(): string
    {
        if (empty($this->xmlNode->docblock)) {
            return '';
        }
        $docblock = new DocblockNode($this->xmlNode->docblock);

        return $docblock->getFullDescription();
    }

    private function replaceXref(string $description): string
    {
        return preg_replace_callback(
            '/{@see ([^ ]*)}/',
            function ($matches) {
                $uid = $matches[1];
                $name = substr($matches[1], 1);

                // Check for external package namespaces
                switch (true) {
                    case 0 === strpos($uid, '\Google\ApiCore\\'):
                        $extLinkRoot = 'https://googleapis.github.io/gax-php#';
                        break;
                    case 0 === strpos($uid, '\Google\Auth\\'):
                        $extLinkRoot = 'https://googleapis.github.io/google-auth-library-php/main/';
                        break;
                    default:
                        $extLinkRoot = '';
                }

                // Create external link
                if ($extLinkRoot) {
                    $path = str_replace(['::', '\\', '()'], ['#method_', '/'], $name);
                    return sprintf('<a href="%s">%s</a>', $extLinkRoot . $path, $name);
                }

                return sprintf('<xref uid="%s">%s</xref>', $uid, $name);
            },
            $description
        );
    }
}
