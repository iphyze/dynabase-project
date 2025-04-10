<?php
if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

if(isset($_SESSION['invalidErr'])){
    echo $_SESSION['invalidErr'];
    unset($_SESSION['invalidErr']);
}


if(isset($_SESSION['fileTypeErr'])){
    echo $_SESSION['fileTypeErr'];
    unset($_SESSION['fileTypeErr']);
}

if(isset($_SESSION['fileSizeErr'])){
    echo $_SESSION['fileSizeErr'];
    unset($_SESSION['fileSizeErr']);
}


if(isset($_SESSION['invalidPassErr'])){
    echo $_SESSION['invalidPassErr'];
    unset($_SESSION['invalidPassErr']);
}

if(isset($_SESSION['password_reset_message'])){
    echo $_SESSION['password_reset_message'];
    unset($_SESSION['password_reset_message']);
}


if(isset($_SESSION['userIntegrityErr'])){
    echo $_SESSION['userIntegrityErr'];
    unset($_SESSION['userIntegrityErr']);
}


?>