<?php

include_once __DIR__ . "/../Service/DBConnector.php";
class Shop{
    public $id;
    public $title;
    public $address;
    public $created;
    public $updated;

    private $conn;

    public function __construct( 
        $id = null,
        $title= null,
        $address= null,
        $created= null,
        $updated= null){
        $this->conn = DBConnector::getInstance()->connect();

        $this->id = $id;
        $this->title = $title;
        $this->address = $address;
        $this->created = $created;
        $this->updated = $updated;
    }

    public function save(){
        if ($this->id > 0) {
            $query = "UPDATE shops SET 
            title = '" . $this->title . "',
            address = '". $this->address ."', 
            updated ='". $this->updated ."' where id = ". $this->id ." limit 1";
        } else {
            $query = "INSERT INTO shops VALUES 
            (null, 
            '" . $this->title . "',
            '" . $this->address . "', 
            '" . $this->created . "', 
            '" . $this->updated . "')";
        }
        
         $result = mysqli_query($this->conn, $query);
         
         if(!$result){
             throw new Exception(mysqli_error($this->conn),400);
         }
    }

    public function all(){ 
        $result = mysqli_query($this->conn , "SELECT * FROM shops");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getById($id){
        $result = mysqli_query($this->conn , "SELECT * FROM shops WHERE id = $id LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function deleteById($id){
        mysqli_query($this->conn , "DELETE FROM shops WHERE id = $id LIMIT 1");
    }
}