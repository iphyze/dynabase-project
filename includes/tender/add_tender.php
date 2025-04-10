<?php

if($_SESSION['integrity'] == "Admin" || $_SESSION['integrity'] == "Others"){

?>


<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add New Tender    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to add a new tender. <br> 
    </div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=tender_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<div class="notification">
Please note that the asterisked <span class="asterisk">(***)</span> forms are required!
</div>


<div class="form-container tender-form-container">



<?php
    if(!empty($_SESSION['message'])){
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }
?>
    
    


<form method="post" action="" id="tenderForm">
    
    
<div class="tender-form-wrapper">
    
<div class="tender-form-header">Project Information</div>

<div class="tender-form-group tender-fg-full">
<label class="tender-form-label">Project Title <span class="asterisk">***</span></label>
<input type="text" name="project_title" id="project_title" required placeholder="Project Title" class="tender-input">
<span class="fas fa-tasks tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter a title</span></span>
</div>
    
<div class="tender-fg-container">    
<div class="tender-fg-wrapper">
    <div class="tender-form-group">
        <label class="tender-form-label">Project Client <span class="asterisk">***</span></label>
        <select name="project_client[]" class="tender-input clients-select" aria-label="Select Project's Client" required id="clients">
            <option value="" selected>Select Client</option>
        </select>
        <span class="fas fa-users tender-ficon"></span>
        <input type="hidden" name="clients_id[]" class="clients-id">
        <input type="hidden" name="clients_name[]" class="clients-name">
        <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a client</span></span>
        <a class="tender-form-title" href="./?page=add_client">+ Add new client</a>
    </div>

    <div class="tender-form-group">
        <label class="tender-form-label">Select Keyperson <span class="asterisk">***</span></label>
        <select name="key_person[]" class="tender-input keypersons-select" aria-label="Select Keypersons" required id="keypersons">
            <option value="" selected>Select Keyperson</option>
        </select>
        <span class="fas fa-city tender-ficon"></span>
        <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a keyperson</span></span>
        <a class="tender-form-title" href="./?page=add_keyperson">+ Add keyperson</a>
    </div>

    <a class="removeBtn" disabled>Remove</a>
</div>
</div>
        
    
<div class="addProjectBox">    
<a class="addProject">Add New</a>
</div>
    
    
 

<div class="tender-form-group">
<label class="tender-form-label">End User / Owner</label>
<select name="end_user" id="end_user" class="tender-input" aria-label="Select End User">
    <option value="" selected>Select End User / Owner</option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>        

    
    
<div class="tender-form-group other_end_user_box">
<label class="tender-form-label">Type End User</label>
<input type="text" name="other_end_user" id="other_end_user" placeholder="Other End User" class="tender-input">
<span class="fas fa-users tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please end user's name</span></span>
</div>
    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Project Division <span class="asterisk">***</span></label>
<select name="division" id="division" class="tender-input" aria-label="Select Division" required>
    <option value="" selected>Select Division</option>
    <option value="Power">Power</option>
    <option value="Data Centre">Data Centre</option>
    <option value="Building & Factories">Building & Factories</option>
    <option value="Oil & Gas">Oil & Gas</option>
    <option value="Facilities & Maintenance">Facilities & Maintenance</option>
</select>
<span class="fas fa-list-alt tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span><span class="form-error-text">Please select a division</span></span>
</div>  
    
    

<div class="tender-form-header">Managers</div>
    

<div class="tender-form-group">
<label class="tender-form-label">Project Manager (Consultants)</label>
<select name="project_manager" id="project_manager" class="tender-input" aria-label="Select Project Manager">
    <option value="" selected>Select Project Manager (Consultants)</option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>
    
    
<div class="tender-form-group other_project_manager">
<label class="tender-form-label">Enter Other Project Manager</label>
<input type="text" name="other_project_manager" id="other_project_manager" placeholder="Other Project Manager" class="tender-input">
<span class="fas fa-user tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Enter Project Manager's Name</span></span>
</div>    
    
    
<div class="tender-form-group">
<label class="tender-form-label">QS Manager (Consultants)</label>
<select name="qs_manager" id="qs_manager" class="tender-input" aria-label="Select QS Manager">
    <option value="" selected>Select QS Manager</option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>    
    
    
<div class="tender-form-group other_qs_manager_box">
<label class="tender-form-label">Enter Other QS Manager</label>
<input type="text" name="other_qs_manager" id="other_qs_manager" placeholder="Other QS Manager" class="tender-input">
<span class="fas fa-user tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter the QS Manager's Name</span></span>
</div>    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Mep Consultants</label>
<select name="mep_consultant" id="mep_consultant" class="tender-input" aria-label="Select Mep Consultants">
    <option value="" selected>Select Mep Consultants</option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>
    
    
<div class="tender-form-group other_mep_consultant_box">
    <label class="tender-form-label">Enter Other Mep Consultant</label>
    <input type="text" name="other_mep_consultant" id="other_mep_consultant" placeholder="Other Mep Consultant" class="tender-input">
    <span class="fas fa-user tender-ficon"></span>
    <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter the Mep Consultant's Name</span></span>
</div>    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Architects</label>
<select name="architects" id="architects" class="tender-input" aria-label="Select Architects">
    <option value="" selected>Select Architects</option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>
    

<div class="tender-form-group other_architects_box">
    <label class="tender-form-label">Enter Other Architect</label>
    <input type="text" name="other_architects" id="other_architects" placeholder="Other Architect" class="tender-input">
    <span class="fas fa-user tender-ficon"></span>
    <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter the Architect's Name</span></span>
</div>    
    
    
<div class="tender-form-header">Period Covered - Months covered, RFIs' due date & tender due date</div>
    
    
<div class="tender-form-group">
<label class="tender-form-label">Tender Received Date</label>
<input type="date" name="tender_received_date" id="tender_received_date" placeholder="Tender Received Date" class="tender-input">
<span class="fas fa-calendar tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter a title</span></span>
</div>         
    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Tender Due Date</label>
<input type="date" name="tender_due" id="tender_due" placeholder="Tender Due Date" class="tender-input">
<span class="fas fa-calendar-alt tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter a title</span></span>
</div>    
    
    
<div class="tender-form-header">Project Country, City & Importance</div>    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Project Country <span class="asterisk">***</span></label>
<select name="project_country" id="country_type" class="tender-input project_country" aria-label="Select Project Country" required>
    <option value="" selected>Select Project Country</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Ghana">Ghana</option>
    <option value="Ivory Coast">Ivory Coast</option>
</select>
<span class="fas fa-flag tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span><span class="form-error-text">Please Select a Country</span></span>
</div>    
    

    
<div class="tender-form-group">
<label class="tender-form-label">Project City <span class="asterisk">***</span></label>
<select name="project_city" id="size" class="tender-input project_city" aria-label="Select Project City" required>
    <option value="" selected>Select Project City</option>
</select>
<span class="fas fa-city tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span><span class="form-error-text">Please Select a Project City</span></span>
</div>    
      
    
    
<div class="tender-form-header">Tender Documents Received</div>
<div class="tender-form-notice">Click on any of the boxes below to select your preferred options, you can select more than one option.</div>    


<div class="doc-fg-container">    
<div class="doc-fg-wrapper">
    <div class="tender-form-group tender-fg-full">
        <label class="tender-form-label">Enter Document Name</label>
        <input type="text" name="tender_document[]" id="tender_document" placeholder="Enter Tender Document" class="tender-input">
        <span class="fas fa-file tender-ficon"></span>
    </div>
    <a class="removeDocumentBtn" disabled>Remove Document</a>
</div>
</div> 
    

<div class="addProjectBox">    
<a class="addDocument">Add New Document</a>
</div>    
    
    
 
    
<div class="tender-form-header">Technical Documents Received</div>
<div class="tender-form-notice">Click on any of the boxes below to select your preferred options, you can select more than one option.</div>    


<div class="tech-doc-fg-container">    
<div class="tech-doc-fg-wrapper">
    <div class="tender-form-group tender-fg-full">
        <label class="tender-form-label">Enter Technical Document</label>
        <input type="text" name="technical_document[]" id="technical_document" placeholder="Enter Technical Document" class="tender-input">
        <span class="fas fa-file tender-ficon"></span>
    </div>
    <a class="removeTechDocumentBtn" disabled>Remove Document</a>
</div>
</div> 
    

<div class="addProjectBox">    
<a class="addTechDocument">Add New Document</a>
</div>    
    
    
    
<div class="tender-form-group tender-fg-full">    
<button type="button" name="submit" id="submitBtn">Submit</button>    
</div>    
    
    
</div>    
    
    
    
</form>

</div>


<script>
$(document).ready(function() {
    let other_end_user = $('#other_end_user');
    let other_end_user_box = $('.other_end_user_box');

    $('#end_user').on('change', function() {
        let end_user = $(this).val();

        if (end_user === "Other End User / Owner") {
            other_end_user_box.show();
            other_end_user.attr('required', true);
        } else {
            other_end_user_box.hide();
            other_end_user.attr('required', false);
        }    
    });
    
    
    
    let other_project_manager_box = $('.other_project_manager');
    let other_project_manager_input = $('#other_project_manager');
    
    other_project_manager_box.hide(); // Hide initially

    $('#project_manager').on('change', function() {
        let project_manager = $(this).val();
        
        if (project_manager === "Other Project Manager") {
            other_project_manager_box.show();
            other_project_manager_input.attr('required', true);
        } else {
            other_project_manager_box.hide();
            other_project_manager_input.attr('required', false);
        }
    });    
    
    
    
    let other_qs_manager = $('#other_qs_manager');
    let other_qs_manager_box = $('.other_qs_manager_box');
    
    other_qs_manager_box.hide(); // Hide initially

    $('#qs_manager').on('change', function() {
        let qs_manager = $(this).val();
        
        if (qs_manager === "Other Qs Manager") {
            other_qs_manager_box.show();
            other_qs_manager.attr('required', true);
        } else {
            other_qs_manager_box.hide();
            other_qs_manager.attr('required', false);
        }
    });
    
    
    let other_mep_consultant = $('#other_mep_consultant');
    let other_mep_consultant_box = $('.other_mep_consultant_box');
    
    other_mep_consultant_box.hide(); // Hide initially

    $('#mep_consultant').on('change', function() {
        let mep_consultant = $(this).val();
        
        if (mep_consultant === "Other Mep Consultant") {
            other_mep_consultant_box.show();
            other_mep_consultant.attr('required', true);
        } else {
            other_mep_consultant_box.hide();
            other_mep_consultant.attr('required', false);
        }
    });
    
    
    
    let other_architects = $('#other_architects');
    let other_architects_box = $('.other_architects_box');
    
    other_architects_box.hide(); // Hide initially

    $('#architects').on('change', function() {
        let architects = $(this).val();
        
        if (architects === "Other Architects") {
            other_architects_box.show();
            other_architects.attr('required', true);
        } else {
            other_architects_box.hide();
            other_architects.attr('required', false);
        }
    });
    
    
});
     
</script>


<?php
}else{
?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    404 Access Denied!    
    </div>
    
    <a href="./" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="./" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<?php    
}
?>
