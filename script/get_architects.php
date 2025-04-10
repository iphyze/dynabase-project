<?php
include_once('../includes/connection.php');

// Initialize an empty array to store the results
$architectsData = array();

// Check if the 'q' parameter is set
if (isset($_GET['q'])) {
    $searchTerm = mysqli_real_escape_string($db, $_GET['q']); // Escape the input to prevent SQL injection

    // Fetch data from the clients_table for Architects based on the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Architects' AND clients_name LIKE '%$searchTerm%' ORDER BY clients_name ASC";
} else {
    // Fetch all distinct clients for Architects without considering the search term
    $query = "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Architects' ORDER BY clients_name ASC";
}

// Execute the query
$getArtist = mysqli_query($db, $query);

// Process the results
while ($archtectsData = mysqli_fetch_assoc($getArtist)) {
    $architectsData[] = array(
        'clients_name' => $archtectsData['clients_name'],
    );
}

// Append the "Other Architects" option
$architectsData[] = array(
    'clients_name' => 'Other Architects',
);

// Close the connection
$db->close();

// Encode the data as JSON and return it
echo json_encode($architectsData);
?>
