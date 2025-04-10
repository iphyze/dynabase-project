<?php
// fetch_clients.php


// Assuming you have a database connection established in your main file
include("/includes/connection.php");

$getCat = mysqli_query($db, "SELECT * FROM clients_table ORDER BY clients_name ASC");
$clients = mysqli_fetch_all($getCat, MYSQLI_ASSOC);

echo json_encode($clients);
?>
