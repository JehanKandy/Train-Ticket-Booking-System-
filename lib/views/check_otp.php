<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../function/function.php"); ?>

<?php 
    if(empty($_SESSION['resetPass'])){
        header("location:login.php");
    }
?>

<div class="check-otp">
    <div class="body">
        <div class="check-otp-content">
            <div class="title">
                Enter OTP
            </div>
            <div class="body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    
                </form>
            </div>
        </div>
    </div>
</div>




<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
