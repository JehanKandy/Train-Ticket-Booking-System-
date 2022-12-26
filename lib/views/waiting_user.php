<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../function/function.php"); ?>

<div class="waiting-content">
    <div class="container">
        <div class="waiting-body">
            <div class="username-text">
                Hi <?php waiting_user(); ?>..!
            </div>

            <div class="msg-text">
                Your account approval is still pending
            </div>
        </div>
    </div>
</div>
<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
