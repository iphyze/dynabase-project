<?php
include_once('../includes/connection.php');

// Initialize an empty array to store the results
$endUsersData = array();

// Check if the 'q' parameter is set
if (isset($_GET['q'])) {
    $searchTerm = mysqli_real_escape_string($db, $_GET['q']); // Escape the input to prevent SQL injection

    // Fetch data from the clients_table for End User / Owner based on the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'End User / Owner' AND clients_name LIKE '%$searchTerm%' ORDER BY clients_name ASC";
} else {
    // Fetch all distinct clients for End User / Owner without considering the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'End User / Owner' ORDER BY clients_name ASC";
}

// Execute the query
$getEndUsers = mysqli_query($db, $query);

// Process the results
while ($endUserData = mysqli_fetch_assoc($getEndUsers)) {
    $endUsersData[] = array(
        'clients_name' => $endUserData['clients_name'],
    );
}

// Append the "Other End User / Owner" option
$endUsersData[] = array(
    'clients_name' => 'Other End User / Owner',
);

// Close the connection
$db->close();

// Encode the data as JSON and return it
echo json_encode($endUsersData);
?>
