<?php
if(isset($_GET['code']) && $_GET['code'] != ""){
    
$code = $_GET['code'];
$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE code = '$code'");
$selected = mysqli_fetch_assoc($select);

$project_title = $selected['project_title'];
$project_client = $selected['project_client'];
    
    
$getClient = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_name = '$project_client'");
$getClientNum = mysqli_num_rows($getClient);
$getClientData = mysqli_fetch_assoc($getClient);
    
if($getClientNum > 0){

$client_id = $getClientData['id'];
        
}    
    
    
$keyperson = $selected['keyperson'];
$division = $selected['division'];
$project_manager = $selected['project_manager'];
$qs_manager = $selected['qs_manager'];
$mep_consultants = $selected['mep_consultants'];
$architect = $selected['architect'];
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

        <div class="form-title">Project Information</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>Project Title <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="project_title" required value="<?php echo $project_title; ?>">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Edit Project Client <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_client" id="clients" required>
                        <option value="<?php echo $client_id ?>"> -- <?php echo $project_client ?> -- </option>
                        
                        <?php
                        
                        $getCat = mysqli_query($db, "SELECT * FROM clients_table ORDER BY clients_name ASC");
                        $gottenCat = mysqli_fetch_assoc($getCat);
                        $numCat = mysqli_num_rows($getCat);
                        
                        if($numCat > 0){
                            foreach($getCat as $gottenCat){
                            $clients_name = $gottenCat['clients_name'];
                            $clients_id = $gottenCat['id'];
                        ?>
                        
                        <option value="<?php echo $clients_id ?>"><?php echo $clients_name?></option>
                        
                        <?php
                                
                            }
                        }else{
                        ?>    
                            <option value="" disabled>No results found!</option>
                        <?php    
                        }
                        
                        ?>
                        
                    </select>
                    <span class="fas fa-users select-icon"></span>
                </div>
            </div>


            <div class="form-group">
                <label>Edit Keyperson <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="key_person" id="keypersons" required>
                        <option value="<?php echo $keyperson ?>"> -- <?php echo $keyperson ?> -- </option>
                    </select>
                    <span class="fas fa-city select-icon"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Project Division <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="division" required>
                        <option value="<?php echo $division; ?>"> -- <?php echo $division; ?> -- </option>
                        <option value="Power">Power</option>
                        <option value="Data Centre">Data Centre</option>
                        <option value="Building & Factories">Building & Factories</option>
                        <option value="Oil & Gas">Oil & Gas</option>
                        <option value="Facilities & Maintenance">Facilities & Maintenance</option>
                    </select>
                    <span class="fas fa-list-alt select-icon"></span>
                </div>
            </div>

        </div>


    </div>


    <!-- Managers -->

    <div class="form-wrapper">

        <div class="form-title">Managers</div>

        <div class="form-wrapper-flex">
            
            <div class="form-group">
                <label>Update Project Manager (Consultants)</label>
                <div class="form-control">
                    <select name="project_manager">
                        <option value="<?php echo $project_manager; ?>"> -- <?php echo $project_manager; ?> -- </option>
                        
                        <?php
                        
                        $getPm = mysqli_query($db, "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Project Manager' ORDER BY clients_name ASC");
                        $gottenPm = mysqli_fetch_assoc($getPm);
                        $numPm = mysqli_num_rows($getPm);
                        
                        if($numPm > 0){
                            foreach($getPm as $gottenPm){
                            $clients_name_pm = $gottenPm['clients_name'];
                            $clients_id_pm = $gottenPm['id'];
                            $clients_data_pm = $gottenPm['clients_name'] . " - " . $gottenPm['key_person'];
                        ?>
                        
                        <option value="<?php echo $clients_name_pm?>"><?php echo $clients_name_pm?></option>
                        
                        <?php
                                
                            }
                        }else{
                        ?>    
                            <option value="" disabled>No data created yet!</option>
                        <?php    
                        }
                        
                        ?>
                        
                        
                        <option value="Other Project Manager">Other Project Manager</option>
                        
                    </select>
                    <span class="fas fa-users select-icon"></span>
                </div>
            </div>
            
<!--
            <div class="form-group">
                <label>QS Manager (Consultants)</label>
                <div class="form-control">
                    <input type="text" name="qs_manager" placeholder="QS Manager (If available)">
                    <span class="fas fa-user"></span>
                </div>
            </div>
-->
            
            
            <div class="form-group">
                <label>Update QS Manager (Consultants)</label>
                <div class="form-control">
                    <select name="qs_manager">
                        <option value=""> -- <?php echo $qs_manager; ?> -- </option>
                        
                        <?php
                        
                        $getQs = mysqli_query($db, "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Qs Manager' ORDER BY clients_name ASC");
                        $gottenQs = mysqli_fetch_assoc($getQs);
                        $numQs = mysqli_num_rows($getQs);
                        
                        if($numQs > 0){
                            foreach($getQs as $gottenQs){
                            $clients_name_qs = $gottenQs['clients_name'];
                            $clients_id_qs = $gottenQs['id'];
                            $clients_data_qs = $gottenQs['clients_name'] . " - " . $gottenQs['key_person'];
                        ?>
                        
                        <option value="<?php echo $clients_name_qs?>"><?php echo $clients_name_qs?></option>
                        
                        <?php
                                
                            }
                        }else{
                        ?>    
                            <option value="" disabled>No data created yet!</option>
                        <?php    
                        }
                        
                        ?>
                        
                        <option value="Other Qs Manager">Other Qs Manager</option>
                    </select>
                    <span class="fas fa-users select-icon"></span>
                </div>
            </div>
            

<!--
            <div class="form-group">
                <label>Mep Consultants</label>
                <div class="form-control">
                    <input type="text" name="mep_consultants" placeholder="Mep Consultants (If available)">
                    <span class="fas fa-user"></span>
                </div>
            </div>
-->


            
            <div class="form-group">
                <label>Update Mep (Consultants)</label>
                <div class="form-control">
                    <select name="mep_consultants">
                        <option value=""> -- <?php echo $mep_consultants; ?> -- </option>
                        
                        <?php
                        
                        $getMep = mysqli_query($db, "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Mep Consultant' ORDER BY clients_name ASC");
                        $gottenMep = mysqli_fetch_assoc($getMep);
                        $numMep = mysqli_num_rows($getMep);
                        
                        if($numMep > 0){
                            foreach($getMep as $gottenMep){
                            $clients_name_mep = $gottenMep['clients_name'];
                            $clients_id_mep = $gottenMep['id'];
                            $clients_data_mep = $gottenMep['clients_name'] . " - " . $gottenMep['key_person'];
                        ?>
                        
                        <option value="<?php echo $clients_name_mep?>"><?php echo $clients_name_mep?></option>
                        
                        <?php
                                
                            }
                        }else{
                        ?>    
                            <option value="" disabled>No data created yet!</option>
                        <?php    
                        }
                        
                        ?>
                        
                        <option value="Other Mep Consultant">Other Mep Consultant</option>
                    </select>
                    <span class="fas fa-users select-icon"></span>
                </div>
            </div>
            
            
<!--
            <div class="form-group">
                <label>Architect</label>
                <div class="form-control">
                    <input type="text" name="architect" placeholder="Architects (If available)">
                    <span class="fas fa-user"></span>
                </div>
            </div>
-->
            
            
            <div class="form-group">
                <label>Update Architect</label>
                <div class="form-control">
                    <select name="architect">
                        <option value=""> -- <?php echo $architect; ?> -- </option>
                        
                        <?php
                        
                        $getArch = mysqli_query($db, "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Architects' ORDER BY clients_name ASC");
                        $gottenArch = mysqli_fetch_assoc($getArch);
                        $numArch = mysqli_num_rows($getArch);
                        
                        if($numArch > 0){
                            foreach($getArch as $gottenArch){
                            $clients_name_arch = $gottenArch['clients_name'];
                            $clients_id_arch = $gottenArch['id'];
                            $clients_data_arch = $gottenArch['clients_name'] . " - " . $gottenArch['key_person'];
                        ?>
                        
                        <option value="<?php echo $clients_name_arch?>"><?php echo $clients_name_arch?></option>
                        
                        <?php
                                
                            }
                        }else{
                        ?>    
                            <option value="" disabled>No data created yet!</option>
                        <?php    
                        }
                        
                        ?>
                        
                        <option value="Other Architects">Other Architects</option>
                    </select>
                    <span class="fas fa-users select-icon"></span>
                </div>
            </div>

        </div>


    </div>


    <!-- Period Covered - Months covered, RFIs' due date & tender due date -->

    <div class="form-wrapper">

        <div class="form-title">Period Covered - Months covered, RFIs' due date & tender due date</div>

        <div class="form-wrapper-flex">

            
            
            <?php
    
//                $getStatus = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_status='Approved' && code='$code'");
//                $gottenStatus = mysqli_fetch_assoc($getStatus);
//            
//                $statusNum = mysqli_num_rows($getStatus);
//    
//                if($statusNum > 0){
    
            ?>

            
            <div class="form-group hide-approved">
                <label>Project Duration</label>
                <div class="form-control">
                    <select name="project_duration" class="approved-show">
                        <option value="<?php echo $project_duration; ?>"> -- <?php echo $project_duration; ?> -- </option>
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
                    <span class="fas fa-calendar-alt select-icon"></span>
                </div>
            </div>


            <?php
                
//                }
                    
            ?>
            
            
            <div class="form-group">
                <label>Tender Received Date <i class="asterisk">Current: <?php echo $tender_received_date; ?></i></label>
                <div class="form-control">
                    <input type="date" name="tender_received_date" value="<?php echo $tender_r_date; ?>">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>

            <div class="form-group hide-approved">
                <label>RFI's Due Date <i class="asterisk">Current: <?php echo $rfi_due; ?></i></label>
                <div class="form-control">
                    <input type="date" name="rfi_due" value="<?php echo $rfi_due_date; ?>">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Tender Due Date <i class="asterisk">Current: <?php echo $tender_due; ?></i></label>
                <div class="form-control">
                    <input type="date" name="tender_due" value="<?php echo $tender_due_date; ?>">
                    <span class="fas fa-calendar-alt"></span>
                </div>
            </div>

            <div class="form-group hide-submitted">
                <label>Tender Submission Date <i class="asterisk">Current: 
                    <?php 
                    if(!empty($tender_submission_date)){echo $tender_submission_date;}else{echo "N/A";} 
                    ?></i></label>
                <div class="form-control">
                    <input type="date" name="tender_submission_date" value="<?php 
                        if(!empty($tender_submission_date)){echo $tender_submission_date;}else{echo "dd-mm-yyyy";} ?>" class="submission_date">
                    <span class="fas fa-calendar-alt"></span>
                </div>
            </div>

            <div class="form-group hide-submitted">
                <label>Tender Amount <i class="asterisk">***</i></label>
                <div class="form-control">
                    <input type="number" name="tender_amount" class="tender_amt" value="<?php echo $tender_amount; ?>">
                    <span class="fas fa-money-bill"></span>
                </div>
            </div>

            
            <div class="form-group hide-submitted">
                <label>Tender Currency <i class="asterisk">***</i></label>
                <div class="form-control">
                    <select name="currency" class="currence">
                        <option value="<?php echo $currency; ?>"> -- <?php echo $currency; ?> -- </option>
                        <option value="NGN">Naira</option>
                        <option value="USD">Dollars</option>
                        <option value="GBP">Pounds</option>
                        <option value="EUR">Euros</option>
                        <option value="ZAR">Rands</option>
                        <option value="GHC">Cedis</option>
                        <option value="CFA">Cefas</option>
                    </select>
                    <span class="fas fa-money-bill select-icon"></span>
                </div>
            </div>
                                        

        </div>


    </div>
    
    
    
    <!-- Project Country, City & Importance -->

    <div class="form-wrapper">

        <div class="form-title">Project Country, City & Importance</div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Project Country <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_country" id="type" required>
                        <option value="<?php echo $project_country; ?>"> -- <?php echo $project_country; ?> -- </option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Ivory Coast">Ivory Coast</option>
                    </select>
                    <span class="fas fa-flag select-icon"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Project City <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_city" id="size" required>
                        <option value="<?php echo $project_city; ?>"> -- <?php echo $project_city; ?> -- </option>
                    </select>
                    <span class="fas fa-city select-icon"></span>
                </div>
            </div>

            <div class="form-group hide-approved">
                <label>Project Importance <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_importance" class="project_importance">
                        <option value="<?php echo $project_importance; ?>"> -- <?php echo $project_importance; ?> -- </option>
                        <option value="Very High">Very High</option>
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                        <option value="Very Low">Very Low</option>
                    </select>
                    <span class="fas fa-exclamation-triangle select-icon"></span>
                </div>
            </div>

        </div>


    </div>



    <!-- Contract type, Preliminary Pricing & Pricing Strategy -->

    <div class="form-wrapper hide-approved">

        <div class="form-title hide-approved">Contract type, Preliminary Pricing & Pricing Strategy</div>

        <div class="form-wrapper-flex">

            <div class="form-group hide-approved">
                <label>Contract Type <!--<span class="asterisk">***</span>--></label>
                <div class="form-control">
                    <select name="contract_type" class="hidden-select">
                        <option value="<?php echo $contract_type; ?>"> -- <?php echo $contract_type; ?> -- </option>
                        <option value="Lump Sum">Lump Sum</option>
                        <option value="Remeasured">Remeasured</option>
                        <option value="Design & Build">Design & Build</option>
                        <option value="Preliminary Budgeting">Preliminary Budgeting</option>
                        <option value="Deisgn Evaluation">Deisgn Evaluation</option>
                    </select>
                    <span class="fas fa-file-contract select-icon"></span>
                </div>
            </div>

            <div class="form-group hide-approved">
                <label>Preliminary Pricing <!--<span class="asterisk">***</span>--></label>
                <div class="form-control">
                    <select name="prelim_pricing" class="hidden-select">
                        <option value="<?php echo $prelim_pricing; ?>"> -- <?php echo $prelim_pricing; ?> -- </option>
                        <option value="Standard (Combined)">Standard (Combined)</option>
                        <option value="Per Package">Per Package</option>
                    </select>
                    <span class="fas fa-tag select-icon"></span>
                </div>
            </div>

            <div class="form-group hide-approved">
                <label>Pricing Strategy <!--<span class="asterisk">***</span>--></label>
                <div class="form-control">
                    <select name="pricing_strategy" class="hidden-select">
                        <option value="<?php echo $pricing_strategy; ?>"> -- <?php echo $pricing_strategy; ?> -- </option>
                        <option value="As Per Specs">As Per Specs</option>
                        <option value="Alternative On Brands are Acceptable">Alternative On Brands are Acceptable</option>
                        <option value="Directly include VEs Related To Brands & Specifications & Clarify">Directly include VEs Related To Brands & Specifications & Clarify</option>
                        <option value="Directly include VEs Related To Design/Sizing & Clarify">Directly include VEs Related To Design/Sizing & Clarify</option>
                        <option value="Include VEs without Mentioning it in the Clarifications">Include VEs without Mentioning it in the Clarifications</option>
                        <option value="As Per Specs: VEs/Alternative Brands to be submitted separately">As Per Specs: VEs/Alternative Brands to be submitted separately</option>
                    </select>
                    <span class="fas fa-tasks select-icon"></span>
                </div>
            </div>

        </div>


    </div>


    <!-- Supplier/Vendor Information -->

    <div class="form-wrapper hide-approved">

        <div class="form-title">Supplier/Vendor Information</div>
        <div class="notification">
            Click on any of the boxes below to select your preferred option.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-1" value="Only use Project Name" name="vendor_information" <?php if($vendor_information == "Only use Project Name"){echo "checked"; }?> class="radio-btn">
                    <label for="radio-1" class="choice-label">Only use Project Name</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-2" value="Only Tender Code" name="vendor_information" class="radio-btn" <?php if($vendor_information == "Only Tender Code"){echo "checked"; }?>>
                    <label for="radio-2" class="choice-label">Only Tender Code</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-3" value="Project Name & Tender Code" name="vendor_information" class="radio-btn" <?php if($vendor_information == "Project Name & Tender Code"){echo "checked"; }?>>
                    <?php
    
                    if($vendor_information == ""){
                    ?>    
                    
                    <input type="hidden" value="" name="vendor_information">
                        
                    <?php
                    }
    
                    ?>
                    <label for="radio-3" class="choice-label">Project Name & Tender Code</label>
                </div>
            </div>

        </div>


    </div>


    <!-- Submission, Rate & Procurement Type -->

    <div class="form-wrapper hide-approved">

        <div class="form-title">Submission, Rate & Procurement Type</div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Possibility of Date Extension? <!--<span class="asterisk">***</span>--></label>
                <div class="form-control">
                    <select name="date_extension" class="hidden-select">
                        <option value="<?php echo $date_extension; ?>"> -- <?php echo $date_extension; ?> -- </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <span class="fas fa-paper-plane select-icon"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Naira Rate <!--<span class="asterisk">***</span>--></label>
                <div class="form-control">
                    <select name="rate_used" class="hidden-select">
                        <option value="<?php echo $rate_used; ?>"> -- <?php echo $rate_used; ?> -- </option>
                        <option value="Equipment/Imported Items">Equipment/Imported Items</option>
                        <option value="First Fix">First Fix</option>
                    </select>
                    <span class="fas fa-percent select-icon"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Type of Procurement <!--<span class="asterisk">***</span>--></label>
                <div class="form-control">
                    <select name="procurement_type" class="hidden-select">
                        <option value="<?php echo $procurement_type; ?>"> -- <?php echo $procurement_type; ?> -- </option>
                        <option value="Standard (Sea Freight)">Standard (Sea Freight)</option>
                        <option value="Fast Delivery (Local Market if possible + Air Freight)">Fast Delivery (Local Market if possible + Air Freight)</option>
                    </select>
                    <span class="fas fa-shopping-cart select-icon"></span>
                </div>
            </div>

        </div>


    </div>



    <!-- Tender Documents Received -->

    <div class="form-wrapper hide-approved">

        <div class="form-title">Tender Documents Received</div>
        <div class="notification">
            Click on any of the boxes below to select your preferred options, you can select more than one option.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-1" value="Unpriced BOQ" name="boq" class="radio-btn" <?php if($boq != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-1" class="choice-label">Unpriced BOQ</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-2" value="Specification" name="specification" class="radio-btn" <?php if($specification != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-2" class="choice-label">Specification</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-3" value="Drawings" name="drawings" class="radio-btn" <?php if($drawings != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-3" class="choice-label">Drawings</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-4" value="Form of Tender" name="tender_form" class="radio-btn" <?php if($tender_form != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-4" class="choice-label">Form of Tender</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-5" value="Instruction to Tender" name="tender_instruction" class="radio-btn" <?php if($tender_instruction != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-5" class="choice-label">Instruction to Tender</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-6" value="Schedule of Basic Rate" name="basic_rate" class="radio-btn" <?php if($basic_rate != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-6" class="choice-label">Schedule of Basic Rate</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-7" value="Schedule of Labour Rate" name="labour_rate" class="radio-btn" <?php if($labour_rate != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-7" class="choice-label">Schedule of Labour Rate</label>
                </div>
            </div>


        </div>


    </div>



    <!-- Other Tender Documents Received? If any, please specify below. -->

    <div class="form-wrapper hide-approved">

        <div class="form-title">Other Tender Documents Received? If any, please specify below.</div>
        <div class="notification">
            Please provide document names, if more than one, separate with comma.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Other Tender Documents (If any)</label>
                <div class="form-control">
                    <input type="input" name="other_tender_doc" value="<?php echo $other_tender_doc; ?>" placeholder="E.g Doc 1, Doc 2 etc">
                    <span class="fas fa-file"></span>
                </div>
            </div>


        </div>


    </div>




    <!-- Technical Documents Received -->

    <div class="form-wrapper hide-approved">

        <div class="form-title">Technical Documents Required</div>
        <div class="notification">
            Click on any of the boxes below to select your preferred options, you can select more than one option.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-8" value="Drawings" name="technical_drawings" class="radio-btn" <?php if($technical_drawings != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-8" class="choice-label">Drawings</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-9" value="SLDs" name="slds" class="radio-btn" <?php if($slds != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-9" class="choice-label">SLDs</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-10" value="MOS" name="mos" class="radio-btn" <?php if($mos != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-10" class="choice-label">MOS</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-11" value="Understanding of Scope" name="scope_understanding" class="radio-btn" <?php if($scope_understanding != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-11" class="choice-label">Understanding of Scope</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-12" value="POW" name="pow" class="radio-btn" <?php if($pow != ""){ echo "checked='checked'"; } ?>>
                    <label for="box-12" class="choice-label">POW</label>
                </div>
            </div>

        </div>


    </div>



    <!-- Other Technical Documents Received? If any, please specify below. -->

    <div class="form-wrapper hide-approved">

        <div class="form-title">Other Technical Documents Required? If any, please specify below.</div>
        <div class="notification">
            Please provide document names, if more than one, separate with comma.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Other Technical Documents (If any)</label>
                <div class="form-control">
                    <input type="input" name="other_technical_doc" value="<?php echo $other_technical_doc; ?>" placeholder="E.g Doc 1, Doc 2 etc">
                    <span class="fas fa-file"></span>
                </div>
            </div>


        </div>


    </div>


    
    <!-- Tender Document Link -->

    <div class="form-wrapper">

        <div class="form-title">Tender Document Link? If any, please specify below.</div>
        <div class="notification">
            Example - (https://linkaddress) Please ensure to start with https:// or http://
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Tender Document Link (If any)</label>
                <div class="form-control">
                    <input type="" name="document_link" value="<?php echo $document_link; ?>" placeholder="E.g https://linkaddress">
                    <span class="fas fa-home"></span>
                </div>
            </div>


        </div>


    </div>
    
    
    
    <!-- Status Upgrade -->

    <div class="form-wrapper">

        <div class="form-title">Update Tender Status</div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Tender Status <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_status" id="type" class="project-status" required>
                        <option value="<?php echo $project_status; ?>"> -- <?php echo $project_status; ?> -- </option>
                        <option value="On Hold">On Hold</option>
                        <option value="Approved">Approved</option>
                        <option value="Declined">Declined</option>
                    </select>
                    <span class="fas fa-flag select-icon"></span>
                </div>
            </div>

        </div>


    </div>
    
    
    <!-- Tender Progress -->

    <div class="form-wrapper">

        <div class="form-title">Update Tender Progress</div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Tender Progress <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="progress" id="awarded" class="project-progress" required>
                        <option value="<?php echo $progress ?>"> -- <?php echo $progress ?> -- </option>
<!--                        <option value="Pending">Pending</option>-->
                        <option value="In Progress">In Progress</option>
                        <option value="Submitted">Submitted</option>
                        <option value="Awaiting">Feedbacks</option>
                        <option value="Declined">Declined</option>
                        <option value="Awarded">Awarded</option>
                    </select>
                    <span class="fas fa-flag select-icon"></span>
                </div>
            </div>

            
            <div class="form-group" id="awarded-box">
                <label>Tender Awareded Date <i class="asterisk">Current: <?php echo $tender_awarded_date; ?></i></label>
                <div class="form-control">
                    <input type="date" id="awarded-date" name="tender_awarded_date" value="<?php if($tender_awarded_date != ""){ echo date('Y-m-d', strtotime($tender_awarded_date));} ?>">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>
            
            <?php //if(!empty($tender_awarded_date)){ echo "Awarded Date: " . $tender_awarded_date; } ?>
            
        </div>
        
        
    </div>
    

    <!-- Additional Information -->

    <div class="form-wrapper">

        <div class="form-title">Additional Information</div>
        <div class="notification">
            Please provide any additional information below, note that maximum character is 500
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group fg-textarea">
                <label>Additional Information (Optional) <span class="asterisk" id="words">500 Words Left</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="additional_information" placeholder="Additional Information" onkeyup="CountWords(this)" id="txtBody"><?php echo $additional_information; ?></textarea>
                </div>
            </div>


        </div>


    </div>




    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="save" type="submit">Submit</button>
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
awarded_date.attr("required", true);    
}else{
$('#awarded-box').hide();
awarded_date.attr("required", false);    
}    
    
});    


if($('#awarded').val() == "Awarded"){
$('#awarded-box').show();
awarded_date.attr("required", true);    
}    
    
 
if($('#awarded').val() == "Submitted"){    
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