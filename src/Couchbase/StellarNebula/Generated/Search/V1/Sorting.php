<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search.v1.proto

namespace Couchbase\StellarNebula\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.Sorting</code>
 */
class Sorting extends \Google\Protobuf\Internal\Message
{
    protected $sorting;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\FieldSorting $field_sorting
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\GeoDistanceSorting $geo_distance_sorting
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\IdSorting $id_sorting
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\ScoreSorting $score_sorting
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Couchbase\SearchV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.FieldSorting field_sorting = 1;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\FieldSorting|null
     */
    public function getFieldSorting()
    {
        return $this->readOneof(1);
    }

    public function hasFieldSorting()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.FieldSorting field_sorting = 1;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\FieldSorting $var
     * @return $this
     */
    public function setFieldSorting($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\FieldSorting::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.GeoDistanceSorting geo_distance_sorting = 2;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\GeoDistanceSorting|null
     */
    public function getGeoDistanceSorting()
    {
        return $this->readOneof(2);
    }

    public function hasGeoDistanceSorting()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.GeoDistanceSorting geo_distance_sorting = 2;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\GeoDistanceSorting $var
     * @return $this
     */
    public function setGeoDistanceSorting($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\GeoDistanceSorting::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.IdSorting id_sorting = 3;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\IdSorting|null
     */
    public function getIdSorting()
    {
        return $this->readOneof(3);
    }

    public function hasIdSorting()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.IdSorting id_sorting = 3;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\IdSorting $var
     * @return $this
     */
    public function setIdSorting($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\IdSorting::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.ScoreSorting score_sorting = 4;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\ScoreSorting|null
     */
    public function getScoreSorting()
    {
        return $this->readOneof(4);
    }

    public function hasScoreSorting()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.ScoreSorting score_sorting = 4;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\ScoreSorting $var
     * @return $this
     */
    public function setScoreSorting($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\ScoreSorting::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSorting()
    {
        return $this->whichOneof("sorting");
    }
}
