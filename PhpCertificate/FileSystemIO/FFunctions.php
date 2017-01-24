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
     * w -> just writes
     * r+ -> reads/writes and put the pointer at beginning
     * w+ -> just writes and clean the file, pointer at beginning, if the file does not exist, it will be created
     * a -> just writes, puts the pointer at end , if the file does not exist it will be created
     * a+ -> read/write puts the pointer at end
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