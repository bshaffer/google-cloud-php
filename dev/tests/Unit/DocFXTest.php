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

namespace Google\Cloud\Dev\Tests\Unit;

use Google\Cloud\Core\Testing\TestHelpers;
use Google\Cloud\Dev\ComponentManager;
use PHPUnit\Framework\TestCase;

/**
 * @group dev
 */
class DocFXTest extends TestCase
{
    public function testDocFX()
    {
        $tmpDir = sys_get_temp_dir() . '/.phpdoc';
        $cmd = sprintf(__DIR__ . '/../../google-cloud docfx Vision --out=%s', $tmpDir);
        exec($cmd);

        $fixturesDir = __DIR__ . '/../fixtures/docfx';
        $fixturesFiles = array_diff(scandir($fixturesDir), ['..', '.']);
        $generatedFiles = array_diff(scandir($tmpDir), ['..', '.']);

        $this->assertEquals([], array_diff($fixturesFiles, $generatedFiles));

        foreach ($fixturesFiles as $file) {
            $this->assertTrue(file_exists($fixturesDir . $file));
            $this->assertEquals(
                file_get_contents($fixturesDir . $file),
                file_get_contents($tmpDir . '/' . $file)
            );
        }
    }
}
