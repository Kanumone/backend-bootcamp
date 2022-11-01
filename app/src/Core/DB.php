<?php

namespace Kanumone\Bshop\Core;
use \PDO;

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

    public function connect(): PDO {
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        return new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass, $opt);
    }
}