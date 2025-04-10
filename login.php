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

<body class="login-body">
    
<div class="login-body-overlay">
    
<div class="login-form--box wow fadeIn" data-wow-duration='3s'>

<div class="sign-effect-1 wow fadeIn" data-wow-duration='5s'>
<div class="sign-effect-2"></div>    
</div>
    
<div class="sign-effect-3 wow fadeIn" data-wow-duration='7s'></div>    
<div class="sign-effect-4 wow fadeIn" data-wow-duration='9s'></div>    
<div class="sign-effect-5" wow fadeIn></div>    
    
    
<div class="sign-in-flexbox">    
    
<div class="sign-col hide-signup">
    
</div>
    
<div class="sign-col">
    

<div class="sign-up-header wow fadeInDown">Admin Login</div>
<div class="sign-up-group wow fadeIn">
<a class="sign-link">Tender Management System</a>
</div>

                
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

<form class="sign-up-container" method="post" action="">
    <div class="sign-up-group wow fadeInUp">
        <input type="email" name="email" placeholder="User Email" required class='sign-input'>
        <div class="fas fa-user sign-up-icon"></div>
    </div>
    <div class="sign-up-group wow fadeInUp">
        <input type="password" name="password" placeholder="User Password" required id='password-form' class='sign-input'>
        <div class="fas fa-lock sign-up-icon"></div>
        <div class="fas fa-eye sign-up-icon-open" id="password-icon-open"></div>
        <div class="fas fa-eye-slash sign-up-icon-close" id="password-icon-close"></div>
    </div>
    <div class="sign-up-group wow fadeIn">
        <button type="submit" name="login" class="sign-up-btn">LOGIN</button>
    </div>

    <div class="sign-up-group wow fadeIn">
        <a class="lcf-link">&copy; <?php echo date('Y'); ?> Lambert Electromec Limited</a>
    </div>

</form>    
    
    
</div>    
    
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