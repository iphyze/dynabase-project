<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add New Contact Person    
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

        <div class="form-title">Contact Person Form</div>
        <a class="form-title new-form-title" href="./?page=add_client"> &larr; Back to (+) Add New Company</a>

        <div class="notification">
        <span class="asterisk">Note: If the company whose keyperson you want to add doesn't exist, click the Add Company's Information button to add the new company.</span>
        </div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Select Company <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_name" required>
                        <option value=""> -- Select Company -- </option>
                        
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

                    <a class="form-title new-fm" href="./?page=add_client">+ Add new company if it doesn't exist</a>
                </div>
            </div>
            
            <div class="form-group">
                <label>Contact Person's Full Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="key_person" placeholder="Contact Person's Full Name" required>
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Contact Person's Tel</label>
                <div class="form-control">
                    <input type="number" name="key_persons_tel" placeholder="Contact Person's Tel">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Contact Person's Email <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="email" name="key_persons_email" placeholder="Contact Person's Email" required>
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            

            <div class="form-group">
                <label>Contact Person's Address <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="key_persons_address" placeholder="Street, Nearest B/stop..." required>
                    <span class="fas fa-map"></span>
                </div>
            </div>


			
			<div class="form-group">
                <label>Contact's Country Location <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="key_persons_country" id="type" required>
                        <option value=""> -- Select Country -- </option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Ivory Coast">Ivory Coast</option>
                    </select>
                    <span class="fas fa-flag select-icon"></span>
                </div>
            </div>

			
            <div class="form-group">
                <label>Contact's State Location <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="key_persons_city" id="size" required>
                        <option value=""> -- Select State -- </option>
                    </select>
                    <span class="fas fa-city select-icon"></span>
                </div>
            </div>
			
			
            <div class="form-group">
                <label>Contact Person's Designation</label>
                <div class="form-control">
                    <input type="text" name="title" placeholder="Contact Person's Designation">
                    <span class="fas fa-map"></span>
                </div>
            </div>
            

            <div class="form-group">
                <label>Gifts for 2024? <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="gift_status" required id="gift-status">
                        <option value=""> -- Select Gift Option -- </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select>
                    <span class="fas fa-list-alt select-icon"></span>
                </div>
            </div>


            <div class="form-group" id="gift-container" style="display:none;">
                <label>Gift Type <span class="asterisk">***</span></label>
                    <div class="form-control">
                        <select name="gift_type" id="gift-type">
                            <option value=""> -- Select Gift Type -- </option>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <span class="fas fa-list-alt select-icon"></span>
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



$("#gift-status").change(function(){


let gift_status = $(this).val();    

if(gift_status != "" && gift_status == "Yes"){

$('#gift-container').slideDown(200);
$('#gift-type').attr('required', true);


}else{

$('#gift-container').slideUp(200);
$('#gift-type').attr('required', false);


}


});

	
	
	

$("#type").change(function () {
    var val = $(this).val();
        if(val == "Nigeria") {
            $("#size").html("<option value=''> -- Select State -- </option><?php getNgncities(); ?>");
        }else if(val == "Ghana") {
            $("#size").html("<option value=''> -- Select State -- </option><?php getGhacities(); ?>");
        }else if(val == "Ivory Coast") {
            $("#size").html("<option value=''> -- Select State -- </option><?php getCivcities(); ?>");
        }else{
            $("#size").html("<option value=''> -- Select State -- </option>");
        }
});	
	
	

</script>