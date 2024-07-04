<?php

namespace App\Models;

use Src\Database;
use mysqli;

class Model
{
    protected mysqli $connection;

    public function __construct()
    {
        $database = new Database();

        $this->connection = $database->getConnection();

    }
}