<?php include("../lib/layouts/header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<?php include("../lib/layouts/nav_bar.php"); ?>

<div class="train-routes">
    <div class="container">
        <div class="title">
            Train Routes
        </div>
    </div>
</div>
<div class="train-routes-content">

    <table class="find-train-tbl">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Train Name</th>
                        <th scope="col">Train Route</th>
                        <th scope="col">Start Station</th>
                        <th scope="col">Start Time </th>
                        <th scope="col">End Station</th>
                        <th scope="col">Train Arrival</th>
                        <th scope="col">Train Type</th>
                        <th scope="col">Seat Type</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Podi Menike</td>
                        <td>Badulla - Colombo</td>
                        <td>Colombo</td>
                        <td>6.30am</td>
                        <td>Badulla</td>
                        <td>5.00pm</td>
                        <td>Express</td>
                        <td>1st Class, 2nd Class, 3rd Class</td>
                        <td><a href="#"><button class="btn btn-primary">info</button></a></td>
                    </tr>
                </tbody>
            </table>

</div>

<script src="../js/script.js"></script>
<?php include("../lib/layouts/main_footer.php"); ?>
