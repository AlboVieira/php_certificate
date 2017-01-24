<?php

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
     * a+ -> reads/writes puts the pointer at end, if the file does not exist it will be created
     * x -> just writes puts the pointer at beginning, just writes if the file exist.
     * x+ -> just reads,  if the file exist false is returned, otherwise, tries create the file
     *
     * @return resource
     */
    public function stream($path, $type){
        return fopen($path, $type);
    }

    public function write($stream, $content){
        fwrite($stream, $content);
    }

    public function read($stream){
        $content  = '';
        while (false === feof($stream)){
            $content .= fgetc($stream);
        }
        $this->close($stream);
        return $content;
    }

    /**
     * @param $stream
     */
    public function close($stream){
        fclose($stream);
    }

}

