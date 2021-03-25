<?php

include_once __DIR__ . "/../Service/DBConnector.php";
include_once __DIR__ . "/../Service/UserService.php";
class User {
    const ROLE_USER_VALUE = 'ROLEUSER';

    private $id;

    private $name;

    private $phone;

    private $email;

    private $password;

    private $roles;


    private $conn;

    public function __construct( 
        $id = null,
        $name= null,
        $phone= null,
        $email= null,
        $password= null,
        $roles= []){
        $this->conn = DBConnector::getInstance()->connect();

        $this->setId($id);
        $this->setName($name);
        $this->setPhone($phone);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setRoles($roles);
    }

    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = UserService::encodePassword($password);
    }

    public function getRoles(){
        return $this->roles;
    }
    public function setRoles($roles){
        $this->roles = $roles;
    }

    public function save(){
        if ($this->id > 0) {
            $query = "UPDATE `user` SET 
            `name` = '" . $this->getName() . "',
            `phone` = '". $this->getPhone() ."', 
            `password` = '". md5($this->getPassword()) ."', 
            `roles` = '". json_encode($this->getRoles()) ."', 
            `email` ='". $this->getEmail() ."' where id = ". $this->id ." limit 1";
        } else {
            $query = "INSERT INTO `user` (`id`,`name`,`phone`,`email`,`password`,`roles`) VALUES 
            (null, 
            '" . $this->getName() . "',
            '" . $this->getPhone() . "', 
            '" . $this->getEmail() . "', 
            '" . $this->getPassword() . "', 
            '" . json_encode($this->getRoles()) . "')";
        }
        
        $result = mysqli_query($this->conn, $query);
         
        if(!$result){
            throw new Exception(mysqli_error($this->conn),400);
        }
    }

    
    public function getById($id){
        $result = mysqli_query($this->conn , "SELECT * FROM `user` WHERE id = " . $id . " LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return reset($one);
    }

    public function getByEmail($email){
        $result = mysqli_query($this->conn , "SELECT * FROM `user` WHERE email = '" . $email . "' LIMIT 1");
        
        if(!$result){
            throw new Exception('User not found',404);
        }
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return reset($one);
    }
}
    