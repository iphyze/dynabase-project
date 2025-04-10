<?php
include_once('includes/connection.php');
include_once('includes/functions.php');
session_start();
loginRequest();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once('includes/head.php'); ?>
<title>Project Admin Portal</title>
</head>

<body>
    
    <div class="login-container">
        <div class="login-container-flexbox">
            
            <div class="lcf-col lcf-image">
                <div class="lcf-overlay">
                    <div class="lcf-overlay-image wow fadeInDown">
                        <img src="assets/css/images/lambert.png" alt="lambert-img">
                    </div>
                    <div class="lcf-overlay-text wow fadeInUp">
                        <div class="fas fa-users lcf-overlay-icon"></div> 
                        TENDER MANAGEMENT
                    </div>
                </div>
            </div>
            
            <div class="lcf-col lcf-bg">
                <div class="lcf-form-header wow fadeInDown">Admin Login</div>
                
                <?php 
                include_once('includes/message.php'); 
                if(isset($_SESSION['logout'])){
                    echo $_SESSION['logout'];
                    unset($_SESSION['logout']);
                }
                
                if(isset($_SESSION['password_reset_message'])){
                    echo $_SESSION['password_reset_message'];
                    unset($_SESSION['password_reset_message']);
                }
                ?>
                
                <form class="lcf-form-container" method="post" action="">
                    <div class="lcf-form-group wow fadeInUp">
                        <input type="email" name="email" placeholder="User Email" required>
                        <div class="fas fa-user lcf-form-icon"></div>
                    </div>
                    <div class="lcf-form-group wow fadeInUp">
                        <input type="password" name="password" placeholder="User Password" required id='password-form'>
                        <div class="fas fa-lock lcf-form-icon"></div>
                        <div class="fas fa-eye lcf-form-icon-open" id="password-icon-open"></div>
                        <div class="fas fa-eye-slash lcf-form-icon-close" id="password-icon-close"></div>
                    </div>
                    <div class="lcf-form-group wow fadeIn">
                        <button type="submit" name="login">LOGIN</button>
                    </div>
                    
                    <!--<div class="lcf-form-group wow fadeIn">
                        <a href="#" class="lcf-link">Forgot Useremail/Password?</a>
                    </div>-->
                    
                </form>
            </div>
            
        </div>
    </div>
    
</body>
    
    
<script type="text/javascript" src="assets/js/style.js"></script>
<script type="text/javascript" src="assets/js/libraries/wow.min.js"></script>
<script>
new WOW().init();


$(document).ready(function(){
   $('#password-icon-close').click(function(){
     $('#password-icon-close').hide();
     $('#password-icon-open').show();

       var password_show = document.getElementById("password-form");
       if(password_show.type === "password"){
           password_show.type = "text";
       }

   });


    $('#password-icon-open').click(function(){
     $('#password-icon-open').hide();
     $('#password-icon-close').show();

        var password_show = document.getElementById("password-form");
        if(password_show.type === "text"){
           password_show.type = "password";
        }

   });
});
</script>
</html>