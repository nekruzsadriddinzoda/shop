<?php
    include_once __DIR__ . "/../heder.php";
?>
<div class="content-wrapper" style="min-height: 1372.62px; padding: 1% 15%;">
    <h1>Shops</h1>
   <div class="card card-primary">
        <div style="background-color: #343a40;" class="card-header">
                <h3>Create shop</h3>
        </div>
        <form action="/index.php?model=shop&action=save" method="post" enctype="multipart/form-data">
            <div class="card-body"> 
                <input type="hidden" value="<?=$one['id'] ?? ''?>"  name="id">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="<?=$one['title'] ?? ''?>" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" value="<?=$one['address'] ?? ''?>" name="address" class="form-control">
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