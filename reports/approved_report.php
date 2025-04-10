<?php
include_once('includes/connection.php');
include_once('includes/functions.php');
session_start();

if(!isset($_SESSION['email'])){
    header('location:login.php');
}

include('excel/PHPExcel.php');

$objPHPExcel = new PHPExcel();

$objPHPExcel->setActiveSheetIndex(0);

$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'S/N');
$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Project Title');
$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Project Client');
$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Division');
$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Project Manager (Consultants)');
$objPHPExcel->getActiveSheet()->SetCellValue('F1', 'QS Manager (Consultants)');
$objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Mep (Consultants)');
$objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Architect');
$objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Project Duration');
$objPHPExcel->getActiveSheet()->SetCellValue('J1', 'RFIs Due Date');
$objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Tender Received Date');
$objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Tender Due Date');
$objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Project Country');
$objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Project City');
$objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Project Importance');
$objPHPExcel->getActiveSheet()->SetCellValue('P1', 'Contract Type');
$objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'Preliminary Pricing');
$objPHPExcel->getActiveSheet()->SetCellValue('R1', 'Pricing Strategy');
$objPHPExcel->getActiveSheet()->SetCellValue('S1', 'Supplier/Vendor Information');
$objPHPExcel->getActiveSheet()->SetCellValue('T1', 'Date Extension Possibility');
$objPHPExcel->getActiveSheet()->SetCellValue('U1', 'Naira Rate');
$objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Procurement Type');
$objPHPExcel->getActiveSheet()->SetCellValue('W1', 'Tender Documents Received');
$objPHPExcel->getActiveSheet()->SetCellValue('X1', 'Other Tender Documents');
$objPHPExcel->getActiveSheet()->SetCellValue('Y1', 'Technical Documents Received');
$objPHPExcel->getActiveSheet()->SetCellValue('Z1', 'Other Technical Documents');
$objPHPExcel->getActiveSheet()->SetCellValue('AA1', 'Tender Status');
$objPHPExcel->getActiveSheet()->SetCellValue('AB1', 'Tender Progress');
$objPHPExcel->getActiveSheet()->SetCellValue('AC1', 'Additional Information');
$objPHPExcel->getActiveSheet()->SetCellValue('AD1', 'Tender Code');

$objPHPExcel->getActiveSheet()->getStyle("A1:AD1")->getFont()->setBold(true);


$sn = 0;
$sn_two = 1;

$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_status='Approved'");
$selected = mysqli_fetch_assoc($select);


foreach($select as $selected){

$sn = $sn + 1;
$sn_two = $sn_two + 1;
$project_title = $selected['project_title'];
$project_client = $selected['project_client'];
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

$tender_docs = $boq . ', ' . $specification . ', ' . $drawings . ', ' . $tender_form . ', ' . $tender_instruction . ', ' . $basic_rate . ', ' . $labour_rate;

$other_tender_doc = $selected['other_tender_doc'];    
$technical_drawings = $selected['technical_drawings'];
$slds = $selected['slds'];
$mos = $selected['mos'];
$scope_understanding = $selected['scope_understanding'];
$pow = $selected['pow'];

$technical_docs = $technical_drawings . ', ' . $slds . ', ' . $mos . ', ' . $scope_understanding . ', ' . $pow;

$other_technical_doc = $selected['other_technical_doc'];
$code = $selected['code'];
$project_status = $selected['project_status'];        
$progress = $selected['progress'];        
$vendor_information = $selected['vendor_information'];        
$additional_information = $selected['additional_information'];        
//$sn = $sn_two + 1;
    
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$sn_two, ($sn));
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$sn_two, ($project_title));
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$sn_two, ($project_client));
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$sn_two, ($division));
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$sn_two, ($project_manager));
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$sn_two, ($qs_manager));
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$sn_two, ($mep_consultants));
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$sn_two, ($architect));
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$sn_two, ($project_duration));
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$sn_two, ($rfi_due_date));
$objPHPExcel->getActiveSheet()->SetCellValue('K'.$sn_two, ($tender_r_date));
$objPHPExcel->getActiveSheet()->SetCellValue('L'.$sn_two, ($tender_due_date));
$objPHPExcel->getActiveSheet()->SetCellValue('M'.$sn_two, ($project_country));
$objPHPExcel->getActiveSheet()->SetCellValue('N'.$sn_two, ($project_city));
$objPHPExcel->getActiveSheet()->SetCellValue('O'.$sn_two, ($project_importance));
$objPHPExcel->getActiveSheet()->SetCellValue('P'.$sn_two, ($contract_type));
$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$sn_two, ($prelim_pricing));
$objPHPExcel->getActiveSheet()->SetCellValue('R'.$sn_two, ($pricing_strategy));
$objPHPExcel->getActiveSheet()->SetCellValue('S'.$sn_two, ($vendor_information));
$objPHPExcel->getActiveSheet()->SetCellValue('T'.$sn_two, ($date_extension));
$objPHPExcel->getActiveSheet()->SetCellValue('U'.$sn_two, ($rate_used));
$objPHPExcel->getActiveSheet()->SetCellValue('V'.$sn_two, ($procurement_type));
$objPHPExcel->getActiveSheet()->SetCellValue('W'.$sn_two, ($tender_docs));
$objPHPExcel->getActiveSheet()->SetCellValue('X'.$sn_two, ($other_tender_doc));
$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$sn_two, ($technical_docs));
$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$sn_two, ($other_technical_doc));
$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$sn_two, ($project_status));
$objPHPExcel->getActiveSheet()->SetCellValue('AB'.$sn_two, ($progress));
$objPHPExcel->getActiveSheet()->SetCellValue('AC'.$sn_two, ($additional_information));
$objPHPExcel->getActiveSheet()->SetCellValue('AD'.$sn_two, ($tender_code));    

}    
    
$filename = "Approved Tender Report";

$objWriter	=	new PHPExcel_Writer_Excel2007($objPHPExcel);

header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment; filename=' . $filename . '.xlsx'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
$objWriter->save('php://output');
?>