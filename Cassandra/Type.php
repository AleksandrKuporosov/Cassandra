<?php

namespace Cassandra;

/**
 * Cassandra\Cluster object is used to create Sessions.
 *
 * Implemented by
 * Type\Collection Type\Custom Type\Map Type\Scalar Type\Set Type\Tuple Type\UserType
 */
class Type
{

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function varchar() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function text() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function blob() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function ascii() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function bigint() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function counter() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function int() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function varint() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function boolean() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function decimal() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function double() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function float() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function inet() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function timestamp() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function uuid() {}

    /**
     * Get representation of cassandra varchar type
     *
     * @return Type varchar type
     */
    public static function timeuuid() {}

    /**
     * Initialize a Type\Collection type
     *
     * <?php
     * use Cassandra::Type;
     *
     * $collection = Type::collection(Type::int())->create(1, 2, 3, 4, 5, 6, 7, 8, 9);
     *
     * var_dump($collection);
     *
     * @param Type $type The type of values
     */
    public static function collection(Type $type) {}

//
//Returns:
//Type	Details
//Cassandra\Type
//The collection type
//
//static Cassandra\Type map ( Cassandra\Type $key_type, Cassandra\Type $value_type )
//Initialize a map type
//
//Copy
//<?php
//use Cassandra::Type;
//
//$map = Type::map(Type::int(), Type::varchar())
//           ->create(1, "a", 2, "b", 3, "c", 4, "d", 5, "e", 6, "f")
//
//var_dump($map);
//Static
//This method is static
//Parameters:
//Name	Type	Details
//$key_type	Cassandra\Type
//The type of keys
//
//$value_type	Cassandra\Type
//The type of values
//
//Returns:
//Type	Details
//Cassandra\Type
//The map type
//
//static static set ( Cassandra\Type $type )
//Initialize a set type
//
//Copy
//<?php
//use Cassandra::Type;
//
//$set = Type::set(Type::varchar)
//           ->create("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");
//
//var_dump($set);
//Static
//This method is static
//Parameters:
//Name	Type	Details
//$type	Cassandra\Type
//[description]
//
//string name ( )
//Returns the name of this type as string.
//
//Returns:
//Type	Details
//string
//Name of this type
//
//string __toString ( )
//Returns string representation of this type.
//
//Returns:
//Type	Details
//string
//String representation of this type
//
//mixed create ( mixed $value = null )
//Instantiate a value of this type from provided value(s).
//
//Parameters:
//Name	Type	Details
//$value	mixed
//one or more values to coerce into this type
//
//Throws:
//Type	Details
//Exception\InvalidArgumentException
//when values given cannot be represented by this type.
//
//Returns:
//Type	Details
//mixed
//a value of this type
}