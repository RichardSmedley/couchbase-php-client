<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search.v1.proto

namespace Couchbase\StellarNebula\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.ScoreSorting</code>
 */
class ScoreSorting extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool descending = 1;</code>
     */
    protected $descending = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $descending
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Couchbase\SearchV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool descending = 1;</code>
     * @return bool
     */
    public function getDescending()
    {
        return $this->descending;
    }

    /**
     * Generated from protobuf field <code>bool descending = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDescending($var)
    {
        GPBUtil::checkBool($var);
        $this->descending = $var;

        return $this;
    }
}
