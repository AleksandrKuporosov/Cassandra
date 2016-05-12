<?php

namespace Cassandra;

/**
 * Class Timeuuid
 * A PHP representation of the CQL timeuuid datatype
 *
 * @package Cassandra
 */
class Timeuuid implements Value, UuidInterface
{
    /**
     * Timeuuid constructor.
     * Creates a timeuuid from a given timestamp or current time.
     *
     * @param int|null $timestamp Unixtimestamp
     */
    public function __construct(int $timestamp = null) {}

    /**
     * The type of this timeuuid.
     * @return Cassandra\Type
     */
    public function type() {}

    /**
     * Returns this timeuuid as string.
     * @return string
     */
    public function __toString() {}

    /**
     * Returns this timeuuid as string.
     * @return string
     */
    public function uuid() {}

    /**
     * Returns the version of this timeuuid.
     * @return int
     */
    public function version() {}


    /**
     * Unix timestamp.
     * @return int
     */
    public function time() {}

    /**
     * Converts current timeuuid to PHP DateTime.
     * @return DateTime
     */
    public function toDateTime() {}
}