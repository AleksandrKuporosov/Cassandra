<?php

/**
 * class Cassandra
 * Copyright 2015 DataStax, Inc.
 * Licensed under the Apache License, Version 2.0 (the “License”); you may not use this file except in compliance with the License. You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an “AS IS” BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License. The main entry point to the PHP Driver for Apache Cassandra.
 *
 * Use Cassandra::cluster() to build a cluster instance. Use Cassandra::ssl() to build SSL options instance.
 */
class Cassandra
{
    /**
     * Consistency level ANY means the request is fulfilled as soon as the data has been written on the Coordinator. Requests with this consistency level are not guranteed to make it to Replica nodes.
     */
    const CONSISTENCY_ANY = 0;

    /**
     * Consistency level ONE guarantees that data has been written to at least one Replica node.
     */
    const CONSISTENCY_ONE = 1;

    /**
     * Same as CONSISTENCY_ONE, but confined to the local data center. This consistency level works only with NetworkTopologyStrategy replication.
     */
    const CONSISTENCY_LOCAL_ONE = 10;

    /**
     * Consistency level TWO guarantees that data has been written to at least two Replica nodes.
     */
    const CONSISTENCY_TWO = 2;

    /**
     * Consistency level THREE guarantees that data has been written to at least three Replica nodes.
     */
    const CONSISTENCY_THREE = 3;

    /**
     * Consistency level QUORUM guarantees that data has been written to at least the majority of Replica nodes. How many nodes exactly are a majority depends on the replication factor of a given keyspace and is calculated using the formula ceil(RF / 2 + 1), where ceil is a mathematical ceiling function and RF is the replication factor used. For example, for a replication factor of 5, the majority is ceil(5 / 2 + 1) = 3.
     */
    const CONSISTENCY_QUORUM = 4;

    /**
     * Same as CONSISTENCY_QUORUM, but confined to the local data center. This consistency level works only with NetworkTopologyStrategy replication.
     */
    const CONSISTENCY_LOCAL_QUORUM = 6;

    /**
     * Consistency level EACH_QUORUM guarantees that data has been written to at least a majority Replica nodes in all datacenters. This consistency level works only with NetworkTopologyStrategy replication.
     */
    const CONSISTENCY_EACH_QUORUM = 7;

    /**
     * Consistency level ALL guarantees that data has been written to all Replica nodes.
     */
    const CONSISTENCY_ALL = 5;

    /**
     * This is a serial consistency level, it is used in conditional updates, e.g. (CREATE|INSERT ... IF NOT EXISTS), and should be specified as the serial_consistency option of the Cassandra\ExecutionOptions instance.
     *
     * Consistency level SERIAL, when set, ensures that a Paxos commit fails if any of the replicas is down.
     */
    const CONSISTENCY_SERIAL = 8;

    /**
     * Same as CONSISTENCY_SERIAL, but confined to the local data center. This consistency level works only with NetworkTopologyStrategy replication.
     */
    const CONSISTENCY_LOCAL_SERIAL = 9;

    /**
     * Perform no verification of Cassandra nodes when using SSL encryption.
     */
    const VERIFY_NONE = 0;

    /**
     * Verify presence and validity of SSL certificates of Cassandra.
     */
    const VERIFY_PEER_CERT = 1;

    /**
     * Verify that the IP address matches the SSL certificate’s common name or one of its subject alternative names. This implies the certificate is also present.
     */
    const VERIFY_PEER_IDENTITY = 2;

    const BATCH_LOGGED = 0;
    const BATCH_UNLOGGED = 1;
    const BATCH_COUNTER = 2;

    /**
     * When using a map, collection or set of type text, all of its elements must be strings.
     */
    const TYPE_TEXT = 'text';

    /**
     * When using a map, collection or set of type ascii, all of its elements must be strings.
     */
    const TYPE_ASCII = 'ascii';

    /**
     * When using a map, collection or set of type varchar, all of its elements must be strings.
     */
    const TYPE_VARCHAR = 'varchar';

    /**
     * When using a map, collection or set of type bigint, all of its elements must be instances of Cassandra\Bigint.
     */
    const TYPE_BIGINT = 'bigint';

    /**
     * When using a map, collection or set of type blob, all of its elements must be instances of Cassandra\Blob.
     */
    const TYPE_BLOB = 'blob';

    /**
     * When using a map, collection or set of type boolean, all of its elements must be booleans.
     */
    const TYPE_BOOLEAN = 'boolean';

    /**
     * When using a map, collection or set of type counter, all of its elements must be instances of Cassandra\Bigint.
     */
    const TYPE_COUNTER = 'counter';

    /**
     * When using a map, collection or set of type decimal, all of its elements must be instances of Cassandra\Decimal.
     */
    const TYPE_DECIMAL = 'decimal';

    /**
     * When using a map, collection or set of type double, all of its elements must be doubles.
     */
    const TYPE_DOUBLE = 'double';

    /**
     * When using a map, collection or set of type float, all of its elements must be instances of Cassandra\Float.
     */
    const TYPE_FLOAT = 'float';

    /**
     * When using a map, collection or set of type int, all of its elements must be ints.
     */
    const TYPE_INT = 'int';

    /**
     * When using a map, collection or set of type timestamp, all of its elements must be instances of Cassandra\Timestamp.
     */
    const TYPE_TIMESTAMP = 'timestamp';

    /**
     * When using a map, collection or set of type uuid, all of its elements must be instances of Cassandra\Uuid.
     */
    const TYPE_UUID = 'uuid';

    /**
     * When using a map, collection or set of type varint, all of its elements must be instances of Cassandra\Varint.
     */
    const TYPE_VARINT = 'varint';

    /**
     * When using a map, collection or set of type timeuuid, all of its elements must be instances of Cassandra\Timeuuid.
     */
    const TYPE_TIMEUUID = 'timeuuid';

    /**
     * When using a map, collection or set of type inet, all of its elements must be instances of Cassandra\Inet.
     */
    const TYPE_INET = 'inet';

    /**
     * Current version of the extension.
     */
    const VERSION = '1.1';

    /**
     * Version of the cpp-driver the extension is compiled against.
     */
    const CPP_DRIVER_VERSION = '2.2.2';

    /**
     * @return \Cassandra\Cluster
     */
    public static function cluster () {}

    /**
     * @return \Cassandra\SSLOptions
     */
    public static function ssl() {}

}