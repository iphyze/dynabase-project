<?php
if(isset($_GET['code']) && $_GET['code'] != ""){
    
$code = $_GET['code'];
$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE code = '$code'");
$selected = mysqli_fetch_assoc($select);

$project_title = $selected['project_title'];
$project_client = $selected['project_client'];
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
$document_link = $selected['document_link'];        
$additional_information = $selected['additional_information'];
$created_by = $selected['created_by'];
$created_at = date('jS M, Y', strtotime($selected['created_at']));
$updated_by = $selected['updated_by'];
$updated_at = date('jS M, Y', strtotime($selected['updated_at']));

?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Tender Report Sheet    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Tender details 
    </div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=tender_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

<a href="#" id="print-btn" class='success-message theme-color'><i class='fas fa-file'></i> Print</a>    
    
</div>



<div class="print-container" style="page-break-before: always">

<div class="tender-title">
<!-- <i class="fas fa-user tender-icon"></i>-->
    <?php echo $project_title; ?>
</div>    
    
<div class="tender-flexbox">

    <div class="tender-col">
        <div class="tc-title">Tender Code:</div> <div class="tc-text"><?php echo $tender_code; ?></div>
    </div>
    <div class="tender-col">
    
    </div>
    
    <div class="tender-col tc-full">
        Project Client / Division
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Project Client:</div> <div class="tc-text"><?php echo $project_client; ?></div>
    </div>
    
    
    <div class="tender-col">
        <div class="tc-title">Key Person:</div> 
        <div class="tc-text">
            <?php
                if($keyperson == ""){
                    $keyperson = "N/A";
                }
                echo $keyperson;
            ?>
        </div>
    </div>
        
        
    <div class="tender-col">
        <div class="tc-title">Project Division:</div> <div class="tc-text"><?php echo $division; ?></div>
    </div>
    
    
    <div class="tender-col tc-full">
        Managers
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Project Manager:</div> 
        <div class="tc-text">
            <?php
                if($project_manager == ""){
                    $project_manager = "N/A";
                }
                echo $project_manager;
            ?>
        </div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">QS Manager:</div> 
        <div class="tc-text">
            <?php 
    
                if($qs_manager == ""){
                    $qs_manager = "N/A";
                }
                echo $qs_manager; 
            
            ?>
        </div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Mep Consultant:</div> 
        <div class="tc-text">
            <?php 
    
                if($mep_consultants == ""){
                    $mep_consultants = "N/A";
                }
                echo $mep_consultants; 
            
            ?>
        </div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Architect:</div> 
        <div class="tc-text">
            <?php 
    
                if($architect == ""){
                    $architect = "N/A";
                }
                echo $architect; 
            
            ?>
        </div>
    </div>
    
    
    
    <div class="tender-col tc-full">
        Period Covered - Months, RFI's Due Date & Tender Due Date
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Project Duration:</div> <div class="tc-text"><?php if($project_duration != ""){ echo $project_duration; }else{ echo "N/A"; } ?></div>
    </div>
    <div class="tender-col">
        <div class="tc-title">Tender Received Date:</div> <div class="tc-text"><?php echo $tender_received_date; ?></div>
    </div>
    
    <?php
    
    if($rfi_due_date != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">RFI Due Date:</div> <div class="tc-text"><?php echo $rfi_due; ?></div>
    </div>
    
    <?php
        
    }
    
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Tender Due Date:</div> <div class="tc-text"><?php echo $tender_due; ?></div>
    </div>
    
    
    
    
    <div class="tender-col tc-full">
        Tender Submission Date, Amount and Currency
    </div>
    
    <?php
    
    if($tender_submission_date == ""){
        
    ?>    
      
    
    <div class="tender-col">
        <div class="tc-title">Tender Submission Date:</div> <div class="tc-text"><?php echo "N/A"; ?></div>
    </div>
    
    
    <?php    
    }else{
        
    ?>
    
    
    <div class="tender-col">
        <div class="tc-title">Tender Submission Date:</div> <div class="tc-text"><?php echo date('jS M, Y', strtotime($tender_submission_date)); ?></div>
    </div>
    
    
    <?php
        
    }
    
    ?>
    
    
    <?php
    
    if($tender_amount != ""){
        
    ?>
    
    
    <div class="tender-col">
        <div class="tc-title">Tender Amount:</div> <div class="tc-text"><?php echo $currency . " " . number_format($tender_amount, 2); ?></div>
    </div>
    
    
    <?php
        
    }
    
    ?>
    
    
    <div class="tender-col tc-full">
        Project Location & Importance
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Project Country:</div> <div class="tc-text"><?php echo $project_country; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Project City:</div> <div class="tc-text"><?php echo $project_city; ?></div>
    </div>
    
    <?php
    
    if($project_importance != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Project Importance:</div> <div class="tc-text"><?php echo $project_importance; ?></div>
    </div>
    
    <?php
    }
    ?>
    
    
    
    <div class="tender-col tc-full">
        Contract Type, Preliminary Pricing & Pricing Strategy
    </div>
    
    <!-- Condition Start   -->
    
    <?php
    
    if($contract_type != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Contract Type:</div> <div class="tc-text"><?php echo $contract_type; ?></div>
    </div>
    
    <?php
    }else{
    
    ?>    
      
    <div class="tender-col">
        <div class="tc-title">Contract Type:</div> <div class="tc-text"><?php echo "N/A"; ?></div>
    </div>
    
    <?php
    }
    ?>
    
    <!-- Condition End   -->
    
    
    
    <!-- Condition Start   -->
    
    <?php
    
    if($prelim_pricing != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Preliminary Pricing:</div> <div class="tc-text"><?php echo $prelim_pricing; ?></div>
    </div>
    
    <?php
    }else{
    
    ?>    
      
    <div class="tender-col">
        <div class="tc-title">Preliminary Pricing:</div> <div class="tc-text"><?php echo "N/A"; ?></div>
    </div>
    
    <?php
    }
    ?>
    
    <!-- Condition End   -->

    
    <!-- Condition Start   -->
    
    <?php
    
    if($pricing_strategy != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Pricing Strategy:</div> <div class="tc-text"><?php echo $pricing_strategy; ?></div>
    </div>
    
    <?php
    }else{
    
    ?>    
      
    <div class="tender-col">
        <div class="tc-title">Pricing Strategy:</div> <div class="tc-text"><?php echo "N/A"; ?></div>
    </div>
    
    <?php
    }
    ?>
    
    <!-- Condition End   -->
    
    <div class="tender-col tc-full">
        Submission, Rate & Procurement Type
    </div>
    
    
    <!-- Condition Start   -->
    
    <?php
    
    if($date_extension != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Date Extension:</div> <div class="tc-text"><?php echo $date_extension; ?></div>
    </div>
    
    <?php
    }else{
    
    ?>    
      
    <div class="tender-col">
        <div class="tc-title">Date Extension:</div> <div class="tc-text"><?php echo "N/A"; ?></div>
    </div>
    
    <?php
    }
    ?>
    
    <!-- Condition End   -->
    
    
    
    
    <!-- Condition Start   -->
    
    <?php
    
    if($rate_used != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Naira Rate:</div> <div class="tc-text"><?php echo $rate_used; ?></div>
    </div>
    
    <?php
    }else{
    
    ?>    
      
    <div class="tender-col">
        <div class="tc-title">Naira Rate:</div> <div class="tc-text"><?php echo "N/A"; ?></div>
    </div>
    
    <?php
    }
    ?>
    
    <!-- Condition End   -->
    
    
    <!-- Condition Start   -->
    
    <?php
    
    if($procurement_type != ""){
        
    ?>
    
    <div class="tender-col">
        <div class="tc-title">Procurement Type:</div> <div class="tc-text"><?php echo $procurement_type; ?></div>
    </div>
    
    <?php
    }else{
    
    ?>    
      
    <div class="tender-col">
        <div class="tc-title">Procurement Type:</div> <div class="tc-text"><?php echo "N/A"; ?></div>
    </div>
    
    <?php
    }
    ?>
    
    <!-- Condition End   -->    
    
    
    <div class="tender-col tc-full">
        Tender Documents Received
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Boq: </div><div class="tc-text"><?php if($boq == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Specification:</div> <div class="tc-text"><?php if($specification == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Drawings: </div><div class="tc-text"><?php if($drawings == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Tender Form: </div><div class="tc-text"><?php if($tender_form == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Tender Instruction:</div> <div class="tc-text"><?php if($tender_instruction == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Basic Rate: </div><div class="tc-text"><?php if($basic_rate == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Labour Rate: </div><div class="tc-text"><?php if($labour_rate == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="page-break" style="page-break-after: always"></div>
    
    <?php
    if($other_tender_doc != ""){
    ?>
    <div class="tender-col tc-full">
        Other Tender Documents Received
    </div>
    
    <div class="tender-col">
        <div class="tc-title">-</div> <div class="tc-text"><?php echo $other_tender_doc; ?></div>
    </div>
    <?php  
    }
    ?>
    
    <div class="tender-col tc-full">
        Technical Documents Received
    </div>
    
    <div class="tender-col">
        <div class="tc-title">SLDs: </div><div class="tc-text"><?php if($slds == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">MOS: </div><div class="tc-text"><?php if($mos == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Scope Understanding: </div><div class="tc-text"><?php if($scope_understanding == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">POW: </div><div class="tc-text"><?php if($pow == ""){echo "Not Required"; }else{ echo "Required"; } ?></div>
    </div>
    
    <?php
    if($other_technical_doc != ""){
    ?>
    <div class="tender-col tc-full">
        Other Technical Documents Received
    </div>
    
    <div class="tender-col">
        <div class="tc-title">-</div> <div class="tc-text"><?php echo $other_technical_doc; ?></div>
    </div>
    <?php  
    }
    ?>
    
    
    
    <div class="tender-col tc-full">
        Tender Document Link
    </div>
    <?php
    
        if($document_link != ""){
    
    ?>
    <div class="tender-col">
        <div class="tc-text"><a target="_blank" href="<?php echo $document_link; ?>" id="print-btn" class='success-message theme-color'><i class='fas fa-link'></i> See Documents</a></div>
    </div>
    <?php
      
        }else{
            
    ?>        
      
    <div class="tender-col">
        <div class="tc-text">No link available</div>
    </div>
    
    <?php
        
        }
    
    ?>
    
    
    <div class="tender-col tc-full">
        User Credential
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Created By</div> <div class="tc-text"><?php echo $created_by; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Created At</div> <div class="tc-text"><?php echo $created_at; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Updated By</div> <div class="tc-text"><?php echo $updated_by; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Updated At</div> <div class="tc-text"><?php echo $updated_at; ?></div>
    </div>
    
</div>    
    
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
   
$('#print-btn').click(function(){
   
$('.print-container').printThis({
    importCSS: false,
    importStyle: true,
    base: "./dynabase",
    loadCSS: 'assets/css/print.css'
});    
    
});    
    
    
});
    
    

</script>