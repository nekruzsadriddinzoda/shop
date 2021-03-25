<?php
class Product{
    public $id;
    public $title;
    public $picture;
    public $preview;
    public $content;
    public $price;
    public $status;
    public $created;
    public $updated;

    private $conn;
    public function __construct(
        $id = null,
        $title = null ,
        $picture  = null  ,
        $preview  = null  ,
        $content  = null  ,
        $price   = null ,
        $status   = null ,
        $created = null   ,
        $updated= null){
        $this->conn = mysqli_connect("localhost", "shop_user", "shop_password", "db_shop");

        $this->id=$id;
        $this->title=$title;
        $this->picture=$picture;
        $this->preview=$preview;
        $this->content=$content;
        $this->price=$price;
        $this->status=$status;
        $this->created=$created;
        $this->updated=$updated;
        $this->conn = mysqli_connect("localhost", "shop_user", "shop_password", "db_shop");
    }
    public function save(){
        if ($this->id > 0){
            $query = "UPDATE products set title = '$this->title',
                                              picture ='$this->picture', 
                                              preview = '$this->preview', 
                                              content = '$this->content', 
                                              price = '$this->price', 
                                              status = '$this->status', 
                                              updated = '$this->updated' 
                                              where id ='$this->id' 
                                              limit 1";
        } else {
            $query = "INSERT INTO products values 
                                            (null, 
                                            '$this->title', 
                                            '$this->picture', 
                                            '$this->preview', 
                                            '$this->content', 
                                            '$this->price', 
                                            '$this->status', 
                                            '$this->created', 
                                            '$this->updated')";

        }

        mysqli_query($this->conn, $query);

    }

    public function all(){
        $result = mysqli_query($this->conn,"SELECT * fROM products order by id desc");

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getById($id){
        $query = "SELECT * FROM products WHERE id = $id limit 1";

        $result = mysqli_query($this->conn, $query);
        $oneProduct = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($oneProduct);

    }

    public function deleteById($id){
        $query = "DELETE FROM products WHERE id = $id limit 1";
        mysqli_query($this->conn, $query);
    }
}