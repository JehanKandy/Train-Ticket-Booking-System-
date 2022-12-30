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
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email Error</strong> &nbsp; Check Again Your Email
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
            if($chech_user_nor > 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>User Error</strong> User Already Exists...!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
            }
            else{
                $insert_user = "INSERT INTO user_tbl(username,email_user,user_pass,user_type,is_pending,is_active,join_date)VALUES('$username','$email','$pass','user',1,0,NOW())";
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
                            <strong>Successful </strong> Account Create Successful <a href='login.php'>Login</a>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                    </div>"; 
                }
            }
        }        
    }

    function login_user($username, $user_pass){
        $con = Connection();



        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && user_pass = '$user_pass' && is_active = 1 && is_pending = 0";
        $check_user_result = mysqli_query($con, $check_user);
        $check_user_nor = mysqli_num_rows($check_user_result);
        $check_user_row = mysqli_fetch_assoc($check_user_result);

        if(empty($username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Username Error</strong> Username Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        }
        if(empty($user_pass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong>  Password Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }

        $waiting_user = "SELECT * FROM user_tbl WHERE username = '$username' && user_pass = '$user_pass' && is_active = 0 && is_pending = 1";
        $waiting_user_result = mysqli_query($con, $waiting_user);
        $waiting_user_nor = mysqli_num_rows($waiting_user_result);
        $waiting_user_row = mysqli_fetch_assoc($waiting_user_result);

        $_SESSION['waitingUser'] = $waiting_user_row['username'];
        
        if($waiting_user_nor > 0){
            header("location:waiting_user.php");
        }

        elseif($check_user_nor > 0){
                if($check_user_row['user_type'] == 'user'){
                    setcookie('login',$check_user_row['email_user'],time()+60*60,'/');
                    $_SESSION['LoginSession'] = $check_user_row['email_user'];
                    header("location:../routes/user.php");
                }
                elseif($check_user_row['user_type'] == 'admin'){
                    setcookie('login',$check_user_row['email_user'],time()+60*60,'/');
                    $_SESSION['LoginSession'] = $check_user_row['email_user'];
                    header("location:../routes/user.php");
                }            
        }
        else{
            if($check_user_row['is_active'] == 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User Error</strong>  User Deactivate....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>";  
            }else{
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User Error</strong>  User Does not Exists....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>";  
            }
        }    
    }

    function waiting_user(){
        $con = Connection();

        $waiting_user_username = strval($_SESSION['waitingUser']);

        echo $waiting_user_username;
    }

    function check_otp_user($username, $email){
        $con = Connection();

        if(empty($username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Username Error</strong>  Username Cannot be empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";  
        }
        if(empty($email)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email Error</strong>  Email Cannot be empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";  
        }


        $check_user_otp = "SELECT * FROM user_tbl WHERE username = '$username' && email_user = '$email' && is_pending = 0 && is_active = 1";
        $check_user_otp_result = mysqli_query($con, $check_user_otp);
        $check_user_otp_row = mysqli_fetch_assoc($check_user_otp_result);
        $check_user_otp_nor = mysqli_num_rows($check_user_otp_result);

        if($check_user_otp_nor > 0){
            if($username != $check_user_otp_row['username']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Username Error : </strong> &nbsp; Username does not exist...!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>"; 
                }
            if($email != $check_user_otp_row['email_user']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Username Error : </strong> &nbsp; Username does not exist...!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>"; 
            }
            
            else{
                echo "hi";
            }
        }        
        else{
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>User Error</strong>  User Does not Exists....!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>";  
        }
    
    }

?>
