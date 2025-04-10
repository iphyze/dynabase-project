<?php
include_once("../includes/connection.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Perform the deletion query
    $sql = "DELETE FROM technical_document_table WHERE id = $id"; // Update with your actual table name

    if ($db->query($sql) === TRUE) {
        // Successfully deleted row from database
        echo 'success';
    } else {
        // Error occurred while deleting
        echo 'error';
    }

    // Close the connection
    $db->close();
}
?>
