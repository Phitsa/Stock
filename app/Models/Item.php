<?php

namespace App\Models;

use Exception;

class Item extends Model
{
    public int|null $id;
    public string|null $name;
    public string|null $description;
    public float|null $price;

    public function __construct(string|null $name = null, string|null $description = null, int|null $price = null, int|null $id = null)
    {
        parent::__construct();
        
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function store()
    {
        $sql = "INSET INTO Item (name, price) VALUES ('$this->name', '$this->price')";

        if (!$this->connection->query($sql)) {
            throw new Exception($this->connection->error);
        }
    }
}

