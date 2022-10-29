<?php

namespace Kanumone\Bshop\Core;

class DB {
    private string $user;
    private string $pass;
    private string $host;
    private string $db;

    public function __construct($user, $pass, $host, $db)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->host = $host;
        $this->db = $db;
    }

    public function connect(): \PDO {
        return new \PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
    }
}