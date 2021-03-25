<?php

    include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
    include_once __DIR__ . "/../../../common/src/Service/UserService.php";

class MigrationAddRbac{
    private $conn;
    public function __construct(DBConnector $connector){
        $this->conn = $connector->connect();
    }

    public function commit(){
        $result = mysqli_query($this->conn, "CREATE TABLE `rbac_role` (
            `role` varchar(64) NOT NULL UNIQUE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }


        $result = mysqli_query($this->conn, "CREATE TABLE `rbac_permission` (
            `permission` varchar(128) NOT NULL UNIQUE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "CREATE TABLE `rbac_access` (
            `role` varchar(64) NOT NULL,
            `permission` varchar(128) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "INSERT INTO `rbac_role` (`role`)
        VALUES (
            'ROLE_ADMIN', 
            'ROLE_MANAGER',
            'ROLE_SHOP_MANAGER',
            'ROLE_SHOP_ADMIN',
            'ROLE_PRODUCT_MANAGER')");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "INSERT INTO `rbac_permission` (`permission`)
        VALUES (
            'ROLE_ADMIN', 
            'ROLE_MANAGER',
            'ROLE_SHOP_MANAGER',
            'ROLE_SHOP_ADMIN',
            'ROLE_PRODUCT_MANAGER')");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }

    public function rollback(){
        $result = mysqli_query($this->conn, "DROP TABLE `rbac_role`");
       
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "DROP TABLE `rbac_permission`");
       
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "DROP TABLE `rbac_access`");
       
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }
}