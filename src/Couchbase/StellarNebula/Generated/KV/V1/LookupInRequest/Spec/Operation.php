<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/kv.v1.proto

namespace Couchbase\StellarNebula\Generated\KV\V1\LookupInRequest\Spec;

use UnexpectedValueException;

/**
 * Protobuf type <code>couchbase.kv.v1.LookupInRequest.Spec.Operation</code>
 */
class Operation
{
    /**
     * Generated from protobuf enum <code>GET = 0;</code>
     */
    const GET = 0;
    /**
     * Generated from protobuf enum <code>EXISTS = 1;</code>
     */
    const EXISTS = 1;
    /**
     * Generated from protobuf enum <code>COUNT = 2;</code>
     */
    const COUNT = 2;

    private static $valueToName = [
        self::GET => 'GET',
        self::EXISTS => 'EXISTS',
        self::COUNT => 'COUNT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(
                sprintf(
                    'Enum %s has no name defined for value %s',
                    __CLASS__,
                    $value
                )
            );
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(
                sprintf(
                    'Enum %s has no value defined for name %s',
                    __CLASS__,
                    $name
                )
            );
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operation::class, \Couchbase\StellarNebula\Generated\KV\V1\LookupInRequest_Spec_Operation::class);
