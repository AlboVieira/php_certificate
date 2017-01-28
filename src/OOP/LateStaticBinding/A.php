<?php

namespace PhpCertificate\OOP\LateStaticBinding;

class A
{
    public static function who(){
        return __CLASS__;
    }

    public static function selfTest(){
        return self::who();
    }
    public static function staticTest(){
        return static::who();
    }

}

