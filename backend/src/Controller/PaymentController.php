<?php

include_once __DIR__ . "/AbstractController.php";
include_once __DIR__ . "/../../../common/src/Model/Payment.php";

class PaymentController extends  AbstractController{

    public function save(){
        if(!empty($_POST)){

            $delivery = new Payment(
                intval($_POST['id']),
                htmlspecialchars($_POST['title']),
                htmlspecialchars($_POST['code']),
                htmlspecialchars($_POST['priority'])

            );

            $delivery->save();
        } 
        return $this->read();
    }

    public function read(){

        $all = (new Delivery())->all();

        include_once __DIR__ . "/../../view/payment/list.php";
    }

    public function create(){
        include_once __DIR__ . "/../../view/payment/form.php";
    }

    public function update(){
        $id = (int)$_GET['id'];

        if (empty($id)) die('Undefined ID !!!');

        $one = (new Delivery())-> getById($id);

        if (empty($one)) die('Payment not found !!!');

        include_once __DIR__ . "/../../view/payment/form.php";
    }

    public function delete(){
        $id = (int)$_GET['id'];
        (new Delivery())->deleteById($id);
        return $this->read();
    }
}