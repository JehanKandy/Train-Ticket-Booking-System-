<?php 
    include("config.php");

    use FTP\Connection;

    session_start();


    function reg_user($username, $email, $pass, $cpass){
        $con = Connection();

        if(empty($username)){
            return  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
        }
        if(empty($email)){
            return  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        }
        
    }


?>
