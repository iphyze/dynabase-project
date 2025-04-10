<?php
require('fpdf/pdf_js.php');
include_once('includes/connection.php');

//if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
       // header('location:login.php');
//}

if(isset($_GET['code']) && $_GET['code'] != ""){
    $code = $_GET['code'];
}else{
    header('location:index.php');
}



class PDF_AutoPrint extends PDF_JavaScript
{
    function AutoPrint($printer='')
    {
        // Open the print dialog
        if($printer)
        {
            $printer = str_replace('\\', '\\\\', $printer);
            $script = "var pp = getPrintParams();";
            $script .= "pp.interactive = pp.constants.interactionLevel.full;";
            $script .= "pp.printerName = '$printer'";
            $script .= "print(pp);";
        }
        else
            $script = 'print(true);';
        $this->IncludeJS($script);
    }
    
// Page header
function Header()
{
    
    $this->AddFont('Montserrat-Regular','','Montserrat-Regular.php'); //Regular

    $this->AddFont('Montserrat-Bold','','Montserrat-Bold.php'); //Bold
    
    $this->SetFont('Montserrat-Bold','',15);
    
    $this->SetY (15);


    //Set Font to Calribi, Bold, 14pt
    $this -> SetFont('Montserrat-Bold', '', '12');
    $this -> SetTextColor(52, 223, 136);
    
    $image = "lambert.png";

    //Cell (Width, Height, Text, Border, End Line, Align)
    $this -> Image($image, 155, 10, 45, 9);
    
}

// Page footer
function Footer()
{
    $this-> SetXY (5, -20);
    $this -> SetFont('Montserrat-Regular', '', '6');
    $this-> Cell(0, 3, "Page " . $this->PageNo(), 0, 1, 'R');
}
}


$pdf = new FPDF('P', 'mm', 'A4');

$pdf = new PDF_AutoPrint();

$pdf->  AliasNbPages();

$pdf -> AddPage();

$pdf->AddFont('Montserrat-Regular','','Montserrat-Regular.php'); //Regular

$pdf->AddFont('Montserrat-Bold','','Montserrat-Bold.php'); //Bold


global $db;
global $code;

$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE code = '$code'");
$selected = mysqli_fetch_assoc($select);

$project_title = $selected['project_title'];
$project_client = $selected['project_client'];
$division = $selected['division'];
$project_duration = $selected['project_duration'];
$project_country = $selected['project_country'];
$project_city = $selected['project_city'];
$tender_code = $selected['tender_code'];
$project_manager = $selected['project_manager'];
$qs_manager = $selected['qs_manager'];
$mep_consultants = $selected['mep_consultants'];
$architect = $selected['architect'];
$project_duration = $selected['project_duration'];
$rfi_due = date('jS F, Y', strtotime($selected['rfi_due']));
$tender_due = date('jS F, Y', strtotime($selected['tender_due']));
$tender_received_date = date('jS F, Y', strtotime($selected['tender_received_date']));
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
$other_tender_doc = $other_tender_doc . ".";
}


if($other_technical_doc == ""){
$other_technical_doc = ".";
}else{
$other_technical_doc = $other_technical_doc . ".";
}

if($project_manager == ""){
$project_manager = "N/A";
}

if($qs_manager == ""){
$qs_manager = "N/A";
$mep_consultants = $selected['mep_consultants'];
$architect = $selected['architect'];
}

if($mep_consultants == ""){
$mep_consultants = "N/A";
$architect = $selected['architect'];
}

if($architect == ""){
$architect = "N/A";
}


if($additional_information == ""){
    $additional_information = "None";
}

$pdf -> SetY (25);
$pdf -> SetFont('Montserrat-Bold', '', '10');
$pdf -> SetFillColor(255, 255, 255);
$pdf -> SetTextColor(89, 186, 89);
$pdf -> MultiCell(190, 5, strtoupper($project_title) . ' TENDER', 0, 'C', false);

//$pdf->MultiCell(100,10,'Alignment = C',1,'C',false);


//$pdf ->SetY (43);
$pdf -> SetFont('Montserrat-Regular', '', '9');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(190, 7, 'Tender Code (#): '. $tender_code, 0, 1, 'R');


//$pdf ->SetY (43);
$pdf -> SetFont('Montserrat-Bold', '', '6');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(190, 7, "Page " . $pdf->PageNo(), 0, 1, 'R');


//Personal Information

//$pdf -> SetY (55);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Project Name', 0, 1, 'L', true);


//$pdf -> SetY (63);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(190, 5, 'PROJECT NAME', 0, 1);


//$pdf ->SetY (68);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetFillColor(255, 255, 255);
$pdf -> SetTextColor(120, 120, 120);
$pdf -> MultiCell(190, 5, $project_title, 0, 1, 'L');


$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//end Personal Information



//$pdf -> SetY (55);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Project Client / Division', 0, 1, 'L', true);


//$pdf -> SetY (63);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(95, 5, 'PROJECT CLIENT', 0, 0);

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(95, 5, 'DIVISION', 0, 1);


//$pdf ->SetY (68);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(95, 5, $project_client, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(95, 5, $division, 0, 1, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//end Personal Information


//Managers
//$pdf -> SetY (80);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Managers', 0, 1, 'L', true);

//$pdf -> SetY (88);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PROJECT MANAGER', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'QS MANAGER', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'MEP CONSULTANT', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'ARCHITECT', 0, 1, 'L');


//$pdf ->SetY (95);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $project_manager, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $qs_manager, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $mep_consultants, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $architect, 0, 1, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//end Managers



//Period Covered
//$pdf -> SetY (109);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Period Covered - Months covered, RFIs\' due date & tender due date', 0, 1, 'L', true);

//$pdf -> SetY (117);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PROJECT DURATION', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'TENDER RECEIVED DATE', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'RFI\'s DUE DATE', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'TENDER DUE DATE', 0, 1, 'L');


//$pdf ->SetY (123);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $project_duration, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $tender_received_date, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $rfi_due, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $tender_due, 0, 1, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//end period covered!


//Period Covered
//$pdf -> SetY (109);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Tender Submission Date / Tender Amount', 0, 1, 'L', true);

//$pdf -> SetY (117);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(95, 5, 'TENDER SUBMISSION DATE', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(95, 5, 'TENDER AMOUNT', 0, 1, 'L');


if($tender_submission_date != ""){

//$pdf ->SetY (123);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(95, 5, $tender_submission_date, 0, 0, 'L');    
    
}else{
    
//$pdf ->SetY (123);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(95, 5, 'N/A', 0, 0, 'L');
    
}

if($tender_amount != ""){

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(95, 5, $currency . ' ' . number_format($tender_amount, 2), 0, 1, 'L');
//end period covered!

    
}else{
    
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(95, 5, 'N/A', 0, 1, 'L');
//end period covered!    
    
}


$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(190, 2, '', 0, 1, 'L');




//Project Location/Importance
//$pdf -> SetY (135);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Project Location & Importance', 0, 1, 'L', true);

//$pdf -> SetY (143);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PROJECT COUNTRY', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PROJECT CITY', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PROJECT IMPORTANCE', 0, 1, 'L');


//$pdf ->SetY (149);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $project_country, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $project_city, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $project_importance, 0, 1, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//end project location & importance



//Contract type, Preliminary Pricing & Pricing Strategy
//$pdf -> SetY (160);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Contract type, Preliminary Pricing & Pricing Strategy', 0, 1, 'L', true);

//$pdf -> SetY (169);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'CONTRACT TYPE', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PRELIMINARY PRICING', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PRICING STRATEGY', 0, 1, 'L');


//$pdf ->SetY (174);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $contract_type, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $prelim_pricing, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '7');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $pricing_strategy, 0, 1, 'L');


$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//Contract type, Preliminary Pricing & Pricing Strategy




//Submission, Rate & Procurement Type
//$pdf -> SetY (186);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 7, 'Submission, Rate & Procurement Type', 0, 1, 'L', true);

//$pdf -> SetY (195);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'DATE EXTENSION?', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'NAIRA RATE', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'PROCUREMENT TYPE', 0, 1, 'L');


//$pdf ->SetY (200);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $date_extension, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $rate_used, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $procurement_type, 0, 1, 'L');


$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//Submission, Rate & Procurement Type




//Tender Documents Received
//$pdf -> SetY (213);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Tender Documents Received', 0, 1, 'L', true);


//$pdf ->SetY (220);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetFillColor(255, 255, 255);
$pdf -> SetTextColor(120, 120, 120);
$pdf -> MultiCell(190, 5, $tender_docs . $other_tender_doc, 0, 1, 'L');



$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//Contract type, Preliminary Pricing & Pricing Strategy




//Tender Documents Received
//$pdf -> SetY (242);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Technical Documents Received', 0, 1, 'L', true);


//$pdf ->SetY (249);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetFillColor(255, 255, 255);
$pdf -> SetTextColor(120, 120, 120);
$pdf -> MultiCell(190, 5, $technical_docs . $other_technical_doc, 0, 1, 'L');


$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L'); 
//Contract type, Preliminary Pricing & Pricing Strategy



//Submission, Rate & Procurement Type
//$pdf -> SetY (186);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Vendor Information, Tender Status & Progress', 0, 1, 'L', true);

//$pdf -> SetY (195);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'VENDOR INFORMATION', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'TENDER STATUS', 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(89, 186, 89);
$pdf -> Cell(47.5, 5, 'TENDER PROGRESS', 0, 1, 'L');


//$pdf ->SetY (200);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $vendor_information, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $project_status, 0, 0, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(120, 120, 120);
$pdf -> Cell(47.5, 5, $progress, 0, 1, 'L');


$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L');//Submission, Rate & Procurement Type



//Tender Documents Received
//$pdf -> SetY (242);
$pdf -> SetFont('Montserrat-Bold', '', '9');
$pdf -> SetFillColor(89, 186, 89);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(190, 5, 'Additional Information', 0, 1, 'L', true);


//$pdf ->SetY (249);
$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetFillColor(255, 255, 255);
$pdf -> SetTextColor(120, 120, 120);
$pdf -> MultiCell(190, 5, $additional_information, 0, 1, 'L');

$pdf -> SetFont('Montserrat-Regular', '', '8');
$pdf -> SetTextColor(255, 255, 255);
$pdf -> Cell(47.5, 2, $division, 0, 1, 'L'); 
//Contract type, Preliminary Pricing & Pricing Strategy


$pdf->AutoPrint(); 

//Output the document
$pdf->Output($project_title . ' ' . $code . ' Tender.pdf','I'); 


?>