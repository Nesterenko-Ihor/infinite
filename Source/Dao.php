<?php

namespace Source;

abstract class Dao{

    static protected $table;

    static protected function getDb() : DB{
        return Registry::get('db');
    }

}