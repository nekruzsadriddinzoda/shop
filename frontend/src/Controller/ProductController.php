<?php

include_once __DIR__ . "/../../../common/src/Model/Product.php";
include_once __DIR__ . "/../../../common/src/Service/ExeptionService.php";
class ProductController{
    public function all(){
        $all = (new Product())->all();

        include_once __DIR__ . "/../../views/product/list.php";
    }

    public function view(){
        try{
            if(!isset($_GET['id'])){
                throw new Exception("ID not exist", 400);
            }
            $id = (int)$_GET['id'];
    
            if (empty($id)) {
                throw new Exception("ID is empty", 400);
            }
            $product = (new Product())-> getById($id);
    
            if (empty($product)) {
                throw new Exception("Product not found", 404);
            }
    
            include_once __DIR__ . "/../../views/product/view.php";
        } catch (Exception $e) {
            ExeptionService::error($e, 'frontend');   
        }
        
    }
}