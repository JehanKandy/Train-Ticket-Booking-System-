<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../function/function.php"); ?>

<?php 
    if(empty($_SESSION['resetPass'])){
        header("location:login.php");
    }
?>

<div class="check-otp">
        <div class="container">
            <div class="check-otp-content">
                <div class="title">
                    OTP Verify
                </div>
                <?php 
                    if(isset($_POST['otp_verify'])){
                        $result = check_otp($_POST['otp_no']);
                        echo $result;
                    }
                ?>
                <div class="body">
        

                    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                        <p> Enter OTP : </p> 
                        <input type="number" name="otp_no" id="otpV" class="input-feild" placeholder="OTP">

                        <input type="submit" value="Verify OTP" name="otp_verify" class="otp-verify-btn">
                    </form>
                </div>
                <div class="develop-by-reg"><i class="far fa-copyright"></i>&nbsp; JehanKandy</div>
            </div>
        </div>

</div>




<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
