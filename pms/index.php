<?php
include_once('includes/connection.php');
include_once('includes/functions.php');
session_start();
    
if(!isset($_SESSION['email']) || $_SESSION['email'] == ""){
    header('location:login.php');
}else{
    $session_email = $_SESSION['email'];
    $select = mysqli_query($db, "SELECT * FROM pm_users_table WHERE email = '$session_email'");
    $selected = mysqli_fetch_assoc($select);
    $numPy = mysqli_num_rows($select);
    
    if($numPy > 0){
    
    $user_fname = $selected['fname'];
    $_SESSION['fname'] = $selected['fname'];
    $_SESSION['integrity'] = $selected['integrity'];
    $_SESSION['id'] = $selected['id'];
        
    }else{
        
        header('location:404.php');
        
    }
}
    submitProjectRequest();
    submitNewUserRequest();
    editProjectRequest();
    updateUserRequest();
    uploadDocument();
    updateUploadedFile();
    addNewClients();
    updateClientRequest();
    addNewKeyperson();
    updateKeypersonRequest();
    submitLogRequest();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--All styling reference-->
<?php include_once('includes/head.php') ?>    
<title>Dynabase</title>
</head>

<body>


<div class="main-container">
    
<!--Fixed Header Reference-->
<?php include_once('includes/header.php') ?>
    
<div class="content-flexbox">
    
<div class="cf-col col-nav">
    
    <?php include_once('includes/menu.php'); ?>
    
</div>
    
<!-- Overview Section -->
    
    <div class="cf-col col-overview">

        
        <?php
        if(!isset($_GET['page'])){
            if($_SESSION['integrity'] == "PMS" || $_SESSION['integrity'] == "PMS Admin" || $_SESSION['integrity'] == "User"){
                include_once('includes/client/overview.php');
            }else{
                include_once('logout.php');
            }
        }

//        if(isset($_GET['page']) && $_GET['page'] == "tender_overview"){
//        include_once('includes/tender/overview.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "add_tender"){
//        include_once('includes/tender/add_tender.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "edit"){
//        include_once('includes/tender/edit_tender.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "tender_view"){
//        include_once('includes/tender/tender_view.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "tender_search"){
//        include_once('includes/tender/tender_search.php');
//        }
//        
//        
//        if(isset($_GET['page']) && $_GET['page'] == "print_tender"){
//        include_once('includes/tender/print_tender.php');
//        }
//
//        
//        if(isset($_GET['page']) && $_GET['page'] == "pending"){
//        include_once('includes/tender/report/pending.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "inprogress"){
//        include_once('includes/tender/report/inprogress.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "awaiting"){
//        include_once('includes/tender/report/awaiting.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "submitted"){
//        include_once('includes/tender/report/submitted.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "approved"){
//        include_once('includes/tender/report/approved.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "onhold"){
//        include_once('includes/tender/report/onhold.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "declined"){
//        include_once('includes/tender/report/declined.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "awarded"){
//        include_once('includes/tender/report/awarded.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "nigeria"){
//        include_once('includes/tender/report/nigeria.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "ghana"){
//        include_once('includes/tender/report/ghana.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "ivory_coast"){
//        include_once('includes/tender/report/ivory_coast.php');
//        }
//        
//        
//        
//        // Document Page
//        if(isset($_GET['page']) && $_GET['page'] == "document_overview"){
//        include_once('includes/document/overview.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "tender_document"){
//        include_once('includes/document/tender_document.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "profile_document"){
//        include_once('includes/document/profile_document.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "presentation_document"){
//        include_once('includes/document/presentation_document.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "add_document"){
//        include_once('includes/document/add_document.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "edit_document"){
//        include_once('includes/document/edit_document.php');
//        }
//        
//        if(isset($_GET['page']) && $_GET['page'] == "document_search"){
//        include_once('includes/document/document_search.php');
//        }
        
        
        
        // Client Page
        if(isset($_GET['page']) && $_GET['page'] == "client_overview"){
        include_once('includes/client/overview.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "clients"){
        include_once('includes/client/clients.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "add_client"){
        include_once('includes/client/add_client.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "edit_client"){
        include_once('includes/client/edit_client.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "client_search"){
        include_once('includes/client/client_search.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "view_client"){
        include_once('includes/client/view_client.php');
        }
        
        
        if(isset($_GET['page']) && $_GET['page'] == "view_keyperson"){
        include_once('includes/client/view_keyperson.php');
        }
        
        
        
        if(isset($_GET['page']) && $_GET['page'] == "all_clients"){
        include_once('includes/client/all_clients.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "mep_clients"){
        include_once('includes/client/pages/mep_clients.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "project_manager_clients"){
        include_once('includes/client/pages/project_manager_clients.php');
        }
        
        
        if(isset($_GET['page']) && $_GET['page'] == "architect_clients"){
        include_once('includes/client/pages/architect_clients.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "qs_manager_clients"){
        include_once('includes/client/pages/qs_manager_clients.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "general_clients"){
        include_once('includes/client/pages/general_clients.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "end_user_clients"){
        include_once('includes/client/pages/end_user_clients.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "other_clients"){
        include_once('includes/client/pages/other_clients.php');
        }
        
        
        
        
        if(isset($_GET['page']) && $_GET['page'] == "keypersons"){
        include_once('includes/client/keypersons.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "add_keyperson"){
        include_once('includes/client/add_keyperson.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "edit_keyperson"){
        include_once('includes/client/edit_keyperson.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "logs"){
        include_once('includes/client/logs.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "keyperson_search"){
        include_once('includes/client/keyperson_search.php');
        }
        
        
        
        // user
        if(isset($_GET['page']) && $_GET['page'] == "user_overview"){
        include_once('includes/user/overview.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "add_user"){
        include_once('includes/user/add_user.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "user_view"){
        include_once('includes/user/user_view.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "user_search"){
        include_once('includes/user/user_search.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "update_user"){
        include_once('includes/user/update_user.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "reset"){
        include_once('includes/user/reset.php');
        }
        
        
        
        

//        if(isset($_GET['page']) && $_GET['page'] == "settings"){
//        include_once('includes/settings.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "users"){
//        include_once('includes/users/users.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "add_user"){
//        include_once('includes/users/add_user.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "user_search"){
//        include_once('includes/users/user_search.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "reset"){
//        include_once('includes/users/reset.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "update_user"){
//        include_once('includes/users/update_user.php');
//        }
//
//        if(isset($_GET['page']) && $_GET['page'] == "delete_user"){
//        include_once('includes/users/delete_user.php');
//        }
        
    ?>
        
        
    </div>
    
</div>
    
</div>
    
    
</body>
    
    
<script type="text/javascript" src="assets/js/style.js"></script>
<script type="text/javascript" src="assets/js/libraries/wow.min.js"></script>
<script type="text/javascript" src="assets/js/printThis.js"></script>
<script>
new WOW().init();
</script>

<script>
$(document).ready(function () {
//    $("#type").change(function () {
//    var val = $(this).val();
//        if(val == "Nigeria") {
//            $("#size").html("<option value=''> -- Select Project City -- </option><?php //getNgncities(); ?>");
//        }else if(val == "Ghana") {
//            $("#size").html("<option value=''> -- Select Project City -- </option><?php //getGhacities(); ?>");
//        }else if(val == "Ivory Coast") {
//            $("#size").html("<option value=''> -- Select Project City -- </option><?php //getCivcities(); ?>");
//        }else{
//            $("#size").html("<option value=''> -- Select Project City -- </option>");
//        }
//    });
    
    
    
    $("#clients").change(function () {
    
        var keyval = $("#clients").val();
        var person = $("#keypersons");
        
        if(keyval != "") {
            
            //$("#keyperson").html("<option value=''>" + val + "</option>");
            
            person.attr("required", true);
            
            $.ajax({
                url : 'keypersons.php',
                method : 'post',
                data : 'keyval=' + keyval,
            }).done(function(keypersons){
                console.log(keypersons);
                keypersons = JSON.parse(keypersons);
                //keypersons.forEach(function(keyperson){
                    $("#keypersons").html("<option value=''> -- Select Keyperson -- </option>" + keypersons + "<option value='Others'>Others</option>");
                //});
            })
            
        }else{
            $("#keypersons").html("<option value=''> -- Select Keyperson -- </option>");
            person.attr("required", false);
        }
    });
    
    
});    
</script>
</html>