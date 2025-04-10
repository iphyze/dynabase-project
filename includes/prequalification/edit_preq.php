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

?>

<div class="home-heading">

<div class="home-heading-col-1">

<div class="user-welcome wow fadeInUp">
Edit Prequalification - <?php echo $clients_name ?>    
</div>
<div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
Fill the form below to edit client data. <br> 
</div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=clients_preq" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<div class="notification">
Please note that the asterisked <span class="asterisk">(***)</span> forms are required!
</div>


<div class="form-container">


<!--
    <div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Your tender was successfully created!</div>

    <div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> Sorry, submission failed!</div>
-->

<?php
if(!empty($_SESSION['message'])){
    echo $_SESSION['message'];
    unset ($_SESSION['message']);
}
    
if(isset($_SESSION['fileTypeErr'])){
echo $_SESSION['fileTypeErr'];
unset($_SESSION['fileTypeErr']);
}
    
if(isset($_SESSION['invalidErr'])){
echo $_SESSION['invalidErr'];
unset($_SESSION['invalidErr']);
}

if(isset($_SESSION['fileSizeErr'])){
    echo $_SESSION['fileSizeErr'];
    unset($_SESSION['fileSizeErr']);
}
?>
    
    


<form method="post" action="">

    <!-- Project Information -->

    <div class="form-wrapper">

        <div class="form-title">Company's Information</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Company's Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="clients_name" required value="<?php echo $clients_name ?>">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>

			
			<div class="form-group">
                <label>Company's Address</label>
                <div class="form-control">
                    <input type="text" name="clients_address" value="<?php echo $clients_address ?>">
                    <span class="fas fa-location-arrow"></span>
                </div>
            </div>
            
			
			<div class="form-group">
                <label>Company's Email</label>
                <div class="form-control">
                    <input type="email" name="clients_email" value="<?php echo $clients_email ?>">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
			
			
			<div class="form-group">
                <label>Company's Phone Number</label>
                <div class="form-control">
                    <input type="tel" name="clients_phone" value="<?php echo $clients_phone ?>">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
			
			
			<div class="form-group">
                <label>Company's Website <span class="asterisk">e.g (https://lem.com)</span></label>
                <div class="form-control">
                    <input type="url" name="clients_website" value="<?php echo $clients_website ?>">
                    <span class="fas fa-link"></span>
                </div>
            </div>

        </div>


    </div>


    <!-- Managers -->

    <div class="form-wrapper">

        <div class="form-title">Client Representative's Details</div>

        <div class="form-wrapper-flex">
			
			<div class="form-group">
                <label>Client Rep's Name</label>
                <div class="form-control">
                    <input type="text" name="key_person" value="<?php echo $key_person ?>">
                    <span class="fas fa-user"></span>
                </div>
            </div>

            
			<div class="form-group">
                <label>Client Rep's Tel</label>
                <div class="form-control">
                    <input type="tel" name="key_persons_tel" value="<?php echo $key_persons_tel ?>">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
			
			
			<div class="form-group">
                <label>Client Rep's Designation</label>
                <div class="form-control">
                    <input type="text" name="title" value="<?php echo $title ?>">
                    <span class="fas fa-user"></span>
                </div>
			</div>

        </div>


    </div>
    
    
    
    <div class="form-wrapper">

        <div class="form-title">Client's Business Information</div>
        
		<div class="notification">
            Please provide any additional information below, note that maximum character is 500
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group fg-textarea">
                <label>Client's Business Information (Required) <span class="asterisk" id="words">500 Words Left</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="business_info" onkeyup="CountWords(this)" id="txtBody" required><?php echo $business_info ?></textarea>
                </div>
            </div>

        </div>

    </div>
    

	
	<div class="form-wrapper">

        <div class="form-title">Prospective Project / Budget</div>

        <div class="form-wrapper-flex">
			
			<div class="form-group">
                <label>Prospective Project  <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="prospective_project" required value="<?php echo $prospective_project ?>">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>

            
			<div class="form-group">
                <label>Project Budget</label>
                <div class="form-control">
                    <input type="text" name="budget" value="<?php echo $budget ?>">
                    <span class="fas fa-users"></span>
                </div>
            </div>
			
			
			<div class="form-wrapper-flex">

            <div class="form-group fg-textarea">
                <label>Services Required from Lambert <span class="asterisk">Required</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="services" onkeyup="CountWords(this)" id="txtBody" required><?php echo $services ?></textarea>
                </div>
            </div>

        	</div>
			
			
			
			<div class="form-wrapper-flex">

            <div class="form-group fg-textarea">
                <label>Remarks / Next Steps <span class="asterisk">Required</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="remarks" onkeyup="CountWords(this)" id="txtBody" required><?php echo $remarks ?></textarea>
                </div>
            </div>

        	</div>
			

        </div>


    </div>
	


    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="edit_prequalification">Submit</button>
                </div>
            </div>

        </div>


    </div>


</form>

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
    
    
    
$('#file').change(function(event){
   let media_file = event.target.files[0].name;
    $('#media_file').text(media_file);
});
</script>

<?php
}elseif(!isset($_GET['id']) || $_GET['id'] == ""){
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
    <a href="index.php?page=clients_preq" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=clients_preq" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<?php
} 
?>