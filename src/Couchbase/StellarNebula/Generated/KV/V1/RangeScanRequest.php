<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/kv.v1.proto

namespace Couchbase\StellarNebula\Generated\KV\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.kv.v1.RangeScanRequest</code>
 */
class RangeScanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     */
    protected $bucket_name = '';
    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     */
    protected $scope_name = '';
    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     */
    protected $collection_name = '';
    /**
     * Generated from protobuf field <code>bool key_only = 9;</code>
     */
    protected $key_only = false;
    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.Range range = 7;</code>
     */
    protected $range = null;
    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.Sampling sampling = 8;</code>
     */
    protected $sampling = null;
    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.SnapshotRequirements snapshot_requirements = 6;</code>
     */
    protected $snapshot_requirements = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *     @type string $scope_name
     *     @type string $collection_name
     *     @type bool $key_only
     *     @type \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Range $range
     *     @type \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Sampling $sampling
     *     @type \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\SnapshotRequirements $snapshot_requirements
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Couchbase\KvV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, true);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     * @return string
     */
    public function getScopeName()
    {
        return $this->scope_name;
    }

    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScopeName($var)
    {
        GPBUtil::checkString($var, true);
        $this->scope_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collection_name;
    }

    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionName($var)
    {
        GPBUtil::checkString($var, true);
        $this->collection_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool key_only = 9;</code>
     * @return bool
     */
    public function getKeyOnly()
    {
        return $this->key_only;
    }

    /**
     * Generated from protobuf field <code>bool key_only = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeyOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->key_only = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.Range range = 7;</code>
     * @return \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Range|null
     */
    public function getRange()
    {
        return $this->range;
    }

    public function hasRange()
    {
        return isset($this->range);
    }

    public function clearRange()
    {
        unset($this->range);
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.Range range = 7;</code>
     * @param \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Range $var
     * @return $this
     */
    public function setRange($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Range::class);
        $this->range = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.Sampling sampling = 8;</code>
     * @return \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Sampling|null
     */
    public function getSampling()
    {
        return $this->sampling;
    }

    public function hasSampling()
    {
        return isset($this->sampling);
    }

    public function clearSampling()
    {
        unset($this->sampling);
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.Sampling sampling = 8;</code>
     * @param \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Sampling $var
     * @return $this
     */
    public function setSampling($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\Sampling::class);
        $this->sampling = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.SnapshotRequirements snapshot_requirements = 6;</code>
     * @return \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\SnapshotRequirements|null
     */
    public function getSnapshotRequirements()
    {
        return $this->snapshot_requirements;
    }

    public function hasSnapshotRequirements()
    {
        return isset($this->snapshot_requirements);
    }

    public function clearSnapshotRequirements()
    {
        unset($this->snapshot_requirements);
    }

    /**
     * Generated from protobuf field <code>.couchbase.kv.v1.RangeScanRequest.SnapshotRequirements snapshot_requirements = 6;</code>
     * @param \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\SnapshotRequirements $var
     * @return $this
     */
    public function setSnapshotRequirements($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\KV\V1\RangeScanRequest\SnapshotRequirements::class);
        $this->snapshot_requirements = $var;

        return $this;
    }
}
