<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add New Company's Information    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to add a new company's information. 
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

        <div class="form-title">Company's Form</div>
        <a class="form-title" href="./?page=add_keyperson">&larr; Back to (+) Add Contact</a>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Company's Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="clients_name" required placeholder="Company's Name">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
    
            <input type="hidden" name="clients_email" placeholder="Company's Email">        
    

            <div class="form-group">
                <label>Company's Website Url [e.g. https://lambertelectromec.com]</label>
                <div class="form-control">
                    <input type="url" name="clients_website" placeholder="Company's Website">
                    <span class="fas fa-link"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Company's Address <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="clients_address" placeholder="Street, Nearest B/stop...">
                    <span class="fas fa-map"></span>
                </div>
            </div>
            
			
			
			<div class="form-group">
                <label>Company's Country Location <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_country" id="type" required>
                        <option value=""> -- Select Country -- </option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Ivory Coast">Ivory Coast</option>
                    </select>
                    <span class="fas fa-flag select-icon"></span>
                </div>
            </div>

			
            <div class="form-group">
                <label>Company's State Location <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_city" id="size" required>
                        <option value=""> -- Select State -- </option>
                    </select>
                    <span class="fas fa-city select-icon"></span>
                </div>
            </div>
			
			
<!--
            <div class="form-group">
                <label>Client's HQ Location</label>
                <div class="form-control">
                    <input type="text" name="clients_hq_location" placeholder="Client's HQ Location">
                    <span class="fas fa-map"></span>
                </div>
            </div>
-->
            
            <div class="form-group">
                <label>Company's Category <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_category" required>
                        <option value=""> -- Select Category -- </option>
                        <option value="MEP Consultant">MEP Consultant</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="Architects">Architects</option>
                        <option value="QS Manager">Quantity Surveyor</option>
                        <option value="General Contractor">General/Main Contractors</option>
                        <option value="End User / Owner">End User / Owner</option>
                        <option value="Other Consultants">Other Consultants</option>
                        <option value="Property Developer">Property Developer</option>
                        
						
						
                        <?php
                        
//                        $getCat = mysqli_query($db, "SELECT * FROM clients_category_table");
//                        $gottenCat = mysqli_fetch_assoc($getCat);
//                        $numCat = mysqli_num_rows($getCat);
//                        
//                        if($numCat > 0){
//                            foreach($getCat as $gottenCat){
//                            $category_name = $gottenCat['category_name'];
//                        ?>
//                        <!--
//                        <option value="<?php //echo $category_name?>"><?php //echo $category_name?></option>
//                        
//                        <?php
//                                
//                            }
//                        }else{
//                        ?>    
//                            <option value="" disabled>No results found!</option>
							-->
//                        <?php    
//                        }
                        
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
                    <button name="add_client">Add</button>
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