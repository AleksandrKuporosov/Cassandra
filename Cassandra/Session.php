<?php

namespace Cassandra;

/**
 * Interface Session
 * @package Cassandra
 * A session is used to prepare and execute statements.
 *
 * See Also:
 * Cluster::connect()
 */
interface Session
{
    /**
     * Returns current schema.
     *
     * NOTE: the returned Cassandra\Schema instance will not be updated as the actual schema
     * changes, instead an updated instance should be requested by calling Session::schema()
     * again.
     *
     * @return \Cassandra\Schema
     */
    public function schema();

    /**
     * Executes a given statement and returns a result.
     *
     * @param \Cassandra\Statement $statement statement to be executed
     * @param \Cassandra\ExecutionOptions|null $options execution options (optional)
     * @return \Cassandra\Rows
     * @throws \Cassandra\Exception
     */
    public function execute(Statement $statement, ExecutionOptions $options = null);

    /**
     * Executes a given statement and returns a future result.
     *
     * Note that this method ignores timeout specified in the Cassandra\ExecutionOptions, you
     * can provide one to Future::get() instead.
     *
     * @param \Cassandra\Statement $statement statement to be executed
     * @param \Cassandra\ExecutionOptions|null $options execution options (optional)
     * @return \Cassandra\Future
     */
    public function executeAsync (Statement $statement, ExecutionOptions $options = null);

    /**
     * Creates a prepared statement from a given CQL string.
     *
     * Note that this method only uses the ExecutionOptions::$timeout option, all other
     * options will be ignored.
     *
     * @param string $cql CQL statement string
     * @param Cassandra\ExecutionOptions|null $options execution options (optional)
     * @return Cassandra\PreparedStatement
     * @throws Cassandra\Exception
     */
    public function prepare(string $cql, ExecutionOptions $options = null);

    /**
     * Asynchronously prepares a statement and returns a future prepared statement.
     *
     * Note that all options passed to this method will be ignored.
     *
     * @param string $cql CQL string to be prepared
     * @param Cassandra\ExecutionOptions|null $options preparation options
     * @return Cassandra\Future
     */
    public function prepareAsync(string $cql, ExecutionOptions $options = null);

    /**
     * Closes current session and all of its connections.
     *
     * @param float|null $timeout Timeout to wait for closure in seconds
     */
    public function close(float $timeout = null);

    /**
     * Asynchronously closes current session once all pending requests have finished.
     *
     * @return Cassandra\Future
     */
    public function closeAsync();
}