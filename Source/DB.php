<?php

namespace Source;

class DB{

    protected $connection;

    public function __construct(string $host, string $login, string $password, string $db)
    {
        $this->connection = mysqli_connect($host, $login, $password, $db);
    }

    public function escape(string $str) : string
    {
        return $this->connection->real_escape_string($str);
    }

    public function query(string $query, array $data)
    {

        foreach($data as $k => $v){
            $query = str_replace("{" . $k . "}", $this->escape($v), $query);
        }

        return $this->connection->query($query);

    }

    public function getInsertId() : ?int
    {
        return $this->connection->insert_id;
    }

}