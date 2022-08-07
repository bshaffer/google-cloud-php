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
class ClassToc
{
    public function __construct(private ClassNode $classNode)
    {
    }

    public function toToc()
    {
        return array_filter([
            'uid' => $this->classNode->getFullname(),
            'name' => $this->classNode->getName(),
            'status' => $this->classNode->getStatus(),
        ]);
    }

    public function isServiceClass(): bool
    {
        // returns true if the class extends a generated GAPIC client
        if ($extends = $this->classNode->getExtends()) {
            return 'GapicClient' === substr($extends, -11);
        }
        return false;
    }

    public function isProtobufMessageClass(): bool
    {
        // returns true if the class extends \Google\Protobuf\Internal\Message
        return '\Google\Protobuf\Internal\Message' === $this->classNode->getExtends();
    }

    public function isProtobufEnumClass(): bool
    {
        if (!$this->classNode->getExtends()) {
            // check that last line of long-description starts with "Protobuf type..."
            $longDescriptionParts = explode("\n", $this->classNode->getLongDescription());
            $lastDescriptionLine = array_pop($longDescriptionParts);
            return 0 === strpos($lastDescriptionLine, 'Protobuf type');
        }
        return false;
    }
}