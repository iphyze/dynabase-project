<?php
// Database configuration

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'project3_db';


// $host = '127.0.0.1';
// $username = 'lambert2_root';
// $password = 'Youaregreat@1';
// $database = 'lambert2_project_db';



// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die(json_encode(["message" => "Connection failed: " . mysqli_connect_error()]));
}
?>