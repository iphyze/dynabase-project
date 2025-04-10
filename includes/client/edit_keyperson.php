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
Edit keyperson - <?php echo $key_person ?>    
</div>
<div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
Fill the form below to edit keyperson's details. 
</div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=keypersons" class="back-btn"><i class="fas fa-home"></i> Home</a>
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

if(isset($_SESSION['fileSizeErr'])){
    echo $_SESSION['fileSizeErr'];
    unset($_SESSION['fileSizeErr']);
}
?>
    
    


<form method="post" action="">

    <!-- Project Information -->

    <div class="form-wrapper">

        <div class="form-title">Keyperson Form</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Select Client <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_name" required>
                        <option value="<?php echo $clients_name; ?>"> -- <?php echo $clients_name; ?> -- </option>
                        
                        <?php
                        
                        $getCat = mysqli_query($db, "SELECT * FROM clients_table ORDER BY clients_name ASC");
                        $gottenCat = mysqli_fetch_assoc($getCat);
                        $numCat = mysqli_num_rows($getCat);
                        
                        if($numCat > 0){
                            foreach($getCat as $gottenCat){
                            $clients_name = $gottenCat['clients_name'];
                        ?>
                        
                        <option value="<?php echo $clients_name?>"><?php echo $clients_name?></option>
                        
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
            
            <div class="form-group">
                <label>Key Person's Name/Title</label>
                <div class="form-control">
                    <input type="text" name="key_person" value="<?php echo $key_person; ?>">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Key Person's Tel</label>
                <div class="form-control">
                    <input type="number" name="key_persons_tel" value="<?php echo $key_persons_tel; ?>">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Key Person's Email</label>
                <div class="form-control">
                    <input type="email" name="key_persons_email" value="<?php echo $key_persons_email; ?>">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            
            <div class="form-group fg-textarea">
                <label>Title</label>
                <div class="form-control">
                    <input type="text" name="title" value="<?php echo $title; ?>">
                    <span class="fas fa-map"></span>
                </div>
            </div>
            
            <div class="form-group fg-textarea">
                <label>Additional Information (Optional) <span class="asterisk" id="words">500 Words Left</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="info" value="<?php echo $info; ?>" onkeyup="CountWords(this)" id="txtBody"></textarea>
                </div>
            </div>
            
        </div>
        
        
        <div class="form-wrapper no-border">

            <div class="form-wrapper-flex">

                <div class="form-group">
                    <div class="form-control">
                        <button name="edit_keyperson">Edit</button>
                    </div>
                </div>


            </div>

        </div>
        

    </div>

</form>

</div>



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
    
    


<!--
<form method="post" action="" id="log-box">

    <div class="form-wrapper">

        <div class="form-title">Create New Keyperson's Log</div>

        <div class="form-wrapper-flex">
            
            <div class="form-group fg-textarea">
                <label>Log (Optional) <span class="asterisk" id="words">500 Words</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="log" value=""></textarea>
                    <input type="hidden" name="clients_id" value="<?php //echo $clients_id ?>"/>
                    <input type="hidden" name="key_person" value="<?php //echo $key_person ?>"/>
                    <input type="hidden" name="clients_hq_location" value="<?php //echo $clients_hq_location ?>"/>
                    <input type="hidden" name="clients_category" value="<?php //echo $clients_category ?>"/>
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