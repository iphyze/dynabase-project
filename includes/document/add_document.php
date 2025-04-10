<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add New Document    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to add a new document. <br> 
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
                    <input type="text" name="document_title" required placeholder="Document Title">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Document Category <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="document_category" required>
                        <option value=""> -- Select Category -- </option>
                        
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
                    <input type="text" name="presentation_code" placeholder="Presentation Code">
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
                    <input type="radio" id="radio-1" value="Profile" name="document_type" checked class="radio-btn">
                    <label for="radio-1" class="choice-label">Profile</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-2" value="Presentation" name="document_type" class="radio-btn">
                    <label for="radio-2" class="choice-label">Presentation</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-3" value="Tender" name="document_type" class="radio-btn">
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
                    <input type="text" name="updated_content" placeholder="Last Updated Content (If available)">
                    <span class="fas fa-pen"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Upload Document <span class="asterisk">(pdf, zip, word & rar only)</span></label>
                <div class="form-control">
                    <input type="file" name="document" required onchange="loadfile(event)" id="file" accept=".rar, application/msword, application/pdf, application/x-zip-compressed">
                    <span class="file-icon" id="media_file"><i class="fas fa-upload file-icon-icon"></i> Upload File</span>
                </div>
            </div>
            
        </div>
        

    </div>

    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="upload">Save</button>
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