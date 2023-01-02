<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search.v1.proto

namespace Couchbase\StellarNebula\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.BooleanQuery</code>
 */
class BooleanQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float boost = 1;</code>
     */
    protected $boost = 0.0;
    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query must = 2;</code>
     */
    protected $must = null;
    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query must_not = 3;</code>
     */
    protected $must_not = null;
    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query should = 4;</code>
     */
    protected $should = null;
    /**
     * Generated from protobuf field <code>uint32 should_min = 5;</code>
     */
    protected $should_min = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $boost
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\Query $must
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\Query $must_not
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\Query $should
     *     @type int $should_min
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Couchbase\SearchV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float boost = 1;</code>
     * @return float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * Generated from protobuf field <code>float boost = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query must = 2;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\Query|null
     */
    public function getMust()
    {
        return $this->must;
    }

    public function hasMust()
    {
        return isset($this->must);
    }

    public function clearMust()
    {
        unset($this->must);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query must = 2;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\Query $var
     * @return $this
     */
    public function setMust($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\Query::class);
        $this->must = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query must_not = 3;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\Query|null
     */
    public function getMustNot()
    {
        return $this->must_not;
    }

    public function hasMustNot()
    {
        return isset($this->must_not);
    }

    public function clearMustNot()
    {
        unset($this->must_not);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query must_not = 3;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\Query $var
     * @return $this
     */
    public function setMustNot($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\Query::class);
        $this->must_not = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query should = 4;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\Query|null
     */
    public function getShould()
    {
        return $this->should;
    }

    public function hasShould()
    {
        return isset($this->should);
    }

    public function clearShould()
    {
        unset($this->should);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query should = 4;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\Query $var
     * @return $this
     */
    public function setShould($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\Query::class);
        $this->should = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 should_min = 5;</code>
     * @return int
     */
    public function getShouldMin()
    {
        return $this->should_min;
    }

    /**
     * Generated from protobuf field <code>uint32 should_min = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setShouldMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->should_min = $var;

        return $this;
    }
}
