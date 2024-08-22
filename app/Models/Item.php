<?php

namespace App\Models;

use Exception;
use mysqli;

class Item extends Model
{
    public int   |null $id;
    public string|null $name;
    public float |null $price;
    public string|null $description;
    public array |null $tags;
    public int   |null $quantity;
    public int   |null $input;

    public function __construct(string|null $name = null,int|null $price = null,string|null $description = null,array|null $tags = null,int|null $quantity = null,int|null $input = null,int|null $id = null)
    {
        parent::__construct();
        
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->tags = $tags;
        $this->quantity = $quantity;
        $this->input = $input;
    }

    public function store()
    {
        $sqlitem = "INSERT INTO item (name, price, description) VALUES ('$this->name', '$this->price', '$this->description');";

        if (!$this->connection->query($sqlitem)) {
            throw new Exception($this->connection->error);
        }

        $item_id = $this->connection->insert_id;


        foreach ($this->tags as $tag) {
            $sqltag = "INSERT INTO item_tags(item_id, tag_id) VALUES ('$item_id', '$tag');";
            if (!$this->connection->query($sqltag)) {
                throw new Exception($this->connection->error);
            }
        }

        $sqltransaction = "INSERT INTO transactions (item_id, quantity, input) VALUES ('$item_id', '$this->quantity', '$this->input');";

        if (!$this->connection->query($sqltransaction)) {
            throw new Exception($this->connection->error);
        }
    }

    public function countItens()
    {
        $sqlcountitens = "SELECT COUNT(*) AS totalRows FROM item;";

        $result = mysqli_query($this->connection, $sqlcountitens);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['totalRows'];
        } else {
            return 0; 
        }
    }

    public function countStock()
    {
        $sqlcountstock = "SELECT SUM(CASE WHEN input = 1 THEN quantity ELSE -quantity END) AS total_quantity FROM transactions;";
        $result = mysqli_query($this->connection, $sqlcountstock);

        if (!$result) {
            return 0;
        }

        $row = mysqli_fetch_assoc($result);
        $totalquantity = $row['total_quantity'];

        if (!$totalquantity) {
            return 0;
        } 
        
        return $totalquantity;
    }

    public function countTotalValue()
    {
        $sqlcounttotalvalue = "
        SELECT 
            SUM(
                CASE
                    WHEN transactions.input = 1 THEN item.price * transactions.quantity
                    ELSE -item.price * transactions.quantity
                END
                ) AS total_amount
            FROM 
                item
            JOIN 
                transactions ON item.id = transactions.item_id;";
            
        if (!$this->connection->query($sqlcounttotalvalue)) {
            throw new Exception($this->connection->error);
        }
        
        $result = mysqli_query($this->connection,$sqlcounttotalvalue);
        
        if (!$result) {
            return 0;
        }

        $row = mysqli_fetch_assoc($result);
        $totalvalue = $row['total_amount'];

        if (!$totalvalue) {
            return 0;
        }

        if ($totalvalue) {
            if ($totalvalue >= 1000 && $totalvalue < 1000000) {
                return round($totalvalue / 1000, 1) . 'k';
            } elseif ($totalvalue >= 1000000 && $totalvalue <1000000000) {
                return round($totalvalue / 1000000, 1) . 'M';
            } else {
                return $totalvalue;
            }
        }
    }
}
