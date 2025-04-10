<?php
include_once('includes/connection.php');

if (isset($_POST['keyval'])) {
    $clients_id = $_POST['keyval'];
    $fetch = mysqli_query($db, "SELECT * FROM keypersons_table WHERE clients_id = '$clients_id'");
    $num = mysqli_num_rows($fetch);

    if ($num > 0) {
        $keypersons = array();
        foreach ($fetch as $fetched) {
            $key = $fetched['key_person'];
            $keypersons[] = "<option value='{$key}'>{$key}</option>";
        }
    } else {
        $keypersons[] = "<option value=''>No keypersons available!</option>";
    }

    // Set the content type to JSON
    header('Content-Type: application/json');
    echo json_encode($keypersons);
}
?>
