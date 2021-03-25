<?php
    include_once __DIR__ . "/../heder.php";
?>
<div class="content-wrapper" style="min-height: 1372.62px; padding: 1% 15%;">
    <h1>Products</h1>
   <div class="card card-primary">
        <div style="background-color: #343a40;" class="card-header">
                <h3>Create product</h3>
        </div>
        <form action="/index.php?model=product&action=save" method="post" enctype="multipart/form-data">
            <div class="card-body"> 
                <input type="hidden" value="<?=$one['id'] ?? ''?>"  name="id">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="<?=$one['title'] ?? ''?>" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="picture" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <?php
                        if (!empty($one['picture']))
                        {
                        ?>
                            <img src="http://localhost/MyProject/uploads/products/<?=$one['picture']?>" style = "width: 250px; margin-top: -30px; margin-left: 30px;">
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Preview</label>
                    <input type="text" value="<?=$one['preview'] ?? ''?>" name="preview" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" value="<?=$one['price'] ?? ''?>" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" value="<?=$one['status'] ?? ''?>" name="status" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea rows="5" name="content" class="form-control"><?=$one['content'] ?? ''?></textarea>
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