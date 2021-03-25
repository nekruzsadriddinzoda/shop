<?php
    include_once __DIR__ . "/../heder.php";
?>
<div class="comment-wrapper" style="min-height: 1372.62px; padding: 1% 15%;">
    <h1>News</h1>
   <div class="card card-primary">
        <div style="background-color: #343a40;" class="card-header">
            <h3>Create order</h3>
        </div>
        <form action="/?model=order&action=update" method="post" enctype="multipart/form-data">
            <div class="card-body"> 
                <input type="hidden" value="<?=$one['id'] ?? ''?>"  name="id">
                <div class="form-group">
                    <label for="">UserID</label>
                    <input type="text" value="<?=$one['user_id'] ?? ''?>" readonly name="user_id" class="form-control">
                </div>                
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" value="<?=$one['name'] ?? ''?>" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Total</label>
                    <input type="text" value="<?=$one['total'] ?? ''?>" readonly name="total" class="form-control">
                </div>
                <div class="form-group">
                    <label>Payment</label>
                    <select class="form-control" name="payment_id">
                        <option></option>
                        <option value="1" <?=($one['payment_id'] ?? null ==1 ? 'selected' : '')?>>option 1</option>
                        <option value="2" <?=($one['payment_id'] ?? null ==2 ? 'selected' : '')?>>option 2</option>
                        <option value="3" <?=($one['payment_id'] ?? null ==3 ? 'selected' : '')?>>option 3</option>
                        <option value="4" <?=($one['payment_id'] ?? null ==4 ? 'selected' : '')?>>option 4</option>
                        <option value="5" <?=($one['payment_id'] ?? null ==5 ? 'selected' : '')?>>option 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Delivery</label>
                    <select class="form-control" name="delivery_id"> 
                        <option></option>
                        <option value="1" <?=($one['delivery_id'] ?? null ==1 ? 'selected' : '')?>>option 1</option>
                        <option value="2" <?=($one['delivery_id'] ?? null ==2 ? 'selected' : '')?>>option 2</option>
                        <option value="3" <?=($one['delivery_id'] ?? null ==3 ? 'selected' : '')?>>option 3</option>
                        <option value="4" <?=($one['delivery_id'] ?? null ==4 ? 'selected' : '')?>>option 4</option>
                        <option value="5" <?=($one['delivery_id'] ?? null ==5 ? 'selected' : '')?>>option 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" value="<?=$one['phone'] ?? ''?>" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" value="<?=$one['email'] ?? ''?>" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status"> 
                        <option disabled selected></option>
                        <?php foreach(OrderService::getStatuses() as $key=>$label) : ?>
                            <option value="<?=$key?>"<?=($one['status'] ?? null === $key) ? 'selected' : ''?>><?=$label?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Comment</label>
                    <textarea rows="5" name="comment" class="form-control"><?=$one['comment'] ?? ''?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Created</label>
                    <input type="text" value="<?=$one['created'] ?? ''?>" readonly name="created" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Updated</label>
                    <input type="text" value="<?=$one['updated'] ?? ''?>" readonly name="updated" class="form-control">
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