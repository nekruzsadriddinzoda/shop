<?php
$conn = mysqli_connect("localhost", "shop_user", "shop_password", "db_shop");
if (isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $query = "DELETE FROM categories WHERE id = '$id' limit 1";
    mysqli_query($conn, $query);

}
if (isset($_GET['update'])){
    $id = (int)$_GET['update'];
    $query = "SELECT * FROM categories WHERE id = '$id' limit 1";

    $result = mysqli_query($conn, $query);
    $oneCategory = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $oneCategory = reset($oneCategory);
}
if (!empty($_POST)){
    $id=$_POST['id'];
    $title = $_POST['title'];
    $group_id = $_POST['group_id'];
    $parent_id = $_POST['parent_id'];

    if ($id > 0){
        $query = "UPDATE categories set title =  '$title',  group_id = '$group_id', parent_id = '$parent_id' where id= '$id'";
    } else {
        $query = "INSERT INTO categories values (null, '$title', '$group_id', '$parent_id')";
    }
    mysqli_query( $conn, $query);
}

$result = mysqli_query($conn,"SELECT * fROM categories order by id desc");
$all = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<html>
<head>
    <title>CRUD Category</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="../../frontend/css/bootstrap.css">
  <style>
        .form-group{
            width: 500px;
            margin: 20px auto;
        }
        h1{
            text-align:center;
        }
    </style>


</head>
<body>
<h1>Add category</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" value="<?=$oneCategory['id'] ?? ""?>" name="id">
        <label>Title</label>
        <input  value="<?=$oneCategory['title'] ?? "" ?>" type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Group_id</label>
        <input  value= "<?=$oneCategory['group_id'] ?? ""?>" type="number"  name="group_id"  class="form-control">
    </div>
    <div class="form-group">
        <label>Parent_id</label>
        <input  type="number" value="<?=$oneCategory['parent_id'] ?? ""?>" name="parent_id" class="form-control">
    </div>
    <div class="form-group">
        <input  type="submit" class="btn btn-success">
    </div>
</form>

<div class="categories">
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th  scope="col">№</th>
            <th scope="col">Title</th>
            <th scope="col">Group_id</th>
            <th scope="col">Parent_id</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($all as $category): ?>
            <tr>
                <td><?=$category['id'] ?? ""?></td>
                <td><?=$category['title'] ?? ""?></td>
                <td> <?=$category['group_id'] ?? ""?></td>
                <td> <?=$category['parent_id'] ?? ""?></td>
                <td style ="width: 200px;">
                    <a href="?update=<?=$category['id']?>" class="btn btn-warning">Редактировать</a>
                    <a href="?delete=<?=$category['id']?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

