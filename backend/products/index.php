<?php

$conn = mysqli_connect("localhost", "shop_user", "shop_password", "db_shop");

if (isset($_GET['update'])){
    $id = (int)$_GET['update'];
    $query = "SELECT * FROM products WHERE id ='$id' limit 1";
    
    $result = mysqli_query($conn, $query);
    $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $one = reset($one);
}
if (isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $query = "DELETE FROM products WHERE id = '$id' limit 1";
    mysqli_query($conn, $query);

}

if (!empty($_POST)){
    if (!empty($_FILES['picture']['tmp_name'])){
        $fileName = md5(rand(10000,99999).microtime(time())).$_FILES['picture']['name'];
        copy($_FILES['picture']['tmp_name'],__DIR__.'/../../upoad/news/'.$fileName);
    }
    $id = $_POST['id'];
    $title = $_POST['title'];
    $picture = $fileName ?? "";
    $preview = $_POST['preview'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $created = date("Y-m-d H:i:s", time());
    $updated = date("Y-m-d H:i:s", time());

    if ($id>0){
        $query = "UPDATE products SET 
                    title = '$title', 
                    picture = '$picture',
                    preview = '$preview',
                    content = '$content',
                    price =  '$price',
                    status =  '$status',
                    updated =  '$updated'
                    where id = '$id' limit 1
";
    } else {
        $query = "INSERT INTO products VALUES (
                    null, '$title', '$picture','$preview','$content','$price','$status','$created','$updated'
)";
    }

    mysqli_query($conn, $query);
}
$result = mysqli_query($conn, "SELECT * FROM products ORDER BY id desc");
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<html>
<head>
    <title>Crud product</title>
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
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
<h1>Add product</h1>

<form action="index.php" method="post" enctype="multipart/form-data">
    <input value="<?=$one['id'] ?? "" ?>" type = "hidden" name ="id">
    <div class="form-group">
        <label>Title</label>
        <input value="<?=$one['title'] ?? "" ?>" type ="text" name = "title" class="form-control">
    </div>
    <div class="form-group">
        <label>Picture</label>
        <input type ="file" name = "picture" class="form-control">
    </div>
    <div class="form-group">
        <label>Preview</label>
        <input value="<?=$one['preview'] ?? "" ?>" type ="text" name = "preview" class="form-control">
    </div>
    <div class="form-group">
        <label>Content</label>
        <input value="<?=$one['content'] ?? "" ?>" type ="text" name = "content" class="form-control">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input value="<?=$one['price'] ?? "" ?>" type ="number" name = "price" class="form-control">
    </div>
    <div class="form-group">
        <label>Status</label>
        <input value="<?=$one['status'] ?? "" ?>" type ="number" name = "status" class="form-control">
    </div>
    <div class="form-group">
        <input type ="submit" name = "submit" class="btn btn-success">
    </div>
</form>

<div class="products">
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Picture</th>
            <th scope="col">Preview</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($all as $one): ?>
            <tr>
                <td><?=$one['id']?></td>
                <td><?=$one['title']?></td>
                <td><img src = "../../upoad/news/<?=$one['picture']?>"></td>
                <td><?=$one['preview']?></td>
                <td><?=$one['price']?></td>
                <td><?=$one['status']?></td>
                <td><?=$one['created']?></td>
                <td><?=$one['updated']?></td>
                <td style ="width: 200px;">
                    <a href="?update=<?=$one['id']?>" class="btn btn-warning">Update</a>
                    <a href="?delete=<?=$one['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
