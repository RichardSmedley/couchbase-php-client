<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/analytics.v1.proto

namespace Couchbase\StellarNebula\Generated\Analytics\V1\AnalyticsQueryResponse\MetaData;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.analytics.v1.AnalyticsQueryResponse.MetaData.Warning</code>
 */
class Warning extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $message
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Couchbase\AnalyticsV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>uint32 code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, true);
        $this->message = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Warning::class, \Couchbase\StellarNebula\Generated\Analytics\V1\AnalyticsQueryResponse_MetaData_Warning::class);
