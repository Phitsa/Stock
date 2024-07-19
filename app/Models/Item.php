<?php

namespace App\Models;

use Exception;

class Item extends Model
{
    public int   |null $id;
    public string|null $name;
    public float |null $price;
    public string|null $description;
    public string|null $tags;

    public function __construct(string|null $name = null,int|null $price = null,string|null $description = null,string|null $tags = null,int|null $id = null)
    {
        parent::__construct();
        
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->tags = $tags;
    }

    public function store()
    {
        $sql = "INSERT INTO Item (name, price, description, tags) VALUES ('$this->name', '$this->price')";

        if (!$this->connection->query($sql)) {
            throw new Exception($this->connection->error);
        }
    }
}

