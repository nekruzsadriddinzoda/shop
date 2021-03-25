<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class Fixture04{
    private $conn;
    private $data = [
        [
            'id' => 'null',
            'title' => 'Shop_',	
            'address' => 'Khujand_city_01'
        ],
        [
            'id' => 'null',
            'title' => 'Shop_02',	
            'address' => 'Khujand_city_01'
        ],
        [
            'id' => 'null',
            'title' => 'Shop_03',	
            'address' => 'Khujand_city_01'
        ],
        [
            'id' => 'null',
            'title' => 'Shop_04',	
            'address' => 'Khujand_city_01'
        ],
        [
            'id' => 'null',
            'title' => 'Shop_05',	
            'address' => 'Khujand_city_01'
        ]
    ];
    public function __construct(DBConnector $conn){
        $this->conn = $conn->connect();
    }
    public function run(){
        foreach($this->data as $product){
            $result = mysqli_query($this->conn, "INSERT INTO shops VALUES (
                " . $product['id'] . ",
                '" . $product['title'] . "',
                '" . $product['address'] . "')");
            if (!$result){
                print mysqli_error($this->conn) . PHP_EOL;
            }
        }
    }
}