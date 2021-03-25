<?php

$conn = mysqli_connect("localhost", "shop_user", "shop_password", "db_shop");

if (isset($_GET['update'])){
    $id = (int)$_GET['update'];
    $query = "SELECT * FROM shop WHERE id = $id limit 1";
    
    $result = mysqli_query($conn, $query);
    $oneShop = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $oneShop = reset($oneShop);
}
if (isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $query = "DELETE FROM shop WHERE id = $id limit 1";
    mysqli_query($conn, $query);

}
if (!empty($_POST)){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $address = $_POST['address'];

    if ($id>0) {
        $query = "UPDATE shop  SET title ='$title',  address ='$address' where id = '$id' ";
    } else {
        $query = "INSERT INTO shop values (null, '$title', '$address')";
    }

    mysqli_query( $conn, $query);
}
$result = mysqli_query($conn, "SELECT * fROM shop order by id desc");
$allShops = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<html>
<head>
    <title>Crud</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="../../frontend/css/bootstrap.css">
 <style>
        .form-group {
            width: 500px;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
        }

    </style>
</head>
<body>
<h1>Shop</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" value = "<?=$oneShop['id'] ?? ''?>" name="id">
        <label>Title</label>
        <input  type="text" value = "<?=$oneShop['title'] ?? ''?>" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input  type="text" value = "<?=$oneShop['address'] ?? ''?>" name="address" class="form-control">
    </div>
    <div class="form-group">
        <input  type="submit" class="btn btn-success">
    </div>
</form>

<div class="shops">
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th  scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Address</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($allShops as $shop): ?>
            <tr>
                <td><?=$shop['id'] ?? ""?></td>
                <td><?=$shop['title'] ?? ""?></td>
                <td> <?=$shop['address'] ?? ""?></td>
                <td style ="width: 400px;">
                    <a href="?update=<?=$shop['id']?>" class="btn btn-warning">Редактировать</a>
                    <a href="?delete=<?=$shop['id']?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

