<?php

include_once __DIR__ . "/../Service/DBConnector.php";

class OrderItem{
    public $orderId;
    public $productId;
    public $quantity;

    private $conn;

    public function __construct(
        $orderId= null,
        $productId= null,
        $quantity= null
        ){
        $this->conn = DBConnector::getInstance()->connect();
        $this->orderId = $orderId;
        $this->productId = $productId;
        $this->quantity = $quantity;
    }

    public function save(){
        $query = "INSERT INTO order_item VALUES (
            null,
            '" . $this->orderId . "',
            '" . $this->productId . "',
            '" . $this->quantity . "'
            )";
        
        $result = mysqli_query($this->conn, $query); 

        if(!$result){
            throw new Exception(mysqli_error($this->conn));
        }
    }

    public function update(){
       if (empty($this->orderId) || empty($this->productId) || empty($this->quantity)){
           throw new Exception("Empty basket item field");
       }
        $query = "UPDATE order_item SET 
            quantity=" . $this->quantity . " WHERE
            basket_id=" . $this->orderId . "   AND
            product_id=" . $this->productId . " LIMIT 1";
       
        $result = mysqli_query($this->conn, $query); 

        if(!$result){
            throw new Exception(mysqli_error($this->conn));
        }
    }

    public function all(){ 
        $result = mysqli_query($this->conn , "SELECT * FROM order_item");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getByorderId($orderId){
        
        $result = mysqli_query($this->conn , "SELECT * FROM order_item WHERE basket_id = $orderId");
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $items;
    }

    public function deleteProductByorderId($productId, $orderId){
        mysqli_query($this->conn , "DELETE FROM order_item WHERE product_id=$productId AND basket_id = $orderId LIMIT 1");
    }

    public function deleteByorderId($orderId){
        mysqli_query($this->conn , "DELETE FROM order_item WHERE basket_id = $orderId");
    }
}