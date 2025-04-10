<?php

include_once('../includes/connection.php');
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$code = $db->real_escape_string($_POST['code']);     
//$id = $db->real_escape_string($_POST['id']);     
$project_title = $db->real_escape_string($_POST['project_title']);
$clients_nameList = $_POST['project_client'];
$end_user = $db->real_escape_string($_POST['end_user']);
$division = $db->real_escape_string($_POST['division']);
$project_manager = $_POST['project_manager'];
$qs_manager = $_POST['qs_manager'];
$mep_consultants = $_POST['mep_consultant'];
$architects = $_POST['architects'];
$tender_received_date = $db->real_escape_string($_POST['tender_received_date']);
$tender_due = $db->real_escape_string($_POST['tender_due']);
$tender_documentList = $_POST['tender_document'];
$technical_documentList = $_POST['technical_document'];
$project_country = $db->real_escape_string($_POST['project_country']);
$project_city = $db->real_escape_string($_POST['project_city']);    	
$project_duration = $db->real_escape_string($_POST['project_duration']);
$rfi_due = $db->real_escape_string($_POST['rfi_due']);
$tender_submission_date = $db->real_escape_string($_POST['tender_submission_date']);
$tender_amount = $db->real_escape_string($_POST['tender_amount']);
$currency = $db->real_escape_string($_POST['currency']);
$city_code = $db->real_escape_string($_POST['city_code']);
$project_importance = $db->real_escape_string($_POST['project_importance']);
$contract_type = $db->real_escape_string($_POST['contract_type']);
$prelim_pricing = $db->real_escape_string($_POST['prelim_pricing']);
$pricing_strategy = $db->real_escape_string($_POST['pricing_strategy']);
$date_extension = $db->real_escape_string($_POST['date_extension']);
$rate_used = $db->real_escape_string($_POST['rate_used']);
$procurement_type = $db->real_escape_string($_POST['procurement_type']);
$project_status = $db->real_escape_string($_POST['project_status']);
$progress = $db->real_escape_string($_POST['progress']);
$vendor_information = $db->real_escape_string($_POST['vendor_information']);
$document_link = $db->real_escape_string($_POST['document_link']);
$additional_information = $db->real_escape_string($_POST['additional_information']);
$updated_by = $_SESSION['email'];
$created_by = $_SESSION['email'];
$updated_at = date('Y-m-d H:i:s');    
$errMsg = FALSE;
$sqlQueries = '';
        
        
        
        
        
        
        
if($end_user == "Other End User / Owner"){
    $end_user = $db->real_escape_string($_POST['other_end_user']);
}else{
    $end_user = $db->real_escape_string($_POST['end_user']);
}


if($project_manager == "Other Project Manager"){
    $project_manager = $db->real_escape_string($_POST['other_project_manager']);
}else{
    $project_manager = $db->real_escape_string($_POST['project_manager']);
}


if($qs_manager == "Other Qs Manager"){
    $qs_manager = $db->real_escape_string($_POST['other_qs_manager']);
}else{
    $qs_manager = $db->real_escape_string($_POST['qs_manager']);
}



if($mep_consultants == "Other Mep Consultant"){
    $mep_consultants = $db->real_escape_string($_POST['other_mep_consultant']);
}else{
    $mep_consultants = $db->real_escape_string($_POST['mep_consultant']);
}        
        
        
        
        
        
        
        

if($project_country == "Nigeria"){
    $country_code = "NGN";
}elseif($project_country == "Ghana"){
    $country_code = "GHA";
}elseif($project_country == "Ivory Coast"){
    $country_code = "CIV";
}
    
    
$words = preg_split("/[\s,_-]+/", strtoupper($project_title));

$project_name_code = "";

foreach ($words as $w) {
  $project_name_code .= mb_substr($w, 0, 1);
}

$proj_name_code = substr($project_name_code, 0, 3);    
    

$sub_code = 251;
        
$get_code = mysqli_query($db, "SELECT sub_code FROM project_code_table");
$get_num_code = mysqli_num_rows($get_code);

if($get_num_code == 0){
    $sub_code = 251;    
}else{
    $sub_code_id = mysqli_query($db, "SELECT MAX(sub_code) AS sub_code FROM project_code_table");
    $sub_code = mysqli_fetch_assoc($sub_code_id);
    $sub_code = $sub_code['sub_code'] + 1;

}


$project_code = 'LEM' . '-' . $proj_name_code . '-' . $city_code . '-' . $sub_code;
        
if($division == "Power"){
    $division_code = "PWR";
}elseif($division == "Data Centre"){
    $division_code = "DCT";
}elseif($division == "Oil & Gas"){
    $division_code = "ONG";
}elseif($division == "Facilities & Maintenance"){
    $division_code = "FNM";
}elseif($division == "Building & Factories"){
    $division_code = "BNF";
}    
     
    
    
if($_POST['tender_awarded_date'] != ""){
        $awarded_date = mysqli_real_escape_string($db, $_POST['tender_awarded_date']);
        $tender_awarded_date = date('Y-m-d', strtotime($awarded_date));
    }else{
        $tender_awarded_date = "";
    }    
    
    
    
$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_title = '$project_title' && code != '$code'");
$num = mysqli_num_rows($select);   
   
    
    
if ($num > 0) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $project_title tender already exists!</div>";
$errMsg = TRUE;

}    
    
    
    

// Loop through the arrays
for ($i = 0; $i < count($clients_nameList); $i++) {
    $clients_id = $_POST['clients_id'][$i];
    $clients_name = $_POST['clients_name'][$i];
    $key_person = $_POST['key_person'][$i];

    
    
    
    if(empty($clients_name)){
    
    $message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please fill out all client name fields!</div>";
    $errMsg = TRUE;  

    }    


    if(empty($key_person)){

    $message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please fill out all keypersons fields!</div>";
    $errMsg = TRUE;  

    }
    
    
    
    // Check if the key exists before accessing it
    if (isset($_POST['clients_tab_id'][$i])) {
        $clients_tab_id = $_POST['clients_tab_id'][$i];
    } else {
        // Handle the case where the key is undefined
        $clients_tab_id = null; // or assign a default value
    }

    // ...

    if ($clients_tab_id === "" || !isset($clients_tab_id)) {
        // If $clients_tab_id is either undefined or empty, it means it's a new row, so generate a new ID
        $sqlGetMaxId = "SELECT MAX(id) as max_id FROM clients_keypersons_table";
        $result = mysqli_query($db, $sqlGetMaxId);
        $row = mysqli_fetch_assoc($result);
        $clients_tab_id = $row['max_id'] + 1;
    }
    
    
    
    $selectClientsName = mysqli_query($db, "SELECT * FROM clients_keypersons_table WHERE project_id = '$code' && clients_name = '$clients_name' && id != '$clients_tab_id'");
    $numClients = mysqli_num_rows($selectClientsName);

    if ($numClients > 0) {
        $message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $clients_name is already a client for this tender!</div>";
        $errMsg = TRUE;
       
    }
    
    
    $sqlQueries .= "INSERT INTO clients_keypersons_table (id, project_id, project_title, clients_name, clients_id, keyperson, updated_by, created_by) VALUES ('$clients_tab_id', '$code', '$project_title', '$clients_name', '$clients_id', '$key_person', '$updated_by', '$created_by') ON DUPLICATE KEY UPDATE project_title = '$project_title', clients_name = '$clients_name', clients_id = '$clients_id', keyperson = '$key_person', updated_by = '$updated_by';\n";
    
}

 
    

    
    
        

//Loop through the arrays
for ($j = 0; $j < count($tender_documentList); $j++) {

 
$tender_document = $_POST['tender_document'][$j];    
//$tender_doc_id = $_POST['tender_doc_id'][$i];             

    
// Check if the key exists before accessing it
if (isset($_POST['tender_doc_id'][$j])) {
    $tender_doc_id = $_POST['tender_doc_id'][$j];
} else {
    // Handle the case where the key is undefined
    $tender_doc_id = null; // or assign a default value
}

// ...

if ($tender_doc_id === "" || !isset($tender_doc_id)) {
    // If $clients_tab_id is either undefined or empty, it means it's a new row, so generate a new ID
    $sqlGetTendDocMaxId = "SELECT MAX(id) as max_id FROM tender_document_table";
    $tendDocResult = mysqli_query($db, $sqlGetTendDocMaxId);
    $tenderRow = mysqli_fetch_assoc($tendDocResult);
    $tender_doc_id = $tenderRow['max_id'] + 1;
}    
    
    
    
$selectTenderDoc = mysqli_query($db, "SELECT * FROM tender_document_table WHERE project_id = '$code' && tender_document = '$tender_document' && id != '$tender_doc_id'");
$numTenderDoc = mysqli_num_rows($selectTenderDoc);
    
    
    
if ($numTenderDoc > 0) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $tender_document already exists for this tender!</div>";
$errMsg = TRUE;
}    

    
    
if(!empty($tender_document)){

$sqlQueries .= "INSERT INTO tender_document_table (id, project_id, project_title, tender_document, created_by, updated_by)VALUES('$tender_doc_id', '$code', '$project_title', '$tender_document', '$created_by', '$updated_by')ON DUPLICATE KEY UPDATE project_title='$project_title', tender_document='$tender_document', updated_by='$updated_by';\n";
    
}
    
}
        
    
    
//Loop through the arrays
for ($k = 0; $k < count($technical_documentList); $k++) {

 
$technical_document = $_POST['technical_document'][$k];    
//$tech_doc_id = $_POST['tech_doc_id'][$i];

    

// Check if the key exists before accessing it
if (isset($_POST['tech_doc_id'][$k])) {
    $tech_doc_id = $_POST['tech_doc_id'][$k];
} else {
    // Handle the case where the key is undefined
    $tech_doc_id = null; // or assign a default value
}

// ...

if ($tech_doc_id === "" || !isset($tech_doc_id)) {
    // If $clients_tab_id is either undefined or empty, it means it's a new row, so generate a new ID
    $sqlGetTechDocMaxId = "SELECT MAX(id) as max_id FROM technical_document_table";
    $techDocResult = mysqli_query($db, $sqlGetTechDocMaxId);
    $techRow = mysqli_fetch_assoc($techDocResult);
    $tech_doc_id = $techRow['max_id'] + 1;
}    
    
    
    
    
$selectTechDoc = mysqli_query($db, "SELECT * FROM technical_document_table WHERE project_id = '$code' && technical_document = '$technical_document' && id != '$tech_doc_id'");
$numTechDoc = mysqli_num_rows($selectTechDoc);
    
if ($numTechDoc > 0) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $technical_document already exists for this tender!</div>";
$errMsg = TRUE;
}    

    
    
if(!empty($technical_document)){

$sqlQueries .= "INSERT INTO technical_document_table (id, project_id, project_title, technical_document, created_by, updated_by)VALUES('$tech_doc_id', '$code', '$project_title', '$technical_document', '$created_by', '$updated_by')ON DUPLICATE KEY UPDATE project_title='$project_title', technical_document='$technical_document', updated_by='$updated_by';\n";    
    
}
    
}    
    
    

if($errMsg !== TRUE){	
// Insert data into invoice_table
$sqlQueries .= "UPDATE project_info_table SET project_title = '$project_title', end_user = '$end_user', division = '$division', project_manager = '$project_manager', qs_manager = '$qs_manager', mep_consultants = '$mep_consultants', architect = '$architects', project_duration = '$project_duration', rfi_due = '$rfi_due', tender_received_date = '$tender_received_date', tender_due = '$tender_due', tender_submission_date = '$tender_submission_date', tender_amount = '$tender_amount', currency = '$currency', project_country = '$project_country', project_city = '$project_city', project_importance = '$project_importance', contract_type = '$contract_type', prelim_pricing = '$prelim_pricing', pricing_strategy = '$pricing_strategy', date_extension = '$date_extension', rate_used = '$rate_used', procurement_type = '$procurement_type', project_status = '$project_status', progress = '$progress', tender_awarded_date = '$tender_awarded_date', vendor_information = '$vendor_information', document_link = '$document_link', additional_information = '$additional_information', updated_by = '$updated_by', updated_at = '$updated_at', city_code = '$city_code' WHERE code = $code;\n";
	

if($progress == "Awarded"){
                    
                    
$findCode = mysqli_query($db, "SELECT * FROM project_code_table WHERE tender_code = '$code'");
$codeNum = mysqli_num_rows($findCode);


if($codeNum > 0){

    $success_message = "<span class='fas fa-check success-icon'></span><div class='success-suc-message'>$project_title tender has successfully been updated</div>";

}else{

    mysqli_query($db, "INSERT INTO project_code_table(tender_code, project_title, project_code, sub_code)VALUES('$code', '$project_title', '$project_code', '$sub_code')");

    $success_message = "<span class='fas fa-check success-icon'></span><div class='success-suc-message'>$project_title tender has successfully been updated and the project code is $project_code</div>";

}

}else{


    mysqli_query($db, "DELETE FROM project_code_table WHERE tender_code = '$code'");

    $success_message = "<span class='fas fa-check success-icon'></span><div class='success-suc-message'>$project_title tender has successfully been updated</div>";        

}    
    
    
    
// Execute all accumulated queries
    if ($db->multi_query($sqlQueries) !== TRUE) {
        $response = array(
            'status' => 'error',
            'message' => "Error: " . $sqlQueries . "<br>" . $db->error
        );
    } else {
        $response = array(
            'status' => 'success',
            'message' => $success_message
        );
    }
      

}else{

    // If $errMsg is TRUE or any other error occurs
    $response = array('status' => 'error', 'message' => $message);  
    
}
    
 
echo json_encode($response);
exit(); 

}

?>