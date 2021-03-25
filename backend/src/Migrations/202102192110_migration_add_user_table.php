<?php
    include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
    include_once __DIR__ . "/../../../common/src/Service/UserService.php";
class MigrationAddUserTable{
    private $conn;
    public function __construct(DBConnector $connector){
        $this->conn = $connector->connect();
    }
    public function commit(){
        $result = mysqli_query($this->conn, "CREATE TABLE `user` (
            `id` int NOT NULL AUTO_INCREMENT,
            `name` varchar(256) NOT NULL,
            `phone` varchar(64) NOT NULL UNIQUE,
            `email` varchar(128) NOT NULL UNIQUE,
            `password` varchar(64) NOT NULL,
            `roles` varchar(128) NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }

        $result = mysqli_query($this->conn, "INSERT INTO `user` (`name`,`phone`,`email`,`password`,`roles`)
        VALUES ('superadmin',
        '11111111',
        'admin@gmail.com',
        '" . UserService::encodePassword('superadmin') ."',
        '[\"ROLE_SUPER_ADMIN\"]')");

        if (!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }

    public function rollback(){
        $result = mysqli_query($this->conn, "DROP TABLE `user`");
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }
}