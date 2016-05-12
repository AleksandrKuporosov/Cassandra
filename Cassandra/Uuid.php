<?php

namespace Cassandra;

/**
 * Class Uuid
 * A PHP representation of the CQL uuid datatype
 * @package Cassandra
 */
class Uuid implements Value, UuidInterface
{
    /**
     * Uuid constructor.
     * Creates a uuid from a given uuid string or a random one.
     * @param string|null $uuid A uuid string
     */
    public function __construct(string $uuid = null) {}

    /**
     * Returns this uuid as string.
     * @return string
     */
    public function  __toString() {}

    /**
     * The type of this uuid.
     * @return Type
     */
    public function type() {}

    /**
     * Returns this uuid as string.
     * @return string
     */
    public function uuid() {}

    /**
     * Returns the version of this uuid.
     * @return int
     */
    public function version() {}
}