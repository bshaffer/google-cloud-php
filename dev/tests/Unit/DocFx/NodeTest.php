<?php
/**
 * Copyright 2022 Google LLC
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

namespace Google\Cloud\Dev\Tests\Unit\DocFx;

use PHPUnit\Framework\TestCase;
use Google\Cloud\Dev\DocFx\Node\MethodNode;
use SimpleXMLElement;

/**
 * @group dev
 */
class NodeTest extends TestCase
{
    public function testNestedParameters()
    {
        $nestedParamsXml = file_get_contents(__DIR__ . '/../../fixtures/phpdoc/nestedparams.xml');
        $method = new MethodNode(new SimpleXMLElement($nestedParamsXml));

        $params = $method->getParameters();

        // Assert 5 parameters have been parsed
        $this->assertCount(5, $params);

        // Assert parent option parameter
        $this->assertEquals('data', $params[0]['name']);
        $this->assertEquals('array', $params[0]['type']);
        $this->assertEquals(
            'Optional. Data for populating the Message object.',
            $params[0]['description']
        );

        // Assert nested parameter
        $this->assertEquals('↳ total_pages', $params[3]['name']);
        $this->assertEquals('int', $params[3]['type']);
        $this->assertEquals(
            'This field gives the total number of pages in the file.',
            $params[3]['description']
        );
    }
}