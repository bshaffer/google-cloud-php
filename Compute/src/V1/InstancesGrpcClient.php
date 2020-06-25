<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class InstancesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AddAccessConfigInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddAccessConfig(\Google\Cloud\Compute\V1\AddAccessConfigInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/AddAccessConfig',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AddResourcePoliciesInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddResourcePolicies(\Google\Cloud\Compute\V1\AddResourcePoliciesInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/AddResourcePolicies',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AttachDiskInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AttachDisk(\Google\Cloud\Compute\V1\AttachDiskInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/AttachDisk',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteAccessConfigInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAccessConfig(\Google\Cloud\Compute\V1\DeleteAccessConfigInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/DeleteAccessConfig',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DetachDiskInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DetachDisk(\Google\Cloud\Compute\V1\DetachDiskInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/DetachDisk',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetGuestAttributesInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGuestAttributes(\Google\Cloud\Compute\V1\GetGuestAttributesInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/GetGuestAttributes',
        $argument,
        ['\Google\Cloud\Compute\V1\GuestAttributes', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetIamPolicyInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Compute\V1\GetIamPolicyInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetSerialPortOutputInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSerialPortOutput(\Google\Cloud\Compute\V1\GetSerialPortOutputInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/GetSerialPortOutput',
        $argument,
        ['\Google\Cloud\Compute\V1\SerialPortOutput', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetShieldedInstanceIdentityInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetShieldedInstanceIdentity(\Google\Cloud\Compute\V1\GetShieldedInstanceIdentityInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/GetShieldedInstanceIdentity',
        $argument,
        ['\Google\Cloud\Compute\V1\ShieldedInstanceIdentity', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/List',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListReferrersInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListReferrers(\Google\Cloud\Compute\V1\ListReferrersInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/ListReferrers',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceListReferrers', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\RemoveResourcePoliciesInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveResourcePolicies(\Google\Cloud\Compute\V1\RemoveResourcePoliciesInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/RemoveResourcePolicies',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ResetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Reset(\Google\Cloud\Compute\V1\ResetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/Reset',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetDeletionProtectionInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetDeletionProtection(\Google\Cloud\Compute\V1\SetDeletionProtectionInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetDeletionProtection',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetDiskAutoDeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetDiskAutoDelete(\Google\Cloud\Compute\V1\SetDiskAutoDeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetDiskAutoDelete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetIamPolicyInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Compute\V1\SetIamPolicyInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetLabelsInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetLabels(\Google\Cloud\Compute\V1\SetLabelsInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetLabels',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetMachineResourcesInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetMachineResources(\Google\Cloud\Compute\V1\SetMachineResourcesInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetMachineResources',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetMachineTypeInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetMachineType(\Google\Cloud\Compute\V1\SetMachineTypeInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetMachineType',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetMetadataInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetMetadata(\Google\Cloud\Compute\V1\SetMetadataInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetMetadata',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetMinCpuPlatformInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetMinCpuPlatform(\Google\Cloud\Compute\V1\SetMinCpuPlatformInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetMinCpuPlatform',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetSchedulingInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetScheduling(\Google\Cloud\Compute\V1\SetSchedulingInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetScheduling',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetServiceAccountInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetServiceAccount(\Google\Cloud\Compute\V1\SetServiceAccountInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetServiceAccount',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetShieldedInstanceIntegrityPolicyInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetShieldedInstanceIntegrityPolicy(\Google\Cloud\Compute\V1\SetShieldedInstanceIntegrityPolicyInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetShieldedInstanceIntegrityPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetTagsInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetTags(\Google\Cloud\Compute\V1\SetTagsInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SetTags',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SimulateMaintenanceEventInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SimulateMaintenanceEvent(\Google\Cloud\Compute\V1\SimulateMaintenanceEventInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/SimulateMaintenanceEvent',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\StartInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Start(\Google\Cloud\Compute\V1\StartInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/Start',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\StartWithEncryptionKeyInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StartWithEncryptionKey(\Google\Cloud\Compute\V1\StartWithEncryptionKeyInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/StartWithEncryptionKey',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\StopInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Stop(\Google\Cloud\Compute\V1\StopInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/Stop',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\TestIamPermissionsInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Compute\V1\TestIamPermissionsInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Compute\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\UpdateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update(\Google\Cloud\Compute\V1\UpdateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/Update',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\UpdateAccessConfigInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateAccessConfig(\Google\Cloud\Compute\V1\UpdateAccessConfigInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/UpdateAccessConfig',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\UpdateDisplayDeviceInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateDisplayDevice(\Google\Cloud\Compute\V1\UpdateDisplayDeviceInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/UpdateDisplayDevice',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\UpdateNetworkInterfaceInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateNetworkInterface(\Google\Cloud\Compute\V1\UpdateNetworkInterfaceInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/UpdateNetworkInterface',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\UpdateShieldedInstanceConfigInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateShieldedInstanceConfig(\Google\Cloud\Compute\V1\UpdateShieldedInstanceConfigInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Instances/UpdateShieldedInstanceConfig',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
