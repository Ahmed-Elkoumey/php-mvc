<?php

require_once(LIBS."DB/MysqliDb.php");

class DB{

    protected $db;

    public function connection() {

       $database = new MysqliDb(HOST,USER,PASSWORD,DBNAME);

       if ($database) {

        $this->db= $database;
        return $this->db;
        
       } else {
        echo "ERROR";
       }
       
    }

}