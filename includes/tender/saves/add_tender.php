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
                    <input type="text" name="project_title" required placeholder="Project Title">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>

            
            <div class="form-group">
                <label>Project Client <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_client" id="clients" required class="project-client-select">
                        <option value="">Select Option</option>            
                    </select>
                    <span class="fas fa-users select-icon"></span>
                    <input type="hidden" name="clients_id">
					<a class="form-title new-fm" href="./?page=add_client">+ Add new client if it doesn't exist</a>
                </div>
            </div>
            
            
            <div class="form-group">
                <label>Select Keyperson <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="key_person" id="keypersons" required>
                        <option value=""> -- Select Keyperson -- </option>
                    </select>
                    <span class="fas fa-city select-icon"></span>
					<a class="form-title new-fm" href="./?page=add_keyperson">+ Add new keypersons if it doesn't exist</a>
                </div>
            </div>
            
            
<!--
			<div class="form-group">
                <label>Project Owner</label>
                <div class="form-control">
                    <input type="text" name="project_owner" placeholder="Project Owner">
                    <span class="fas fa-tasks"></span>
                </div>
            </div>
-->
			
			
			
			<div class="form-group">
                <label>End User / Owner</label>
                <div class="form-control">
                    <select name="end_user">
                        <option value=""> -- Select End User / Owner -- </option>
                        
                        <?php
                        
                        $getPm = mysqli_query($db, "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'End User / Owner' ORDER BY clients_name ASC");
                        $gottenPm = mysqli_fetch_assoc($getPm);
                        $numPm = mysqli_num_rows($getPm);
                        
                        if($numPm > 0){
                            foreach($getPm as $gottenPm){
                            $clients_name_pm = $gottenPm['clients_name'];
//                            $clients_id_pm = $gottenPm['id'];
//                            $clients_data_pm = $gottenPm['clients_name'] . " - " . $gottenPm['key_person'];
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
                        
                        
                        <option value="Other Project Manager">Other End User / Owner</option>
                        
                    </select>
                    <span class="fas fa-users select-icon"></span>
                </div>
            </div>
			
			
			
<!--
            <div class="form-group">
                <label>Project Client <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="project_client" required placeholder="Project Client">
                    <span class="fas fa-user"></span>
                </div>
            </div>
-->


            <div class="form-group">
                <label>Project Division <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="division" required>
                        <option value=""> -- Select Division -- </option>
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
            
<!--
            <div class="form-group">
                <label>Project Manager (Consultants)</label>
                <div class="form-control">
                    <input type="text" name="project_manager" placeholder="Project Manager (If available)">
                    <span class="fas fa-user"></span>
                </div>
            </div>
-->

            
            <div class="form-group">
                <label>Project Manager (Consultants)</label>
                <div class="form-control">
                    <select name="project_manager">
                        <option value=""> -- Select Project Manager -- </option>
                        
                        <?php
                        
                        $getPm = mysqli_query($db, "SELECT DISTINCT clients_name FROM keypersons_table WHERE clients_category = 'Project Manager' ORDER BY clients_name ASC");
                        $gottenPm = mysqli_fetch_assoc($getPm);
                        $numPm = mysqli_num_rows($getPm);
                        
                        if($numPm > 0){
                            foreach($getPm as $gottenPm){
                            $clients_name_pm = $gottenPm['clients_name'];
//                            $clients_id_pm = $gottenPm['id'];
//                            $clients_data_pm = $gottenPm['clients_name'] . " - " . $gottenPm['key_person'];
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
                <label>QS Manager (Consultants)</label>
                <div class="form-control">
                    <select name="qs_manager">
                        <option value=""> -- Select QS Manager -- </option>
                        
                        <?php
                        
                        $getQs = mysqli_query($db, "SELECT DISTINCT clients_name FROM keypersons_table WHERE clients_category = 'Qs Manager' ORDER BY clients_name ASC");
                        $gottenQs = mysqli_fetch_assoc($getQs);
                        $numQs = mysqli_num_rows($getQs);
                        
                        if($numQs > 0){
                            foreach($getQs as $gottenQs){
                            $clients_name_qs = $gottenQs['clients_name'];
//                            $clients_id_qs = $gottenQs['id'];
//                            $clients_data_qs = $gottenQs['clients_name'] . " - " . $gottenQs['key_person'];
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
                <label>MEP (Consultants)</label>
                <div class="form-control">
                    <select name="mep_consultants">
                        <option value=""> -- Select Mep Consultants -- </option>
                        
                        <?php
                        
                        $getMep = mysqli_query($db, "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Mep Consultant' ORDER BY clients_name ASC");
                        $gottenMep = mysqli_fetch_assoc($getMep);
                        $numMep = mysqli_num_rows($getMep);
                        
                        if($numMep > 0){
                            foreach($getMep as $gottenMep){
                            $clients_name_mep = $gottenMep['clients_name'];
//                            $clients_id_mep = $gottenMep['id'];
//                            $clients_data_mep = $gottenMep['clients_name'] . " - " . $gottenMep['key_person'];
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
                        
                        <option value="Other Mep Consultant">Other MEP Consultant</option>
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
                <label>Architect</label>
                <div class="form-control">
                    <select name="architect">
                        <option value=""> -- Select Architect -- </option>
                        
                        <?php
                        
                        $getArch = mysqli_query($db, "SELECT DISTINCT clients_name FROM clients_table WHERE clients_category = 'Architects' ORDER BY clients_name ASC");
                        $gottenArch = mysqli_fetch_assoc($getArch);
                        $numArch = mysqli_num_rows($getArch);
                        
                        if($numArch > 0){
                            foreach($getArch as $gottenArch){
                            $clients_name_arch = $gottenArch['clients_name'];
//                            $clients_id_arch = $gottenArch['id'];
//                            $clients_data_arch = $gottenArch['clients_name'] . " - " . $gottenArch['key_person'];
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
            <!--
            <div class="form-group">
                <label>Project Duration</label>
                <div class="form-control">
                    <select name="project_duration">
                        <option value="N/A"> -- Select Months Covered -- </option>
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
            -->

            <div class="form-group">
                <label>Tender Received Date</label>
                <div class="form-control">
                    <input type="date" name="tender_received_date" placeholder="Tender Received Date">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>

<!--
            <div class="form-group">
                <label>RFI's Due Date</label>
                <div class="form-control">
                    <input type="date" name="rfi_due" placeholder="RFI's Due Date">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>
-->

            <div class="form-group">
                <label>Tender Due Date</label>
                <div class="form-control">
                    <input type="date" name="tender_due" placeholder="Tender Due Date">
                    <span class="fas fa-calendar-alt"></span>
                </div>
            </div>

<!--
            <div class="form-group">
                <label>Tender Submission Date</label>
                <div class="form-control">
                    <input type="date" name="tender_submission_date" placeholder="Tender Submssion Date">
                    <span class="fas fa-calendar-alt"></span>
                </div>
            </div>
-->

<!--
            <div class="form-group">
                <label>Tender Amount</label>
                <div class="form-control">
                    <input type="number" name="tender_amount" placeholder="Tender Amount">
                    <span class="fas fa-money-bill"></span>
                </div>
            </div>
-->



            
<!--
            <div class="form-group">
                <label>Tender Currency</label>
                <div class="form-control">
                    <select name="currency">
                        <option value="N/A"> -- Select Currency -- </option>
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
-->
                                        

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
                        <option value=""> -- Select Project Country -- </option>
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
                        <option value=""> -- Select Project City -- </option>
                    </select>
                    <span class="fas fa-city select-icon"></span>
                </div>
            </div>

<!--
            <div class="form-group">
                <label>Project Importance <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="project_importance" required>
                        <option value=""> -- Select Project Importance -- </option>
                        <option value="Very High">Very High</option>
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                        <option value="Very Low">Very Low</option>
                    </select>
                    <span class="fas fa-exclamation-triangle select-icon"></span>
                </div>
            </div>
-->

        </div>


    </div>



    <!-- Contract type, Preliminary Pricing & Pricing Strategy -->

    <!--
    <div class="form-wrapper">

        <div class="form-title">Contract type, Preliminary Pricing & Pricing Strategy</div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Contract Type <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="contract_type" required>
                        <option value=""> -- Select Contract Type -- </option>
                        <option value="Lump Sum">Lump Sum</option>
                        <option value="Remeasured">Remeasured</option>
                        <option value="Design & Build">Design & Build</option>
                        <option value="Preliminary Budgeting">Preliminary Budgeting</option>
                        <option value="Deisgn Evaluation">Deisgn Evaluation</option>
                    </select>
                    <span class="fas fa-file-contract select-icon"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Preliminary Pricing <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="prelim_pricing" required>
                        <option value=""> -- Select Prelim Pricing -- </option>
                        <option value="Standard (Combined)">Standard (Combined)</option>
                        <option value="Per Package">Per Package</option>
                    </select>
                    <span class="fas fa-tag select-icon"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Pricing Strategy <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="pricing_strategy" required>
                        <option value=""> -- Select Pricing Strategy -- </option>
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
    -->

    <!-- Supplier/Vendor Information -->

    <!--
    <div class="form-wrapper">

        <div class="form-title">Supplier/Vendor Information</div>
        <div class="notification">
            Click on any of the boxes below to select your preferred option.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-1" value="Only use Project Name" name="vendor_information" checked class="radio-btn">
                    <label for="radio-1" class="choice-label">Only use Project Name</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-2" value="Only Tender Code" name="vendor_information" class="radio-btn">
                    <label for="radio-2" class="choice-label">Only Tender Code</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="radio" id="radio-3" value="Project Name & Tender Code" name="vendor_information" class="radio-btn">
                    <label for="radio-3" class="choice-label">Project Name & Tender Code</label>
                </div>
            </div>

        </div>


    </div>

    -->



    <!-- Submission, Rate & Procurement Type -->
    <!--
    <div class="form-wrapper">

        <div class="form-title">Submission, Rate & Procurement Type</div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Possibility of Date Extension? <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="date_extension" required>
                        <option value=""> -- Date Extension Possibility -- </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <span class="fas fa-paper-plane select-icon"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Naira Rate <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="rate_used" required>
                        <option value=""> -- Select Naira Rate -- </option>
                        <option value="Equipment/Imported Items">Equipment/Imported Items</option>
                        <option value="First Fix">First Fix</option>
                    </select>
                    <span class="fas fa-percent select-icon"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Type of Procurement <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="procurement_type" required>
                        <option value=""> -- Select Procurement Type -- </option>
                        <option value="Standard (Sea Freight)">Standard (Sea Freight)</option>
                        <option value="Fast Delivery (Local Market if possible + Air Freight)">Fast Delivery (Local Market if possible + Air Freight)</option>
                    </select>
                    <span class="fas fa-shopping-cart select-icon"></span>
                </div>
            </div>

        </div>


    </div>
    -->



    <!-- Tender Documents Received -->

    
    <div class="form-wrapper">

        <div class="form-title">Tender Documents Received</div>
        <div class="notification">
            Click on any of the boxes below to select your preferred options, you can select more than one option.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-1" value="Unpriced BOQ" name="boq" class="radio-btn">
                    <label for="box-1" class="choice-label">Unpriced BOQ</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-2" value="Specification" name="specification" class="radio-btn">
                    <label for="box-2" class="choice-label">Specification</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-3" value="Drawings" name="drawings" class="radio-btn">
                    <label for="box-3" class="choice-label">Drawings</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-4" value="Form of Tender" name="tender_form" class="radio-btn">
                    <label for="box-4" class="choice-label">Form of Tender</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-5" value="Instruction to Tender" name="tender_instruction" class="radio-btn">
                    <label for="box-5" class="choice-label">Instruction to Tender</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-6" value="Schedule of Basic Rate" name="basic_rate" class="radio-btn">
                    <label for="box-6" class="choice-label">Schedule of Basic Rate</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-7" value="Schedule of Labour Rate" name="labour_rate" class="radio-btn">
                    <label for="box-7" class="choice-label">Schedule of Labour Rate</label>
                </div>
            </div>


        </div>


    </div>



    <!-- Other Tender Documents Received? If any, please specify below. -->
    
    <div class="form-wrapper">

        <div class="form-title">Other Tender Documents Received? If any, please specify below.</div>
        <div class="notification">
            Please provide document names, if more than one, separate with comma.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Other Tender Documents (If any)</label>
                <div class="form-control">
                    <input type="input" name="other_tender_doc" placeholder="E.g Doc 1, Doc 2 etc">
                    <span class="fas fa-file"></span>
                </div>
            </div>


        </div>


    </div>
    



    <!-- Technical Documents Received -->
    
    
    <div class="form-wrapper">

        <div class="form-title">Technical Documents Received</div>
        <div class="notification">
            Click on any of the boxes below to select your preferred options, you can select more than one option.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-8" value="Drawings" name="technical_drawings" class="radio-btn">
                    <label for="box-8" class="choice-label">Drawings</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-9" value="SLDs" name="slds" class="radio-btn">
                    <label for="box-9" class="choice-label">SLDs</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-10" value="MOS" name="mos" class="radio-btn">
                    <label for="box-10" class="choice-label">MOS</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-11" value="Understanding of Scope" name="scope_understanding" class="radio-btn">
                    <label for="box-11" class="choice-label">Understanding of Scope</label>
                </div>
            </div>


            <div class="form-group">
                <div class="form-control">
                    <input type="checkbox" id="box-12" value="POW" name="pow" class="radio-btn">
                    <label for="box-12" class="choice-label">POW</label>
                </div>
            </div>

        </div>


    </div>
    


    <!-- Other Technical Documents Received? If any, please specify below. -->
    
    <div class="form-wrapper">

        <div class="form-title">Other Technical Documents Required? If any, please specify below.</div>
        <div class="notification">
            Please provide document names, if more than one, separate with comma.
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group">
                <label>Other Technical Documents (If any)</label>
                <div class="form-control">
                    <input type="input" name="other_technical_doc" placeholder="E.g Doc 1, Doc 2 etc">
                    <span class="fas fa-file"></span>
                </div>
            </div>


        </div>


    </div>
    


    <!-- Other Technical Documents Received? If any, please specify below. -->
    
    <!--
    <div class="form-wrapper">

        <div class="form-title">Additional Information</div>
        <div class="notification">
            Please provide any additional information below, note that maximum character is 500
        </div>

        <div class="form-wrapper-flex">

            <div class="form-group fg-textarea">
                <label>Additional Information (Optional) <span class="asterisk" id="words">500 Words Left</span></label>
                <div class="form-control">
                    <textarea maxlength="500" name="additional_information" placeholder="Additional Information" onkeyup="CountWords(this)" id="txtBody"></textarea>
                </div>
            </div>


        </div>


    </div>
    -->



    <div class="form-wrapper no-border">

        <div class="form-wrapper-flex">

            <div class="form-group">
                <div class="form-control">
                    <button name="submit_project">Submit</button>
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

<script>
    $(document).ready(function () {
    // Fetch clients function
    var fetchClients = function(){
        // store selected option
        var selectedOption = $("#clients").val(); 
        $.ajax({
            url: 'script/get_project_clients.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                var select = $('#clients');
                select.empty();
                select.append('<option value="">Select Option</option>'); // Default first option
                if (data.length > 0) {
                    $.each(data, function (index, client) {
                        select.append('<option value="' + client.id + '">' + client.clients_name + '</option>');
                    });
                    // Reselect the previously selected option after updating
                    select.val(selectedOption);
                } else {
                    select.append('<option value="" disabled>No results found!</option>');
                }
                
                // Apply Select2
                select.select2({
                    theme: 'bootstrap4', // optional if you want to use bootstrap theme
                    width: 'resolve' // this helps to make the width 'auto'
                });
            },
            error: function () {
                console.error('Error fetching clients');
            }
        });
    }

    // Fetch clients as soon as page loads
    fetchClients();

    // Fetch clients every 5 seconds
    var refreshInterval = 5000; 
    setInterval(fetchClients, refreshInterval);
});
</script>

