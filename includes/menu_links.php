<?php

function homePageActive(){
    if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] == 'views') || (isset($_GET['page']) && $_GET['page'] == 'edit') || (isset($_GET['page']) && $_GET['page'] == 'pending') || (isset($_GET['page']) && $_GET['page'] == 'inprogress')){
        echo "active";
    }
}

function addPageActive(){
    if(isset($_GET['page']) && $_GET['page'] == "add"){
        echo "active";
    }
}

function settingsPageActive(){
    if(isset($_GET['page']) && $_GET['page'] == "settings" || (isset($_GET['page']) && $_GET['page'] == 'users') || (isset($_GET['page']) && $_GET['page'] == 'add_user')){
        echo "active";
    }
}
?>
<div class="vc-box-menu">
    <a href="index.php" class="fas fa-home vc-box-icon <?php homePageActive(); ?>"></a>
    <a href ="index.php" class="vc-box-title <?php homePageActive(); ?>">Home</a>
</div>

<div class="vc-box-menu">
    <a href="index.php?page=add" class="fas fa-plus vc-box-icon <?php addPageActive(); ?>"></a>
    <a href ="index.php?page=add" class="vc-box-title <?php addPageActive(); ?>">Add New</a>
</div>

<div class="vc-box-menu">
    <a href="index.php?page=settings" class="fas fa-users-cog vc-box-icon <?php settingsPageActive(); ?>"></a>
    <a href="index.php?page=settings" class="vc-box-title <?php settingsPageActive(); ?>">User Settings</a>
</div>

<div class="vc-box-menu">
    <a href="logout.php" class="fas fa-power-off vc-box-icon"></a>
    <a href ="logout.php" class="vc-box-title">Logout</a>
</div>


<!--
<div class="vc-box-menu">
    <a href="download.php" class="fas fa-download vc-box-icon"></a>
    <a href ="download.php" class="vc-box-title">Download</a>
</div>
-->