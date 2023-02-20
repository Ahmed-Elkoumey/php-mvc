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



    public function insertProducts($data)
    {
        return $this->conn->insert($this->table,$data);
    }



    public function deleteProducts($id)
    {
        $db= $this->conn->where('id',$id);
        return $db->delete($this->table);
    }
   


    
   public function getRow($id)
   {
    $db= $this->conn->where('id',$id);
    return $db->getOne($this->table);
    
   }
   
   
   
   public function updateProducts($id,$data)
    {
        $db= $this->conn->where('id',$id);
        return $db->update($this->table,$data);
    }

}
