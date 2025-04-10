<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add New Keyperson    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to add a new key/Contact Person. 
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

if(isset($_SESSION['fileSizeErr'])){
    echo $_SESSION['fileSizeErr'];
    unset($_SESSION['fileSizeErr']);
}    
    
if(isset($_SESSION['invalidErr'])){
echo $_SESSION['invalidErr'];
unset($_SESSION['invalidErr']);
}    
    
?>
    
    


<form method="post" action="">

    <!-- Project Information -->

    <div class="form-wrapper">

        <div class="form-title">Keyperson Form</div>
        <a class="form-title" href="./?page=add_client">+ Add Clients</a>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Select Client <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_name" required>
                        <option value=""> -- Select Client -- </option>
                        
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
					<a class="form-title new-fm" href="./?page=add_client">&larr; (+) Add client</a>
                </div>
            </div>
            
            <div class="form-group">
                <label>Key Person's Name/Title</label>
                <div class="form-control">
                    <input type="text" name="key_person" placeholder="Key Person">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Key Person's Tel</label>
                <div class="form-control">
                    <input type="number" name="key_persons_tel" placeholder="Key Person's Tel">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Key Person's Email</label>
                <div class="form-control">
                    <input type="email" name="key_persons_email" placeholder="Key Person's Email">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            
            <div class="form-group fg-textarea">
                <label>Title</label>
                <div class="form-control">
                    <input type="text" name="title" placeholder="Title">
                    <span class="fas fa-map"></span>
                </div>
            </div>
            
            <div class="form-group fg-textarea">
                <label>Additional Information (Optional) <span class="asterisk" id="words">500 Words Left</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="info" placeholder="Info" onkeyup="CountWords(this)" id="txtBody"></textarea>
                </div>
            </div>
            
        </div>

    </div>

    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="add_keyperson">Add</button>
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