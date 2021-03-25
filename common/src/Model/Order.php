<?php

include_once __DIR__ . "/../Service/DBConnector.php";
class Order{
    private $id;
    private $userId;
    private $total;
    private $paymentId;
    private $deliveryId;
    private $comment;
    private $status;
    private $created;
    private $updated;

    private $conn;
    
    public function __construct(
        $id =null,
        $userId= null,
        $total = null,
        $paymentId = null,
        $deliveryId = null, 
        $comment = null,
        $name = null,
        $phone = null,
        $email = null,
        $status = null,
        $updated = null){
        $this->conn = DBConnector::getInstance()->connect();
        $this->id = $id;
        $this->userId = $userId;
        $this->total = $total;
        $this->paymentId = $paymentId;
        $this->deliveryId = $deliveryId;
        $this->status = $status;
        $this->comment = $comment;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;

        if($this->id == null){
            $this->created = date('Y-m-d H:i:s', time());
        }

        $this->updated = $updated ?? date('Y-m-d H:i:s', time());
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setTotal($total){
        $this->total = $total;
    }

    public function getTotal(){
        return $this->total;
    }

    public function setComment($comment){
        $this->comment = $comment;
    }

    public function getComment(){
        return $this->comment;
    }

    public function setPaymentId($paymentId){
        $this->paymentId = $paymentId;
    }

    public function getPaymentId(){
        return $this->paymentId;
    }

    public function setDeliveryId($deliveryId){
        $this->deliveryId = $deliveryId;
    }

    public function getDeliveryId(){
        return $this->deliveryId;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setUpdate($updated){
        $this->updated = $updated;
    }

    public function getUpdate(){
        return $this->updated;
    }

    public function save(){
           
        $query = "INSERT INTO orders (
            id, user_id, status, created, updated,
            delivery_id, payment_id, total, comment, name, phone, email) VALUES (
            null,
            " . $this->userId . ",
            '" . $this->status . "',
            '" . $this->created . "',
            '" . $this->updated . "',
            '" . $this->deliveryId . "',
            '" . $this->paymentId . "',
            '" . $this->total . "',
            '" . $this->comment . "',
            '" . $this->name . "',
            '" . $this->phone . "',
            '" . $this->email . "'
            )";
        
        $result = mysqli_query($this->conn, $query); 

        if(!$result){
            throw new Exception(mysqli_error($this->conn));
        }

        $result = mysqli_query($this->conn, "SELECT LAST_INSERT_ID() as last_id");

        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($result)['last_id'] ?? null;
    }

    public function update(){
           
        $query = "UPDATE orders SET 
            status = '" . $this->status . "',
            updated = '" . $this->updated . "',
            delivery_id = '" . $this->deliveryId . "',
            payment_id = '" . $this->paymentId . "',
            total = '" . $this->total . "',
            name = '" . $this->name . "',
            phone = '" . $this->phone . "',
            email = '" . $this->email . "'
            WHERE id = " . $this->id . " LIMIT 1";
        
        $result = mysqli_query($this->conn, $query); 

        if(!$result){
            throw new Exception(mysqli_error($this->conn));
        }

        $result = mysqli_query($this->conn, "SELECT LAST_INSERT_ID() as last_id");
        
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($result)['last_id'] ?? null;
    }

    public function all(){ 
        $result = mysqli_query($this->conn , "SELECT * FROM orders");
        var_dump($result);
        print("<pre></pre>");
        $return = mysqli_fetch_all($result, MYSQLI_ASSOC);
        var_dump($return);
    }

    public function getFromDB(){
        $result = mysqli_query($this->conn , "SELECT * FROM orders WHERE user_id = ". $this->userId ." LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function getById($id){
        $result = mysqli_query($this->conn , "SELECT * FROM orders WHERE id = " . $id . " LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return reset($one);
    }
}