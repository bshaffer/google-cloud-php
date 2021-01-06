<?php
/**
 * Copyright 2021 Google Inc.
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

namespace System;

use Google\Cloud\Compute\V1\ZonesClient;
use PHPUnit\Framework\TestCase;


class PaginationTest extends TestCase{
    protected static $zonesClient;
    protected static $projectId;
    const Zone = 'us-central1-a';

    public static function setUpBeforeClass(): void {
        self::$projectId = getenv('PROJECT_ID');
        self::$zonesClient = new ZonesClient();
    }

    public static function tearDownAfterClass(): void
    {
        self::$zonesClient->close();
    }

    public function testPageToken(){
        $response = self::$zonesClient->list_(self::$projectId, ['maxResults' => 5]);
        $page = $response->getPage();
        $pageToken = $page->getNextPageToken();
        $nextPage = self::$zonesClient->list_(self::$projectId, ['pageToken'=>$pageToken, 'maxResults' => 5])->getPage();
        $arrToken = iterator_to_array($nextPage->getIterator());
        $arr = iterator_to_array($page->getNextPage(5)->getIterator());
        self::assertEquals($arr, $arrToken);
    }

    public function  testNextPage(){
        $page = self::$zonesClient->list_(self::$projectId, ['maxResults' => 1])->getPage();
        $nextPage = $page->getNextPage(1);
        $content = iterator_to_array($page->getIterator());
        $nextContent = iterator_to_array($nextPage->getIterator());
        self::assertNotEquals($content, $nextContent);
    }

    public function  testNextPageSize(){
        $page = self::$zonesClient->list_(self::$projectId, ['maxResults' => 5])->getPage();
        $nextPage = $page->getNextPage(1);
        $nextContent = iterator_to_array($nextPage->getIterator());
        self::assertCount(1, $nextContent);
    }

    public function testMaxResults(){
        $response = self::$zonesClient->list_(self::$projectId, ['maxResults' => 10]);
        $page = $response->getPage();
        $arr = iterator_to_array($page->getIterator());
        self::assertCount(10, $arr);
    }

}


