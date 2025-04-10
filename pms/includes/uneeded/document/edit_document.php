<?php
if(isset($_GET['id']) && $_GET['id'] != ""){
    
$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM document_table WHERE id = '$id'");
$selected = mysqli_fetch_assoc($select);

$document_title = $selected['document_title'];    
$document_category = $selected['document_category'];    
$presentation_code = $selected['presentation_code'];    
$document_type = $selected['document_type'];    
$updated_content = $selected['updated_content'];    
$document = $selected['document'];
$doc_val = "assets/css/files/" . $document;

?>

<div class="home-heading">

<div class="home-heading-col-1">

<div class="user-welcome wow fadeInUp">
Edit Document - <?php echo $document_title ?>    
</div>
<div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
Fill the form below to edit document. <br> 
</div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=document_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
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
    
    


<form method="post" action="" enctype="multipart/form-data">

    <!-- Project Information -->

    <div class="form-wrapper">

        <div class="form-title">Document Form</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Document Title <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="document_title" required value="<?php echo $document_title ?>">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Document Category <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="document_category" required>
                        <option value="<?php echo $document_category ?>"> -- <?php echo $document_category ?> -- </option>
                        
                        <?php
                        
                        $getCat = mysqli_query($db, "SELECT * FROM tender_document_sections");
                        $gottenCat = mysqli_fetch_assoc($getCat);
                        $numCat = mysqli_num_rows($getCat);
                        
                        if($numCat > 0){
                            foreach($getCat as $gottenCat){
                            $section_title = $gottenCat['section_title'];
                        ?>
                        
                        <option value="<?php echo $section_title?>"><?php echo $section_title?></option>
                        
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
                <label>Presentation Code <span class="asterisk"> (Only required for profiles & presentations)</span></label>
                <div class="form-control">
                    <input type="text" name="presentation_code" value="<?php echo $presentation_code ?>">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>
            
            
        </div>

    </div>

    
    <div class="form-wrapper">

        <div class="form-title">Document Type</div>
        <div class="notification">
            Click on any of the boxes below to select your preferred option.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-1" value="Profile" name="document_type" class="radio-btn" <?php if($document_type == "Profile"){echo "checked";}?>>
                    <label for="radio-1" class="choice-label">Profile</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-2" value="Presentation" name="document_type" class="radio-btn" <?php if($document_type == "Presentation"){echo "checked";}?>>
                    <label for="radio-2" class="choice-label">Presentation</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-3" value="Tender" name="document_type" class="radio-btn" <?php if($document_type == "Tender"){echo "checked";}?>>
                    <label for="radio-3" class="choice-label">Tender</label>
                </div>
            </div>

        </div>


    </div>
    

    <!-- Updated Document -->

    <div class="form-wrapper">

        <div class="form-title">Document Update</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Last Updated Content</label>
                <div class="form-control">
                    <input type="text" name="updated_content" value="<?php echo $updated_content?>">
                    <span class="fas fa-pen"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Upload Document <span class="asterisk">(pdf, zip, word & rar only)</span></label>
                <div class="form-control">
                    <input type="file" name="document" onchange="loadfile(event)" id="file" accept=".rar, application/msword, application/pdf, application/x-zip-compressed" value="<?php echo $doc_val?>">
                    <input type="hidden" name="old_document" value="<?php echo $document?>">
                    <span class="file-icon" id="media_file"><?php echo $document?></span>
                </div>
            </div>
            
        </div>
        

    </div>

    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="edit_upload">Update</button>
                </div>
            </div>


        </div>


    </div>


</form>

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