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

class DocblockNode
{
    public function __construct($docblockNode)
    {
        $this->xmlNode = $docblockNode;
    }

    public function getFullDescription(): string
    {
        $summary = $this->xmlNode->description;
        if (!empty($this->xmlNode->{'long-description'})) {
            if ($summary) {
                $summary .= "\n\n";
            }
            $summary .= (string) $this->xmlNode->{'long-description'};
        }

        return trim($summary);
    }
}
