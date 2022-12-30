<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../function/function.php"); ?>

<div class="fpass-check">
    <div class="continer">
        <div class="fpass-check-content">
            <div class="title">
                Forget Password
            </div>
            <hr>

            <?php 

                if(isset($_POST['otp'])){
                    $result = check_otp_user($_POST['username'], $_POST['email']);
                    echo $result;
                }
            ?>
            <div class="body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <p class="input-text">Username : </p>
                    <input type="text" name="username" id="fUser" class="input-feild" placeholder="Username"><br><br>
                    <p class="input-text">Email : </p>
                    <input type="email" name="email" id="fEmail" class="input-feild" placeholder="Email"><br><br>

                    <input type="submit" value="Get OTP" name="otp" class="login-btn">

                    
                </form>
            </div>
            <hr>
            <div class="develop-by-reg"><i class="far fa-copyright"></i>&nbsp; JehanKandy</div>
        </div>
    </div>
</div>


<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
