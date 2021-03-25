<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class Fixture03{
    private $conn;
    private $data = [
        [
            'id' => 'null',
            'title' => 'New_Product',	
            'content' => '01_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product02',	
            'content' => '02_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product03',	
            'content' => '03_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product04',	
            'content' => '04_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product05',	
            'content' => '05_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product06',	
            'content' => '06_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product07',	
            'content' => '02_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product08',	
            'content' => '07_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product09',	
            'content' => '08_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ],
        [
            'id' => 'null',
            'title' => 'New_Product10',	
            'content' => '10_new product for sell',	
            'created' => '2021-01-22 18:56:10'
        ]
    ];
    public function __construct(DBConnector $conn){
        $this->conn = $conn->connect();
    }
    public function run(){
        foreach($this->data as $product){
            $result = mysqli_query($this->conn, "INSERT INTO news VALUES (
                " . $product['id'] . ",
                '" . $product['title'] . "',
                '" . $product['content'] . "',
                '" . $product['created'] . "')");

            if (!$result){
                print mysqli_error($this->conn) . PHP_EOL;
            }
        }
    }
}