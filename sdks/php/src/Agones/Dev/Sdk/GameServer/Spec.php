<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sdk.proto

namespace Agones\Dev\Sdk\GameServer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>agones.dev.sdk.GameServer.Spec</code>
 */
class Spec extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.agones.dev.sdk.GameServer.Spec.Health health = 1;</code>
     */
    protected $health = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Agones\Dev\Sdk\GameServer\Spec\Health $health
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sdk::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.agones.dev.sdk.GameServer.Spec.Health health = 1;</code>
     * @return \Agones\Dev\Sdk\GameServer\Spec\Health
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Generated from protobuf field <code>.agones.dev.sdk.GameServer.Spec.Health health = 1;</code>
     * @param \Agones\Dev\Sdk\GameServer\Spec\Health $var
     * @return $this
     */
    public function setHealth($var)
    {
        GPBUtil::checkMessage($var, \Agones\Dev\Sdk\GameServer_Spec_Health::class);
        $this->health = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Spec::class, \Agones\Dev\Sdk\GameServer_Spec::class);

