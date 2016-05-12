<?php

namespace Cassandra;

class BatchStatement implements Statement
{
    /**
     * Creates a new batch statement
     * Parameters:
     * Name	Type	Details
     * $type	int
     * must be one of Cassandra::BATCH_* (default: Cassandra::BATCH_LOGGED).
     */
    public function __construct(int $type = \Cassandra::BATCH_LOGGED) {}

    /**
     * Adds a statement to this batch.
     *
     * @param Cassandra\Statement $statement
     * @param array $arguments
     * @return BatchStatement
     * @throws Exception\InvalidArgumentException
     */
    public function add(Statement $statement, $arguments = null) {}
}