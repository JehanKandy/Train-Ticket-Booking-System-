<?php 
    include("config.php");

    use FTP\Connection;

    session_start();


    function reg_user($username, $email, $pass, $cpass){
        $con = Connection();

        if(empty($username)){
            return  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Username Error</strong> Username Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        }
        if(empty($email)){
            return  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Email Error</strong> Email Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        }
        if(empty($pass)){
            return  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong>  Password Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
        if(empty($cpass)){
            return  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong> Confirm Password Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
        if($pass != $cpass){
            return  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong> Password and Confirm Password not match..!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
        
    }


?>
