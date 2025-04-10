<?php
if(isset($_GET['id']) && $_GET['id'] != ""){
    
$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM keypersons_table WHERE id = '$id'");
$selected = mysqli_fetch_assoc($select);

$clients_name = $selected['clients_name'];    
$clients_email = $selected['clients_email'];    
$clients_id = $selected['clients_id'];    
$clients_address = $selected['clients_address'];    
$clients_hq_location = $selected['clients_hq_location'];    
$clients_category = $selected['clients_category'];
$key_person = $selected['key_person'];
$key_persons_tel = $selected['key_persons_tel'];
$key_persons_email = $selected['key_persons_email'];
$title = $selected['title'];
$info = $selected['info'];

?>

<div class="home-heading">

<div class="home-heading-col-1">

<div class="user-welcome wow fadeInUp">
Create Log - <?php echo $key_person ?>    
</div>
<div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
Fill the form below to create a new log for the above keyperson. 
</div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=keypersons" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<!--
<div class="notification">
Please note that the asterisked <span class="asterisk">(***)</span> forms are required!
</div>
-->

<div class="form-container">


<?php
if(!empty($_SESSION['message'])){
    echo $_SESSION['message'];
    unset ($_SESSION['message']);
}
    
if(isset($_SESSION['fileTypeErr'])){
echo $_SESSION['fileTypeErr'];
unset($_SESSION['fileTypeErr']);
}

if(isset($_SESSION['fileSizeErr'])){
    echo $_SESSION['fileSizeErr'];
    unset($_SESSION['fileSizeErr']);
}
?>
    
    


<form method="post" action="" id="log-box">

    <!-- Keyperson's Logger -->

    <div class="form-wrapper">

        <div class="form-title">Create New Keyperson's Log</div>

        <div class="form-wrapper-flex">
            
            <div class="form-group fg-textarea">
                <label>Log (Optional) <!--<span class="asterisk" id="words">500 Words</span>--></label>
                <div class="form-control">
                    <textarea maxlength="500" name="log" value="" required></textarea>
<!--                    <input type="hidden" name="clients_name" id="name_of_client" value="<?php echo $clients_name ?>"/>-->
                    <input type="hidden" name="clients_id" value="<?php echo $clients_id ?>"/>
                    <input type="hidden" name="key_person" value="<?php echo $key_person ?>"/>
                    <input type="hidden" name="clients_hq_location" value="<?php echo $clients_hq_location ?>"/>
                    <input type="hidden" name="clients_category" value="<?php echo $clients_category ?>"/>
                </div>
            </div>
            
        </div>

        
        
        <div class="form-wrapper no-border">

            <div class="form-wrapper-flex">

                <div class="form-group">
                    <div class="form-control">
                        <button name="submit_log">Submit Log</button>
                    </div>
                </div>


            </div>

        </div>
        
        
    </div>
    

</form>

</div>



<div class="log-container">

<div class="log-title">All logs for <?php echo $key_person; ?></div>    

    
<?php
    
  
$getLog = mysqli_query($db, "SELECT * FROM log_table WHERE key_person = '$key_person' ORDER BY created_at ASC");    
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
    <a href="index.php?page=document_overview" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=document_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<?php
} 
?>