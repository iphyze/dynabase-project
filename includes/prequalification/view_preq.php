<?php
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
$created_by = substr($selected['created_by'], 0, -22);
$created_at = date('jS M, Y', strtotime($selected['created_at']));
$updated_by = substr($selected['updated_by'], 0, -22);
$updated_at = date('jS M, Y', strtotime($selected['updated_at']));

?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Client    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Prequalification Checklist 
    </div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=client_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

<a target="_blank" href="print_preq.php?id=<?php echo $_GET['id']; ?>"  class='success-message theme-color'><i class='fas fa-file'></i> Print</a>    
    
</div>



<div class="print-container" style="page-break-before: always">

<div class="tender-title">
<!-- <i class="fas fa-user tender-icon"></i>-->
    Full Client's Prequalification Checklist are shown below
</div>    
    
<div class="tender-flexbox">

    <div class="tender-col">
        <div class="tc-title">Company's Name:</div> <div class="tc-text"><?php echo $clients_name; ?></div>
    </div>
    <div class="tender-col">
    
    </div>
    
    <div class="tender-col tc-full">
        Data
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Company's Email:</div> <div class="tc-text">
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
        <div class="tc-title">Company's Website:</div> 
        <div class="tc-text">
            <?php
                if($clients_website == ""){
                    $clients_website = "NIL";
                }
                echo "<a target='_blank' href='{$clients_website}'>{$clients_website}</a>";
            ?>
        </div>
    </div>
    
    <div class="tender-col tc-full">
        <div class="tc-title">Company's Address:</div> <div class="tc-text">
        <?php 
            if($clients_address == ""){
                echo "NIL";
            }else{
                echo $clients_address;
            } 
        ?>
        </div>
    </div>
    
    
    <div class="tender-col">
        <div class="tc-title">Company's Phone:</div> <div class="tc-text">
        <?php 
            if($clients_phone == ""){
                echo "NIL";
            }else{
                echo $clients_phone;
            } 
        ?>
        </div>
    </div>
    
    
    <div class="tender-col tc-full">
        Client's Contact Person
    </div>
	
	
	<div class="tender-col">
        <div class="tc-title">Client Rep's Name:</div> <div class="tc-text">
        <?php 
            if($key_person == ""){
                echo "NIL";
            }else{
                echo $key_person;
            } 
        ?>
        </div>
    </div>
	
	
	<div class="tender-col">
        <div class="tc-title">Client Rep's Tel:</div> <div class="tc-text">
        <?php 
            if($key_persons_tel == ""){
                echo "NIL";
            }else{
                echo $key_persons_tel;
            } 
        ?>
        </div>
    </div>
	
	
	<div class="tender-col">
        <div class="tc-title">Client Rep's Designation:</div> <div class="tc-text">
        <?php 
            if($title == ""){
                echo "NIL";
            }else{
                echo $title;
            } 
        ?>
        </div>
    </div>
	
	
	
	<div class="tender-col tc-full">
        Client's Business Information
    </div>
	
	<div class="tc-text">
        <?php 
            if($business_info == ""){
                echo "NIL";
            }else{
                echo $business_info;
            } 
        ?>
    </div>
	
	
	
	<div class="tender-col tc-full">
        Prospective Project / Project Budget
    </div>
	
	<div class="tender-col">
        <div class="tc-title">Prospective Project:</div> <div class="tc-text">
        <?php 
            if($prospective_project == ""){
                echo "NIL";
            }else{
                echo $prospective_project;
            } 
        ?>
        </div>
    </div>
	
	
	<div class="tender-col">
        <div class="tc-title">Project Budget:</div> <div class="tc-text">
        <?php 
            if($budget == ""){
                echo "NIL";
            }else{
                echo $budget;
            } 
        ?>
        </div>
    </div>
	
	
	
	<div class="tender-col tc-full">
        Services Required From Lambert
    </div>
	
	<div class="tc-text">
        <?php 
            if($services == ""){
                echo "NIL";
            }else{
                echo $services;
            } 
        ?>
    </div>
	
	
	
	
	<div class="tender-col tc-full">
        Remarks / Mext Steps
    </div>
	
	<div class="tc-text">
        <?php 
            if($remarks == ""){
                echo "NIL";
            }else{
                echo $remarks;
            } 
        ?>
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
    
    
    
<!--    
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
 -->
    
    
    
</div>


<script>
function CountWords(s) {
var maxChars = 500;
if (s.value.length > maxChars) {
s.value = s.value.substring(0, maxChars);
}
else {
$("#words").html((maxChars - s.value.length) + " characters left.");
}
}
</script>

<?php
}elseif(!isset($_GET['code']) || $_GET['code'] == ""){
?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    404 not found!    
    </div>
<!--
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Please ensure that you fill the search box!    
    </div>
-->
    <a href="index.php?page=tender_view" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=tender_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<?php
} 
?>



<script>

$(document).ready(function(){
   
$('#print-btn').click(function(){
   
$('.print-container').printThis({
    importCSS: false,
    importStyle: true,
    base: "./dynabase",
    loadCSS: 'assets/css/print.css'
});    
    
});    
    
    
});
    
    

</script>