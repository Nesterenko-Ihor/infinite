<?php

spl_autoload_register(function ($cl) {

    $path = str_replace("\\", "/", $cl);
    $path = (__DIR__ . '/' . $path . '.php');

    if(file_exists($path)){
        include_once($path);
    }

});