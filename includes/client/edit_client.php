<?php
if(isset($_GET['id']) && $_GET['id'] != ""){
    
$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM clients_table WHERE id = '$id'");
$selected = mysqli_fetch_assoc($select);

$clients_name = $selected['clients_name'];    
$clients_email = $selected['clients_email'];    
$clients_website = $selected['clients_website'];    
$clients_address = $selected['clients_address'];    
$clients_hq_location = $selected['clients_hq_location'];    
$clients_category = $selected['clients_category'];

?>

<div class="home-heading">

<div class="home-heading-col-1">

<div class="user-welcome wow fadeInUp">
Edit Client - <?php echo $clients_name ?>    
</div>
<div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
Fill the form below to edit client data. <br> 
</div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=client_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
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

        <div class="form-title">Client Form</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Client's Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="clients_name" required value="<?php echo $clients_name; ?>">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <input type="hidden" name="clients_email" value="<?php echo $clients_email; ?>">
            
            <div class="form-group">
                <label>Client's Website Url [e.g. https://lambertelectromec.com]</label>
                <div class="form-control">
                    <input type="url" name="clients_website" value="<?php echo $clients_website; ?>">
                    <span class="fas fa-link"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Client's Address</label>
                <div class="form-control">
                    <input type="text" name="clients_address" value="<?php echo $clients_address; ?>">
                    <span class="fas fa-map"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Client's HQ Location</label>
                <div class="form-control">
                    <input type="text" name="clients_hq_location" value="<?php echo $clients_hq_location; ?>">
                    <span class="fas fa-map"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Client Category <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_category" required>
                        <option value="<?php echo $clients_category; ?>"> -- <?php echo $clients_category; ?> -- </option>
                        
                        <?php
                        
                        $getCat = mysqli_query($db, "SELECT * FROM clients_category_table");
                        $gottenCat = mysqli_fetch_assoc($getCat);
                        $numCat = mysqli_num_rows($getCat);
                        
                        if($numCat > 0){
                            foreach($getCat as $gottenCat){
                            $category_name = $gottenCat['category_name'];
                        ?>
                        
                        <option value="<?php echo $category_name?>"><?php echo $category_name?></option>
                        
                        <?php
                                
                            }
                        }else{
                        ?>    
                            <option value="" disabled>No results found!</option>
                        <?php    
                        }
                        
                        ?>
                        
                    </select>
                    <span class="fas fa-list-alt select-icon"></span>
                </div>
            </div>
            
        </div>

    </div>

    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="edit_client">Edit</button>
                </div>
            </div>


        </div>


    </div>


</form>

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