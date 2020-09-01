<?php

require 'vendor/autoload.php';

$instances = new Google\Cloud\Compute\V1\InstancesClient([
    'transport' => 'rest'
]);

$ret = $instances->list_([
    'zone' => 'us-central1-b',
    'project' => 'php-docs-samples-kokoro'
]);

foreach ($ret->getItems() as $instance) {
    echo($instance->getName() . "\n");
}
