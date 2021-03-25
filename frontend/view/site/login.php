<?php
 include_once __DIR__ . "/../heder.php";
?>

<div class="container">
    <div class="auth-page row">
        <h1>Login</h1>
        <form class="form-check" action="/?model=auth&action=check" method="post">
            <div class="form-group">
                <label for="">Login: </label>
                <input type="text" name="login">
            </div>
            <div class="form-group">
                <label for="">Password: </label>
                <input type="password" name="password">
            </div>
            <div  class="form-group">
                <input class="btn btn-dark" type="submit" value="login">
            </div>
        </form>
        <div class="btn-reg"><button class="btn btn-dark">Register</button></div>
    </div>
</div>

<?php
 include_once __DIR__ . "/../footer.php";
?>