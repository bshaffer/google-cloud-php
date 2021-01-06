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

use Google\ApiCore\ApiException;
use Google\ApiCore\ValidationException;
use Google\Cloud\Compute\V1\AccessConfig;
use Google\Cloud\Compute\V1\AttachedDisk;
use Google\Cloud\Compute\V1\AttachedDiskInitializeParams;
use Google\Cloud\Compute\V1\Instance;
use Google\Cloud\Compute\V1\InstancesClient;
use Google\Cloud\Compute\V1\NetworkInterface;
use Google\Cloud\Compute\V1\Operation\Status;
use Google\Cloud\Compute\V1\ZoneOperationsClient;
use phpDocumentor\Reflection\Exception;
use PHPUnit\Framework\TestCase;


class SmokeTest extends TestCase
{
    const Zone = 'us-central1-a';
    const image = 'https://www.googleapis.com/compute/v1/projects/debian-cloud/global/images/debian-7-wheezy-v20150710';
    protected static $instancesClient;
    protected static $projectId;
    protected static $Machine_Type;

    public static function setUpBeforeClass(): void
    {
        self::$projectId = getenv('PROJECT_ID');
        self::$instancesClient = new InstancesClient();
        self::$Machine_Type = 'https://www.googleapis.com/compute/v1/projects/' . self::$projectId . '/zones/us-central1-a/machineTypes/n1-standard-1';
    }

    public function testInsertInstance()
    {
        $name = "gapicphp" . strval(rand($min = 100000, $max = 999999));
        $disk = new AttachedDisk(['boot' => true, "auto_delete" => true, "type" => 0,
            'initialize_params' => new AttachedDiskInitializeParams(['source_image' => self::image]),
        ]);
        $access_configs = new AccessConfig(['name' => 'default']);
        $network_config = new NetworkInterface(['access_configs' => [$access_configs]]);
        $instanceResource = new Instance(['name' => $name, 'machine_type' => self::$Machine_Type,
            'network_interfaces' => [$network_config], 'disks' => [$disk]
        ]);
        $operation = self::$instancesClient->insert($instanceResource, self::$projectId, self::Zone);

        $operationClient = new ZoneOperationsClient();
        while (true) {
            $op = $operationClient->get($operation->getName(), self::$projectId, self::Zone);
            $status = $op->getStatus();
            if ($status == Status::DONE or $status == Status::UNDEFINED_STATUS) {
                break;
            }
        }
        $instance = self::$instancesClient->get($name, self::$projectId, self::Zone);
        self::$instancesClient->delete($name, self::$projectId, self::Zone);
        self::$instancesClient->close();
        self::assertEquals($name, $instance->getName());
        self::assertEquals(self::$Machine_Type, $instance->getMachineType());
    }

    public function testAPIError()
    {
        $operationClient = new ZoneOperationsClient();
        try {
            $op = $operationClient->get('123', self::$projectId, self::Zone);
        } catch (ApiException $e) {
            self::assertStringContainsString("was not found", $e->getMessage());
        }
    }

    public function testValidationError()
    {
        $operationClient = new ZoneOperationsClient();
        try {
            $op = $operationClient->get('123', self::$projectId, '');
        } catch (ValidationException $e) {
            self::assertStringContainsString("Could not map bindings", $e->getMessage());
        }
    }
}
