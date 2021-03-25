<?php

include_once  __DIR__ . "/../Model/Basket.php";
include_once  __DIR__ . "/../Model/BasketItem.php";
include_once  __DIR__ . "/BasketService.php";

class BasketDBService extends BasketService{
    public static function getBasketByUserId($userId){
        $basket = new Basket($userId);

        if ($basket->getFromDB()==null){
            $basket->userId = $userId;
            $basket->save();
        }

        return $basket->getFromDB();
    }

    public function updateBasketItem($basketId, $productId ,$quantity){
        (new BasketItem($basketId, $productId ,$quantity))->update();
    }

    public function deleteBasketItem($basketId, $productId){
        (new BasketItem())->deleteProductByBasketId($productId , $basketId);
    }

    public function createBasketItem($basketId, $productId, $quantity){
        $item = new BasketItem();
        $item->basketId = $basketId;
        $item->productId = $productId;
        $item->quantity = $quantity;

        $item->save();
    }

    public function getBasketProducts($basketId){
       return (new BasketItem())->getByBasketId($basketId);
    }

    public function clearBasket($basketId){
        (new BasketItem())->clearByBasketId($basketId);
    }

    public function getBasketIdByUserId($userId){
        return (new Basket($userId))->getFromDB()['id'];
    }
}