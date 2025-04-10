<?php
include_once('../includes/connection.php');
include_once('../includes/functions.php');
session_start();


if(!isset($_SESSION['email'])){
    header('location:login.php');
}


//header("Content-type: application/vnd-ms-excel");
header("Content-type: application/vnd.openxmlformats-officedocument.spreasheetml.sheet");

$filename = "All Keypersons.xls";

header("Content-Disposition:attachment;filename={$filename}");

?>

<table>
<tr>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">S/N</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Client's Name</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Client's Email</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Client's Address</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Client's HQ Location</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Clinet's Category</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Keyperson</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Keyperson's Number</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Keyperson's Email</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Keyperson's Address</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Gift Status</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Gift Type</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Designation</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Information</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Created By</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Created At</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Updated By</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Updated At</td>
</tr>

<?php

$sn = 0;
$sn_two = 1;

$select = mysqli_query($db, "SELECT * FROM keypersons_table WHERE created_by = '{$_SESSION['email']}'");
$selected = mysqli_fetch_assoc($select);
$num = mysqli_num_rows($select);

    
if($num > 0){    
foreach($select as $selected){

$sn = $sn + 1;
$clients_name = $selected['clients_name'];    
$clients_email = $selected['clients_email'];    
$clients_address = $selected['clients_address'];    
$clients_hq_location = $selected['clients_hq_location'];    
$clients_category = $selected['clients_category'];
$key_person = $selected['key_person'];
$key_persons_tel = $selected['key_persons_tel'];
$key_persons_email = $selected['key_persons_email'];
$key_persons_address = $selected['key_persons_address'];
$gift_type = $selected['gift_type'];
$gift_status = $selected['gift_status'];
$info = $selected['info'];
$title = $selected['title'];
$created_by = $selected['created_by'];
$updated_by = $selected['updated_by'];
$created_at = date('d-m-Y', strtotime($selected['created_at']));
$updated_at = date('d-m-Y', strtotime($selected['updated_at']));        

?>

<tr>
    <td style="border: 1px solid black"><?php echo $sn; ?></td>
    <td style="border: 1px solid black"><?php echo $clients_name; ?></td>
    <td style="border: 1px solid black"><?php echo $clients_email; ?></td>
    <td style="border: 1px solid black"><?php echo $clients_address; ?></td>
    <td style="border: 1px solid black"><?php echo $clients_hq_location; ?></td>
    <td style="border: 1px solid black"><?php echo $clients_category; ?></td>
    <td style="border: 1px solid black"><?php echo $key_person; ?></td>
    <td style="border: 1px solid black"><?php echo $key_persons_tel; ?></td>
    <td style="border: 1px solid black"><?php echo $key_persons_email; ?></td>
    <td style="border: 1px solid black"><?php echo $key_persons_address; ?></td>
    <td style="border: 1px solid black"><?php echo $gift_status; ?></td>
    <td style="border: 1px solid black"><?php echo $gift_type; ?></td>
    <td style="border: 1px solid black"><?php echo $info; ?></td>
    <td style="border: 1px solid black"><?php echo $title; ?></td>
    <td style="border: 1px solid black"><?php echo $created_by; ?></td>
    <td style="border: 1px solid black"><?php echo $created_at; ?></td>
    <td style="border: 1px solid black"><?php echo $updated_by; ?></td>
    <td style="border: 1px solid black"><?php echo $updated_at; ?></td>
</tr>
<?php    
    }
}else{
?>
    
<tr>
    <td colspan="30" style="border: 1px solid black">No Data Found!</td>
</tr>    
    
<?php
}
?>
</table>