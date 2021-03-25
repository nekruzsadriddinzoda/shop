<?php

interface BasketInterface{
    public static function getBasketByUserId($userId);

    public function updateBasketItem($basketId, $productId ,$quantity);
   
    public function deleteBasketItem($basketId, $productId);
   
    public function createBasketItem($basketId, $productId, $quantity);
    
    public function getBasketProducts($basketId);

    public function clearBasket($basketId);

    public function getBasketIdByUserId($basketId);
}