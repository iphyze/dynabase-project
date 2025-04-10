<?php
include_once('../includes/connection.php');

// Initialize an empty array to store the results
$qsManagersData = array();

// Check if the 'q' parameter is set
if (isset($_GET['q'])) {
    $searchTerm = mysqli_real_escape_string($db, $_GET['q']); // Escape the input to prevent SQL injection

    // Fetch data from the clients_table for Qs Manager based on the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Qs Manager' AND clients_name LIKE '%$searchTerm%' ORDER BY clients_name ASC";
} else {
    // Fetch all distinct clients for Qs Manager without considering the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Qs Manager' ORDER BY clients_name ASC";
}

// Execute the query
$getQsMgt = mysqli_query($db, $query);

// Process the results
while ($qsMagtData = mysqli_fetch_assoc($getQsMgt)) {
    $qsManagersData[] = array(
        'clients_name' => $qsMagtData['clients_name'],
    );
}

// Append the "Other Qs Manager" option
$qsManagersData[] = array(
    'clients_name' => 'Other Qs Manager',
);

// Close the connection
$db->close();

// Encode the data as JSON and return it
echo json_encode($qsManagersData);
?>
