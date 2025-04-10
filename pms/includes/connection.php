<?php

$db = mysqli_connect('127.0.0.1', 'lambert2_root', 'Youaregreat@1', 'lambert2_project_db');
//$db = mysqli_connect('localhost', 'root', '', 'project3_db');


if(!$db){
    die('Sorry we were unable to connect to database!');
}


//$db = mysqli_connect('127.0.0.1', 'root', 'root', 'project_db');

//if(!$db){
    //die('Sorry we were unable to connect to database!');
//}



// $db = mysqli_connect('127.0.0.1', 'root', '', 'project_db');

// if(!$db){
//     die('Sorry we were unable to connect to database!');
// }

?>