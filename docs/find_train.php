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
            Avalibale Trains on 2022-12-27 From Kandy To Colombo
        </div>
        <div class="body">
            <table class="find-train-tbl">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Train Name</th>
                        <th scope="col">Train Route</th>
                        <th scope="col">Start Station</th>
                        <th scope="col">Train Arrival</th>
                        <th scope="col">Train Departure</th>
                        <th scope="col">End Station</th>
                        <th scope="col">Train Arrival</th>
                        <th scope="col">Train Type</th>
                        <th scope="col">Seat Availability</th>
                        <th scope="col">Seat Type</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Podi Menike</td>
                        <td>Badulla - Colombo</td>
                        <td>Kandy</td>
                        <td>3.45pm</td>
                        <td>4.00pm</td>
                        <td>Colombo</td>
                        <td>7.00pm</td>
                        <td>Express</td>
                        <td>Avalibale</td>
                        <td>1st Class, 2nd Class, 3rd Class</td>
                        <td><a href="#"><button class="btn btn-primary">info</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="../js/script.js"></script>
<?php include("../lib/layouts/main_footer.php"); ?>
