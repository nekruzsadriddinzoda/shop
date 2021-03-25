<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class Fixture02 {
    private $conn;
    private $data = [
        [
            'id' => 'null',
            'title' => 'Category',	
            'groupId' => '01',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category02',	
            'groupId' => '02',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category03',	
            'groupId' => '03',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category04',	
            'groupId' => '04',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category05',	
            'groupId' => '05',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category06',	
            'groupId' => '06',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category07',	
            'groupId' => '02',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category08',	
            'groupId' => '07',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category09',	
            'groupId' => '08',	
            'parentId' => '01'
        ],
        [
            'id' => 'null',
            'title' => 'Category10',	
            'groupId' => '10',
            'parentId' => '01'
        ]
    ];
    public function __construct(DBConnector $conn){
        $this->conn = $conn->connect();
    }
    public function run(){
        foreach($this->data as $product){

            $result = mysqli_query($this->conn, "INSERT INTO categories VALUES (
                " . $product['id'] . ",
                '" . $product['title'] . "',
                '" . $product['groupId'] . "',
                '" . $product['parentId'] . "')");

            if (!$result){
                print mysqli_error($this->conn) . PHP_EOL;
            }
        }
    }
}