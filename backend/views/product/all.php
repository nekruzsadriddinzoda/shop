<?php
include_once __DIR__ . "/../header.php";
?>

<div>
    <a href="http://fourthweek/shop/backend/index.php?model=product&action=create" class="btn btn-warning">
    Добавить товар
    </a>
</div>
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
                <td><img src = "../upoad/news/<?=$one['picture']?>"></td>
                <td><?=$one['preview']?></td>
                <td><?=$one['price']?></td>
                <td><?=$one['status']?></td>
                <td><?=$one['created']?></td>
                <td><?=$one['updated']?></td>
                <td style ="width: 200px;">
                    <a href="http://fourthweek/shop/backend/index.php?model=product&action=delete&id=<?=$one['id']?>" class="btn btn-warning">Delete</a>
                    <a href="http://fourthweek/shop/backend/index.php?model=product&action=update&id=<?=$one['id']?>" class="btn btn-danger">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    
    <?php
    include_once __DIR__ . "/../footer.php";
    ?>