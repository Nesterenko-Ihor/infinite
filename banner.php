<?php

include_once (__DIR__ . '/autoload.php');
include_once (__DIR__ . '/db.php');

use Source\Models\MyTable;

$ip_address = $_SERVER["REMOTE_ADDR"];
$page_url = $_SERVER['HTTP_REFERER'];
$user_agent = $_SERVER["HTTP_USER_AGENT"];

$row = MyTable::get($ip_address, $user_agent, $page_url);

if($row){
    MyTable::updateViews($ip_address, $user_agent, $page_url);
}else{
    MyTable::create($ip_address, $user_agent, $page_url);
}


// Логика вывода картинки
header("Content-Type: image/png");

readfile('https://upload.wikimedia.org/wikipedia/commons/d/d9/Чёрный_супрематический_квадрат._1915._ГТГ.png');