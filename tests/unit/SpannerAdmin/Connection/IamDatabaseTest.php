<?php
/**
 * Copyright 2016 Google Inc.
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

namespace Google\Cloud\Tests\Unit\SpannerAdmin\Connection;

use Google\Cloud\Spanner\Connection\ConnectionInterface;
use Google\Cloud\Spanner\Connection\IamDatabase;
use Prophecy\Argument;

/**
 * @group spanneradmin
 */
class IamDatabaseTest extends \PHPUnit_Framework_TestCase
{
    private $connection;

    private $iam;

    public function setUp()
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);

        $this->iam = \Google\Cloud\Dev\stub(IamDatabase::class, [$this->connection->reveal()]);
    }

    public function testGetPolicy()
    {
        $args = ['key' => 'val'];
        $res = ['foo' => 'bar'];

        $this->connection->getDatabaseIamPolicy(Argument::exact($args))
            ->shouldBeCalled()
            ->willReturn($res);

        $this->iam->___setProperty('connection', $this->connection->reveal());

        $p = $this->iam->getPolicy($args);

        $this->assertEquals($res, $p);
    }

    public function testSetPolicy()
    {
        $args = ['key' => 'val'];
        $res = ['foo' => 'bar'];

        $this->connection->setDatabaseIamPolicy(Argument::exact($args))
            ->shouldBeCalled()
            ->willReturn($res);

        $this->iam->___setProperty('connection', $this->connection->reveal());

        $p = $this->iam->setPolicy($args);

        $this->assertEquals($res, $p);
    }

    public function testTestPermissions()
    {
        $args = ['key' => 'val'];
        $res = ['foo' => 'bar'];

        $this->connection->testDatabaseIamPermissions(Argument::exact($args))
            ->shouldBeCalled()
            ->willReturn($res);

        $this->iam->___setProperty('connection', $this->connection->reveal());

        $p = $this->iam->testPermissions($args);

        $this->assertEquals($res, $p);
    }
}