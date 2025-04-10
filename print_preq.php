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


if(isset($_GET['id']) && $_GET['id'] != ""){
    
$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM prequalification_table WHERE id = '$id'");
$selected = mysqli_fetch_assoc($select);

	
$clients_name = $selected['clients_name'];
$clients_address = $selected['clients_address'];
$clients_email = $selected['clients_email'];
$clients_phone = $selected['clients_phone'];
$clients_website = $selected['clients_website'];
$key_person = $selected['key_person'];
$key_persons_tel = $selected['key_persons_tel'];
$title = $selected['title'];
$business_info = nl2br($selected['business_info']);
$prospective_project = $selected['prospective_project'];
$budget = $selected['budget'];
$services = nl2br($selected['services']);
$remarks = nl2br($selected['remarks']);

}elseif($_GET['id'] == "" || !isset($_GET['id'])){
	
header('location:./?page=clients_preq');	
	
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<!--All styling reference-->
<?php include_once('includes/head.php') ?>
	
<link rel="stylesheet" href="preq_print.css" type="text/css">
	
<title>Dynabase</title>
</head>

<body>
	
	
<div class="preq_container">
	

<div class="preq_flexbox_1">
	
<div class="preq_col preq_img">
<img src="lambert-2.png" alt="lambert-img" class="lambert-img"/>	
</div>
	
<div class="preq_col preq_mid">
<div class="preq_title_1 prt-1">LAMBERT ELECTROMEC</div>
<div class="preq_title_2">
<div class="preq_client">CLIENT PREQUALIFICATION</div>
<div class="preq_check">CHECKLIST</div>
</div>	
</div>
	
<div class="preq_col preq_right">

<div class="preq_title_1 preq_italics">
IMS Ref:<br/>
LEM-BDV-01-FR-002-A
</div>
<div class="preq_title_2">
</div>	
	
</div>

	
</div>	
	
	
	
<div class="preq_box">


<div class="preqcol_flex">
<div class="preqf_title">Company's Name</div>	
<div class="preqf_text">
	<?php  

		if($clients_name != ""){
			echo $clients_name;
		}else{
			echo "NIL";
		}
	
	?>
</div>	
</div>	
	
	
<div class="preqcol_flex">
<div class="preqf_title">Company's Address</div>	
<div class="preqf_text">

	<?php  

		if($clients_address != ""){
			echo $clients_address;
		}else{
			echo "NIL";
		}
	
	?>
	
</div>	
</div>	
	
	
<div class="preqcol_flex">
<div class="preqf_title">Company's Email</div>	
<div class="preqf_text">

	<?php  

		if($clients_email != ""){
			echo $clients_email;
		}else{
			echo "NIL";
		}
	
	?>
	
</div>	
</div>	
	
	
<div class="preqcol_flex">
<div class="preqf_title">Company's Phone</div>	
<div class="preqf_text">

	<?php  

		if($clients_phone != ""){
			echo $clients_phone;
		}else{
			echo "NIL";
		}
	
	?>
	
</div>	
</div>	
	
	
<div class="preqcol_flex">
<div class="preqf_title">Company's Website</div>	
<div class="preqf_text">

	<?php  

		if($clients_website != ""){
			echo $clients_website;
		}else{
			echo "NIL";
		}
	
	?>
	
</div>	
</div>	
	
	
	
<div class="preqcol_flex preqcol_flex_color"></div>
	
<div class="preqcol_flex">
<div class="preqf_title">Client's Representative</div>	
<div class="preqf_text">

	<?php  

		if($key_person != ""){
			echo $key_person;
		}else{
			echo "NIL";
		}
	
	?>
	
</div>	
</div>	
	
	
<div class="preqcol_flex">
<div class="preqf_title">Reps Phone Number</div>	
<div class="preqf_text">

	<?php  

		if($key_persons_tel != ""){
			echo $key_persons_tel;
		}else{
			echo "NIL";
		}
	
	?>
	
</div>	
</div>	
	
	
	
<div class="preqcol_flex">
<div class="preqf_title">Designation</div>	
<div class="preqf_text">

	<?php  

		if($title != ""){
			echo $title;
		}else{
			echo "NIL";
		}
	
	?>
	
</div>	
</div>	
	
	
</div>
	
		
	
<div class="preq_box">
<div class="preq_client_title">Client's Business Information</div>
<div class="preq_client_ttext">

<?php  

if($business_info != ""){
	echo $business_info;
}else{
	echo "NIL";
}
	
?>	
	
</div>
</div>
	
	
	
<div class="prospect-box">

<div class="prospect-fb prospect-fb-1">
<div class="prospect-col prospect-sn">S/N</div>	
<div class="prospect-col prospect-project">Prospective Project</div>	
<div class="prospect-col prospect-budget">Budget</div>
</div>
	
<div class="prospect-fb">
<div class="prospect-col prospect-sn">1</div>	
<div class="prospect-col prospect-project">
<?php  

if($prospective_project != ""){
	echo $prospective_project;
}else{
	echo "NIL";
}
	
?>	
</div>	
<div class="prospect-col prospect-budget">

<?php  

if($budget != ""){
	echo $budget;
}else{
	echo "NIL";
}
	
?>	
	
</div>
</div>
	
</div>	
	
	
	
	
	
<div class="page-break"></div>	
	
	
<div class="preq_flexbox_1">
	
<div class="preq_col preq_img">
<img src="lambert-2.png" alt="lambert-img" class="lambert-img"/>	
</div>
	
<div class="preq_col preq_mid">
<div class="preq_title_1 prt-1">LAMBERT ELECTROMEC</div>
<div class="preq_title_2">
<div class="preq_client">CLIENT PREQUALIFICATION</div>
<div class="preq_check">CHECKLIST</div>
</div>	
</div>
	
<div class="preq_col preq_right">

<div class="preq_title_1 preq_italics">
IMS Ref:<br/>
LEM-BDV-01-FR-002-A
</div>
<div class="preq_title_2">
</div>	
	
</div>

	
</div>	
	

	

<div class="preq_box">
<div class="preq_client_title">Services Required From Lambert</div>
<div class="preq_client_ttext">

<?php  

if($services != ""){
	echo $services;
}else{
	echo "NIL";
}
	
?>	
	
</div>
</div>
	
	
	
<div class="preq_box">
<div class="preq_client_title">Remark / Next Steps</div>
<div class="preq_client_ttext">

<?php  

if($remarks != ""){
	echo $remarks;
}else{
	echo "NIL";
}
	
?>	
	
</div>
</div>	
	
	
	
	
</div>
    
    
</body>
    
    
<script type="text/javascript" src="assets/js/style.js"></script>
<script type="text/javascript" src="assets/js/libraries/wow.min.js"></script>
<script type="text/javascript" src="assets/js/printThis.js"></script>
<script>
new WOW().init();
</script>

<script>
    
window.onload = function () {
    window.print();
}

</script>

</html>