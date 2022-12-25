<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "train_booking";

        $con = mysqli_connect($server,$user,$pass,$db_name);

        $result = (!$con)?"Connection Lost":$con;
        return $result;
    }
?>