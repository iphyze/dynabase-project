<?php
if(isset($_GET['code']) && $_GET['code'] != ""){
    
$code = $_GET['code'];
$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE code = '$code'");
$selected = mysqli_fetch_assoc($select);

$project_title = mysqli_real_escape_string($db, $selected['project_title']);
$project_client = mysqli_real_escape_string($db, $selected['project_client']);
    
    
$getClient = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_name = '$project_client'");
$getClientNum = mysqli_num_rows($getClient);
$getClientData = mysqli_fetch_assoc($getClient);
    
if($getClientNum > 0){

$client_id = $getClientData['id'];
        
}    

$end_user = $selected['end_user'];    
$project_manager = $selected['project_manager'];    
$qs_manager = $selected['qs_manager'];
$mep_consultants = $selected['mep_consultants'];
$architect = $selected['architect'];    
    
    
$id = $selected['id'];
$keyperson = $selected['keyperson'];
$division = $selected['division'];
//$project_owner = $selected['project_owner'];
$other_end_user = "";
if($selected['end_user'] == "Other End User / Owner"){
$other_end_user = $end_user;
}else{
$end_user = $selected['end_user'];    
}    
    

    
    
$other_project_manager = "";
if($selected['project_manager'] == "Other Project Manager"){
$other_project_manager = $project_manager;
}else{
$project_manager = $selected['project_manager'];    
}
    
    
$other_qs_manager = "";
if($selected['qs_manager'] == "Other Qs Manager"){
$other_qs_manager = $qs_manager;
}else{
$qs_manager = $selected['qs_manager'];    
}
    
    
$other_mep_consultants = "";
if($selected['mep_consultants'] == "Other Mep Consultant"){
$other_mep_consultants = $mep_consultants;
}else{
$mep_consultants = $selected['mep_consultants'];    
}
    
    
$other_architect = "";
if($selected['architect'] == "Other Architects"){
$other_architect = $architect;
}else{
$architect = $selected['architect'];    
}    
    
    
    
$project_duration = $selected['project_duration'];
$rfi_due_date = $selected['rfi_due'];
$rfi_due = date('jS M, Y', strtotime($rfi_due_date));
$tender_r_date = $selected['tender_received_date'];
$tender_received_date = date('jS M, Y', strtotime($tender_r_date));
$tender_due_date = $selected['tender_due'];
$tender_due = date('jS M, Y', strtotime($tender_due_date));
$tender_submission_date = $selected['tender_submission_date'];
$tender_amount = $selected['tender_amount'];
$currency = $selected['currency'];
$project_country = $selected['project_country'];
$project_city = $selected['project_city'];
$project_importance = $selected['project_importance'];
$contract_type = $selected['contract_type'];
$prelim_pricing = $selected['prelim_pricing'];
$pricing_strategy = $selected['pricing_strategy'];
$date_extension = $selected['date_extension'];
$rate_used = $selected['rate_used'];
$procurement_type = $selected['procurement_type'];
$tender_code = $selected['tender_code'];
$boq = $selected['boq'];
$specification = $selected['specification'];
$drawings = $selected['drawings'];    
$tender_form = $selected['tender_form'];
$tender_instruction = $selected['tender_instruction'];   
$basic_rate = $selected['basic_rate'];
$labour_rate = $selected['labour_rate'];
$other_tender_doc = $selected['other_tender_doc'];
$technical_drawings = $selected['technical_drawings'];
$slds = $selected['slds'];
$mos = $selected['mos'];
$scope_understanding = $selected['scope_understanding'];
$pow = $selected['pow'];
$other_technical_doc = $selected['other_technical_doc'];
$code = $selected['code'];
$tender_code = $selected['tender_code'];        
$project_status = $selected['project_status'];        
$progress = $selected['progress'];        
$tender_awarded_date = $selected['tender_awarded_date'];        
$vendor_information = $selected['vendor_information'];        
$additional_information = $selected['additional_information'];        
$document_link = $selected['document_link'];        
$city_code = $selected['city_code'];        

?>


<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Edit Tender - <?php echo $project_title; ?>    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to update tender details 
    </div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=tender_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<div class="notification">
Please note that the asterisked <span class="asterisk">(***)</span> forms are required!
</div>


<div class="form-container">


<?php
    if(!empty($_SESSION['message'])){
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }
?>
    
    


<form method="post" action="" id="editTenderForm">
    
    

<div class="tender-form-wrapper">
    
<div class="tender-form-header">Project Information</div>

<div class="tender-form-group tender-fg-full">
<label class="tender-form-label">Project Title <span class="asterisk">***</span></label>
<input type="text" name="project_title" id="project_title" required value="<?php echo $project_title; ?>" class="tender-input">
<input type="hidden" name="code" value="<?php echo $code; ?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<span class="fas fa-tasks tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter a title</span></span>
</div>
    
<div class="tender-fg-container">

<?php
    
$getClients = mysqli_query($db, "SELECT * FROM clients_keypersons_table WHERE project_id = '$code'");    
$gottenClients = mysqli_fetch_assoc($getClients);
$clientNum = mysqli_num_rows($getClients);
    
if($clientNum > 0){
foreach($getClients as $gottenClients){
$clients_tab_id = $gottenClients['id'];
$clients_name = $gottenClients['clients_name'];
$clients_id = $gottenClients['clients_id'];
$keyperson = $gottenClients['keyperson'];
    
?>    
    
<div class="tender-fg-wrapper">
    <input type="hidden" name="clients_tab_id[]" class="clients_tab_id" value="<?php echo $clients_tab_id ?>">
    <div class="tender-form-group">
        <label class="tender-form-label">Project Client <span class="asterisk">***</span></label>
        <select name="project_client[]" class="tender-input clients-select-pred" aria-label="Select Project's Client" required id="clients-<?php echo $clients_tab_id ?>">
            <option value="<?php echo $clients_id ?>" selected><?php echo $clients_name ?></option>
        </select>
        <span class="fas fa-users tender-ficon"></span>
        <input type="hidden" name="clients_id[]" class="clients-id-pred" value="<?php echo $clients_id ?>">
        <input type="hidden" name="clients_name[]" class="clients-name-pred" value="<?php echo $clients_name ?>">
        <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a client</span></span>
        <a class="tender-form-title" href="./?page=add_client" target="_blank">+ Add new client</a>
    </div>

    <div class="tender-form-group">
        <label class="tender-form-label">Select Keyperson <span class="asterisk">***</span></label>
        <select name="key_person[]" class="tender-input keypersons-select-pred" aria-label="Select Keypersons" required id="keypersons-<?php echo $clients_tab_id ?>">
            <option value="<?php echo $keyperson ?>" selected><?php echo $keyperson ?></option>
        </select>
        <span class="fas fa-city tender-ficon"></span>
        <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a keyperson</span></span>
        <a class="tender-form-title" href="./?page=add_keyperson" target="_blank">+ Add keyperson</a>
    </div>

    <a class="removeDeleteBtn" disabled onclick="deleteThisRow(this)">Delete Row</a>
</div>    
    
<?php    
}
    
}elseif($clientNum == 0){    
    
?>    
  

<div class="tender-fg-wrapper">
    <div class="tender-form-group">
        <label class="tender-form-label">Project Client <span class="asterisk">***</span></label>
        <select name="project_client[]" class="tender-input clients-select" aria-label="Select Project's Client" required id="clients">
            <option value="" selected>Select Option</option>
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
            <option value="" selected>Select Option</option>
        </select>
        <span class="fas fa-city tender-ficon"></span>
        <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a keyperson</span></span>
        <a class="tender-form-title" href="./?page=add_keyperson">+ Add keyperson</a>
    </div>

    <a class="removeBtn" disabled>Remove</a>
</div>
   
    
    
<?php    
    
}
    
?>
</div>
        
    
<div class="addProjectBox">    
<a class="addProject">Add New</a>
</div>
    
 

<div class="tender-form-group">
<label class="tender-form-label">End User / Owner</label>
<select name="end_user" id="end_user" class="tender-input" aria-label="Select End User">
    <option value="<?php echo $end_user ?>" selected><?php echo $end_user ?></option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div> 
    

    
<div class="tender-form-group other_end_user_box">
<label class="tender-form-label">Type End User</label>
<input type="text" name="other_end_user" id="other_end_user" required placeholder="Other End User" value="<?php echo $other_end_user ?>" class="tender-input">
<span class="fas fa-users tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please end user's name</span></span>
</div>
    
    
<div class="tender-form-group">
<label class="tender-form-label">Project Division</label>
<select name="division" id="division" class="tender-input" aria-label="Select Division" required>
    <option value="<?php echo $division ?>" selected><?php echo $division ?></option>
    <option value="Power">Power</option>
    <option value="Data Centre">Data Centre</option>
    <option value="Building & Factories">Building & Factories</option>
    <option value="Oil & Gas">Oil & Gas</option>
    <option value="Facilities & Maintenance">Facilities & Maintenance</option>
</select>
<span class="fas fa-list-alt tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a division</span></span>
</div>  
    
    

<div class="tender-form-header">Managers</div>
    

<div class="tender-form-group">
<label class="tender-form-label">Project Manager (Consultants)</label>
<select name="project_manager" id="project_manager" class="tender-input" aria-label="Select Project Manager">
    <option value="<?php echo $project_manager ?>" selected><?php echo $project_manager ?></option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>
    

<div class="tender-form-group other_project_manager">
<label class="tender-form-label">Enter Other Project Manager</label>
<input type="text" name="other_project_manager" id="other_project_manager" placeholder="Other Project Manager" value="<?php echo $other_project_manager ?>" class="tender-input">
<span class="fas fa-user tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Enter Project Manager's Name</span></span>
</div>     
    
    
    
<div class="tender-form-group">
<label class="tender-form-label">QS Manager (Consultants)</label>
<select name="qs_manager" id="qs_manager" class="tender-input" aria-label="Select QS Manager">
    <option value="<?php echo $qs_manager ?>" selected><?php echo $qs_manager ?></option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>    


<div class="tender-form-group other_qs_manager_box">
<label class="tender-form-label">Enter Other QS Manager</label>
<input type="text" name="other_qs_manager" id="other_qs_manager" placeholder="Other QS Manager" value="<?php echo $other_qs_manager ?>" class="tender-input">
<span class="fas fa-user tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter the QS Manager's Name</span></span>
</div>     
    
    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Mep Consultants</label>
<select name="mep_consultant" id="mep_consultant" class="tender-input" aria-label="Select Mep Consultants">
    <option value="<?php echo $mep_consultants ?>" selected><?php echo $mep_consultants ?></option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>
    
    
<div class="tender-form-group other_mep_consultant_box">
    <label class="tender-form-label">Enter Other Mep Consultant</label>
    <input type="text" name="other_mep_consultant" id="other_mep_consultant" placeholder="Other Mep Consultant" value="<?php echo $other_mep_consultants ?>" class="tender-input">
    <span class="fas fa-user tender-ficon"></span>
    <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter the Mep Consultant's Name</span></span>
</div>    
    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Architects</label>
<select name="architects" id="architects" class="tender-input" aria-label="Select Architects">
    <option value="<?php echo $architect ?>" selected><?php echo $architect ?></option>            
</select>
<span class="fas fa-users tender-ficon"></span>
</div>
    
    
<div class="tender-form-group other_architects_box">
    <label class="tender-form-label">Enter Other Architect</label>
    <input type="text" name="other_architects" id="other_architects" placeholder="Other Architect" value="<?php echo $other_architect ?>" class="tender-input">
    <span class="fas fa-user tender-ficon"></span>
    <span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please enter the Architect's Name</span></span>
</div>
    
    
    
<div class="tender-form-header">Period Covered - Months covered, RFIs' due date & tender due date</div>
    
    
    
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Project Duration</label>
<select name="project_duration" id="project_duration" class="tender-input select--select" aria-label="Select Project Duration">
    <option value="<?php echo $project_duration ?>" selected><?php echo ($project_duration == "") ? "Select Project Duration" : $project_duration; ?></option>
    <option value="1 month">1 month</option>

        <?php
            for ($x = 2; $x <= 48; $x++) {
              $months = $x;
        ?>
        <option value="<?php echo $months . ' months'?>"><?php echo $months ?> months</option>
        <?php
            }
        ?>
</select>
<span class="fas fa-calendar-alt tender-ficon"></span>
</div>   
    
    
<div class="tender-form-group">
<label class="tender-form-label">Tender Received Date</label>
<input type="date" name="tender_received_date" id="tender_received_date" value="<?php echo ($tender_r_date == "") ? "" : $tender_r_date; ?>" class="tender-input">
<span class="fas fa-calendar tender-ficon"></span>
</div>         
    
    

<div class="tender-form-group hide-approved">
<label class="tender-form-label">RFI's Due Date</label>
<input type="date" name="rfi_due" id="rfi_due" value="<?php echo ($rfi_due == "") ? "" : $rfi_due ?>" class="tender-input">
<span class="fas fa-calendar tender-ficon"></span>
</div>    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Tender Due Date</label>
<input type="date" name="tender_due" id="tender_due" value="<?php echo ($tender_due_date == "") ? "" : $tender_due_date; ?>" class="tender-input">
<span class="fas fa-calendar-alt tender-ficon"></span>
</div>    
    
    
<div class="tender-form-group hide-submitted">
<label class="tender-form-label">Tender Submission Date</label>
<input type="date" name="tender_submission_date" id="tender_submission_date" value="<?php echo ($tender_submission_date == "") ? "" : $tender_submission_date ?>" class="tender-input hidden-submit">
<span class="fas fa-calendar-alt tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Enter Tender Submission Date</span></span>
</div> 
    
    
    
<div class="tender-form-group hide-submitted">
<label class="tender-form-label">Tender Amount</label>
<input type="number" name="tender_amount" id="tender_amount" value="<?php echo ($tender_amount == "") ? "" : $tender_amount ?>" class="tender-input hidden-submit">
<span class="fas fa-money-bill tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Enter Tender Amount</span></span>
</div>        
    
    
    
<div class="tender-form-group hide-submitted">
<label class="tender-form-label">Tender Currency</label>
<select name="currency" id="currency" class="tender-input hidden-submit select--select" aria-label="Select Tender Currency">
    <option value="<?php echo $currency; ?>"><?php echo ($currency == "") ? "Select Currency" : $currency ?></option>
    <option value="NGN">Naira</option>
    <option value="USD">Dollars</option>
    <option value="GBP">Pounds</option>
    <option value="EUR">Euros</option>
    <option value="ZAR">Rands</option>
    <option value="GHC">Cedis</option>
    <option value="CFA">Cefas</option>
</select>
<span class="fas fa-money-bill tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Enter Tender Currency</span></span>
</div>
    
    
    
    
<div class="tender-form-header">Project Country, City & Importance</div>    
    
    
<div class="tender-form-group">
<label class="tender-form-label">Project Country <span class="asterisk">***</span></label>
<select name="project_country" id="country_type" class="tender-input project_country" aria-label="Select Project Country">
    <option value="<?php echo $project_country ?>" selected><?php echo ($project_country == "") ? "Select Currency" : $project_country ?></option>
    <option value="Nigeria">Nigeria</option>
    <option value="Ghana">Ghana</option>
    <option value="Ivory Coast">Ivory Coast</option>
</select>
<span class="fas fa-flag tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Project Country</span></span>
</div>    
    

    
<div class="tender-form-group">
<label class="tender-form-label">Project City <span class="asterisk">***</span></label>
<select name="project_city" id="size" class="tender-input project_city" aria-label="Select Project City" required>
    <option value="<?php echo $project_city ?>" selected><?php echo ($project_city == "") ? "Select Currency" : $project_city ?></option>
</select>
<span class="fas fa-city tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Enter Project City</span></span>
</div>    
    
    
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Project Importance <span class="asterisk">***</span></label>
<select name="project_importance" id="project_importance" class="tender-input select--select hidden-approved" aria-label="Select Project Importance" required>
    <option value="<?php echo $project_importance ?>" selected><?php echo ($project_importance == "") ? "Select Project Importance" : $project_importance ?></option>
    <option value="Very High">Very High</option>
    <option value="High">High</option>
    <option value="Medium">Medium</option>
    <option value="Low">Low</option>
    <option value="Very Low">Very Low</option>
</select>
<span class="fas fa-exclamation-triangle tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Project Importance</span></span>
</div>    


    
<div class="tender-form-header hide-approved">Contract type, Preliminary Pricing & Pricing Strategy</div>

    
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Contract Type</label>
<select name="contract_type" id="contract_type" class="tender-input select--select hidden-approved" aria-label="Select Contract Type">
    <option value="<?php echo $contract_type ?>" selected><?php echo ($contract_type == "") ? "Select Contract Type" : $contract_type ?></option>
    <option value="Lump Sum">Lump Sum</option>
    <option value="Remeasured">Remeasured</option>
    <option value="Design & Build">Design & Build</option>
    <option value="Preliminary Budgeting">Preliminary Budgeting</option>
    <option value="Deisgn Evaluation">Deisgn Evaluation</option>
</select>
<span class="fas fa-file-contract tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Contract Type</span></span>
</div>        
    
    
    
    
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Preliminary Pricing</label>
<select name="prelim_pricing" id="prelim_pricing" class="tender-input select--select hidden-approved" aria-label="Select Preliminary Pricing">
    <option value="<?php echo $prelim_pricing ?>" selected><?php echo ($prelim_pricing == "") ? "Select Preliminary Pricing" : $prelim_pricing ?></option>
    <option value="Standard (Combined)">Standard (Combined)</option>
    <option value="Per Package">Per Package</option>
</select>
<span class="fas fa-tag tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Preliminary Pricing</span></span>
</div>    
    
       
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Pricing Strategy</label>
<select name="pricing_strategy" id="pricing_strategy" class="tender-input select--select hidden-approved" aria-label="Select Pricing Strategy">
    <option value="<?php echo $pricing_strategy ?>" selected><?php echo ($pricing_strategy == "") ? "Select Pricing Strategy" : $pricing_strategy ?></option>
    <option value="As Per Specs">As Per Specs</option>
    <option value="Alternative On Brands are Acceptable">Alternative On Brands are Acceptable</option>
    <option value="Directly include VEs Related To Brands & Specifications & Clarify">Directly include VEs Related To Brands & Specifications & Clarify</option>
    <option value="Directly include VEs Related To Design/Sizing & Clarify">Directly include VEs Related To Design/Sizing & Clarify</option>
    <option value="Include VEs without Mentioning it in the Clarifications">Include VEs without Mentioning it in the Clarifications</option>
    <option value="As Per Specs: VEs/Alternative Brands to be submitted separately">As Per Specs: VEs/Alternative Brands to be submitted separately</option>
</select>
<span class="fas fa-tasks tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Pricing Strategy</span></span>
</div>       
    
    
  
    
<div class="tender-form-header hide-approved">Supplier/Vendor Information</div>
<div class="tender-form-notice hide-approved">Select your preferred option.</div>    
    
    
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Vendor Information</label>
<select name="vendor_information" id="vendor_information" class="tender-input select--select hidden-approved" aria-label="Select Vendor Information">
    <option value="<?php echo $vendor_information ?>" selected><?php echo ($vendor_information == "") ? "Select Vendor Information" : $vendor_information ?></option>
    <option value="Only use Project Name">Only use Project Name</option>
    <option value="Project Name & Tender Code">Project Name & Tender Code</option>
</select>
<span class="fas fa-tasks tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Vendor Information</span></span>
</div>  
    
    
    
    
    
    
<div class="tender-form-header hide-approved">Submission, Rate & Procurement Type</div>    
    
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Possibility of Date Extension?</label>
<select name="date_extension" id="date_extension" class="tender-input select--select hidden-approved" aria-label="Select Possibility of Date Extension?">
    <option value="<?php echo $date_extension ?>" selected><?php echo ($date_extension == "") ? "Select Possibility of Date Extension?" : $date_extension ?></option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
</select>
<span class="fas fa-paper-plane tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Extension Possibility Option</span></span>
</div>    
       
    
<div class="tender-form-group hide-approved">
<label class="tender-form-label">Naira Rate</label>
<select name="rate_used" id="rate_used" class="tender-input select--select hidden-approved" aria-label="Select Naira Rate">
    <option value="<?php echo $rate_used ?>" selected><?php echo ($rate_used == "") ? "Select Naira Rate" : $rate_used ?></option>
    <option value="Equipment/Imported Items">Equipment/Imported Items</option>
    <option value="First Fix">First Fix</option>
</select>
<span class="fas fa-percent tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Naira Rate</span></span>
</div>
    

<div class="tender-form-group hide-approved">
<label class="tender-form-label">Type of Procurement</label>
<select name="procurement_type" id="procurement_type" class="tender-input select--select hidden-approved" aria-label="Select Type of Procurement">
    <option value="<?php echo $procurement_type ?>" selected><?php echo ($procurement_type == "") ? "Select Type of Procurement" : $procurement_type ?></option>
    <option value="Standard (Sea Freight)">Standard (Sea Freight)</option>
    <option value="Fast Delivery (Local Market if possible + Air Freight)">Fast Delivery (Local Market if possible + Air Freight)</option>
</select>
<span class="fas fa-shopping-cart tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Procurement Type</span></span>
</div>       
    
    
    
    
<div class="tender-form-header hide-approved">Tender Documents Received</div>
<div class="tender-form-notice hide-approved">Click on any of the boxes below to select your preferred options, you can select more than one option.</div>    


<div class="doc-fg-container hide-approved">    
<?php
    
$getTenderDoc = mysqli_query($db, "SELECT * FROM tender_document_table WHERE project_id = '$code'");    
$gottenTenderDoc = mysqli_fetch_assoc($getTenderDoc);
$tendaDocNum = mysqli_num_rows($getTenderDoc);
    
if($tendaDocNum > 0){
foreach($getTenderDoc as $gottenTenderDoc){
$tender_doc_id = $gottenTenderDoc['id'];
$tender_document = $gottenTenderDoc['tender_document'];

?>    
    
<div class="doc-fg-wrapper hide-approved">
    <input type="hidden" name="tender_doc_id[]" class="tender_doc_id" value="<?php echo $tender_doc_id ?>">
    <div class="tender-form-group tender-fg-full">
        <label class="tender-form-label">Enter Document Name <span class="asterisk">***</span></label>
        <input type="text" name="tender_document[]" id="tender_document" value="<?php echo $tender_document ?>" class="tender-input">
        <span class="fas fa-file tender-ficon"></span>
    </div>
    <a class="removeDeleteTenDocBtn" disabled onclick="deleteTenderDoc(this)">Delete Document</a>
</div> 
    
<?php    
}
    
}elseif($tendaDocNum == 0){
    
?> 
    

<div class="doc-fg-wrapper hide-approved">
    <div class="tender-form-group tender-fg-full">
        <label class="tender-form-label">Enter Document Name <span class="asterisk">***</span></label>
        <input type="text" name="tender_document[]" id="tender_document" placeholder="Enter Tender Document" class="tender-input">
        <span class="fas fa-file tender-ficon"></span>
    </div>
    <a class="removeDocumentBtn" disabled>Remove Document</a>
</div>
    

<?php    
    
}
    
?>    
</div>    
    
<div class="addProjectBox hide-approved">    
<a class="addDocument">Add New Document</a>
</div>    
    
    
 
    
<div class="tender-form-header hide-approved">Technical Documents Received</div>
<div class="tender-form-notice hide-approved">Click on any of the boxes below to select your preferred options, you can select more than one option.</div>    


<div class="tech-doc-fg-container hide-approved">

<?php
    
$getTechDoc = mysqli_query($db, "SELECT * FROM technical_document_table WHERE project_id = '$code'");    
$gottenTechDoc = mysqli_fetch_assoc($getTechDoc);
$tchDocNum = mysqli_num_rows($getTechDoc);
    
if($tchDocNum > 0){
foreach($getTechDoc as $gottenTechDoc){
$tech_doc_id = $gottenTechDoc['id'];
$tech_document = $gottenTechDoc['technical_document'];

?>    
    
<div class="tech-doc-fg-wrapper hide-approved">
    <input type="hidden" name="tech_doc_id[]" class="tech_doc_id" value="<?php echo $tech_doc_id ?>">
    <div class="tender-form-group tender-fg-full">
        <label class="tender-form-label">Enter Technical Document <span class="asterisk">***</span></label>
        <input type="text" name="technical_document[]" id="technical_document" value="<?php echo $tech_document ?>" class="tender-input">
        <span class="fas fa-file tender-ficon"></span>
    </div>
    <a class="removeDeleteTechDocBtn" disabled onclick="deleteTechDoc(this)">Delete Document</a>
</div>
    
<?php    
}

}elseif($tchDocNum == 0){
    
?>
<div class="tech-doc-fg-wrapper hide-approved">
    <div class="tender-form-group tender-fg-full">
        <label class="tender-form-label">Enter Technical Document <span class="asterisk">***</span></label>
        <input type="text" name="technical_document[]" id="technical_document" placeholder="Enter Technical Document" class="tender-input">
        <span class="fas fa-file tender-ficon"></span>
    </div>
    <a class="removeTechDocumentBtn" disabled>Remove Document</a>
</div>    

<?php    
    
}
    
?>    
    
</div> 
    
    
<div class="addProjectBox hide-approved">    
<a class="addTechDocument">Add New Document</a>
</div> 
    
    
    
<div class="tender-form-header">Tender Document Link? If any, please specify below.</div>    
<div class="tender-form-notice">Example - (https://linkaddress) Please ensure to start with https:// or http://</div>    

    
<div class="tender-form-group">
    <label class="tender-form-label">Enter Tender Document Link (If any)</label>
    <input type="text" name="document_link" id="document_link" value="<?php echo $document_link; ?>" placeholder="Enter Document Link (If any)" class="tender-input">
    <span class="fas fa-home tender-ficon"></span>
</div>    
    
    
    
<div class="tender-form-header">Update Tender Status</div>   
    
<!-- Status Upgrade -->    
    
<div class="tender-form-group">
<label class="tender-form-label">Tender Status <span class="asterisk">***</span></label>
<select name="project_status" id="type" class="tender-input select--select project-status" aria-label="Select Tender Status" required>
    <option value="<?php echo $project_status ?>" selected><?php echo ($project_status == "") ? "Select Tender Status" : $project_status ?></option>
    <option value="On Hold">On Hold</option>
    <option value="Approved">Approved</option>
    <option value="Declined">Declined</option>
    <option value="Abortive">Abortive</option>
</select>
<span class="fas fa-flag tender-ficon"></span>
</div>    
    
    
<div class="tender-form-header">Update Tender Progress</div>   
    
<!-- Status Upgrade -->    
    
<div class="tender-form-group">
<label class="tender-form-label">Tender Progress <span class="asterisk">***</span></label>
<select name="progress" id="awarded" class="tender-input select--select project-progress" aria-label="Select Tender Progress" required>
    <option value="<?php echo $progress ?>" selected><?php echo ($progress == "") ? "Select Tender Progress" : $progress ?></option>
    <option value="In Progress">In Progress</option>
    <option value="Submitted">Submitted</option>
    <option value="Awaiting">Feedbacks</option>
    <option value="Declined">Declined</option>
    <option value="Awarded">Awarded</option>
</select>
<span class="fas fa-flag tender-ficon"></span>
</div>    
    
    
 
    
<div class="tender-form-group" id="awarded-box">
<label class="tender-form-label">Tender Awareded Date</label>
<input type="date" name="tender_awarded_date" id="awarded-date" value="<?php echo ($tender_awarded_date == "") ? "" : $tender_awarded_date; ?>" class="tender-input">
<span class="fas fa-calendar tender-ficon"></span>
</div>    
    
    
    
    
<div class="tender-form-group" id="city-box">
<label class="tender-form-label">Tender City Code <span class="asterisk">***</span></label>
<select name="city_code" id="city-code" class="tender-input select--select hidden-approved awarded-city-code" aria-label="Select Tender City Code" required>
    <option value="<?php echo $city_code ?>" selected><?php echo ($city_code == "") ? "Select Tender City Code" : $city_code ?></option>
    <?php
        $getCity = mysqli_query($db, "SELECT * FROM project_city");
        $gottenCity = mysqli_fetch_assoc($getCity);
        $cityNum = mysqli_num_rows($getCity);

        if($cityNum > 0){
            foreach($getCity as $gottenCity){
                $ccode = $gottenCity['code'];
                $ccity = $gottenCity['city'];
    ?>			
    <option value="<?php echo $ccode ?>"><?php echo $ccity ?> - <?php echo $ccode ?></option>
    <?php
            }	
        }

    ?>
</select>
<span class="fas fa-flag tender-ficon"></span>
<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please Select Tender City Code</span></span>
</div>           
    
    
    
<div class="tender-form-header">Additional Information</div>       
<div class="tender-form-notice" id="notification">Please provide any additional information below, note that maximum character is 500</div>       
    
    
<div class="tender-form-group tender-fg-full">
<label class="tender-form-label">Additional Information (Optional) <span class="asterisk" id="words">500 Words Left</span></label>
<textarea name="additional_information" id="txtBody" class="tender-input tender-textarea" placeholder="Additional Information" onkeyup="CountWords(this)"><?php echo $additional_information ?></textarea>
<span class="fas fa-calendar tender-ficon"></span>
</div>    
    
    
    
    
    
<div class="tender-form-group tender-fg-full">    
<button type="button" name="submit" id="editSubmitBtn">Submit</button>    
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
    
    
    
$(document).ready(function() {
    $(document).ready(function() {
    function checkInitialState() {
        let end_user = $('#end_user').val();
        if (end_user === "Other End User / Owner") {
            $('.other_end_user_box').show();
            $('#other_end_user').attr('required', true);
        } else {
            $('.other_end_user_box').hide();
            $('#other_end_user').attr('required', false);
        }

        let project_manager = $('#project_manager').val();
        if (project_manager === "Other Project Manager") {
            $('.other_project_manager').show();
            $('#other_project_manager').attr('required', true);
        } else {
            $('.other_project_manager').hide();
            $('#other_project_manager').attr('required', false);
        }

        let qs_manager = $('#qs_manager').val();
        if (qs_manager === "Other Qs Manager") {
            $('.other_qs_manager_box').show();
            $('#other_qs_manager').attr('required', true);
        } else {
            $('.other_qs_manager_box').hide();
            $('#other_qs_manager').attr('required', false);
        }

        let mep_consultant = $('#mep_consultant').val();
        if (mep_consultant === "Other Mep Consultant") {
            $('.other_mep_consultant_box').show();
            $('#other_mep_consultant').attr('required', true);
        } else {
            $('.other_mep_consultant_box').hide();
            $('#other_mep_consultant').attr('required', false);
        }

        let architects = $('#architects').val();
        if (architects === "Other Architects") {
            $('.other_architects_box').show();
            $('#other_architects').attr('required', true);
        } else {
            $('.other_architects_box').hide();
            $('#other_architects').attr('required', false);
        }
    }

    checkInitialState(); // Check initial state on document ready

    $('#end_user').on('change', function() {
        let end_user = $(this).val();
        if (end_user === "Other End User / Owner") {
            $('.other_end_user_box').show();
            $('#other_end_user').attr('required', true);
        } else {
            $('.other_end_user_box').hide();
            $('#other_end_user').attr('required', false);
        }
    });

    $('#project_manager').on('change', function() {
        let project_manager = $(this).val();
        if (project_manager === "Other Project Manager") {
            $('.other_project_manager').show();
            $('#other_project_manager').attr('required', true);
        } else {
            $('.other_project_manager').hide();
            $('#other_project_manager').attr('required', false);
        }
    });

    $('#qs_manager').on('change', function() {
        let qs_manager = $(this).val();
        if (qs_manager === "Other Qs Manager") {
            $('.other_qs_manager_box').show();
            $('#other_qs_manager').attr('required', true);
        } else {
            $('.other_qs_manager_box').hide();
            $('#other_qs_manager').attr('required', false);
        }
    });

    $('#mep_consultant').on('change', function() {
        let mep_consultant = $(this).val();
        if (mep_consultant === "Other Mep Consultant") {
            $('.other_mep_consultant_box').show();
            $('#other_mep_consultant').attr('required', true);
        } else {
            $('.other_mep_consultant_box').hide();
            $('#other_mep_consultant').attr('required', false);
        }
    });

    $('#architects').on('change', function() {
        let architects = $(this).val();
        if (architects === "Other Architects") {
            $('.other_architects_box').show();
            $('#other_architects').attr('required', true);
        } else {
            $('.other_architects_box').hide();
            $('#other_architects').attr('required', false);
        }
    });
});

});
     
    
    
</script>

<?php
}elseif(!isset($_GET['code']) || $_GET['code'] == ""){
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
    <a href="index.php?page=tender_view" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=tender_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<?php
} 
?>



<script>

$(document).ready(function(){
   

$('#awarded').change(function(){
   
let awarded = $(this).val();
let awarded_date = $('#awarded-date');
    
if(awarded == "Awarded"){
$('#awarded-box').show();
$('#city-box').show();
awarded_date.attr("required", true);    
$('.awarded-city-code').attr("required", true);    
}else{
$('#awarded-box').hide();
awarded_date.attr("required", false);
$('#city-box').hide();
$('.awarded-city-code').attr("required", false);
}    
    
});    


if($('#awarded').val() == "Awarded"){
$('#awarded-box').show();
$('#city-box').show();
awarded_date.attr("required", true);    
$('.awarded-city-code').attr("required", true);    
}    
    
 
if($('#awarded').val() == "Submitted" || $('#awarded').val() == "Awarded"){    
$('.tender_amt').attr("required", true);    
$('.currence').attr("required", true);    
$('.submission_date').attr("required", true);    
}else{
$('.tender_amt').attr("required", false);    
$('.currence').attr("required", false);    
$('.submission_date').attr("required", false);    
}    
    
    
});
    
    

</script>
<script type="text/javascript" src="assets/js/function.js"></script>