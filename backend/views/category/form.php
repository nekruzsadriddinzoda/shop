<?php
    include_once __DIR__ . "/../heder.php";
?>
<div class="content-wrapper" style="min-height: 1372.62px; padding: 1% 15%;">
    <h1>Category</h1>
   <div class="card card-primary">
        <div style="background-color: #343a40;" class="card-header">
                <h3>Create category</h3>
        </div>
        <form action="/index.php?model=category&action=save" method="post" enctype="multipart/form-data">
            <div class="card-body"> 
                <input type="hidden" value="<?=$one['id'] ?? ''?>"  name="id">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="<?=$one['title'] ?? ''?>" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Group_ID</label>
                    <input type="text" value="<?=$one['group_id'] ?? ''?>" name="group_id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Parent_ID</label>
                    <input type="text" value="<?=$one['parent_id'] ?? ''?>" name="parent_id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prior</label>
                    <input type="text" value="<?=$one['prior'] ?? ''?>" name="prior" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include_once __DIR__ . "/../footer.php";
?>