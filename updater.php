<?php

// $db_name = 'project3_db';
// $host = 'localhost';
// $username = 'root';
// $password = '';

$db_name = 'lambert2_project_db';
$host = '127.0.0.1';
$username = 'lambert2_root';
$password = 'Youaregreat@1';

$message = '';


$conn = mysqli_connect($host, $username, $password, $db_name);

if(!$conn){
//    die("Connection failed: " . $conn->connect_error);
    echo "Failed to connect to the database!";
}


if(isset($_POST['submit'])){
    
$current_data = mysqli_real_escape_string($conn, $_POST['current_data']);
$new_data = mysqli_real_escape_string($conn, $_POST['new_data']);
    
    
$fetch = mysqli_query($conn, "UPDATE keypersons_table SET created_by = '$new_data', updated_by = '$new_data' WHERE created_by = '$current_data'");

$message = 'Succesfully Updated!';    
    
    
}




?>

<!Doctype html>
<html>

<head>
<title>Updater</title>    
</head>        
    
<body>
    
<h1>Hello World</h1>    
<form method="post" action=''>
    
<?php 
  if(isset($message)){echo $message; }  
?>
    
<br /><br /><input type="email" readonly value='k.elmouslemani@lambertelectromec.com' name='current_data'/><br /><br />    

<input type="email" placeholder='New Email' name='new_data' required/><br /><br />
    
<input type='submit' name='submit'/>    
    
</form> 
    
    
    
</body>    
    
</html>