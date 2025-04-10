<?php
function getNgnCities() {
    global $db;
    
    $query = "SELECT city_name FROM ngn_cities ORDER BY city_name";
    $stmt = $db->prepare($query);

    if ($stmt) {
        $stmt->execute();
        $stmt->bind_result($city_name);

        while ($stmt->fetch()) {
            echo "<option value='" . htmlspecialchars($city_name, ENT_QUOTES) . "'>" . htmlspecialchars($city_name, ENT_QUOTES) . "</option>";
        }

        $stmt->close();
    } else {
        echo "Error in preparing the statement.";
    }
}


     
function getGhaCities() {
    global $db;
    
    // Step 1: Prepare the SQL Statement
    $query = "SELECT city_name FROM gha_cities ORDER BY city_name";
    $stmt = $db->prepare($query);

    // Step 2: Execute the prepared statement
    $stmt->execute();

    // Step 3: Bind the result
    $stmt->bind_result($city_name);

    // Step 4: Fetch the results in a loop
    while ($stmt->fetch()) {
        echo "<option value='" . htmlspecialchars($city_name, ENT_QUOTES) . "'>" . htmlspecialchars($city_name, ENT_QUOTES) . "</option>";
    }

    // Step 5: Close the statement
    $stmt->close();
}


function getCivCities() {
    global $db;

    // Step 1: Prepare the SQL Statement
    $query = "SELECT city_name FROM civ_cities ORDER BY city_name";
    $stmt = $db->prepare($query);

    // Step 2: Check if the statement was prepared successfully
    if (!$stmt) {
        die("Error in preparing the statement: " . $db->error);
    }

    // Step 3: Execute the prepared statement
    $stmt->execute();

    // Step 4: Bind the result
    $stmt->bind_result($city_name);

    // Step 5: Fetch the results in a loop
    while ($stmt->fetch()) {
        echo "<option value='" . htmlspecialchars($city_name, ENT_QUOTES) . "'>" . htmlspecialchars($city_name, ENT_QUOTES) . "</option>";
    }

    // Step 6: Close the statement
    $stmt->close();
}




function submitProjectRequest(){
    global $db;
    
    $project_title = "";
    $project_client = "";
    $division = "";
    $project_manager = "";
    $qs_manager = "";
    $mep_consultants = "";
    $architects = "";
    $keyperson = "";
    $project_duration = "";
    $rfi_due = "";
    $tender_received_date = "";
    $tender_due = "";
    $tender_submission_date = "";
    $tender_amount = "";
    $project_country = "";
    $project_city = "";
    $project_importance = "";
    $contract_type = "";
    $prelim_pricing = "";
    $pricing_strategy = "";
    $date_extension = "";
    $rate_used = "";
    $procurement_type = "";
    $code = "";
    $tender_code = "";
    $project_status = "";
    $progress = "";
    $vendor_information = "";
    $additional_information = "";
    $currency = "";
    $other_technical_doc = "";
    

if(isset($_POST['submit_project'])){
    
    $project_title = mysqli_real_escape_string($db, $_POST['project_title']);
    $client_id = mysqli_real_escape_string($db, $_POST['project_client']);
    $keyperson = mysqli_real_escape_string($db, $_POST['key_person']);
    $division = mysqli_real_escape_string($db, $_POST['division']);
    $project_manager = mysqli_real_escape_string($db, $_POST['project_manager']);
    $qs_manager = mysqli_real_escape_string($db, $_POST['qs_manager']);
    $mep_consultants = mysqli_real_escape_string($db, $_POST['mep_consultants']);
    $architect = mysqli_real_escape_string($db, $_POST['architect']);
    //$project_duration = mysqli_real_escape_string($db, $_POST['project_duration']);
    //$rfi_due = mysqli_real_escape_string($db, $_POST['rfi_due']);
    $tender_received_date = mysqli_real_escape_string($db, $_POST['tender_received_date']);
    $tender_due = mysqli_real_escape_string($db, $_POST['tender_due']);
    //$tender_submission_date = mysqli_real_escape_string($db, $_POST['tender_submission_date']);
    //$tender_amount = mysqli_real_escape_string($db, $_POST['tender_amount']);
    //$currency = mysqli_real_escape_string($db, $_POST['currency']);
    $project_country = mysqli_real_escape_string($db, $_POST['project_country']);
    $project_city = mysqli_real_escape_string($db, $_POST['project_city']);
    //$project_importance = mysqli_real_escape_string($db, $_POST['project_importance']);
    //$contract_type = mysqli_real_escape_string($db, $_POST['contract_type']);
    //$prelim_pricing = mysqli_real_escape_string($db, $_POST['prelim_pricing']);
    //$pricing_strategy = mysqli_real_escape_string($db, $_POST['pricing_strategy']);
    //$date_extension = mysqli_real_escape_string($db, $_POST['date_extension']);
    //$rate_used = mysqli_real_escape_string($db, $_POST['rate_used']);
    //$procurement_type = mysqli_real_escape_string($db, $_POST['procurement_type']);
    $project_status = "On Hold";
    $progress = "Pending";
    //$vendor_information = mysqli_real_escape_string($db, $_POST['vendor_information']);
    //$additional_information = mysqli_real_escape_string($db, $_POST['additional_information']);
    
    $created_by = $_SESSION['email'];
    $updated_by = $_SESSION['email'];
    $updated_at = date('Y-m-d H:i:s');    
    
    
    $getClient = mysqli_query($db, "SELECT * FROM clients_table WHERE id = '$client_id'");
    $getClientNum = mysqli_num_rows($getClient);
    $getClientData = mysqli_fetch_assoc($getClient);
    
    if($getClientNum > 0){
        
        $project_client = $getClientData['clients_name'];
        
    }
    
    
    
        if(isset($_POST['boq'])){
         $boq = mysqli_real_escape_string($db, $_POST['boq']);   
        }else{
            $boq = "";
        }
        
        if(isset($_POST['specification'])){
         $specification = mysqli_real_escape_string($db, $_POST['specification']);   
        }else{
            $specification = "";
        }
        
        if(isset($_POST['drawings'])){
         $drawings = mysqli_real_escape_string($db, $_POST['drawings']);   
        }else{
            $drawings = "";
        }
        
        if(isset($_POST['tender_form'])){
         $tender_form = mysqli_real_escape_string($db, $_POST['tender_form']);  
        }else{
            $tender_form = "";
        }
        
        if(isset($_POST['tender_instruction'])){
         $tender_instruction = mysqli_real_escape_string($db, $_POST['tender_instruction']);  
        }else{
            $tender_instruction = "";
        }
        
        if(isset($_POST['basic_rate'])){
         $basic_rate = mysqli_real_escape_string($db, $_POST['basic_rate']);  
        }else{
            $basic_rate = "";
        }
    
        if(isset($_POST['labour_rate'])){
         $labour_rate = mysqli_real_escape_string($db, $_POST['labour_rate']);  
        }else{
            $labour_rate = "";
        }
        
        
        $other_tender_doc = mysqli_real_escape_string($db, $_POST['other_tender_doc']);
        
        if(isset($_POST['technical_drawings'])){
         $technical_drawings = mysqli_real_escape_string($db, $_POST['technical_drawings']);  
        }else{
            $technical_drawings = "";
        }
        
        
        if(isset($_POST['slds'])){
         $slds = mysqli_real_escape_string($db, $_POST['slds']);  
        }else{
            $slds = "";
        }
        
        if(isset($_POST['mos'])){
         $mos = mysqli_real_escape_string($db, $_POST['mos']);  
        }else{
            $mos = "";
        }
        
        if(isset($_POST['scope_understanding'])){
         $scope_understanding = mysqli_real_escape_string($db, $_POST['scope_understanding']);  
        }else{
            $scope_understanding = "";
        }
        
        if(isset($_POST['pow'])){
         $pow = mysqli_real_escape_string($db, $_POST['pow']);  
        }else{
            $pow = "";
        }
        
        
        $other_technical_doc = mysqli_real_escape_string($db, $_POST['other_technical_doc']);
        
        
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
        
        
        $project_name_code = substr(strtoupper($project_title), 0, 3);
        
        
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
    
        $yr = date('Y');
        $project_yr = substr($yr, 2, 3);
        
        //$sub_code = "0123456789";
        //substr(str_shuffle($sub_code), 0, 3);
        $code = $sub_code;
        
//        $tender_code = $division_code . '-' . $project_name_code . '-' . $country_code . '-' . $code;
        $tender_code = $country_code . '-' . $division_code . '-' . $project_name_code . '-' . $project_yr . '/' . $code;
    
    
    
        $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_title = '$project_title'");
    
        $num = mysqli_num_rows($select);
    
        if($num > 0){
            $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> Sorry, submission failed as " . $project_title .  " tender already exists!</div>" ;
        }else{
            mysqli_query($db, "INSERT INTO project_info_table(project_title, project_client, keyperson, division, project_manager, qs_manager, mep_consultants, architect, project_duration, rfi_due, tender_received_date, tender_due, project_country, project_city, project_importance, contract_type, prelim_pricing, pricing_strategy, date_extension, rate_used, procurement_type, boq, specification, drawings, tender_form, tender_instruction, basic_rate, labour_rate, technical_drawings, slds, mos, scope_understanding, pow, code, tender_code, tender_amount, currency, project_status, progress, vendor_information, additional_information, created_by, updated_by, updated_at) VALUES ('$project_title', '$project_client', '$keyperson', '$division', '$project_manager', '$qs_manager', '$mep_consultants', '$architect', '$project_duration', '$rfi_due', '$tender_received_date', '$tender_due', '$project_country', '$project_city', '$project_importance', '$contract_type', '$prelim_pricing', '$pricing_strategy', '$date_extension', '$rate_used', '$procurement_type', '$boq', '$specification', '$drawings', '$tender_form', '$tender_instruction', '$basic_rate', '$labour_rate',  '$technical_drawings', '$slds', '$mos', '$scope_understanding', '$pow', '$code', '$tender_code', '$tender_amount', '$currency', '$project_status', '$progress', '$vendor_information', '$additional_information', '$created_by', '$updated_by', '$updated_at')");
    
            $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>" .$project_title. " tender has successfully been created and tender code is " .$tender_code. "</div>";
        }
        
    }
}




function editProjectRequest(){
    global $db;
	
    $awarded_date = '';
    
if(isset($_POST['save'])){
    
    if(isset($_GET['code']) && $_GET['code'] != ""){
        $code = $_GET['code'];
    }
    
    $project_title = mysqli_real_escape_string($db, $_POST['project_title']);
//    $project_client = mysqli_real_escape_string($db, $_POST['project_client']);
    $client_id = mysqli_real_escape_string($db, $_POST['project_client']);
    $keyperson = mysqli_real_escape_string($db, $_POST['key_person']);
    $division = mysqli_real_escape_string($db, $_POST['division']);
    $project_manager = mysqli_real_escape_string($db, $_POST['project_manager']);
    $qs_manager = mysqli_real_escape_string($db, $_POST['qs_manager']);
    $mep_consultants = mysqli_real_escape_string($db, $_POST['mep_consultants']);
    $architect = mysqli_real_escape_string($db, $_POST['architect']);
    $project_duration = mysqli_real_escape_string($db, $_POST['project_duration']);
    $rfi_due = mysqli_real_escape_string($db, $_POST['rfi_due']);
    $tender_received_date = mysqli_real_escape_string($db, $_POST['tender_received_date']);
    $tender_due = mysqli_real_escape_string($db, $_POST['tender_due']);
    $tender_submission_date = mysqli_real_escape_string($db, $_POST['tender_submission_date']);
    $tender_amount = mysqli_real_escape_string($db, $_POST['tender_amount']);
    $currency = mysqli_real_escape_string($db, $_POST['currency']);
    $project_country = mysqli_real_escape_string($db, $_POST['project_country']);
    $project_city = mysqli_real_escape_string($db, $_POST['project_city']);
    $project_importance = mysqli_real_escape_string($db, $_POST['project_importance']);
    $contract_type = mysqli_real_escape_string($db, $_POST['contract_type']);
    $prelim_pricing = mysqli_real_escape_string($db, $_POST['prelim_pricing']);
    $pricing_strategy = mysqli_real_escape_string($db, $_POST['pricing_strategy']);
    $date_extension = mysqli_real_escape_string($db, $_POST['date_extension']);
    $rate_used = mysqli_real_escape_string($db, $_POST['rate_used']);
    $procurement_type = mysqli_real_escape_string($db, $_POST['procurement_type']);
    $project_status = mysqli_real_escape_string($db, $_POST['project_status']);
    $progress = mysqli_real_escape_string($db, $_POST['progress']);
    $vendor_information = mysqli_real_escape_string($db, $_POST['vendor_information']);
    $document_link = mysqli_real_escape_string($db, $_POST['document_link']);
    $additional_information = mysqli_real_escape_string($db, $_POST['additional_information']);
    $updated_by = $_SESSION['email'];
    $updated_at = date('Y-m-d H:i:s');
    
    
    //    if($_POST['vendor_information'] == ""){
    //        $vendor_information = "";
    //    }
    
    
    $getClient = mysqli_query($db, "SELECT * FROM clients_table WHERE id = '$client_id'");
    $getClientNum = mysqli_num_rows($getClient);
    $getClientData = mysqli_fetch_assoc($getClient);
    
    if($getClientNum > 0){
        
        $project_client = $getClientData['clients_name'];
        
    }
    
    
    
    if($_POST['tender_awarded_date'] != ""){
        $awarded_date = mysqli_real_escape_string($db, $_POST['tender_awarded_date']);
        $tender_awarded_date = date('Y-m-d', strtotime($awarded_date));
    }else{
        $tender_awarded_date = "";
    }
    
    
        
        if(isset($_POST['boq'])){
         $boq = mysqli_real_escape_string($db, $_POST['boq']);   
        }else{
            $boq = "Boq: Not Required";
        }
        
        if(isset($_POST['specification'])){
         $specification = mysqli_real_escape_string($db, $_POST['specification']);   
        }else{
            $specification = "Specification: Not Required";
        }
        
        if(isset($_POST['drawings'])){
         $drawings = mysqli_real_escape_string($db, $_POST['drawings']);   
        }else{
            $drawings = "Drawings: Not Required";
        }
        
        if(isset($_POST['tender_form'])){
         $tender_form = mysqli_real_escape_string($db, $_POST['tender_form']);  
        }else{
            $tender_form = "Tender Form: Not Required";
        }
        
        if(isset($_POST['tender_instruction'])){
         $tender_instruction = mysqli_real_escape_string($db, $_POST['tender_instruction']);  
        }else{
            $tender_instruction = "Tender Instruction: Not Required";
        }
        
        if(isset($_POST['basic_rate'])){
         $basic_rate = mysqli_real_escape_string($db, $_POST['basic_rate']);  
        }else{
            $basic_rate = "Basic Rate: Not Required";
        }
    
        if(isset($_POST['labour_rate'])){
         $labour_rate = mysqli_real_escape_string($db, $_POST['labour_rate']);  
        }else{
            $labour_rate = "Labour Rate: Not Required";
        }
        
        
        $other_tender_doc = mysqli_real_escape_string($db, $_POST['other_tender_doc']);
        
        if(isset($_POST['technical_drawings'])){
         $technical_drawings = mysqli_real_escape_string($db, $_POST['technical_drawings']);  
        }else{
            $technical_drawings = "Technical Drawings: Not Required";
        }
        
        
        if(isset($_POST['slds'])){
         $slds = mysqli_real_escape_string($db, $_POST['slds']);  
        }else{
            $slds = "Slds: Not Required";
        }
        
        if(isset($_POST['mos'])){
         $mos = mysqli_real_escape_string($db, $_POST['mos']);  
        }else{
            $mos = "MOS: Not Required";
        }
        
        if(isset($_POST['scope_understanding'])){
         $scope_understanding = mysqli_real_escape_string($db, $_POST['scope_understanding']);  
        }else{
            $scope_understanding = "Scope of Understanding: Not Required";
        }
        
        if(isset($_POST['pow'])){
         $pow = mysqli_real_escape_string($db, $_POST['pow']);  
        }else{
            $pow = "POW: Not Required";
        }
        
        
        if($_POST['other_technical_doc'] == ""){
        
            $other_technical_doc = "";
            
        }else{
            
            $other_technical_doc = mysqli_real_escape_string($db, $_POST['other_technical_doc']);
            
        }
        
        
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
    
        
        $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_title = '$project_title'");
        $num = mysqli_num_rows($select);
        
        $pick = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_title = '$project_title' && code = '$code'");
        $picked = mysqli_fetch_array($pick);
        $current_title = isset($picked['project_title']);
    
        
        if($num == 1 && $project_title != $current_title){
                $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Submit request failed as " . $project_title .  " tender already exists!</div>";
        }
    
        if($num == 1 && $project_title == $current_title){
                mysqli_query($db, "UPDATE project_info_table SET project_title = '$project_title', project_client = '$project_client', keyperson = '$keyperson', division = '$division', project_manager = '$project_manager', qs_manager = '$qs_manager', mep_consultants = '$mep_consultants', architect = '$architect', project_duration = '$project_duration', rfi_due = '$rfi_due', tender_received_date = '$tender_received_date', tender_due = '$tender_due', tender_submission_date = '$tender_submission_date', tender_amount = '$tender_amount', currency = '$currency', project_country = '$project_country', project_city = '$project_city', project_importance = '$project_importance', contract_type = '$contract_type', prelim_pricing = '$prelim_pricing', pricing_strategy = '$pricing_strategy', date_extension = '$date_extension', rate_used = '$rate_used', procurement_type = '$procurement_type', boq = '$boq', specification = '$specification', drawings = '$drawings', tender_form = '$tender_form', tender_instruction = '$tender_instruction', basic_rate = '$basic_rate', labour_rate = '$labour_rate', other_tender_doc = '$other_tender_doc', technical_drawings = '$technical_drawings', slds = '$slds', mos = '$mos', scope_understanding = '$scope_understanding', pow = '$pow', other_technical_doc = '$other_technical_doc', project_status = '$project_status', progress = '$progress', tender_awarded_date = '$tender_awarded_date', vendor_information = '$vendor_information', document_link = '$document_link', additional_information = '$additional_information', updated_by = '$updated_by', updated_at = '$updated_at' WHERE code = $code");
                $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>" .$project_title. " tender has successfully been updated</div>";
        }
        
        if($num != 1 && $project_title == $current_title){
                mysqli_query($db, "UPDATE project_info_table SET project_title = '$project_title', project_client = '$project_client', keyperson = '$keyperson', division = '$division', project_manager = '$project_manager', qs_manager = '$qs_manager', mep_consultants = '$mep_consultants', architect = '$architect', project_duration = '$project_duration', rfi_due = '$rfi_due', tender_received_date = '$tender_received_date', tender_due = '$tender_due', tender_submission_date = '$tender_submission_date', tender_amount = '$tender_amount', currency = '$currency', project_country = '$project_country', project_city = '$project_city', project_importance = '$project_importance', contract_type = '$contract_type', prelim_pricing = '$prelim_pricing', pricing_strategy = '$pricing_strategy', date_extension = '$date_extension', rate_used = '$rate_used', procurement_type = '$procurement_type', boq = '$boq', specification = '$specification', drawings = '$drawings', tender_form = '$tender_form', tender_instruction = '$tender_instruction', basic_rate = '$basic_rate', labour_rate = '$labour_rate', other_tender_doc = '$other_tender_doc', technical_drawings = '$technical_drawings', slds = '$slds', mos = '$mos', scope_understanding = '$scope_understanding', pow = '$pow', other_technical_doc = '$other_technical_doc', project_status = '$project_status', progress = '$progress', tender_awarded_date = '$tender_awarded_date', vendor_information = '$vendor_information', document_link = '$document_link', additional_information = '$additional_information', updated_by = '$updated_by', updated_at = '$updated_at' WHERE code = $code");
                $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>" .$project_title. " tender has successfully been updated</div>";
        }
    
        if($num != 1 && $project_title != $current_title){
                mysqli_query($db, "UPDATE project_info_table SET project_title = '$project_title', project_client = '$project_client', keyperson = '$keyperson', division = '$division', project_manager = '$project_manager', qs_manager = '$qs_manager', mep_consultants = '$mep_consultants', architect = '$architect', project_duration = '$project_duration', rfi_due = '$rfi_due', tender_received_date = '$tender_received_date', tender_due = '$tender_due', tender_submission_date = '$tender_submission_date', tender_amount = '$tender_amount', currency = '$currency', project_country = '$project_country', project_city = '$project_city', project_importance = '$project_importance', contract_type = '$contract_type', prelim_pricing = '$prelim_pricing', pricing_strategy = '$pricing_strategy', date_extension = '$date_extension', rate_used = '$rate_used', procurement_type = '$procurement_type', boq = '$boq', specification = '$specification', drawings = '$drawings', tender_form = '$tender_form', tender_instruction = '$tender_instruction', basic_rate = '$basic_rate', labour_rate = '$labour_rate', other_tender_doc = '$other_tender_doc', technical_drawings = '$technical_drawings', slds = '$slds', mos = '$mos', scope_understanding = '$scope_understanding', pow = '$pow', other_technical_doc = '$other_technical_doc', project_status = '$project_status', progress = '$progress', tender_awarded_date = '$tender_awarded_date', vendor_information = '$vendor_information', document_link = '$document_link', additional_information = '$additional_information', updated_by = '$updated_by', updated_at = '$updated_at' WHERE code = $code");
                $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>" .$project_title. " tender has successfully been updated</div>";
        } 
    
    }
}





function loginRequest() {
    global $db;

    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, md5($_POST['password']));

        $invalidErr = filter_var($email, FILTER_VALIDATE_EMAIL) ? "" : '<div class="error-message set-width">Invalid email format!</div>';

        if (!$invalidErr) {
            $query = "SELECT * FROM pm_users_table WHERE email = ? AND password = ?";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $_SESSION['email'] = $email;
                header('location:index.php');
                exit();
            } else {
                $_SESSION['message'] = '<div class="error-message set-width">User credentials invalid!</div>';
            }

            $stmt->close();
        } else {
            $_SESSION['invalidErr'] = $invalidErr;
        }
    }
}





function getTotalTender(){
    global $db;
    $select = mysqli_query($db, "SELECT id FROM project_info_table");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalPendingTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE progress = 'Pending'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalInProgressTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE progress = 'In Progress'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalAwaitingTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE progress = 'Awaiting'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}


function getTotalSubmittedTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE progress = 'Submitted'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalApprovedTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_status = 'Approved'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalOnHoldTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_status = 'On Hold'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalDeclinedTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_status = 'Declined'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalDeclinedProgressTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE progress = 'Declined'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalNigeriaTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_country = 'Nigeria'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}


function getTotalGhanaTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_country = 'Ghana'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalCivTender(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_country = 'Ivory Coast'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalUsers(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM pm_users_table");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}



function getTotalDocuments(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM document_table");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalProfileDocuments(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM document_table WHERE document_type = 'Profile'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalPresentationDocuments(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM document_table WHERE document_type = 'Presentation'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalTenderDocuments(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM document_table WHERE document_type = 'Tender'");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}



function submitNewUserRequest(){
    global $db;
    $invalidErr = "";
    $created_by = "";
    $updated_by = "";    
    
    if(isset($_POST['register_user'])){
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $integrity = mysqli_real_escape_string($db, $_POST['integrity']);
        $password = md5(ucfirst($fname . "_123"));
        $created_by = $_SESSION['email'];
        $updated_by = $_SESSION['email'];
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['invalidErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Invalid email format!</div>";
            $invalidErr = $_SESSION['invalidErr'];
        }
                    
        $select = mysqli_query($db, "SELECT * FROM pm_users_table WHERE email = '$email'");
        $num = mysqli_num_rows($select);
        
        if($num == 1 && !$invalidErr){
            $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Submit request failed as " . $email .  " already exists!</div>";
        }elseif($num != 1 && !$invalidErr){
            mysqli_query($db, "INSERT INTO pm_users_table(fname, lname, email, password, integrity, created_by, updated_by) VALUES ('$fname', '$lname', '$email', '$password', '$integrity', '$created_by', '$updated_by')");
    
            $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>User account has successfully been created and user password is " . $fname . "_123 </div>";
        }
    }
}







function updateUserRequest(){
    global $db;
    $invalidPassErr = "";
    
if(isset($_POST['update_user'])){
    $id = $_SESSION['id'];
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $email = $_SESSION['email'];
    $integrity = mysqli_real_escape_string($db, $_POST['integrity']);
    $updated_by = $_SESSION['email'];
    
    
    $select = mysqli_query($db, "SELECT * FROM pm_users_table WHERE id = '$id'");
    $selected = mysqli_fetch_assoc($select);
    $current_password = $selected['password'];
    
    if($_POST['password'] == "" && $_POST['cpassword'] == ""){
        $password = $current_password;
        $cpassword = $current_password;
    }else{
        $password = mysqli_real_escape_string($db, md5($_POST['password']));
        $cpassword = mysqli_real_escape_string($db, md5($_POST['cpassword']));
    }
    
    if($password != $cpassword){
        $_SESSION['invalidPassErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Passwords do not match!</div>";
        $invalidPassErr = $_SESSION['invalidPassErr'];
    }
    
    
    if(!$invalidPassErr){
        mysqli_query($db, "UPDATE pm_users_table SET fname = '$fname', lname = '$lname', email = '$email', password = '$password', integrity = '$integrity', updated_by = '$updated_by' WHERE id = $id");
        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>User details have successfully been updated!</div>";
    }
    
    if($password != $current_password && !$invalidPassErr){
        mysqli_query($db, "UPDATE pm_users_table SET fname = '$fname', lname = '$lname', email = '$email', password = '$password', integrity = '$integrity', updated_by = '$updated_by' WHERE id = $id");
        $_SESSION['logout'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Session expired as a result of password update, please login again!</div>";
        unset($_SESSION['email']);
        header('location:login.php');
    }
 
    }
}



function deleteTenderRequest(){
global $db;
    
if(isset($_GET['action']) && $_GET['action'] == "delete_tender"){
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        mysqli_query($db, "DELETE FROM project_info_table WHERE code = '$code'");
        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> 
        Tender has successfully been deleted!</div>";
        header('location:index.php?page=tender_view');
    }
}elseif(!isset($_GET['action']) || $_GET['action'] == ""){
        header('location:index.php?page=tender_view');
    }
}


function deleteUserRequest(){
global $db;
    
if(isset($_GET['action']) && $_GET['action'] == "delete_user"){
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        mysqli_query($db, "DELETE FROM pm_users_table WHERE id = '$user_id'");
        $_SESSION['message'] = "<div class='success-message'>User account has successfully been deleted!</div> ";
        header('location:index.php?page=users');
    }
}elseif(!isset($_GET['action']) || $_GET['action'] == ""){
        header('location:index.php?page=users');
    }
}




function uploadDocument(){
global $db;
    
$fileSizeErr = "";
$fileTypeErr = "";
    
if(isset($_POST['upload'])){
    
$document_title = mysqli_real_escape_string($db, $_POST['document_title']);    
$document_category = mysqli_real_escape_string($db, $_POST['document_category']);    
$presentation_code = mysqli_real_escape_string($db, $_POST['presentation_code']);    
$document_type = mysqli_real_escape_string($db, $_POST['document_type']);    
$updated_content = mysqli_real_escape_string($db, $_POST['updated_content']);    
$document = basename($_FILES['document']['name']);
$document_size = $_FILES['document']['size'];
$document_dir = $_FILES['document']['tmp_name'];
$doc_type = pathinfo($document, PATHINFO_EXTENSION);
$rand = "0123456789asdfghjklqwertyuiopzxcvbnm";
$shuffle = str_shuffle($rand);
$subrand = substr($shuffle, 0, 6);
$new_doc = $subrand . '_' . $document;
$document_loc = "assets/css/files/" . $new_doc;
$created_by = substr($_SESSION['email'], 0, -22);    
$updated_by = substr($_SESSION['email'], 0, -22);    

if($updated_content == ""){
$updated_content = "N/A";
}
    
if($presentation_code == ""){
$presentation_code = "N/A";
}
    
if($document_size > 50000120){
$_SESSION['fileSizeErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> File size must be less than 5mb!</div>";
$fileSizeErr = $_SESSION['fileSizeErr'];
}    

 
if($doc_type != 'pdf' && $doc_type != 'doc' && $doc_type != 'docx' && $doc_type != 'zip' && $doc_type != 'rar'){
$_SESSION['fileTypeErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> Unsupport format, file type must be pdf, word, zip & rar extensions!</div>";
$fileTypeErr = $_SESSION['fileTypeErr'];
}    



$select = mysqli_query($db, "SELECT * FROM document_table WHERE document_title = '$document_title'");
$num = mysqli_num_rows($select);

if($num != 1 && !$fileSizeErr && !$fileTypeErr){
    
move_uploaded_file($document_dir, $document_loc);    
    
mysqli_query($db, "INSERT INTO document_table(
document_title,
document_category,
presentation_code,
document_type,
updated_content,
document,
created_by,
updated_by
)VALUES(
'$document_title',
'$document_category',
'$presentation_code',
'$document_type',
'$updated_content',
'$new_doc',
'$created_by',
'$updated_by'
)");    


$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Document has successfully been uploaded!</div>";    
    
    
}elseif($num == 1 && !$fileSizeErr && !$fileTypeErr){

$_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Failed, a document with the title " . $document_title . " already exists!</div>";    
    
}    
    
    
}
    
}




function updateUploadedFile(){
global $db;    

$fileSizeErr = "";
$fileTypeErr = "";

    
if(isset($_GET['id']) && $_GET['id'] != ""){
$id = $_GET['id'];
}    
    
if(isset($_POST['edit_upload'])){

$document_title = mysqli_real_escape_string($db, $_POST['document_title']);    
$document_category = mysqli_real_escape_string($db, $_POST['document_category']);    
$presentation_code = mysqli_real_escape_string($db, $_POST['presentation_code']);    
$document_type = mysqli_real_escape_string($db, $_POST['document_type']);    
$updated_content = mysqli_real_escape_string($db, $_POST['updated_content']);
$old_document = $_POST['old_document'];
    
if($_FILES['document']['name'] != ""){
$document = basename($_FILES['document']['name']);
$document_size = $_FILES['document']['size'];
$document_dir = $_FILES['document']['tmp_name'];
$doc_type = pathinfo($document, PATHINFO_EXTENSION);
$rand = "0123456789asdfghjklqwertyuiopzxcvbnm";
$shuffle = str_shuffle($rand);
$subrand = substr($shuffle, 0, 6);
$new_doc = $subrand . '_' . $document;
$document_loc = "assets/css/files/" . $new_doc;
    
    
if($document_size > 50000120){
$_SESSION['fileSizeErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> File size must be less than 5mb!</div>";
$fileSizeErr = $_SESSION['fileSizeErr'];
}    

 
if($doc_type != 'pdf' && $doc_type != 'doc' && $doc_type != 'docx' && $doc_type != 'zip' && $doc_type != 'rar'){
$_SESSION['fileTypeErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> Unsupport format, file type must be pdf, word, zip & rar extensions!</div>";
$fileTypeErr = $_SESSION['fileTypeErr'];
}
    
    
}else{
    
$document = "";
$document_size = "";
$document_dir = "";
$doc_type = "";
$document_loc = "";
$new_doc = $old_document;    
    
}
    
$updated_by = substr($_SESSION['email'], 0, -22);    
$updated_at = date('Y-m-d h:i:a');
    
    
if($updated_content == ""){
$updated_content = "N/A";
}
    
if($presentation_code == ""){
$presentation_code = "N/A";
}


$select = mysqli_query($db, "SELECT * FROM document_table WHERE document_title = '$document_title'");
$num = mysqli_num_rows($select);
    
$fetch = mysqli_query($db, "SELECT * FROM document_table WHERE document_title = '$document_title' && id = '$id'");
$fetchNum = mysqli_num_rows($fetch);

    
if($num != 1 && $fetchNum != 1 && !$fileSizeErr && !$fileTypeErr){

    
if($_FILES['document'] != ""){
move_uploaded_file($document_dir, $document_loc);    
}
    
mysqli_query($db, "UPDATE document_table SET
document_title = '$document_title',
document_category = '$document_category',
presentation_code = '$presentation_code',
document_type = '$document_type',
updated_content = '$updated_content',
document = '$new_doc',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE id = '$id'
");    

$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Document has successfully been updated!</div>";    
    
    
}elseif($num == 1 && $fetchNum == 1 && !$fileSizeErr && !$fileTypeErr){

if($_FILES['document'] != ""){
move_uploaded_file($document_dir, $document_loc);    
}
    
mysqli_query($db, "UPDATE document_table SET
document_title = '$document_title',
document_category = '$document_category',
presentation_code = '$presentation_code',
document_type = '$document_type',
updated_content = '$updated_content',
document = '$new_doc',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE id = '$id'
");    

$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Document has successfully been updated!</div>";    
    
}elseif($num == 1 && $fetchNum != 1 && !$fileSizeErr && !$fileTypeErr){
    

$_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Failed, a document with the title " . $document_title . "already exists!</div>";    
    
}

}    
    
    
}


function deleteDocumentRequest(){
global $db;
    
if(isset($_GET['action']) && $_GET['action'] == "delete_document"){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($db, "DELETE FROM document_table WHERE id = '$id'");
        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Document has successfully been deleted!</div>";
        header('location:index.php?page=tender_document');
    }
}elseif(!isset($_GET['action']) || $_GET['action'] == ""){
        header('location:index.php?page=tender_document');
    }
}




function tenderLastYear(){
global $db;

$last_year = date('Y') - 1;    
    
$find = mysqli_query($db, "SELECT * FROM project_info_table WHERE YEAR(created_at) = '$last_year'");
$num = mysqli_num_rows($find);
echo number_format($num, 0);
    
}



function tenderThisYear(){
global $db;
    
$find = mysqli_query($db, "SELECT * FROM project_info_table WHERE YEAR(created_at) = YEAR(NOW())");
$num = mysqli_num_rows($find);
echo number_format($num, 0);
    
}



function tenderThisMonth(){
global $db;
    
$find = mysqli_query($db, "SELECT * FROM project_info_table WHERE MONTH(created_at) = MONTH(NOW()) && YEAR(created_at) = YEAR(NOW())");
$num = mysqli_num_rows($find);
echo number_format($num, 0);
    
}



function tenderThisWeek(){
global $db;
    
$find = mysqli_query($db, "SELECT * FROM project_info_table WHERE WEEK(created_at) = WEEK(NOW()) && YEAR(created_at) = YEAR(NOW())");
$num = mysqli_num_rows($find);
echo number_format($num, 0);
    
}



function tenderThisDay(){
global $db;
    
$find = mysqli_query($db, "SELECT * FROM project_info_table WHERE DAY(created_at) = DAY(NOW()) && YEAR(created_at) = YEAR(NOW())");
$num = mysqli_num_rows($find);
echo number_format($num, 0);
    
}



function getTotalNigeriaTenderThisYear(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_country = 'Nigeria' && YEAR(created_at) = YEAR(NOW())");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}


function getTotalGhanaTenderThisYear(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_country = 'Ghana' && YEAR(created_at) = YEAR(NOW())");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}

function getTotalCivTenderThisYear(){
    global $db;
    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_country = 'Ivory Coast' && YEAR(created_at) = YEAR(NOW())");
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}




function addNewClients(){
    global $db;
    $invalidErr = "";
    
    
    if(isset($_POST['add_client'])){
    $clients_name = mysqli_real_escape_string($db, $_POST['clients_name']);    
    $clients_email = mysqli_real_escape_string($db, $_POST['clients_email']);    
    $clients_website = mysqli_real_escape_string($db, $_POST['clients_website']);    
    $clients_address = mysqli_real_escape_string($db, $_POST['clients_address']);    
    $clients_country = mysqli_real_escape_string($db, $_POST['clients_country']);    
    $clients_city = mysqli_real_escape_string($db, $_POST['clients_city']);
		
	$clients_address .= ' ' . $clients_city . ', ' . $clients_country;
		
    $clients_hq_location = $clients_city;    
    $clients_category = mysqli_real_escape_string($db, $_POST['clients_category']);
    $created_by = $_SESSION['email'];
    $updated_by = $_SESSION['email'];
        
  
    if($clients_email != ""){    
        if(!filter_var($clients_email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['invalidErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Invalid email format!</div>";
            $invalidErr = $_SESSION['invalidErr'];
        }
    }else{
        $invalidErr = "";
    }
        
    
    $fetch = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_name = '$clients_name'");
    $fetch_num = mysqli_num_rows($fetch);
        
    if($fetch_num == 1 && !$invalidErr){
        $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Submit request failed as " . $clients_name .  " already exists!</div>";
    }elseif($fetch_num != 1 && !$invalidErr){
        mysqli_query($db, "INSERT INTO clients_table(clients_name, clients_email, clients_website, clients_address, clients_category, clients_hq_location, created_by, updated_by) VALUES ('$clients_name', '$clients_email', '$clients_website', '$clients_address', '$clients_category', '$clients_hq_location', '$created_by', '$updated_by')");

        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>Clients data has successfully been created!</div>";
    }    
        
        
    }
    
}



function updateClientRequest(){
global $db;

if(isset($_GET['id']) && $_GET['id'] != ""){
$id = $_GET['id'];
}    
    
$invalidErr = "";   
    
if(isset($_POST['edit_client'])){

$clients_name = mysqli_real_escape_string($db, $_POST['clients_name']);    
$clients_email = mysqli_real_escape_string($db, $_POST['clients_email']);    
$clients_website = mysqli_real_escape_string($db, $_POST['clients_website']);    
$clients_address = mysqli_real_escape_string($db, $_POST['clients_address']);    
//$clients_hq_location = mysqli_real_escape_string($db, $_POST['clients_hq_location']);    
$clients_category = mysqli_real_escape_string($db, $_POST['clients_category']);
$updated_by = substr($_SESSION['email'], 0, -22);    
$updated_at = date('Y-m-d h:i:a');

    
if($clients_email != ""){    
    if(!filter_var($clients_email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['invalidErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Invalid email format!</div>";
        $invalidErr = $_SESSION['invalidErr'];
}
}else{
    $invalidErr = "";
}    
    
    
$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_name = '$clients_name'");
$num = mysqli_num_rows($select);
    
$fetch = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_name = '$clients_name' && id = '$id' && created_by = '{$_SESSION['email']}'");
$fetchNum = mysqli_num_rows($fetch);

    
if($num != 1 && $fetchNum != 1 && !$invalidErr){

    
mysqli_query($db, "UPDATE clients_table SET
clients_name = '$clients_name',
clients_email = '$clients_email',
clients_website = '$clients_website',
clients_address = '$clients_address',
clients_category = '$clients_category',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE id = '$id'
");
    
    
mysqli_query($db, "UPDATE keypersons_table SET
clients_name = '$clients_name',
clients_email = '$clients_email',
clients_address = '$clients_address',
clients_category = '$clients_category',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE clients_id = '$id'
");
    
    

$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Client has successfully been updated!</div>";    
    
    
}elseif($num == 1 && $fetchNum == 1 && !$invalidErr){
    
mysqli_query($db, "UPDATE clients_table SET
clients_name = '$clients_name',
clients_email = '$clients_email',
clients_website = '$clients_website',
clients_address = '$clients_address',
clients_category = '$clients_category',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE id = '$id'
");    

    
mysqli_query($db, "UPDATE keypersons_table SET
clients_name = '$clients_name',
clients_email = '$clients_email',
clients_address = '$clients_address',
clients_category = '$clients_category',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE clients_id = '$id'
");    
    
$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Client has successfully been updated!</div>";    
    
}elseif($num == 1 && $fetchNum != 1 && !$invalidErr){
    

$_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Failed, a client with the name " . $clients_name . "already exists!</div>";    
    
}elseif($num != 1 && $fetchNum == 1 && !$invalidErr){
    
    mysqli_query($db, "UPDATE clients_table SET
    clients_name = '$clients_name',
    clients_email = '$clients_email',
    clients_website = '$clients_website',
    clients_address = '$clients_address',
    clients_category = '$clients_category',
    updated_by = '$updated_by',
    updated_at = '$updated_at'
    WHERE id = '$id'
    ");    
    
        
    mysqli_query($db, "UPDATE keypersons_table SET
    clients_name = '$clients_name',
    clients_email = '$clients_email',
    clients_address = '$clients_address',
    clients_category = '$clients_category',
    updated_by = '$updated_by',
    updated_at = '$updated_at'
    WHERE clients_id = '$id'
    ");    
        
    $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Client has successfully been updated!</div>";    
        
    }

}    
    
    
}



function deleteClientsRequest(){
global $db;
    
if(isset($_GET['action']) && $_GET['action'] == "delete_client"){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($db, "DELETE FROM clients_table WHERE id = '$id'");
        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Client has successfully been deleted!</div>";
        header('location:index.php?page=clients');
    }
}elseif(!isset($_GET['action']) || $_GET['action'] == ""){
        header('location:index.php?page=clients');
    }
}




function addNewKeyperson(){
    global $db;
    
    $clients_id = "";
    $clients_email = "";    
    $clients_address = "";    
    $clients_hq_location = "";    
    $clients_category = "";
    $invalidErr = "";
    
    
    if(isset($_POST['add_keyperson'])){
    $clients_name = mysqli_real_escape_string($db, $_POST['clients_name']);    
    
    $find = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_name = '$clients_name'");
    $found = mysqli_fetch_assoc($find);
    $findNum = mysqli_num_rows($find);    
    
    if($findNum > 0){
    $clients_id = $found['id'];
    $clients_email = mysqli_real_escape_string($db, $found['clients_email']);    
    $clients_address = mysqli_real_escape_string($db, $found['clients_address']);    
    $clients_hq_location = mysqli_real_escape_string($db, $found['clients_hq_location']);    
    $clients_category = mysqli_real_escape_string($db, $found['clients_category']);
    }
    
    
    $key_person = mysqli_real_escape_string($db, $_POST['key_person']);    
    $key_persons_tel = mysqli_real_escape_string($db, $_POST['key_persons_tel']);    
    $key_persons_email = mysqli_real_escape_string($db, $_POST['key_persons_email']);    
    $key_persons_address = mysqli_real_escape_string($db, $_POST['key_persons_address']);    
    $key_persons_country = mysqli_real_escape_string($db, $_POST['key_persons_country']);    
    $key_persons_city = mysqli_real_escape_string($db, $_POST['key_persons_city']);
		
	$key_persons_address .= ' ' . $key_persons_city . ', ' . $key_persons_country;
		
    $gift_status = mysqli_real_escape_string($db, $_POST['gift_status']); 
    
    if($gift_status == "Yes"){

        $gift_type = mysqli_real_escape_string($db, $_POST['gift_type']);

    }else{

        $gift_type = 'N/A';

    }


    $title = mysqli_real_escape_string($db, $_POST['title']);    
    $info = mysqli_real_escape_string($db, $_POST['info']);    
    $created_by = $_SESSION['email'];
    $updated_by = $_SESSION['email'];
        
  
    if($key_persons_email != ""){    
        if(!filter_var($key_persons_email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['invalidErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Invalid email format!</div>";
            $invalidErr = $_SESSION['invalidErr'];
        }
    }else{
        $invalidErr = "";
    }
        
    
    $fetch = mysqli_query($db, "SELECT * FROM keypersons_table WHERE clients_name = '$clients_name' && key_person = '$key_person'");
    $fetch_num = mysqli_num_rows($fetch);
        
    if($fetch_num == 1 && !$invalidErr){
        $_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Submit request failed as " . $key_person .  " already exists under " . $clients_name . "!</div>";
    }elseif($fetch_num != 1 && !$invalidErr){
        mysqli_query($db, "INSERT INTO keypersons_table(clients_name, clients_id, clients_email, clients_address, clients_hq_location, clients_category, key_person, key_persons_tel, key_persons_email, key_persons_address, gift_status, gift_type, title, info, created_by, updated_by) VALUES ('$clients_name', '$clients_id', '$clients_email', '$clients_address', '$clients_hq_location', '$clients_category', '$key_person', '$key_persons_tel', '$key_persons_email', '$key_persons_address', '$gift_status', '$gift_type', '$title', '$info', '$created_by', '$updated_by')");

        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i>Keyperson's data has successfully been created!</div>";
    }    
        
        
    }
    
}




function updateKeypersonRequest(){
global $db;

if(isset($_GET['id']) && $_GET['id'] != ""){
$id = $_GET['id'];
}    
    
$invalidErr = "";   
$clients_id = "";
$clients_email = "";    
$clients_address = "";    
$clients_hq_location = "";    
$clients_category = "";
    
    
    
if(isset($_POST['edit_keyperson'])){

$clients_name = mysqli_real_escape_string($db, $_POST['clients_name']);    
    
$find = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_name = '$clients_name'");
$found = mysqli_fetch_assoc($find);
$findNum = mysqli_num_rows($find);    

if($findNum > 0){
$clients_id = $found['id'];
$clients_email = mysqli_real_escape_string($db, $found['clients_email']);    
$clients_address = mysqli_real_escape_string($db, $found['clients_address']);    
$clients_hq_location = mysqli_real_escape_string($db, $found['clients_hq_location']);    
$clients_category = mysqli_real_escape_string($db, $found['clients_category']);
}


$key_person = mysqli_real_escape_string($db, $_POST['key_person']);    
$key_persons_tel = mysqli_real_escape_string($db, $_POST['key_persons_tel']);    
$key_persons_email = mysqli_real_escape_string($db, $_POST['key_persons_email']);
$key_persons_address = mysqli_real_escape_string($db, $_POST['key_persons_address']);    
$gift_status = mysqli_real_escape_string($db, $_POST['gift_status']); 
    
if($gift_status == "Yes"){

$gift_type = mysqli_real_escape_string($db, $_POST['gift_type']);

}else{

$gift_type = 'N/A';

}
	
$title = mysqli_real_escape_string($db, $_POST['title']);    
$info = mysqli_real_escape_string($db, $_POST['info']);
$updated_by = substr($_SESSION['email'], 0, -22);    
$updated_at = date('Y-m-d h:i:a');

    
if($key_persons_email != ""){    
	if(!filter_var($key_persons_email, FILTER_VALIDATE_EMAIL)){
		$_SESSION['invalidErr'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Invalid email format!</div>";
		$invalidErr = $_SESSION['invalidErr'];
	}
}else{
    $invalidErr = "";
}    
    
    
$select = mysqli_query($db, "SELECT * FROM keypersons_table WHERE clients_name = '$clients_name' && key_person = '$key_person'");
$num = mysqli_num_rows($select);
    
$fetch = mysqli_query($db, "SELECT * FROM keypersons_table WHERE clients_name = '$clients_name' && key_person = '$key_person' && id = '$id' && created_by = '{$_SESSION['email']}'");
$fetchNum = mysqli_num_rows($fetch);

    
if($num != 1 && $fetchNum != 1 && !$invalidErr){

    
mysqli_query($db, "UPDATE keypersons_table SET 
clients_name = '$clients_name',
clients_id = '$clients_id',
clients_email = '$clients_email',
clients_address = '$clients_address',
clients_hq_location = '$clients_hq_location',
clients_category = '$clients_category',
key_person = '$key_person',
key_persons_email = '$key_persons_email',
key_persons_tel = '$key_persons_tel',
key_persons_address = '$key_persons_address',
gift_type = '$gift_type',
gift_status = '$gift_status',
info = '$info',
title = '$title',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE id = '$id'");  
	

$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Keyperson has successfully been updated!</div>";    
    
    
}elseif($num == 1 && $fetchNum == 1 && !$invalidErr){
    
mysqli_query($db, "UPDATE keypersons_table SET
clients_name = '$clients_name',
clients_id = '$clients_id',
clients_email = '$clients_email',
clients_address = '$clients_address',
clients_hq_location = '$clients_hq_location',
clients_category = '$clients_category',
key_person = '$key_person',
key_persons_email = '$key_persons_email',
key_persons_tel = '$key_persons_tel',
key_persons_address = '$key_persons_address',
gift_type = '$gift_type',
gift_status = '$gift_status',
info = '$info',
title = '$title',
updated_by = '$updated_by',
updated_at = '$updated_at'
WHERE id = '$id'");    

$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Keyperson has successfully been updated!</div>";    
    
}elseif($num == 1 && $fetchNum != 1 && !$invalidErr){
    

$_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Failed, a keyperson with the name " . $keyperson . "already exists under " . $clients_name . "!</div>";    
    
}elseif($num != 1 && $fetchNum == 1 && !$invalidErr){
    
    mysqli_query($db, "UPDATE keypersons_table SET
    clients_name = '$clients_name',
    clients_id = '$clients_id',
    clients_email = '$clients_email',
    clients_address = '$clients_address',
    clients_hq_location = '$clients_hq_location',
    clients_category = '$clients_category',
    key_person = '$key_person',
    key_persons_email = '$key_persons_email',
    key_persons_tel = '$key_persons_tel',
    key_persons_address = '$key_persons_address',
    gift_type = '$gift_type',
    gift_status = '$gift_status',
    info = '$info',
    title = '$title',
    updated_by = '$updated_by',
    updated_at = '$updated_at'
    WHERE id = '$id'");    
    
    $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Keyperson has successfully been updated!</div>";    
        
    }

}    
    
    
}


function deleteKeypersonsRequest(){
global $db;
    
if(isset($_GET['action']) && $_GET['action'] == "delete_keyperson"){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($db, "DELETE FROM keypersons_table WHERE id = '$id'");
        $_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Keyperson has successfully been deleted!</div>";
        header('location:index.php?page=keypersons');
    }
}elseif(!isset($_GET['action']) || $_GET['action'] == ""){
        header('location:index.php?page=keypersons');
    }
}





function submitLogRequest(){
global $db;

if(isset($_GET['id']) && $_GET['id'] != ""){
$id = $_GET['id'];
}    
    
$invalidErr = "";   
$clients_id = "";
$clients_email = "";    
$clients_address = "";    
$clients_hq_location = "";    
$clients_category = "";
    
    
    
if(isset($_POST['submit_log'])){

//$clients_name = mysqli_real_escape_string($db, $_POST['clients_name']);    
$clients_id = mysqli_real_escape_string($db, $_POST['clients_id']);    
$clients_hq_location = mysqli_real_escape_string($db, $_POST['clients_hq_location']);    
$clients_category = mysqli_real_escape_string($db, $_POST['clients_category']);    
$log = mysqli_real_escape_string($db, $_POST['log']);    
    
$find = mysqli_query($db, "SELECT * FROM clients_table WHERE id = '$clients_id'");
$found = mysqli_fetch_assoc($find);
$findNum = mysqli_num_rows($find);    

if($findNum > 0){
$clients_name = $found['clients_name'];
//$clients_email = $found['clients_email'];    
//$clients_address = $found['clients_address'];    
//$clients_hq_location = $found['clients_hq_location'];    
//$clients_category = $found['clients_category'];
}

$key_person = mysqli_real_escape_string($db, $_POST['key_person']);    
$created_by = $_SESSION['email'];    
$updated_by = $_SESSION['email'];
    
    
$select = mysqli_query($db, "SELECT * FROM log_table WHERE clients_name = '$clients_name' && key_person = '$key_person' && log = '$log'");
$num = mysqli_num_rows($select);
    
$fetch = mysqli_query($db, "SELECT * FROM log_table WHERE clients_name = '$clients_name' && key_person = '$key_person' && log = '$log' &&  id = '$id'");
$fetchNum = mysqli_num_rows($fetch);

    
if($num != 1 && $fetchNum != 1){    
    
mysqli_query($db, "INSERT INTO log_table(clients_id, clients_name, key_person, clients_hq_location, clients_category, log, created_by, updated_by)VALUES('$clients_id', '$clients_name', '$key_person', '$clients_hq_location', '$clients_category', '$log', '$created_by', '$updated_by')");    

$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Your log has successfully been added!</div>";    
    
    
}elseif($num == 1 && $fetchNum == 1){
    
mysqli_query($db, "INSERT INTO log_table(clients_id, clients_name, key_person, clients_hq_location, clients_category, log, created_by, updated_by)VALUES('$clients_id', '$clients_name', '$key_person', '$clients_hq_location', '$clients_category', '$log', '$created_by', '$updated_by')");    

$_SESSION['message'] = "<div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Your log has successfully been added!</div>";    
    
}elseif($num == 1 && $fetchNum != 1){
    

$_SESSION['message'] = "<div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i>Sorry, this log already exists!</div>";    
    
}

}    
    
    
}






function getTotalClients(){
    global $db;
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table");
	}
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}



function getTotalKeypersons(){
    global $db;
	
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT DISTINCT key_person FROM keypersons_table WHERE created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT DISTINCT key_person FROM keypersons_table");
	}
	
    $num = mysqli_num_rows($select);
    echo number_format($num, 0);
}







function getTotalMepClients(){
    global $db;
	
	
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table");
	}
	
    $num = mysqli_num_rows($select);
    
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}


function getTotalMepClientsCategory(){
    global $db;
	
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Mep Consultant' && created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Mep Consultant'");
	}
	
	
    $num = mysqli_num_rows($select);
    
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}


function getTotalProjectManagerCategory(){
    global $db;
	
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Project Manager' && created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Project Manager'");
	}
	
	
    $num = mysqli_num_rows($select);
	
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}

function getTotalArchitectsCategory(){
    global $db;
    
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Architects' && created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Architects'");
	}
	
	$num = mysqli_num_rows($select);
    
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}


function getTotalQsManagerCategory(){
    global $db;
    
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Qs Manager' && created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Qs Manager'");
	}
	
	$num = mysqli_num_rows($select);
    
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}



function getTotalGenCategory(){
    global $db;
    
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'General Contractor' && created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'General Contractor'");
	}
	
    $num = mysqli_num_rows($select);
    
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}



function getTotalEndUserCategory(){
    global $db;
    
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'End User / Owner' && created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'End User / Owner'");
	}
	
	$num = mysqli_num_rows($select);
    
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}



function getTotalOthersCategory(){
    global $db;
    
	if($_SESSION['integrity'] == "User"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Other Consultants' && created_by = '{$_SESSION['email']}'");	
	}elseif($_SESSION['integrity'] == "PMS Admin"){
		$select = mysqli_query($db, "SELECT * FROM clients_table WHERE clients_category = 'Other Consultants'");
	}
	
	$num = mysqli_num_rows($select);
    
    if($num > 0){
    
        echo number_format($num, 0);
        
    }else{
        
        echo "0";
    }
    
}





?>