<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search.v1.proto

namespace Couchbase\StellarNebula\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.GeoPolygonQuery</code>
 */
class GeoPolygonQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float boost = 1;</code>
     */
    protected $boost = 0.0;
    /**
     * Generated from protobuf field <code>string field = 2;</code>
     */
    protected $field = '';
    /**
     * Generated from protobuf field <code>repeated .couchbase.search.v1.LatLng vertices = 3;</code>
     */
    private $vertices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $boost
     *     @type string $field
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\LatLng[]|\Google\Protobuf\Internal\RepeatedField $vertices
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
     * Generated from protobuf field <code>string field = 2;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Generated from protobuf field <code>string field = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, true);
        $this->field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .couchbase.search.v1.LatLng vertices = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVertices()
    {
        return $this->vertices;
    }

    /**
     * Generated from protobuf field <code>repeated .couchbase.search.v1.LatLng vertices = 3;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\LatLng[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVertices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Couchbase\StellarNebula\Generated\Search\V1\LatLng::class);
        $this->vertices = $arr;

        return $this;
    }
}
