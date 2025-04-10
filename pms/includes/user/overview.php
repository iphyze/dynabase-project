<?php

if($_SESSION['integrity'] == "PMS Admin"){
?>    

<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Users    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        This allows for user account updates    
        </div>

    </div>

    <div class="home-heading-col-2">
        <div class="date-display">Date: <?php echo date('jS M, Y'); ?></div>
    </div>

</div>

        
        
<div class="box-wrapper">

    <div class="bx-wrapper-col user-box wow fadeInUp">


    </div>

    <div class="bx-wrapper-col bxwc-split wow fadeInUp" data-wow-delay='.5s'>

            <a class="grid-box-col gb-color-1">
                <div class="grid-box-title">Total Users</div>
                <div class="grid-box-figure"><?php getTotalUsers() ?></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->            
            </a>
            <a href="index.php?page=user_view" class="grid-box-col gb-color-2">
                <div class="grid-box-title">View All Users</div>
                <div class="grid-box-figure fas fa-users"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>
            <a href="index.php?page=add_user" class="grid-box-col gb-color-3">
                <div class="grid-box-title">Add New User</div>
                <div class="grid-box-figure fas fa-user-plus"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>
            <a href="index.php?page=update_user" class="grid-box-col gb-color-4">
                <div class="grid-box-title">Edit My Profile</div>
                <div class="grid-box-figure fas fa-users-cog"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>

    </div>

</div>
        


<?php
}else{
?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    404 Access Denied!    
    </div>
<!--
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Please ensure that you fill the search box!    
    </div>
-->
    <a href="./" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="./" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>

<?php
}
?>
