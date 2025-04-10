<?php

$db = mysqli_connect('127.0.0.1', 'root', '', 'project_db');

if(!$db){
    die('Sorry we were unable to connect to database!');
}




$select = mysqli_query($db, "SELECT * FROM project_info_table");
$selected = mysqli_fetch_assoc($select);
$num = mysqli_num_rows($select);


if($num > 0){
    
    
foreach($select as $selected){
$id = $selected['id'];    
$project_title = $selected['project_title'];
$project_client = $selected['project_client'];
$division = $selected['division'];
    
    
$response[] = ['id'=>$id, 'project_title' => $project_title, 'project_client' => $project_client, 'divison' => $division];    
    
}    

header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);    
    
}



?>