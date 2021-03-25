<?php

include_once __DIR__ . "/AbstractController.php";
include_once __DIR__ . "/../../../common/src/Model/News.php";

class NewsController extends AbstractController{
    public function save() {
        if(!empty($_POST)){

            $now = date('Y-m-d H:i:s', time());

            $news = new News(
                intval($_POST['id']),
                htmlspecialchars($_POST['title']), 
                htmlspecialchars($_POST['content']), 
                $now,
                $now
            );

            $news->save();
        } 
        return $this->read();
    }

    public function read(){

        $all = (new News())->all();

        include_once __DIR__ . "/../../view/news/list.php";
    }

    public function create(){
        include_once __DIR__ . "/../../view/news/form.php";
    }

    public function update(){
        $id = (int)$_GET['id'];

        if (empty($id)) die('Undefined ID !!!');

        $one = (new News())-> getById($id);

        if (empty($one)) die('News not found !!!');

        include_once __DIR__ . "/../../view/news/form.php";
    }

    public function delete(){
        $id = (int)$_GET['id'];
        (new News())->deleteById($id);
        return $this->read();
    }
}