<?php
include_once("../includes/connection.php");

// Get the search term from the AJAX request
$searchTerm = isset($_GET['q']) ? $_GET['q'] : '';

// Fetch data from the clients_table with a search filter
$query = "SELECT clients_name, id FROM clients_table WHERE clients_name LIKE '%$searchTerm%' ORDER BY clients_name ASC";
$result = $db->query($query);

$clientData = array();

$clientData[] = array(
    'clients_name' => 'Select Client',
    'clients_id' => ''
);

if ($result) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $clientData[] = array(
            'clients_name' => $row['clients_name'],
            'clients_id' => $row['id']
        );
    }
}

// Close the connection
$db->close();

// Encode the data as JSON and return it
echo json_encode($clientData);
?>
