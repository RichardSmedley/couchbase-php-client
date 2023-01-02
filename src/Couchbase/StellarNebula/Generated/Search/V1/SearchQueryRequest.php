<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search.v1.proto

namespace Couchbase\StellarNebula\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.SearchQueryRequest</code>
 */
class SearchQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string index_name = 1;</code>
     */
    protected $index_name = '';
    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query query = 2;</code>
     */
    protected $query = null;
    /**
     * Generated from protobuf field <code>.couchbase.search.v1.SearchQueryRequest.ScanConsistency scan_consistency = 3;</code>
     */
    protected $scan_consistency = 0;
    /**
     * Generated from protobuf field <code>uint32 limit = 4;</code>
     */
    protected $limit = 0;
    /**
     * Generated from protobuf field <code>uint32 skip = 5;</code>
     */
    protected $skip = 0;
    /**
     * Generated from protobuf field <code>bool include_explanation = 6;</code>
     */
    protected $include_explanation = false;
    /**
     * Generated from protobuf field <code>.couchbase.search.v1.SearchQueryRequest.HighlightStyle highlight_style = 7;</code>
     */
    protected $highlight_style = 0;
    /**
     * Generated from protobuf field <code>repeated string highlight_fields = 8;</code>
     */
    private $highlight_fields;
    /**
     * Generated from protobuf field <code>repeated string fields = 9;</code>
     */
    private $fields;
    /**
     * Generated from protobuf field <code>repeated .couchbase.search.v1.Sorting sort = 10;</code>
     */
    private $sort;
    /**
     * Generated from protobuf field <code>bool disable_scoring = 11;</code>
     */
    protected $disable_scoring = false;
    /**
     * Generated from protobuf field <code>repeated string collections = 12;</code>
     */
    private $collections;
    /**
     * Generated from protobuf field <code>bool include_locations = 13;</code>
     */
    protected $include_locations = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $index_name
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\Query $query
     *     @type int $scan_consistency
     *     @type int $limit
     *     @type int $skip
     *     @type bool $include_explanation
     *     @type int $highlight_style
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $highlight_fields
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $fields
     *     @type \Couchbase\StellarNebula\Generated\Search\V1\Sorting[]|\Google\Protobuf\Internal\RepeatedField $sort
     *     @type bool $disable_scoring
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $collections
     *     @type bool $include_locations
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Couchbase\SearchV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string index_name = 1;</code>
     * @return string
     */
    public function getIndexName()
    {
        return $this->index_name;
    }

    /**
     * Generated from protobuf field <code>string index_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexName($var)
    {
        GPBUtil::checkString($var, true);
        $this->index_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query query = 2;</code>
     * @return \Couchbase\StellarNebula\Generated\Search\V1\Query|null
     */
    public function getQuery()
    {
        return $this->query;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.Query query = 2;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Couchbase\StellarNebula\Generated\Search\V1\Query::class);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.SearchQueryRequest.ScanConsistency scan_consistency = 3;</code>
     * @return int
     */
    public function getScanConsistency()
    {
        return $this->scan_consistency;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.SearchQueryRequest.ScanConsistency scan_consistency = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setScanConsistency($var)
    {
        GPBUtil::checkEnum($var, \Couchbase\StellarNebula\Generated\Search\V1\SearchQueryRequest\ScanConsistency::class);
        $this->scan_consistency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 limit = 4;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>uint32 limit = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 skip = 5;</code>
     * @return int
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * Generated from protobuf field <code>uint32 skip = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSkip($var)
    {
        GPBUtil::checkUint32($var);
        $this->skip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool include_explanation = 6;</code>
     * @return bool
     */
    public function getIncludeExplanation()
    {
        return $this->include_explanation;
    }

    /**
     * Generated from protobuf field <code>bool include_explanation = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeExplanation($var)
    {
        GPBUtil::checkBool($var);
        $this->include_explanation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.SearchQueryRequest.HighlightStyle highlight_style = 7;</code>
     * @return int
     */
    public function getHighlightStyle()
    {
        return $this->highlight_style;
    }

    /**
     * Generated from protobuf field <code>.couchbase.search.v1.SearchQueryRequest.HighlightStyle highlight_style = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setHighlightStyle($var)
    {
        GPBUtil::checkEnum($var, \Couchbase\StellarNebula\Generated\Search\V1\SearchQueryRequest\HighlightStyle::class);
        $this->highlight_style = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string highlight_fields = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHighlightFields()
    {
        return $this->highlight_fields;
    }

    /**
     * Generated from protobuf field <code>repeated string highlight_fields = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHighlightFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->highlight_fields = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string fields = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Generated from protobuf field <code>repeated string fields = 9;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .couchbase.search.v1.Sorting sort = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Generated from protobuf field <code>repeated .couchbase.search.v1.Sorting sort = 10;</code>
     * @param \Couchbase\StellarNebula\Generated\Search\V1\Sorting[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSort($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Couchbase\StellarNebula\Generated\Search\V1\Sorting::class);
        $this->sort = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool disable_scoring = 11;</code>
     * @return bool
     */
    public function getDisableScoring()
    {
        return $this->disable_scoring;
    }

    /**
     * Generated from protobuf field <code>bool disable_scoring = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableScoring($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_scoring = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string collections = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * Generated from protobuf field <code>repeated string collections = 12;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->collections = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool include_locations = 13;</code>
     * @return bool
     */
    public function getIncludeLocations()
    {
        return $this->include_locations;
    }

    /**
     * Generated from protobuf field <code>bool include_locations = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeLocations($var)
    {
        GPBUtil::checkBool($var);
        $this->include_locations = $var;

        return $this;
    }
}
