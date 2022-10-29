<?php

namespace Kanumone\Bshop\Core;

class Model
{
    protected $db = null;

    public function __construct()
    {
        $DB = new DB('root', 'root', 'db', 'bootcamp');
        $this->db = $DB->connect();
    }
}
