<h1 align="center">Train Ticket Booking System</h1>
<h4 align="center">Train Ticket Reservation System</h4>

<p align="center"><img src="https://wakatime.com/badge/user/0ac30051-5698-4ae9-851e-7d4853d4aba7/project/67466c4b-ebc9-4e81-8250-db76db6d993a.svg"></p>

<h1>Explain Functions</h1>
  <h4>25 December 2022</h4>
       <h5><b>reg_user</b></h5>
        


[function file](https://github.com/JehanKandy/Train-Ticket-Booking-System-/blob/main/lib/function/function.php)

in first codeline

          function reg_user($username, $email, $pass, $cpass){
          $con = Connection();

          $chech_user = "SELECT * FROM user_tbl WHERE username = '$username' && email_user = '$email'";
          $chech_user_result = mysqli_query($con, $chech_user);
          $chech_user_nor = mysqli_num_rows($chech_user_result);
          
          

I used function for get user input username, email, passweord and Confirm Password from reg.php
   
          if(isset($_POST['register'])){
              $result = reg_user($_POST['username'], $_POST['email'],md5($_POST['pass']), md5($_POST['cpass']));
              echo $result;
          }
          
in first code i create php variable called `$check_user` and assign data which from `user_tbl` where username equal to `$username` and email equal to `email`
and then I create a variable called `$chech_user_result` and assign `mysqli_query($con, $chech_user);`
<br>
`mysqli_query`  function performs a query against a database. 

  [more about mysqli_query](https://www.w3schools.com/php/func_mysqli_query.asp)

and the i again create variable called `$chech_user_nor` and assign `mysqli_num_rows($chech_user_result);` inoder to that the meaning of `mysqli_num_rows()` function for count data according to ` $chech_user_result = mysqli_query($con, $chech_user);`

  [more about mysqli_num_rows](https://www.w3schools.com/php/func_mysqli_num_rows.asp)
  
         if(empty($username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Username Error</strong> Username Cannot be Empty....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        } 
        
 in above code i check the `$username` is not empty, if the variable empty it gives output as 'Username Cannot be Empty....!'
 it's same for other 3 variable (`$email`, `$pass`, `$cpass`)
 
         if($pass != $cpass){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Password Error</strong> Password and Confirm Password not match..!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
 
 in above code I check `pass` and `$cpass` it means password and Confirm Password is equal or not, if not equal it gives output as `Password and Confirm Password not match..!`
 
 
             if($chech_user_nor > 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>User Error</strong> User Already Exists...!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
            }
            
  in above code I check that are there any users according to user enterd values, if there is existing user it gives output as ` User Already Exists...!`        
  if there are not any user according to user added values the values insert to the database table called `user_tbl` as following
  
                  $insert_user = "INSERT INTO user_tbl(username,email_user,user_pass,user_type,is_active,join_date)VALUES('$username','$email','$pass','user',0,NOW())";
                $insert_user_result = mysqli_query($con, $insert_user);
  
  
   
  [more about IF statements](https://www.w3schools.com/php/php_if_else.asp)
 
 
 
 
  
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
  
  <hr>
  
  <h4>26 December 2022</h4>
  
  1. DEVELOP
    
  
  2. UPDATE


<h1>Developers</h1>
  <h4>JehanKandy</h4>

  - Github [JehanKandy](https://github.com/JehanKandy)
  - Twitter [@JehanKandy](https://twitter.com/jehankandy)
  
<h1>Copyright and license</h1>

Copyright 2021–2022 [JehanKandy](https://github.com/JehanKandy). <b>Train Ticket Booking System</b> released under the [MIT License](https://github.com/JehanKandy/Train-Ticket-Booking-System-/blob/main/LICENSE)
