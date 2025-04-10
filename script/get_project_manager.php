<?php
include_once('../includes/connection.php');

// Initialize an empty array to store the results
$projectManagerData = array();

// Check if the 'q' parameter is set
if (isset($_GET['q'])) {
    $searchTerm = mysqli_real_escape_string($db, $_GET['q']); // Escape the input to prevent SQL injection
    
    // Fetch data from the clients_table for Project Manager based on the search term
    $query = "SELECT DISTINCT clients_name FROM keypersons_table WHERE clients_category = 'Project Manager' AND clients_name LIKE '%$searchTerm%' ORDER BY clients_name ASC";
} else {
    // Fetch all distinct clients for Project Manager without considering the search term
    $query = "SELECT DISTINCT clients_name FROM keypersons_table WHERE clients_category = 'Project Manager' ORDER BY clients_name ASC";
}

// Execute the query
$getProjectManagers = mysqli_query($db, $query);

// Process the results
while ($projectManagerData = mysqli_fetch_assoc($getProjectManagers)) {
    $projectManagersData[] = array(
        'clients_name' => $projectManagerData['clients_name'],
    );
}

// Append the "Other Project Manager" option
$projectManagersData[] = array(
    'clients_name' => 'Other Project Manager',
);


// Encode the data as JSON and return it
echo json_encode($projectManagersData);
?>
