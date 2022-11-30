<?php

namespace Saebifar;

class Debug {
    public static function test(){
        echo "this is a test method v0.2.0";
    }

    public function print($arr) : void{
        print_r($arr);
    }
}