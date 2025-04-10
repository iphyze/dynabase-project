<?php
include_once('includes/connection.php');
include_once('includes/functions.php');
session_start();

if($_SESSION['integrity'] == "Admin"){
deleteTenderRequest();
deleteUserRequest();
deleteClientsRequest();
deleteKeypersonsRequest();
}else{
    $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Operation failed!</div>";
    header('location:index.php?page=tender_document');
}


deleteDocumentRequest();


?>