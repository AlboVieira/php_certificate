<?php

namespace PhpCertificate\OOP\LateStaticBinding;

class B extends A
{
    public static function who(){
        return __CLASS__;
    }

}

