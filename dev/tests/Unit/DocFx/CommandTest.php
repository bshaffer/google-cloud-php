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

use Google\Cloud\Core\Testing\TestHelpers;
use Google\Cloud\Dev\ComponentManager;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

/**
 * @group dev
 */
class CommandTest extends TestCase
{
    private static $fixturesDir;
    private static $tmpDir;

    public function testGenerateDocFxFiles()
    {
        $fixturesFiles = array_diff(scandir(self::$fixturesDir), ['..', '.']);
        $generatedFiles = array_diff(scandir(self::$tmpDir), ['..', '.']);

        $this->assertEquals([], array_diff($fixturesFiles, $generatedFiles));

    }

    /**
     * @depends testGenerateDocFxFiles
     * @dataProvider provideDoxFxFiles
     */
    public function testDocFxFiles(string $file)
    {
        $this->assertTrue(file_exists(self::$fixturesDir . '/' . $file), $file);
        $this->assertEquals(
            Yaml::parse(file_get_contents(self::$fixturesDir . '/' . $file)),
            Yaml::parse(file_get_contents(self::$tmpDir . '/' . $file))
        );
    }

    public function provideDoxFxFiles()
    {
        $structureXml = __DIR__ . '/../../fixtures/phpdoc/structure.xml';
        $tmpDir = sys_get_temp_dir() . '/' . rand();
        $cmd = sprintf(
            __DIR__ . '/../../../google-cloud docfx Vision %s --out=%s',
            $structureXml,
            $tmpDir
        );
        passthru($cmd);

        $filesAsArguments = [];
        $generatedFiles = array_diff(scandir($tmpDir), ['..', '.']);
        foreach ($generatedFiles as $file) {
            $filesAsArguments[] = [$file];
        }

        self::$tmpDir = $tmpDir;
        self::$fixturesDir = __DIR__ . '/../../fixtures/docfx';

        return $filesAsArguments;
    }
}
