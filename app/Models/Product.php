<?php


class Product extends DB {
    private $table = "products";
    private $conn;

    public function __construct()
    {

     $this->conn = $this->connection();
    
    }

    public function getAllProducts()
    {
       return $this->conn->get($this->table);
    }
}
