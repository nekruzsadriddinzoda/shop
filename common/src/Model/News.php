<?php

include_once __DIR__ . "/../Service/DBConnector.php";
class News{
    public $id;
    public $title;
    public $content;
    public $created;
    public $updated;

    private $conn;

    public function __construct( 
        $id = null,
        $title= null,
        $content= null,
        $created= null,
        $updated= null){
        $this->conn = DBConnector::getInstance()->connect();

        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->created = $created;
        $this->updated = $updated;
    }

    public function save(){
        if ($this->id > 0) {
            $query = "UPDATE news SET 
            title = '" . $this->title . "',
            content = '". $this->content ."', 
            updated ='". $this->updated ."' where id = ". $this->id ." limit 1";
        } else {
            $query = "INSERT INTO news VALUES 
            (null, 
            '" . $this->title . "',
            '" . $this->content . "', 
            '" . $this->created . "', 
            '" . $this->updated . "')";
        }
        
         mysqli_query($this->conn, $query); 
    }

    public function all(){ 
        $result = mysqli_query($this->conn , "SELECT * FROM news");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getById($id){
        $result = mysqli_query($this->conn , "SELECT * FROM news WHERE id = $id LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function deleteById($id){
        mysqli_query($this->conn , "DELETE FROM news WHERE id = $id LIMIT 1");
    }
}