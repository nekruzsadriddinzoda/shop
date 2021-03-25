<?php

    include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class MigrationAddProducts{
    private $conn;
    private $data = [
        [
            'id' => 'null',
            'title' => 'Acer',	
            'picture' => '01.jpg',	
            'preview' => 'Acer Laptop N 100 NS',
            'content' => 'ABS;BS;,A 12345678',
            'price' => '100',	
            'status' => '1',	
            'created' => '2021-01-24 18:37:14',	
            'updated' => '2021-01-24 19:56:15'
        ],
        [
            'id' => 'null',
            'title' => 'Acer',	
            'picture' => '01.jpg',	
            'preview' => 'Acer Laptop N 100 NS',
            'content' => 'ABS;BS;,A 12345678',
            'price' => '100',	
            'status' => '1',	
            'created' => '2021-01-24 18:37:14',	
            'updated' => '2021-01-24 19:56:15'
        ],
        [
            'id' => 'null',
            'title' => 'Acer',	
            'picture' => '01.jpg',	
            'preview' => 'Acer Laptop N 100 NS',
            'content' => 'ABS;BS;,A 12345678',
            'price' => '100',	
            'status' => '1',	
            'created' => '2021-01-24 18:37:14',	
            'updated' => '2021-01-24 19:56:15'
        ],
        [
            'id' => 'null',
            'title' => 'Acer',	
            'picture' => '01.jpg',	
            'preview' => 'Acer Laptop N 100 NS',
            'content' => 'ABS;BS;,A 12345678',
            'price' => '100',	
            'status' => '1',	
            'created' => '2021-01-24 18:37:14',	
            'updated' => '2021-01-24 19:56:15'
        ],
        [
            'id' => 'null',
            'title' => 'Acer',	
            'picture' => '01.jpg',	
            'preview' => 'Acer Laptop N 100 NS',
            'content' => 'ABS;BS;,A 12345678',
            'price' => '100',	
            'status' => '1',	
            'created' => '2021-01-24 18:37:14',	
            'updated' => '2021-01-24 19:56:15'
        ]
    ];

    public function __construct(DBConnector $connector){
        $this->conn = $connector->connect();
    }

    public function commit(){
        foreach ($this->data as $product){
            $result = mysqli_query($this->conn, "INSERT INTO products VALUES (
                " . $product['id'] . ",
                '" . $product['title'] . "',
                '" . $product['picture'] . "',
                '" . $product['preview'] . "',
                '" . $product['content'] . "',
                '" . $product['price'] . "',
                '" . $product['status'] . "',
                '" . $product['created'] . "',
                '" . $product['updated'] . "')");

            if (!$result){
                print mysqli_error($this->conn) . PHP_EOL;
            }
        }
    }

    public function rollback(){
        $result = mysqli_query($this->conn, "TRUNCATE TABLE products");
        if(!$result){
            print mysqli_error($this->conn) . PHP_EOL;
        }
    }
}