<?php include("../lib/layouts/header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<?php include("../lib/layouts/nav_bar.php"); ?>



<div class="find-train-content">
    <div class="container">
        <div class="find-box">
            <div class="title">Find Train</div>
            <div class="body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    Start Station : <br>
                    <select name="" id="">
                        <option value="kandy"></option>
                        <option value="Colombo"></option>   
                        <option value="Mathara"></option>                       
                    </select>

                    End Station : <br>
                    <select name="" id="">
                        <option value="kandy"></option>
                        <option value="Colombo"></option>   
                        <option value="Mathara"></option>                       
                    </select>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="../js/script.js"></script>
<?php include("../lib/layouts/main_footer.php"); ?>
