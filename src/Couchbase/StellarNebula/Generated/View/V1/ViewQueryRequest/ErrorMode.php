<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/view.v1.proto

namespace Couchbase\StellarNebula\Generated\View\V1\ViewQueryRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>couchbase.view.v1.ViewQueryRequest.ErrorMode</code>
 */
class ErrorMode
{
    /**
     * Generated from protobuf enum <code>CONTINUE = 0;</code>
     */
    const PBCONTINUE = 0;
    /**
     * Generated from protobuf enum <code>STOP = 1;</code>
     */
    const STOP = 1;

    private static $valueToName = [
        self::PBCONTINUE => 'PBCONTINUE',
        self::STOP => 'STOP',
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
class_alias(ErrorMode::class, \Couchbase\StellarNebula\Generated\View\V1\ViewQueryRequest_ErrorMode::class);
