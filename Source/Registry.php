<?php

namespace Source;

class Registry{

    static protected $dump = [];

    static public function get(string $name){
        return array_key_exists($name, self::$dump) ? self::$dump[$name] : null;
    }

    static public function set(string $name, $value){
        self::$dump[$name] = $value;
    }

}