<?php
include_once('includes/connection.php');


if(isset($_POST['keyval'])){
    
    
$clients_id = $_POST['keyval'];    

$fetch = mysqli_query($db, "SELECT * FROM keypersons_table WHERE clients_id = '$clients_id'");
$fetched = mysqli_fetch_assoc($fetch);
$num = mysqli_num_rows($fetch);
    
    
if($num > 0){    
    
foreach($fetch as $fetched){

$key = $fetched['key_person'];    
    
$keyperson[] = "<option value='{$key}'>{$key}</option>";
}

//$keyperson = $fetched;    
    
    
}elseif($num == 0){

$keyperson[] = "No keypersons available!";
    
}
    

echo json_encode($keyperson);    
    
    
}





?>