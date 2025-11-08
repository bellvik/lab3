<?php

namespace App;
class MagicClass{
    private $data=[];
    private $privateProperty = 'private value';

    public function __construct()
    {
        echo "__construct\n";
    }
    public function __destruct()
    {
        echo "__destruct\n";
    }
    public function __call($name,$arguments)
    {
        echo "__call\n";
        return null;
    }
    public static function __callStatic($name,$arguments)
    {
        echo "__callStatic\n";
        return null;
    }
    public function __get($name){
        echo "__get\n";
        return null;
    }
    public function __set($name, $values){
        echo "__set\n";
    }
    public function __isset($name){
        echo "__isset\n";
        return false;
    }
    public function __unset($name){
        echo "__unset\n";
    }
    public function __sleep(){
        echo "__sleep\n";
        return [];
    }
    public function __wakeup(){
        echo "__wakeup\n";
    }
    public function __toString(){
        echo "__toString\n";
        return "";
    }
    public function __invoke($value = null)
    {
        echo "__invoke\n";
        return null;
    }
    public function __clone()
    {
        echo "__clone\n";
    }
    public function __debugInfo(){
        echo "__debugInfo\n";
        return [];
    }
}
?>