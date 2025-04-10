<?php

include_once('includes/connection.php');
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$project_title = $db->real_escape_string($_POST['project_title']);
$clients_nameList = $_POST['clients_name'];
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
$project_status = "On Hold";
$progress = "Pending";
$created_by = $_SESSION['email'];
$updated_by = $_SESSION['email'];
$errMsg = FALSE;	
$errMsg_2 = FALSE;
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

    

$words = preg_split("/[\s,_-]+/", strtoupper($project_title));

$project_name_code = "";

foreach ($words as $w) {
  $project_name_code .= mb_substr($w, 0, 1);
}

$proj_name_code = substr($project_name_code, 0, 3);



if($project_country == "Nigeria"){
    $country_code = "NGN";
}elseif($project_country == "Ghana"){
    $country_code = "GHA";
}elseif($project_country == "Ivory Coast"){
    $country_code = "CIV";
}

$sub_code = 000;

$get_code = mysqli_query($db, "SELECT code FROM project_info_table");
$get_num_code = mysqli_num_rows($get_code);

if($get_num_code == 0){
    $sub_code = 101;    
}else{
    $sub_code_id = mysqli_query($db, "SELECT MAX(code) AS code FROM project_info_table");
    $sub_code = mysqli_fetch_assoc($sub_code_id);
    $sub_code = $sub_code['code'] + 1;

}
    

if($division != ""){    
    
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
    
}
    
    
$yr = date('Y');
$project_yr = substr($yr, 2, 3);

//$sub_code = "0123456789";
//substr(str_shuffle($sub_code), 0, 3);
$code = $sub_code;
    
    

if(empty($project_title)){
    
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please fill out project title!</div>";
$errMsg = TRUE;  
    
}    
    
    
    
    
$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_title = '$project_title'");
$num = mysqli_num_rows($select);   
   
    
    
if ($num > 0) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $project_title tender already exists!</div>";
$errMsg = TRUE;
} 
      
    
    
// Check for duplicates outside the loop
$uniqueClientsNames = array_unique($_POST['clients_name']);
if (count($uniqueClientsNames) !== count($_POST['clients_name'])) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed due to duplicate clients names. Please remove duplicates before submitting.</div>";
$errMsg = TRUE;
}
    
    
// Check for duplicates outside the loop
$uniqueTenderDoc = array_unique($_POST['tender_document']);
if (count($uniqueTenderDoc) !== count($_POST['tender_document'])) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed due to duplicate tender documents. Please remove duplicates before submitting.</div>";
$errMsg = TRUE;
}    
    
    

// Check for duplicates outside the loop
$uniqueTechDoc = array_unique($_POST['technical_document']);
if (count($uniqueTechDoc) !== count($_POST['technical_document'])) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed due to duplicate technical documents. Please remove duplicates before submitting.</div>";
$errMsg = TRUE;
}    
    
    
    

// Loop through the arrays
for ($i = 0; $i < count($clients_nameList); $i++) {

 
$clients_id = $_POST['clients_id'][$i];
$clients_name = $_POST['clients_name'][$i];
$key_person = $_POST['key_person'][$i];    
             

$selectClientsName = mysqli_query($db, "SELECT * FROM clients_keypersons_table WHERE project_id = '$code' && clients_name = '$clients_name'");
$numClients = mysqli_num_rows($selectClientsName);   
    
if ($numClients > 0) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $clients_name already exists for this tender!</div>";
$errMsg = TRUE;
}    


    
if(empty($clients_name)){
    
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please fill out all client name fields!</div>";
$errMsg = TRUE;  
    
}    
 
    
if(empty($key_person)){
    
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please fill out all keypersons fields!</div>";
$errMsg = TRUE;  
    
}    

    
$sqlQueries .= "INSERT INTO clients_keypersons_table (project_id, project_title, clients_name, clients_id, keyperson, created_by, updated_by)VALUES('$code', '$project_title', '$clients_name', '$clients_id', '$key_person', '$created_by', '$updated_by');\n";

    
}
 
       

if($division != ""){
    
//        $tender_code = $division_code . '-' . $project_name_code . '-' . $country_code . '-' . $code;
$tender_code = $country_code . '-' . $division_code . '-' . $proj_name_code . '-' . $project_yr . '/' . $code;    
    
}else{

    
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please select a division!</div>";
$errMsg = TRUE;   
    
    
}    
    


    
if($project_country == ""){
    
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please select a country for this tender!</div>";
$errMsg = TRUE;   
    
}
    
    
if($project_city == ""){
    
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Please select a city for this tender!</div>";
$errMsg = TRUE;   
    
}    
    
    

// Loop through the arrays
for ($j = 0; $j < count($tender_documentList); $j++) {

 
$tender_document = $_POST['tender_document'][$j];    
             

$selectTenderDoc = mysqli_query($db, "SELECT * FROM tender_document_table WHERE project_id = '$code' && tender_document = '$tender_document'");
$numTenderDoc = mysqli_num_rows($selectTenderDoc);
    
if ($numTenderDoc > 0) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $tender_document already exists for this tender!</div>";
$errMsg = TRUE;
}    

    
    
if(!empty($tender_document)){

$sqlQueries .= "INSERT INTO tender_document_table (project_id, project_title, tender_document, created_by, updated_by)VALUES('$code', '$project_title', '$tender_document', '$created_by', '$updated_by');\n";

}
    
}
    
        
    
    
// Loop through the arrays
for ($k = 0; $k < count($technical_documentList); $k++) {

 
$technical_document = $_POST['technical_document'][$k];    
             

$selectTechDoc = mysqli_query($db, "SELECT * FROM technical_document_table WHERE project_id = '$code' && technical_document = '$technical_document'");
$numTechDoc = mysqli_num_rows($selectTechDoc);
    
if ($numTechDoc > 0) {
$message = "<span class='fas fa-exclamation-triangle error-icon'></span><div class='error-err-message'>Sorry, submission failed as $technical_document already exists for this tender!</div>";
$errMsg = TRUE;
}    

    
    
if(!empty($technical_document)){

$sqlQueries .= "INSERT INTO technical_document_table (project_id, project_title, technical_document, created_by, updated_by)VALUES('$code', '$project_title', '$technical_document', '$created_by', '$updated_by');\n";    
}    
    
}
    

if($errMsg !== TRUE){	
// Insert data into invoice_table
$sqlQueries .= "INSERT INTO project_info_table(project_title, end_user, division, project_manager, qs_manager, mep_consultants, architect, tender_received_date, tender_due, project_country, project_city, code, tender_code, project_status, progress, created_by, updated_by)VALUES('$project_title', '$end_user', '$division', '$project_manager', '$qs_manager', '$mep_consultants', '$architects', '$tender_received_date', '$tender_due', '$project_country', '$project_city', '$code', '$tender_code', '$project_status', '$progress', '$created_by', '$updated_by');\n";
    
    
    
// Execute all accumulated queries
    if ($db->multi_query($sqlQueries) !== TRUE) {
        $response = array(
            'status' => 'error',
            'message' => "Error: " . $sqlQueries . "<br>" . $db->error
        );
    } else {
        $response = array(
            'status' => 'success',
            'message' => "<span class='fas fa-check success-icon'></span> <div class='success-message'>$project_title tender has successfully been created and tender code is $tender_code</div>"
        );
    }
      

}else{

    // If $errMsg is TRUE or any other error occurs
    $response = array('status' => 'error', 'message' => $message);  
    
}
    
 
// Output the response as JSON
echo json_encode($response);   
exit();    
    
}


?>    