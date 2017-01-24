<?php

/**
 * Created by PhpStorm.
 * User: albo
 * Date: 24/01/17
 * Time: 21:09
 */
class FFunctions
{


    /**
     * @param $path
     * @param $type -  Could be:
     * r -> just read
     * w -> just write
     * r+ -> read/write and put the pointer on beginning
     * w+ -> write and clean the file, pointer on beginning, if the file does not exist, it will be created
     * a -> just write, put the pointer at the end , if the file does not exist it will be created
     * a+ ->
     *
     * @return resource
     */
    public function read($path, $type){
        return fopen($path, $type);
    }


    /**
     * @param $stream
     */
    public function close($stream){
        fclose($stream);
    }

}