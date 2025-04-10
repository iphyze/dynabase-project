<?php
include_once('../includes/connection.php');

// Initialize an empty array to store the results
$mepConsltData = array();

// Check if the 'q' parameter is set
if (isset($_GET['q'])) {
    $searchTerm = mysqli_real_escape_string($db, $_GET['q']); // Escape the input to prevent SQL injection

    // Fetch data from the clients_table for Mep Consultant based on the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Mep Consultant' AND clients_name LIKE '%$searchTerm%' ORDER BY clients_name ASC";
} else {
    // Fetch all distinct clients for Mep Consultant without considering the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Mep Consultant' ORDER BY clients_name ASC";
}

// Execute the query
$getMepCns = mysqli_query($db, $query);

// Process the results
while ($mpConsultData = mysqli_fetch_assoc($getMepCns)) {
    $mepConsltData[] = array(
        'clients_name' => $mpConsultData['clients_name'],
    );
}

// Append the "Other Mep Consultant" option
$mepConsltData[] = array(
    'clients_name' => 'Other Mep Consultant',
);

// Close the connection
$db->close();

// Encode the data as JSON and return it
echo json_encode($mepConsltData);
?>
