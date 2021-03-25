<?php

include_once __DIR__ . "/../Service/DBConnector.php";
class Category{
    public $id;
    public $title;
    public $groupId;
    public $parentId;
    public $prior;
    public $created;
    public $updated;

    private $conn;

    public function __construct( 
        $id = null,
        $title= null,
        $groupId= null,
        $parentId= null,
        $prior= null,
        $created= null,
        $updated= null){
        $this->conn = DBConnector::getInstance()->connect();

        $this->id = $id;
        $this->title = $title;
        $this->groupId = $groupId;
        $this->parentId = $parentId;
        $this->prior = $prior;
        $this->created = $created;
        $this->updated = $updated;
    }

    public function save(){
        if ($this->id > 0) {
            $query = "UPDATE categories SET 
            title = '" . $this->title . "',
            group_id = '". $this->groupId ."', 
            parent_id = '". $this->parentId ."',
            prior = '". $this->prior ."',
            updated ='". $this->updated ."' where id = ". $this->id ." limit 1";
        } else {
            $query = "INSERT INTO categories VALUES 
            (null, 
            '" . $this->title . "',
            '" . $this->groupId . "', 
            '" . $this->parentId . "',
            '" . $this->prior . "',
            '" . $this->created . "', 
            '" . $this->updated . "')";
        }
        
         mysqli_query($this->conn, $query); 
    }

    public function all(){ 
        $result = mysqli_query($this->conn , "SELECT * FROM categories");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getById($id){
        $result = mysqli_query($this->conn , "SELECT * FROM categories WHERE id = $id LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function deleteById($id){
        mysqli_query($this->conn , "DELETE FROM categories WHERE id = $id LIMIT 1");
    }
}