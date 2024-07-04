<?php

namespace Src;

use Exception;
use mysqli;

class Database
{
    private $hostname = "localhost";
    private $database = "stock";
    private $user = "root";
    private $password = "";

    public function getConnection(): mysqli
    {
        $mysqli = new mysqli ($this->hostname, $this->user, $this->password, $this->database);

        if ($mysqli->connect_errno) {
            throw new Exception("Falha ao conectar: (" . $mysqli->connect_errno . ") " .  $mysqli->connect_error);
        }

        return $mysqli;
    }
}