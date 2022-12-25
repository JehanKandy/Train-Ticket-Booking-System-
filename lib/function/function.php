<?php 
    include("config.php");

    use FTP\Connection;

    session_start();


    function reg_user($username, $email, $pass, $cpass){
        $con = Connection();

        $chech_user = "SELECT * FROM user_tbl WHERE username = '$username' && email_user = '$email'";
        $chech_user_result = mysqli_query($con, $chech_user);
        $chech_user_nor = mysqli_num_rows($chech_user_result);

        if(empty($username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Username Error</strong> Username Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        }
        if(empty($email)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email Error</strong> Email Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        }
        if(empty($pass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong>  Password Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
        if(empty($cpass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong> Confirm Password Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
        if($pass != $cpass){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong> Password and Confirm Password not match..!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
        else{
            if($chech_user_nor < 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>User Error</strong> User Already Exists...!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
            }
            else{
                $insert_user = "INSERT INTO user_tbl(username,email_user,user_pass,user_type,is_active,join_date)VALUES('$username','$email','$pass','user',0,NOW())";
                $insert_user_result = mysqli_query($con, $insert_user);

                if(!$insert_user_result){
                    return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>User Error</strong> User Already Exists...!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                    </div>"; 
                }else{
                    return  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Successful </strong> Account Create Successful <a jref='login.php'>Login</a>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                    </div>"; 
                }
            }
        }
        
    }


?>
