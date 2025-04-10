<?php

$user_id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM user_table WHERE id = '$user_id'");
$selected = mysqli_fetch_array($select);
$user_name = $selected['fname'];
$user_email = $selected['email'];
$new_password = md5(ucfirst($user_name) . '_123');
$updated_by = $_SESSION['email'];

if($_SESSION['integrity'] == "Admin"){
    if(!isset($_GET['id']) || $_GET['id'] == ""){
        header('location:index.php?page=user_view');
    }else{
        
        mysqli_query($db, "UPDATE user_table SET password = '$new_password', updated_by = '$updated_by' WHERE id = '$user_id'");
        
        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Password has been successfully reset!</div>";
        //header('Location:index.php?page=user_view');
        echo "<script>location.href='index.php?page=user_view';</script>";
    }
    
    if($_SESSION['email'] == $user_email){
        mysqli_query($db, "UPDATE user_table SET password = '$new_password', updated_by = '$updated_by' WHERE id = '$user_id'");
        
        $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> Password has been successfully reset!</div>";
        unset($_SESSION['email']);
        header('location:login.php');
    }
}else{
    $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Oops, Access Denied!</div>";
    header('location:index.php?page=user_view');
}


?>