<?php
include_once('../includes/connection.php');
include_once('../includes/functions.php');
session_start();


if(!isset($_SESSION['email'])){
    header('location:login.php');
}


//header("Content-type: application/vnd-ms-excel");
header("Content-type: application/vnd.openxmlformats-officedocument.spreasheetml.sheet");

$filename = "Tender In Progress Report.xls";

header("Content-Disposition:attachment;filename={$filename}");

?>

<table>
<tr>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">S/N</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Project Title</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Project Client</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Key Person</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Division</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Project Manager (Consultants)</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">QS Manager (Consultants)</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Mep (Consultants)</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Architect</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Project Duration</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">RFIs Due Date</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Received Date</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Due Date</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Submission Date</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Currency</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Amount</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Project Country</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Project City</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Project Importance</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Contract Type</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Preliminary Pricing</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Pricing Strategy</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Supplier/Vendor Information</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Date Extension Possibility</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Naira Rate</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Procurement Type</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Documents Received</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Other Tender Documents</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Technical Documents Received</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Other Technical Documents</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Status</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Progress</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Additional Information</td>
    <td style="border: 1px solid black; color: white; background-color: black; font-weight: bold">Tender Code</td>
</tr>

<?php

$sn = 0;
$sn_two = 1;

$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE progress='In Progress' ");
$selected = mysqli_fetch_assoc($select);
$num = mysqli_num_rows($select);

    
if($num > 0){    
foreach($select as $selected){

$sn = $sn + 1;
$sn_two = $sn_two + 1;
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
$project_country = $selected['project_country'];
$tender_submission_date = $selected['tender_submission_date'];
$currency = $selected['currency'];
$tender_amount = $selected['tender_amount'];
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
$project_status = $selected['project_status'];        
$progress = $selected['progress'];        
$vendor_information = $selected['vendor_information'];        
$additional_information = $selected['additional_information'];        

    
if($boq == ""){
    $boq = "";
}else{
    $boq = $boq . ', ';
}

if($specification == ""){
    $specification = "";
}else{
    $specification = $specification . ', ';
}

if($drawings == ""){
    $drawings = "";
}else{
    $drawings = $drawings . ', ';
}

if($tender_form == ""){
    $tender_form = "";
}else{
    $tender_form = $tender_form . ', ';
}

if($tender_instruction == ""){
    $tender_instruction = "";
}else{
    $tender_instruction = $tender_instruction . ', ';
}


if($basic_rate == ""){
    $basic_rate = "";
}else{
    $basic_rate = $basic_rate . ', ';
}


if($labour_rate == ""){
    $labour_rate = "";
}else{
    $labour_rate = $labour_rate . ', ';
}

$tender_docs = $boq . $specification . $drawings . $tender_form . $tender_instruction . $basic_rate . $labour_rate;


if($technical_drawings == ""){
    $technical_drawings = "";
}else{
    $technical_drawings = $technical_drawings . ', ';
}

if($slds == ""){
    $slds = "";
}else{
    $slds = $slds . ', ';
}

if($mos == ""){
    $mos = "";
}else{
    $mos = $mos . ', ';
}

if($scope_understanding == ""){
    $scope_understanding = "";
}else{
    $scope_understanding = $scope_understanding . ', ';
}

if($pow == ""){
    $pow = "";
}else{
    $pow = $pow . ', ';
}

$technical_docs = $technical_drawings . $slds . $mos . $scope_understanding. $pow;


if($other_tender_doc == ""){
$other_tender_doc = ".";
}else{
$other_tender_doc = $other_tender_doc;
}


if($other_technical_doc == ""){
$other_technical_doc = ".";
}else{
$other_technical_doc = $other_technical_doc;
}
    
?>

<tr>
    <td style="border: 1px solid black"><?php echo $sn; ?></td>
    <td style="border: 1px solid black"><?php echo $project_title; ?></td>
    <td style="border: 1px solid black"><?php echo $project_client; ?></td>
    <td style="border: 1px solid black"><?php echo $keyperson; ?></td>
    <td style="border: 1px solid black"><?php echo $division; ?></td>
    <td style="border: 1px solid black"><?php echo $project_manager; ?></td>
    <td style="border: 1px solid black"><?php echo $qs_manager; ?></td>
    <td style="border: 1px solid black"><?php echo $mep_consultants; ?></td>
    <td style="border: 1px solid black"><?php echo $architect; ?></td>
    <td style="border: 1px solid black"><?php echo $project_duration; ?></td>
    <td style="border: 1px solid black"><?php echo $rfi_due_date; ?></td>
    <td style="border: 1px solid black"><?php echo $tender_r_date; ?></td>
    <td style="border: 1px solid black"><?php echo $tender_due_date; ?></td>
    <td style="border: 1px solid black"><?php echo $tender_submission_date; ?></td>
    <td style="border: 1px solid black"><?php echo $currency; ?></td>
    <td style="border: 1px solid black"><?php echo $tender_amount; ?></td>
    <td style="border: 1px solid black"><?php echo $project_country; ?></td>
    <td style="border: 1px solid black"><?php echo $project_city; ?></td>
    <td style="border: 1px solid black"><?php echo $project_importance; ?></td>
    <td style="border: 1px solid black"><?php echo $contract_type; ?></td>
    <td style="border: 1px solid black"><?php echo $prelim_pricing; ?></td>
    <td style="border: 1px solid black"><?php echo $pricing_strategy; ?></td>
    <td style="border: 1px solid black"><?php echo $vendor_information; ?></td>
    <td style="border: 1px solid black"><?php echo $date_extension; ?></td>
    <td style="border: 1px solid black"><?php echo $rate_used; ?></td>
    <td style="border: 1px solid black"><?php echo $procurement_type; ?></td>
    <td style="border: 1px solid black"><?php echo $tender_docs; ?></td>
    <td style="border: 1px solid black"><?php echo $other_tender_doc; ?></td>
    <td style="border: 1px solid black"><?php echo $technical_docs; ?></td>
    <td style="border: 1px solid black"><?php echo $other_technical_doc; ?></td>
    <td style="border: 1px solid black"><?php echo $project_status; ?></td>
    <td style="border: 1px solid black"><?php echo $progress; ?></td>
    <td style="border: 1px solid black"><?php echo $additional_information; ?></td>
    <td style="border: 1px solid black"><?php echo $tender_code; ?></td>
</tr>
<?php    
    }
}else{
?>
    
<tr>
    <td colspan="30" style="border: 1px solid black">No Data Found!</td>
</tr>    
    
<?php
}
?>
</table>