<?php

/**
 * Created by PhpStorm.
 * User: albo
 * Date: 24/01/17
 * Time: 21:09
 */
class FileGetContents
{

    public function createContext($options, $params){
        return stream_context_create($options,$params);
    }

    public function read($path){
        $content = file_get_contents($path);
        return $content;
    }

}