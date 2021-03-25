<?php

include_once __DIR__."/AbstractController.php";
include_once __DIR__ . "/../../../common/src/Model/Category.php";

class CategoryController extends AbstractController{
    public function save() {
        if(!empty($_POST)){

            $now = date('Y-m-d H:i:s', time());

            $category = new Category(
                intval($_POST['id']),
                htmlspecialchars($_POST['title']), 
                (int)($_POST['group_id']), 
                (int)($_POST['parent_id']),
                (int)($_POST['prior']),
                $now, 
                $now
            );

            $category->save();
        } 
        return $this->read();
    }

    public function read(){

        $all = (new Category())->all();

        include_once __DIR__ . "/../../view/category/list.php";
    }

    public function create(){
        include_once __DIR__ . "/../../view/category/form.php";
    }

    public function update(){
        $id = (int)$_GET['id'];

        if (empty($id)) die('Undefined ID !!!');

        $one = (new Category())-> getById($id);

        if (empty($one)) die('Category not found !!!');

        include_once __DIR__ . "/../../view/category/form.php";
    }

    public function delete(){
        $id = (int)$_GET['id'];
        (new Category())->deleteById($id);
        return $this->read();
    }
}