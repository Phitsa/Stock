<?php

namespace App\Models;

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
}