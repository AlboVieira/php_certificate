<?php

namespace PhpCertificate\OOP;

/**
 * Created by PhpStorm.
 * User: albo
 * Date: 25/01/17
 * Time: 21:35
 */
class MagicMethods
{

    public function __construct(){}

    function __destruct(){}

    /*Invoked when tries get a property that doesnt exist*/
    public function __get($name)
    {
        echo "Getting Name: $name";
    }

    /*Invoked when tries set a property that doesnt exist*/
    public function __set($name, $value)
    {
        echo "Getting Name: $name with $value";
    }

    /*Invoked when a method doesnt exist */
    public function __call($name, $arguments)
    {
    }

    /*Invoked when a static method doesnt exist */
    public static function __callStatic($name, $arguments)
    {
    }

    /* Seriealize data */
    public function __sleep()
    {}

    /*desserializa data*/
    function __wakeup()
    {}

    /*invoked when a echo is giving in the object*/
    function __toString()
    {
        return __CLASS__;
    }

    /*Invoked when calls a object as a function*/
    function __invoke()
    {
    }

    /*Invoked when tries to clone the object*/
    function __clone()
    {
        // TODO: Implement __clone() method.
    }

}