<?php
class DBConnector{
    public function connect(){
        return mysqli_connect("localhost", "shop_user", "shop_password", "db_shop");
    }
}
?>