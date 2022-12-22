<?php include("../lib/layouts/header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<?php include("../lib/layouts/nav_bar.php"); ?>



<div class="find-train-content">
    <div class="container">
        <div class="find-box">
            <div class="title">Find Train</div>
            <hr>
            <div class="body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    Start Station : <br>
                    <select name="" id="" class="form-control">
                        <option value="kandy">Kandy</option>
                        <option value="Colombo">Colombo</option>   
                        <option value="Mathara">Mathara</option>                       
                    </select>
                    <br>
                    End Station : <br>
                    <select name="" id="" class="form-control">
                        <option value="kandy">Kandy</option>
                        <option value="Colombo">Colombo</option>   
                        <option value="Mathara">Mathara</option>                        
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                            Search          
                    </button>
                </form>                
            </div>
            <hr>
            <div class="design-by"><i class="far fa-copyright"></i>&nbsp; JehanKandy</div>
        </div>
    </div>
</div>


<script src="../js/script.js"></script>
<?php include("../lib/layouts/main_footer.php"); ?>
