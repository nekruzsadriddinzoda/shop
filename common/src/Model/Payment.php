<?php

include_once __DIR__ . "/../Service/DBConnector.php";
class Payment{
    public $id;
    public $title;
    public $priority;
    public $code;
    private $conn;

    public function __construct( 
        $id = null,
        $title = null,

        $priority = null,
        $code = null){
        $this->conn = DBConnector::getInstance()->connect();

        $this->id = $id;
        $this->title = $title;

        $this->priority = $priority;
        $this->code = $code;
    }

    public function save(){
        if ($this->id > 0) {
            $query = "UPDATE payment SET 
            title = '" . $this->title . "', 
            code = '". $this->code . "',
            priority = '". $this->priority ."'  where id = ". $this->id ." limit 1";
        } else {
            $query = "INSERT INTO payment VALUES 
            (null, 
            '" . $this->title . "',
             '" . $this->code . "'
            '" . $this->priority . "')";
        }
        
         mysqli_query($this->conn, $query); 
    }

    public function all(){ 
        $result = mysqli_query($this->conn , "SELECT * FROM payment");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getById($id){
        
        $result = mysqli_query($this->conn , "SELECT * FROM payment WHERE id = $id LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function deleteById($id){
        mysqli_query($this->conn , "DELETE FROM payment WHERE id = $id LIMIT 1");
    }
}