<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search.v1.proto

namespace Couchbase\StellarNebula\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.TermRangeQuery</code>
 */
class TermRangeQuery extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string term = 3;</code>
     */
    protected $term = '';
    /**
     * Generated from protobuf field <code>uint64 fuzziness = 4;</code>
     */
    protected $fuzziness = 0;
    /**
     * Generated from protobuf field <code>string min = 5;</code>
     */
    protected $min = '';
    /**
     * Generated from protobuf field <code>string max = 6;</code>
     */
    protected $max = '';
    /**
     * Generated from protobuf field <code>bool inclusive_min = 7;</code>
     */
    protected $inclusive_min = false;
    /**
     * Generated from protobuf field <code>bool inclusive_max = 8;</code>
     */
    protected $inclusive_max = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $boost
     *     @type string $field
     *     @type string $term
     *     @type int|string $fuzziness
     *     @type string $min
     *     @type string $max
     *     @type bool $inclusive_min
     *     @type bool $inclusive_max
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
     * Generated from protobuf field <code>string term = 3;</code>
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Generated from protobuf field <code>string term = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTerm($var)
    {
        GPBUtil::checkString($var, true);
        $this->term = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 fuzziness = 4;</code>
     * @return int|string
     */
    public function getFuzziness()
    {
        return $this->fuzziness;
    }

    /**
     * Generated from protobuf field <code>uint64 fuzziness = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFuzziness($var)
    {
        GPBUtil::checkUint64($var);
        $this->fuzziness = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string min = 5;</code>
     * @return string
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Generated from protobuf field <code>string min = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkString($var, true);
        $this->min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string max = 6;</code>
     * @return string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Generated from protobuf field <code>string max = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkString($var, true);
        $this->max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool inclusive_min = 7;</code>
     * @return bool
     */
    public function getInclusiveMin()
    {
        return $this->inclusive_min;
    }

    /**
     * Generated from protobuf field <code>bool inclusive_min = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setInclusiveMin($var)
    {
        GPBUtil::checkBool($var);
        $this->inclusive_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool inclusive_max = 8;</code>
     * @return bool
     */
    public function getInclusiveMax()
    {
        return $this->inclusive_max;
    }

    /**
     * Generated from protobuf field <code>bool inclusive_max = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setInclusiveMax($var)
    {
        GPBUtil::checkBool($var);
        $this->inclusive_max = $var;

        return $this;
    }
}
