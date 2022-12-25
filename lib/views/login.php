<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="train-login-content">
    <div class="body">
        <div class="title">Login Here</div>
        <hr>
        <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="content-body">
                <p class="username">Username :</p>
                <input type="text" name="username" id="userName" class="input-feild" placeholder="Username"><br>
                <p class="password">Password :</p>
                <input type="password" name="password" id="passWord" class="input-feild" placeholder="Password">

                <input type="submit" value="Login" class="login-btn" name="login">
            </div>
        </form>

        <hr>
    </div>
</div>


<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
