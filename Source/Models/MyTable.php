<?php

namespace Source\Models;

use Source\Dao;

class MyTable extends Dao {

    static protected $table = 'my_table';

    static public function updateViews(string $ip, string $user_agent, string $page_url){

        $db = self::getDb();

        $db->query('UPDATE `' . self::$table . '` SET view_count = view_count + 1 WHERE ip = "{ip}" AND user_agent = "{user_agent}" AND page_url = "{page_url}" LIMIT 1', [
            'ip' => $ip,
            'user_agent' => $user_agent,
            'page_url' => $page_url
        ]);

    }

    static public function get(string $ip, string $user_agent, string $page_url) : ?array
    {

        $db = self::getDb();

        $row = $db->query('SELECT * FROM `' . self::$table . '` WHERE ip = "{ip}" AND user_agent = "{user_agent}" AND page_url = "{page_url}" LIMIT 1', [
            'ip' => $ip,
            'user_agent' => $user_agent,
            'page_url' => $page_url
        ]);

        return $row->fetch_assoc();

    }

    static public function create(string $ip, string $user_agent, string $page_url) : int
    {

        $db = self::getDb();

        $db->query('INSERT INTO `' . self::$table . '` (ip, user_agent, page_url) VALUES ("{ip}", "{user_agent}", "{page_url}")', [
            'ip' => $ip,
            'user_agent' => $user_agent,
            'page_url' => $page_url
        ]);

        return $db->getInsertId();

    }

}