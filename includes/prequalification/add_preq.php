<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add New Prequalification    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to add a new clients' prequalification <br> 
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
?>
    
    


<form method="post" action="">

    <!-- Project Information -->

    <div class="form-wrapper">

        <div class="form-title">Company's Information</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Company's Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="clients_name" required placeholder="Company Name">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>

			
			<div class="form-group">
                <label>Company's Address</label>
                <div class="form-control">
                    <input type="text" name="clients_address" placeholder="Company Address">
                    <span class="fas fa-location-arrow"></span>
                </div>
            </div>
            
			
			<div class="form-group">
                <label>Company's Email</label>
                <div class="form-control">
                    <input type="email" name="clients_email" placeholder="Company Email">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
			
			
			<div class="form-group">
                <label>Company's Phone Number</label>
                <div class="form-control">
                    <input type="tel" name="clients_phone" placeholder="Company's Phone Number">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
			
			
			<div class="form-group">
                <label>Company's Website <span class="asterisk">e.g (https://lem.com)</span></label>
                <div class="form-control">
                    <input type="url" name="clients_website" placeholder="Company's Website">
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
                    <input type="text" name="key_person" placeholder="Client Rep's Name">
                    <span class="fas fa-user"></span>
                </div>
            </div>

            
			<div class="form-group">
                <label>Client Rep's Tel</label>
                <div class="form-control">
                    <input type="tel" name="key_persons_tel" placeholder="Client Rep's Tel">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
			
			
			<div class="form-group">
                <label>Client Rep's Designation</label>
                <div class="form-control">
                    <input type="text" name="title" placeholder="Client Rep's Designation">
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
                    <textarea maxlength="500" name="business_info" placeholder="Client's Business Information" onkeyup="CountWords(this)" id="txtBody" required></textarea>
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
                    <input type="text" name="prospective_project" required placeholder="Prospective Project">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>

            
			<div class="form-group">
                <label>Project Budget</label>
                <div class="form-control">
                    <input type="text" name="budget" placeholder="Project Budget">
                    <span class="fas fa-users"></span>
                </div>
            </div>
			
			
			<div class="form-wrapper-flex">

            <div class="form-group fg-textarea">
                <label>Services Required from Lambert <span class="asterisk">Required</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="services" placeholder="Services Required from Lambert" onkeyup="CountWords(this)" id="txtBody" required></textarea>
                </div>
            </div>

        	</div>
			
			
			
			<div class="form-wrapper-flex">

            <div class="form-group fg-textarea">
                <label>Remarks / Next Steps <span class="asterisk">Required</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="remarks" placeholder="Remark / Next Steps" onkeyup="CountWords(this)" id="txtBody" required></textarea>
                </div>
            </div>

        	</div>
			

        </div>


    </div>
	


    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="submit_prequalification">Submit</button>
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

</script>
