<?php
include_once (__DIR__ . '/autoload.php');

$db = new \Source\DB('localhost', 'root', 'root', 'db');
\Source\Registry::set('db', $db);