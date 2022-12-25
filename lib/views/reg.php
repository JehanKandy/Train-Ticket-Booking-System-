<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="train-reg-content">
    <div class="body">
        <div class="title">Register Here</div>
        <hr>
        <?php 
            include("../function/function.php"); 

        
        ?>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="reg-content">
                    <p class="input-text">Username : </p>
                    <input type="text" name="username" id="logUsername" class="input-feild" placeholder="Username"><br>

                    <p class="input-text">Email : </p>
                    <input type="email" name="email" id="regemail" class="input-feild" placeholder="Email"><br>

                    <p class="input-text">Password : </p>
                    <input type="password" name="pass" id="regpass" class="input-feild" placeholder="Password"><br>

                    <p class="input-text">Confirm Password : </p>
                    <input type="password" name="cpass" id="regcpass" class="input-feild" placeholder="Confirm Password"><br>

                    <span>
                        <input type="reset" value="Clear" class="reset-btn">&nbsp;<input type="submit" value="Register" name="register" class="reg-btn">
                    </span>
                </div>
            </form>
        <hr>
        Already Have an Account ? <a href="login.php" style="color: rgb(216, 55, 216); text-decoration: none;">Login</a>
        <div class="develop-by-reg"><i class="far fa-copyright"></i>&nbsp; JehanKandy</div>
    </div>
</div>


<?php include("../layouts/login_footer.php"); ?>
<script src="../../js/script.js"></script>
