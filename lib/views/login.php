<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="train-login-content">
    <div class="body">
        <div class="title">Login Here</div>
        <hr class="login-hr">
        <?php
        include("../function/function.php");

        if(isset($_POST['login'])){
            $result = login_user($_POST['username'], md5($_POST['password']));
            echo $result;
        }
        
        ?>
        <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="content-body">
                <p class="input-text">Username :</p>
                <input type="text" name="username" id="userName" class="input-feild" placeholder="Username"><br>
                <p class="input-text">Password :</p>
                <input type="password" name="password" id="passWord" class="input-feild" placeholder="Password">

                <input type="submit" value="Login" class="login-btn" name="login">
            </div>
        </form>

        <hr class="login-hr">
        <a href="" style="color: rgb(216, 55, 216); text-decoration: none;">forget Password</a><br>
        Don't Have an Account ? <a href="reg.php" style="color: rgb(216, 55, 216); text-decoration: none;">Create One</a>

        <div class="develop-by"><i class="far fa-copyright"></i>&nbsp; JehanKandy</div>
    </div>
</div>


<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
