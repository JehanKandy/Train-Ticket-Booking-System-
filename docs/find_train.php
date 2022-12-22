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
                    <select name="start_station" id="" class="form-control">
                        <option value="kandy">Kandy</option>
                        <option value="Colombo">Colombo</option>   
                        <option value="Mathara">Mathara</option>                       
                    </select>
                    <br>
                    End Station : <br>
                    <select name="end_station" id="" class="form-control">
                        <option value="kandy">Kandy</option>
                        <option value="Colombo">Colombo</option>   
                        <option value="Mathara">Mathara</option>                        
                    </select>
                    <br>
                    Booking Date : <br>
                    <input type="date" name="booing_date" id="" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <i class="fas fa-search"></i>&nbsp;
                            Search          
                    </button>
                </form>                
            </div>
            <hr>
            <div class="design-by"><i class="far fa-copyright"></i>&nbsp; JehanKandy</div>
        </div>
    </div>
</div>

<div class="view-trains">
    <div class="container">
        <div class="title">
            Avalibale Trains on 2022-12-27 From Kandy To Mathara
        </div>
        <div class="body">
            hi
        </div>
    </div>
</div>


<script src="../js/script.js"></script>
<?php include("../lib/layouts/main_footer.php"); ?>
