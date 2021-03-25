<?php
 include_once __DIR__ . "/../heder.php";
?>

<div class="container">
    <div class="auth-page row">
        <h1>Registration</h1>
        <form class="form-check" action="/?model=register&action=register" method="post">
            <div class="form-group">
                <label for="">Name: </label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="">Phone: </label>
                <input type="text" name="phone">
            </div>
            <div class="form-group">
                <label for="">Email: </label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="">Password: </label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="">Password (repeat): </label>
                <input type="password" name="password_repeat">
            </div>
            <div  class="form-group">
                <input class="btn btn-dark" type="submit" value="login">
            </div>
        </form>
    </div>
</div>

<?php
 include_once __DIR__ . "/../footer.php";
?>