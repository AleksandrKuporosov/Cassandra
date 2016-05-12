<?php

namespace Cassandra;

/**
 * Class Rows
 * Rows represent a result of statement execution.
 * @package Cassandra
 */
class Rows implements Iterator, Countable, ArrayAccess
{
    /**
     * Returns the number of rows.
     * @return int
     */
    public function count() {}


    /**
     * Resets the rows iterator.
     */
    public function rewind() {}

    /**
     * Returns current row.
     * @return array
     */
    public function current() {}

    /**
     * Returns current index.
     * @return integer
     */
    public function key() {}

    /**
     * Advances the rows iterator by one.
     */
    public function next() {}

    /**
     * Returns existence of more rows being available.
     * @return bool
     */
    public function valid() {}

    /**
     * Returns existence of a given row.
     * @param int $offset
     */
    public function offsetExists(int $offset) {}

    /**
     * Returns a row at given index.
     * @param int $offset
     * @return array|null
     */
    public function offsetGet(int $offset) {}


    /**
     * Sets a row at given index.
     * @param int $offset
     * @param array $vale
     * @throws Exception\DomainException
     */
    public function offsetSet(int $offset, array $value) {}

    /**
     * Removes a row at given index.
     * @param int $offset
     * @throws Exception\DomainException
     */
    public function offsetUnset(int $offset) {}

    /**
     * Check for the last page when paging.
     * @return bool
     */
    public function isLastPage() {}

    /**
     * Get the next page of results.
     * @param float|null $timeout
     * @return Cassandra\Rows|null
     */
    public function nextPage(float $timeout = null) {}

    /**
     * Get the next page of results asynchronously.
     * @return Cassandra\Future
     */
    public function nextPageAsync() {}
}