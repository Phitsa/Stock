<?php

namespace App\Models;

use Exception;

class Tag extends Model
{
    public int|null $id;
    public string|null $name;

    public function __construct(string|null $name = null, int|null $id = null)
    {
        parent::__construct();
        
        $this->id = $id;
        $this->name = $name;
    }

    public function store()
    {
        $sqltag = "INSERT INTO tag (name) VALUES ('$this->name')";
        
        if (!$this->connection->query($sqltag)) {
            throw new Exception($this->connection->error);
        }
    }
    public function listTags()
    {
        $sqlfindtags = "Select * from tag";

        $result = mysqli_query($this->connection, $sqlfindtags);

        $tags = [];

        while ($row = $result->fetch_assoc()) {
            $tags[] = $row;
        }

        return $tags;
    }
}