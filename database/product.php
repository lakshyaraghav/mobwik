<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    //fetch product data 
    public function getData(){
        $result = $this->db->con->query("SELECT * FROM producttb");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    


}