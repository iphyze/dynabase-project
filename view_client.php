<?php
include_once('includes/connection.php');
include_once('includes/functions.php');
session_start();
    
if(!isset($_SESSION['email']) || $_SESSION['email'] == ""){
    header('location:login.php');
}else{
$session_email = $_SESSION['email'];
$select = mysqli_query($db, "SELECT * FROM user_table WHERE email = '$session_email'");
$selected = mysqli_fetch_assoc($select);

$numPy = mysqli_num_rows($select);

if($numPy > 0){

$user_fname = $selected['fname'];
$_SESSION['fname'] = $selected['fname'];
$_SESSION['integrity'] = $selected['integrity'];
$_SESSION['id'] = $selected['id'];

}else{

	header('location:404.php');

}    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--All styling reference-->
<?php include_once('includes/head.php') ?>
	
<style type="text/css">

@media print{		
		
.print-container{
    position: relative;
    width: 100%;
    height: auto;
    min-height: 1px;
    background-color: white;
    padding: 30px;
    border-radius: 0px;
    margin: 0px auto;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.02);
    page-break-before: always;
    page-break-before: auto;
}

.tender-title{
    position: relative;
    width: 100%;
    height: auto;
    padding: 10px;
    background-image: linear-gradient(to bottom, #5553be, #3734a0);
    color: white;
    text-align: left;
    font-size: 13px;
    text-transform: uppercase;
    font-family: Poppins-SemiBold;
}
.tender-icon{
    color: white;
    margin: 0 10px;
}

.tender-flexbox{
    margin: 10px 0;
    width: 100%;
    padding: 10px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: flex-start;
}

.tender-col{
    display: flex;
    position: relative;
    width: 45%;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: flex-start;
    height: auto;
    margin: 5px 0;
    margin-right: 10px;
}
.tc-full{
    width: 100%;
    font-family: Poppins-SemiBold;
    color: #4b4b4b;
    font-size: 11px;
    margin: 10px 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    padding-top: 10px;
}
.tc-title{
    position: relative;
    margin-right: 10px;
    font-family: Poppins-SemiBold;
    font-size: 10px;
    color: #4B49AC;
}
.tc-text{
    position: relative;
    margin-right: 10px;
    font-family: Poppins-Regular;
    font-size: 10px;
    color: #434343;
}

.log-container{
    padding: 0px;
    position: relative;
}
.log-title{
    font-size: 14px;
    color: #4B49AC;
}
.log-wrapper{
    background-color: #4B49AC;
    color: white;
    border-radius: 10px;
}
.log-words{
    position: relative;
    font-style: italic;
    font-size: 12px;
    color: white;
    margin: 5px 0;
}
.log-keyperson{
    position: relative;
    font-size: 12px;
    color: rgba(224, 224, 224, 0.5);
    margin: 5px 0;
    font-family: Poppins-SemiBold;
}
.log-created-date{
    position: relative;
    font-size: 12px;
    color: rgba(224, 224, 224, 0.5);
    margin: 5px 0;
    font-family: Poppins-SemiBold;
}
.log-creator{
    position: relative;
    font-size: 12px;
    font-style: italic;
    text-align: right;
    color: white;
    margin: 5px 0;
}
.page-break{
    page-break-before: auto;
}	
	
}	
	
</style>
	
	
<title>Dynabase</title>
</head>

<body>

<?php
	
if(isset($_GET['id']) && $_GET['id'] != ""){
    
$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM clients_table WHERE id = '$id'");
$selected = mysqli_fetch_assoc($select);

$idNum = mysqli_num_rows($select);
	
if($idNum > 0){	
	
$clients_name = $selected['clients_name'];
$clients_email = $selected['clients_email'];
$clients_website = $selected['clients_website'];
$clients_address = $selected['clients_address'];
$clients_hq_location = $selected['clients_hq_location'];
$clients_category = $selected['clients_category'];
$created_by = substr($selected['created_by'], 0, -22);
$created_at = date('jS M, Y', strtotime($selected['created_at']));
$updated_by = substr($selected['updated_by'], 0, -22);
$updated_at = date('jS M, Y', strtotime($selected['updated_at']));	
	
	
?>
	
<div class="print-container" style="page-break-before: always">

<div class="tender-title">
<!-- <i class="fas fa-user tender-icon"></i>-->
    Full Client's Details are shown below
</div>    
    
<div class="tender-flexbox">

    <div class="tender-col">
        <div class="tc-title">Clients Name:</div> <div class="tc-text"><?php echo $clients_name; ?></div>
    </div>
    <div class="tender-col">
    
    </div>
    
    <div class="tender-col tc-full">
        Data
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Clients Email:</div> <div class="tc-text">
        <?php 
            if($clients_email == ""){
                echo "NIL";
            }else{
                echo $clients_email;
            } 
        ?>
        </div>
    </div>
    
    
    <div class="tender-col">
        <div class="tc-title">Client's Website:</div> 
        <div class="tc-text">
            <?php
                if($clients_website == ""){
                    $clients_website = "NIL";
                }
                echo "<a target='_blank' href='{$clients_website}'>{$clients_website}</a>";
            ?>
        </div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Clients HQ Location:</div> <div class="tc-text">
        <?php 
            if($clients_hq_location == ""){
                echo "NIL";
            }else{
                echo $clients_hq_location;
            } 
        ?>
        </div>
    </div>
    
    
    <div class="tender-col">
        <div class="tc-title">Client's Category:</div> <div class="tc-text">
        <?php 
            if($clients_category == ""){
                echo "NIL";
            }else{
                echo $clients_category;
            } 
        ?>
        </div>
    </div>
    
    
    <div class="tender-col tc-full">
        <div class="tc-title">Clients Address:</div> <div class="tc-text">
        <?php 
            if($clients_address == ""){
                echo "NIL";
            }else{
                echo $clients_address;
            } 
        ?>
        </div>
    </div>
    
    
    
    <div class="tender-col tc-full">
        User Credential
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Created By</div> <div class="tc-text"><?php echo $created_by; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Created At</div> <div class="tc-text"><?php echo $created_at; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Updated By</div> <div class="tc-text"><?php echo $updated_by; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Updated At</div> <div class="tc-text"><?php echo $updated_at; ?></div>
    </div>
    
    
</div>    
    
    
    
    
<div class="log-container">

<div class="log-title">All logs for <?php echo $clients_name; ?></div>    

    
<?php
    
  
$getLog = mysqli_query($db, "SELECT * FROM log_table WHERE clients_id = '$id' ORDER BY created_at ASC");    
$gottenLog = mysqli_fetch_assoc($getLog);
$logNum = mysqli_num_rows($getLog);
    
    
if($logNum > 0){
    
foreach($getLog as $gottenLog){
$log = nl2br($gottenLog['log']);
$key_person = $gottenLog['key_person'];    
$created_at = date('jS M, Y - h:i a', strtotime($gottenLog['created_at']));    
$created_by = $gottenLog['created_by'];
    
?>
    
<div class="log-wrapper">
    

<div class="log-words">
<?php echo $log ?>    
</div>    
    
<div class="log-keyperson">
Keyperson: <?php echo $key_person ?>    
</div>    
    
<div class="log-created-date">
<?php echo $created_at ?>    
</div>
    
<div class="log-creator">
Logged By: <?php echo $created_by ?>    
</div>    
    
    
</div>    
    
    
<?php    
    
}    
    
    
}else{
    
?>    
  
    
<div class="log-wrapper">
    

<div class="log-words">
No logs have been added yet for this client    
</div>      
    
    
</div>    
    
    
    
<?php    
    
}
    
    
?>
    
    
</div>    
    
    
    
    
</div>    
   
<?php
}else{
	echo "<div class='print-container'>No data found!</div>";
}
}else{
	echo "<div class='print-container'>No data found!</div>";
}
?>
	
</body>
    
    
<script type="text/javascript" src="assets/js/style.js"></script>
<script type="text/javascript" src="assets/js/libraries/wow.min.js"></script>
<script type="text/javascript" src="assets/js/printThis.js"></script>
<script>
new WOW().init();
	
window.onload = function () {
window.print();
}

</script>
</html>