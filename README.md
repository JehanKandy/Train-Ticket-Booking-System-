<h1 align="center">Train Ticket Booking System</h1>
<h4 align="center">Train Ticket Reservation System</h4>

<p align="center"><img src="https://wakatime.com/badge/user/0ac30051-5698-4ae9-851e-7d4853d4aba7/project/67466c4b-ebc9-4e81-8250-db76db6d993a.svg"></p>

<h1>Explain Functions</h1>
  <h4>25 December 2022</h4>
       <h5><b>reg_user</b></h5>
        
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
                            <strong>Successful </strong> Account Create Successful <a href='login.php'>Login</a>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                    </div>"; 
                }
            }
        }        
    }

        

<h1>Development Timelne</h1>
  <h4>18 December 2022</h4>
  
  1. DEVELOP
  - Project Start

  <hr>
  
  <h4>19 December 2022</h4>
  
  1. DEVELOP
  - lib/layouts/header.php
  - index.php
  - lib/layouts/main_footer.php
  - css/style.css
  
  <hr>
  
  <h4>21 December 2022</h4>
  
  1. DEVELOP
  - docs/find_train.php
  - lib/layouts/nav_bar.php
  2. UPDATE
  - index.php
  - css/style.css

  <hr>
  
  <h4>22 December 2022</h4>
  
  1. DEVELOP
  2. UPDATE
  - css/style.css
  - docs/find_train.php
  
  <hr>
  
  <h4>23 December 2022</h4>
  
  1. DEVELOP
  - docs/gallery.php
  - docs/about.php
  - docs/train_routes.php
  2. UPDATE
  - lib/layouts/main_footer.php
  - css/style.css
  - lib/layouts/nav_bar.php

  <hr>
  
  <h4>25 December 2022</h4>
  
  1. DEVELOP
  - docs/news.php
  - lib/layouts/login_footer.php
  - lib/views/login.php
  - lib/views/reg.php
  - lib/function/config.php
  - lib/function/function.php
  - - functions:  reg_user()
    
  
  2. UPDATE
  - css/style.css
  - lib/layouts/nav_bar.php  
  - index.php
  
<h1>Developers</h1>
  <h4>JehanKandy</h4>

  - Github [JehanKandy](https://github.com/JehanKandy)
  - Twitter [@JehanKandy](https://twitter.com/jehankandy)
  
<h1>Copyright and license</h1>

Copyright 2021–2022 [JehanKandy](https://github.com/JehanKandy). <b>Train Ticket Booking System</b> released under the [MIT License](https://github.com/JehanKandy/Train-Ticket-Booking-System-/blob/main/LICENSE)
