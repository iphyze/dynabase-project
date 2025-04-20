<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add new web of influence    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to add a new web of influence. 
    </div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
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

        <a class="form-title" href="./?page=woi_overview">&larr; Back</a>
<!--        <div class="form-title">Web of Influence Form</div>-->

        
        <div class="form-title">Client Information</div>
        
        
        <div class="form-wrapper-flex">
            
            
            <div class="form-group">
                <label>Clients <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="clients_name" required>
                        <option value=""> -- Select Clients -- </option>
                        
                        <?php
                        
                        $getCat = mysqli_query($db, "SELECT * FROM clients_table");
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
                <label>Project Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_name" required>
                        <option value=""> -- Select Project Name -- </option>
                        
                        <?php
                        
                        $getCat = mysqli_query($db, "SELECT * FROM project_info_table ORDER By project_title ASC");
                        $gottenCat = mysqli_fetch_assoc($getCat);
                        $numCat = mysqli_num_rows($getCat);
                        
                        if($numCat > 0){
                            foreach($getCat as $gottenCat){
                            $project_name = $gottenCat['project_title'];
                        ?>
                        
                        <option value="<?php echo $project_name?>"><?php echo $project_name?></option>
                        
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
            
    
            <input type="hidden" name="clients_email" placeholder="Client's Email">        
    

            <div class="form-group">
                <label>DLP Period</label>
                <div class="form-control">
                    <input type="text" name="dlp_period" placeholder="DLP Period">
                    <span class="fas fa-clock"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Project Director</label>
                <div class="form-control">
                    <input type="text" name="project_director" placeholder="Project Director">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Country Manager</label>
                <div class="form-control">
                    <input type="text" name="country_manager" placeholder="Country Manager">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Phone Number</label>
                <div class="form-control">
                    <input type="tel" name="phone" placeholder="Phone Number">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>E-Mail</label>
                <div class="form-control">
                    <input type="email" name="email" placeholder="E-Mail">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            
        </div>
        
        
        <div class="form-title">Web of influence Members</div>
        
        
        <div class="form-wrapper-flex">
            
            
            <div class="form-group">
                <label>Authority <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="authority" required>
                        <option value="">Select Client's Authority</option>
                        <option value="Hire Us">Hire Us</option>
                        <option value="Fire Us">Fire Us</option>
                        <option value="Influence Decision">Influence Decision</option>
                    </select>
                    <span class="fas fa-list-alt select-icon"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Influence Level <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="influence_level" required>
                        <option value="">Select Influence Level</option>
                        <option value="Low">Low</option>
                        <option value="Med Low">Med Low</option>
                        <option value="Med">Med</option>
                        <option value="Med High">Med High</option>
                        <option value="High">High</option>
                    </select>
                    <span class="fas fa-list-alt select-icon"></span>
                </div>
            </div>
            
            
            <div class="form-group">
                <label>Would you recommend the company? <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="coy_recommendation" required>
                        <option value="">Would you recommend the company?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <span class="fas fa-list-alt select-icon"></span>
                </div>
            </div>
            
            
            <div class="form-group">
                <label>Personal Win <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="personal_win" required>
                        <option value="">Select Personal Win</option>
                        <option value="Low">Low</option>
                        <option value="Med Low">Med Low</option>
                        <option value="Med">Med</option>
                        <option value="Med High">Med High</option>
                        <option value="High">High</option>
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
</script>