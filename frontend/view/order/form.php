<?php
    include_once __DIR__ . "/../heder.php";
?>
<div class="container">
<div class="content-wrapper" style="min-height: 888px; padding: 1% 15%;">
    <div class="card card-primary">
        <div style="background-color: #333333; color:white;" class="card-header">
                <h3>CREAT ORDER</h3>
        </div>
        <form action="/?model=order&action=create" method="post" enctype="multipart/form-data">
            <div class="card-body"> 
                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Phone:</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Payment:</label>
                    <select class="form-control" name="payment">
                        <option></option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                        <option value="4">option 4</option>
                        <option value="5">option 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Delivery:</label>
                    <select class="form-control" name="delivery"> 
                        <option></option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                        <option value="4">option 4</option>
                        <option value="5">option 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Comment:</label>
                    <textarea style="margin: 0;" name="comment" id="" cols="87" rows="10"></textarea>
                </div>
                <div>
                    <button class="btn btn-success">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<?php
    include_once __DIR__ . "/../footer.php";
?>