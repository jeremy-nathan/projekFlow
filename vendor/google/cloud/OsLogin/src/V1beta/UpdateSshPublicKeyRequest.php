<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1beta/oslogin.proto

namespace Google\Cloud\OsLogin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for updating an SSH public key.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1beta.UpdateSshPublicKeyRequest</code>
 */
class UpdateSshPublicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The fingerprint of the public key to update. Public keys are identified by
     * their SHA-256 fingerprint. The fingerprint of the public key is in format
     * `users/{user}/sshPublicKeys/{fingerprint}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ssh_public_key = null;
    /**
     * Mask to control which fields get updated. Updates all if not present.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The fingerprint of the public key to update. Public keys are identified by
     *           their SHA-256 fingerprint. The fingerprint of the public key is in format
     *           `users/{user}/sshPublicKeys/{fingerprint}`.
     *     @type \Google\Cloud\OsLogin\Common\SshPublicKey $ssh_public_key
     *           Required. The SSH public key and expiration time.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Mask to control which fields get updated. Updates all if not present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1Beta\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The fingerprint of the public key to update. Public keys are identified by
     * their SHA-256 fingerprint. The fingerprint of the public key is in format
     * `users/{user}/sshPublicKeys/{fingerprint}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The fingerprint of the public key to update. Public keys are identified by
     * their SHA-256 fingerprint. The fingerprint of the public key is in format
     * `users/{user}/sshPublicKeys/{fingerprint}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsLogin\Common\SshPublicKey
     */
    public function getSshPublicKey()
    {
        return $this->ssh_public_key;
    }

    /**
     * Required. The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsLogin\Common\SshPublicKey $var
     * @return $this
     */
    public function setSshPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsLogin\Common\SshPublicKey::class);
        $this->ssh_public_key = $var;

        return $this;
    }

    /**
     * Mask to control which fields get updated. Updates all if not present.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Mask to control which fields get updated. Updates all if not present.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

