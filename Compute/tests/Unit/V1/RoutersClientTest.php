<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\Compute\Tests\Unit\V1;

use Google\Cloud\Compute\V1\RoutersClient;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\Router;
use Google\Cloud\Compute\V1\RouterAggregatedList;
use Google\Cloud\Compute\V1\RouterList;
use Google\Cloud\Compute\V1\RouterStatusResponse;
use Google\Cloud\Compute\V1\RoutersPreviewResponse;
use Google\Cloud\Compute\V1\VmEndpointNatMappingsList;
use Google\Protobuf\Any;
use Google\Rpc\Code;
use stdClass;

/**
 * @group compute
 * @group gapic
 */
class RoutersClientTest extends GeneratedTest
{
    /**
     * @return TransportInterface
     */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /**
     * @return CredentialsWrapper
     */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return RoutersClient
     */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];

        return new RoutersClient($options);
    }

    /**
     * @test
     */
    public function aggregatedListTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $id = 'id3355';
        $kind = 'kind3292052';
        $nextPageToken = 'nextPageToken-1530815211';
        $selfLink = 'selfLink-1691268851';
        $expectedResponse = new RouterAggregatedList();
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSelfLink($selfLink);
        $transport->addResponse($expectedResponse);

        $response = $client->aggregatedList();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/AggregatedList', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function aggregatedListExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->aggregatedList();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function deleteTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $clientOperationId = 'clientOperationId-239630617';
        $creationTimestamp = 'creationTimestamp567396278';
        $description = 'description-1724546052';
        $endTime = 'endTime1725551537';
        $httpErrorMessage = 'httpErrorMessage1276263769';
        $httpErrorStatusCode = 1386087020;
        $id = 'id3355';
        $insertTime = 'insertTime-103148397';
        $kind = 'kind3292052';
        $name = 'name3373707';
        $operationType = 'operationType-1432962286';
        $progress = 1001078227;
        $region = 'region-934795532';
        $selfLink = 'selfLink-1691268851';
        $startTime = 'startTime-1573145462';
        $statusMessage = 'statusMessage-239442758';
        $targetId = 'targetId-815576439';
        $targetLink = 'targetLink-2084812312';
        $user = 'user3599307';
        $zone = 'zone3744684';
        $expectedResponse = new Operation();
        $expectedResponse->setClientOperationId($clientOperationId);
        $expectedResponse->setCreationTimestamp($creationTimestamp);
        $expectedResponse->setDescription($description);
        $expectedResponse->setEndTime($endTime);
        $expectedResponse->setHttpErrorMessage($httpErrorMessage);
        $expectedResponse->setHttpErrorStatusCode($httpErrorStatusCode);
        $expectedResponse->setId($id);
        $expectedResponse->setInsertTime($insertTime);
        $expectedResponse->setKind($kind);
        $expectedResponse->setName($name);
        $expectedResponse->setOperationType($operationType);
        $expectedResponse->setProgress($progress);
        $expectedResponse->setRegion($region);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setStartTime($startTime);
        $expectedResponse->setStatusMessage($statusMessage);
        $expectedResponse->setTargetId($targetId);
        $expectedResponse->setTargetLink($targetLink);
        $expectedResponse->setUser($user);
        $expectedResponse->setZone($zone);
        $transport->addResponse($expectedResponse);

        $response = $client->delete();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/Delete', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function deleteExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->delete();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $creationTimestamp = 'creationTimestamp567396278';
        $description = 'description-1724546052';
        $id = 'id3355';
        $kind = 'kind3292052';
        $name = 'name3373707';
        $network = 'network1843485230';
        $region = 'region-934795532';
        $selfLink = 'selfLink-1691268851';
        $expectedResponse = new Router();
        $expectedResponse->setCreationTimestamp($creationTimestamp);
        $expectedResponse->setDescription($description);
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setName($name);
        $expectedResponse->setNetwork($network);
        $expectedResponse->setRegion($region);
        $expectedResponse->setSelfLink($selfLink);
        $transport->addResponse($expectedResponse);

        $response = $client->get();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/Get', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->get();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getNatMappingInfoTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $id = 'id3355';
        $kind = 'kind3292052';
        $nextPageToken = 'nextPageToken-1530815211';
        $selfLink = 'selfLink-1691268851';
        $expectedResponse = new VmEndpointNatMappingsList();
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSelfLink($selfLink);
        $transport->addResponse($expectedResponse);

        $response = $client->getNatMappingInfo();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/GetNatMappingInfo', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getNatMappingInfoExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->getNatMappingInfo();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getRouterStatusTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $kind = 'kind3292052';
        $expectedResponse = new RouterStatusResponse();
        $expectedResponse->setKind($kind);
        $transport->addResponse($expectedResponse);

        $response = $client->getRouterStatus();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/GetRouterStatus', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function getRouterStatusExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->getRouterStatus();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function insertTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $clientOperationId = 'clientOperationId-239630617';
        $creationTimestamp = 'creationTimestamp567396278';
        $description = 'description-1724546052';
        $endTime = 'endTime1725551537';
        $httpErrorMessage = 'httpErrorMessage1276263769';
        $httpErrorStatusCode = 1386087020;
        $id = 'id3355';
        $insertTime = 'insertTime-103148397';
        $kind = 'kind3292052';
        $name = 'name3373707';
        $operationType = 'operationType-1432962286';
        $progress = 1001078227;
        $region = 'region-934795532';
        $selfLink = 'selfLink-1691268851';
        $startTime = 'startTime-1573145462';
        $statusMessage = 'statusMessage-239442758';
        $targetId = 'targetId-815576439';
        $targetLink = 'targetLink-2084812312';
        $user = 'user3599307';
        $zone = 'zone3744684';
        $expectedResponse = new Operation();
        $expectedResponse->setClientOperationId($clientOperationId);
        $expectedResponse->setCreationTimestamp($creationTimestamp);
        $expectedResponse->setDescription($description);
        $expectedResponse->setEndTime($endTime);
        $expectedResponse->setHttpErrorMessage($httpErrorMessage);
        $expectedResponse->setHttpErrorStatusCode($httpErrorStatusCode);
        $expectedResponse->setId($id);
        $expectedResponse->setInsertTime($insertTime);
        $expectedResponse->setKind($kind);
        $expectedResponse->setName($name);
        $expectedResponse->setOperationType($operationType);
        $expectedResponse->setProgress($progress);
        $expectedResponse->setRegion($region);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setStartTime($startTime);
        $expectedResponse->setStatusMessage($statusMessage);
        $expectedResponse->setTargetId($targetId);
        $expectedResponse->setTargetLink($targetLink);
        $expectedResponse->setUser($user);
        $expectedResponse->setZone($zone);
        $transport->addResponse($expectedResponse);

        $response = $client->insert();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/Insert', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function insertExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->insert();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $id = 'id3355';
        $kind = 'kind3292052';
        $nextPageToken = 'nextPageToken-1530815211';
        $selfLink = 'selfLink-1691268851';
        $expectedResponse = new RouterList();
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSelfLink($selfLink);
        $transport->addResponse($expectedResponse);

        $response = $client->list_();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/List', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function listExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->list_();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function patchTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $clientOperationId = 'clientOperationId-239630617';
        $creationTimestamp = 'creationTimestamp567396278';
        $description = 'description-1724546052';
        $endTime = 'endTime1725551537';
        $httpErrorMessage = 'httpErrorMessage1276263769';
        $httpErrorStatusCode = 1386087020;
        $id = 'id3355';
        $insertTime = 'insertTime-103148397';
        $kind = 'kind3292052';
        $name = 'name3373707';
        $operationType = 'operationType-1432962286';
        $progress = 1001078227;
        $region = 'region-934795532';
        $selfLink = 'selfLink-1691268851';
        $startTime = 'startTime-1573145462';
        $statusMessage = 'statusMessage-239442758';
        $targetId = 'targetId-815576439';
        $targetLink = 'targetLink-2084812312';
        $user = 'user3599307';
        $zone = 'zone3744684';
        $expectedResponse = new Operation();
        $expectedResponse->setClientOperationId($clientOperationId);
        $expectedResponse->setCreationTimestamp($creationTimestamp);
        $expectedResponse->setDescription($description);
        $expectedResponse->setEndTime($endTime);
        $expectedResponse->setHttpErrorMessage($httpErrorMessage);
        $expectedResponse->setHttpErrorStatusCode($httpErrorStatusCode);
        $expectedResponse->setId($id);
        $expectedResponse->setInsertTime($insertTime);
        $expectedResponse->setKind($kind);
        $expectedResponse->setName($name);
        $expectedResponse->setOperationType($operationType);
        $expectedResponse->setProgress($progress);
        $expectedResponse->setRegion($region);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setStartTime($startTime);
        $expectedResponse->setStatusMessage($statusMessage);
        $expectedResponse->setTargetId($targetId);
        $expectedResponse->setTargetLink($targetLink);
        $expectedResponse->setUser($user);
        $expectedResponse->setZone($zone);
        $transport->addResponse($expectedResponse);

        $response = $client->patch();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/Patch', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function patchExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->patch();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function previewTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $expectedResponse = new RoutersPreviewResponse();
        $transport->addResponse($expectedResponse);

        $response = $client->preview();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/Preview', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function previewExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->preview();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function updateTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        // Mock response
        $clientOperationId = 'clientOperationId-239630617';
        $creationTimestamp = 'creationTimestamp567396278';
        $description = 'description-1724546052';
        $endTime = 'endTime1725551537';
        $httpErrorMessage = 'httpErrorMessage1276263769';
        $httpErrorStatusCode = 1386087020;
        $id = 'id3355';
        $insertTime = 'insertTime-103148397';
        $kind = 'kind3292052';
        $name = 'name3373707';
        $operationType = 'operationType-1432962286';
        $progress = 1001078227;
        $region = 'region-934795532';
        $selfLink = 'selfLink-1691268851';
        $startTime = 'startTime-1573145462';
        $statusMessage = 'statusMessage-239442758';
        $targetId = 'targetId-815576439';
        $targetLink = 'targetLink-2084812312';
        $user = 'user3599307';
        $zone = 'zone3744684';
        $expectedResponse = new Operation();
        $expectedResponse->setClientOperationId($clientOperationId);
        $expectedResponse->setCreationTimestamp($creationTimestamp);
        $expectedResponse->setDescription($description);
        $expectedResponse->setEndTime($endTime);
        $expectedResponse->setHttpErrorMessage($httpErrorMessage);
        $expectedResponse->setHttpErrorStatusCode($httpErrorStatusCode);
        $expectedResponse->setId($id);
        $expectedResponse->setInsertTime($insertTime);
        $expectedResponse->setKind($kind);
        $expectedResponse->setName($name);
        $expectedResponse->setOperationType($operationType);
        $expectedResponse->setProgress($progress);
        $expectedResponse->setRegion($region);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setStartTime($startTime);
        $expectedResponse->setStatusMessage($statusMessage);
        $expectedResponse->setTargetId($targetId);
        $expectedResponse->setTargetLink($targetLink);
        $expectedResponse->setUser($user);
        $expectedResponse->setZone($zone);
        $transport->addResponse($expectedResponse);

        $response = $client->update();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.Routers/Update', $actualFuncCall);

        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function updateExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient(['transport' => $transport]);

        $this->assertTrue($transport->isExhausted());

        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';

        $expectedExceptionMessage = json_encode([
           'message' => 'internal error',
           'code' => Code::DATA_LOSS,
           'status' => 'DATA_LOSS',
           'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);

        try {
            $client->update();
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }

        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }
}
