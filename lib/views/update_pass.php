<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../function/function.php"); ?>

<?php 
    if(empty($_SESSION['resetPass'])){
        header("location:login.php");
    }
?>

<div class="train-reg-content">
    <div class="body">
        <div class="title">Register Here</div>
        <hr>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="reg-content">
                    <p class="input-text">Username : </p>
                    <input type="text" name="=" id="npassUser" class="input-feild" placeholder="Username"><br>

                    <p class="input-text">Email : </p>
                    <input type="email" name="email" id="npassEmail" class="input-feild" placeholder="Email"><br>

                    <p class="input-text">New Password : </p>
                    <input type="password" name="npass" id="npass" class="input-feild" placeholder="New Password"><br>

                    <p class="input-text">New Confirm Password : </p>
                    <input type="password" name="ncpass" id="ncpass" class="input-feild" placeholder="Confirm New Password"><br>

                    <input type="submit" value="Reset Password" name="new_pass" class="new-pass-btn">
                </div>
            </form>
        <hr>
        <div class="develop-by-reg"><i class="far fa-copyright"></i>&nbsp; JehanKandy</div>
    </div>
</div>



<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
