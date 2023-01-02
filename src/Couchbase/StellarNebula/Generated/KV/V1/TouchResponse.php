<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/kv.v1.proto

namespace Couchbase\StellarNebula\Generated\KV\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.kv.v1.TouchResponse</code>
 */
class TouchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 cas = 1;</code>
     */
    protected $cas = 0;
    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.MutationToken mutation_token = 2;</code>
     */
    protected $mutation_token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $cas
     *     @type \Couchbase\StellarNebula\Generated\KV\V1\MutationToken $mutation_token
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Couchbase\KvV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 cas = 1;</code>
     * @return int|string
     */
    public function getCas()
    {
        return $this->cas;
    }

    /**
     * Generated from protobuf field <code>uint64 cas = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCas($var)
    {
        GPBUtil::checkUint64($var);
        $this->cas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.MutationToken mutation_token = 2;</code>
     * @return \Couchbase\StellarNebula\Generated\KV\V1\MutationToken|null
     */
    public function getMutationToken()
    {
        return $this->mutation_token;
    }

    public function hasMutationToken()
    {
        return isset($this->mutation_token);
    }

    public function clearMutationToken()
    {
        unset($this->mutation_token);
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.MutationToken mutation_token = 2;</code>
     * @param \Couchbase\StellarNebula\Generated\KV\V1\MutationToken $var
     * @return $this
     */
    public function setMutationToken($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\KV\V1\MutationToken::class);
        $this->mutation_token = $var;

        return $this;
    }
}
