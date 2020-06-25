<?php

require 'vendor/autoload.php';

use Google\Cloud\Compute\V1\AddressesClient;
use Google\Cloud\Compute\V1\Address;

function printResponse($response) {
    echo "Respones Type: " . get_class($response) . "\n";
    $prettyResponse = json_encode(json_decode($response->serializeToJsonString()), JSON_PRETTY_PRINT);
    echo "Response JSON Representation: " . $prettyResponse . "\n\n";
}

# To authenticate run the program with the followign env varaible set:
# GOOGLE_APPLICATION_CREDENTIALS=/path/to/your/service/account/creds/like/vam-veneer-5fed76c46c26.json
# Enable GCE API in your project, make the service account (specified above) the owner.

# Change this to match your GCP project name.
$project = 'vam-veneer';

# Instantiate the client with REST transport
$client = new AddressesClient([
    'transport' => 'rest'
]);

# Insert an address.
# POST http method, accepts nested object as an input, returns Operation with enums in it.
$address = new Address([
    'name' => 'i-cant-believe-it-works-17',
]);

echo "Calling AddressClient#insert()\n";
$insertResponse = $client->insert([
    'project' => $project,
    'region' => 'us-central1',
    'addressResource' => $address]);

printResponse($insertResponse);

# Give the server some time properly handle LRO (insert address)
sleep(2);

# List addresses.
# GET http method, sophisticated response object with nested repeated messages.
echo "Calling AddressClient#list_()\n";
$listResponse = $client->list_([
    'project' => $project,
    'region' => 'us-central1']);

printResponse($listResponse);


# Delete the previously created address.
# DELETE http method, returns Operation
echo "Calling AddressClient#delete()\n";
$deleteResponse = $client->delete([
    'project' => $project,
    'region' => 'us-central1',
    'address' => 'i-cant-believe-it-works-17']);

printResponse($deleteResponse);


