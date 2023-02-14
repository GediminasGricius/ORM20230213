<?php

class Darbuotojas
{
    public $name;
    public static $c=1;



    public static function  skaiciuoti(){
        echo self::$c;

    }

    public function sk2(){
        echo $this->name;
        echo self::$c;
    }

}