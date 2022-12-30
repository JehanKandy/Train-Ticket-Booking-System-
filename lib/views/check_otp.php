<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../function/function.php"); ?>

<?php 
    if(empty($_SESSION['resetPass'])){
        header("location:login.php");
    }
?>




<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
