<?php
include_once('includes/connection.php');
include_once('includes/functions.php');
session_start();
    
$_SESSION['fname'] = "";
$_SESSION['integrity'] = "";
$_SESSION['id'] = "";

    
    
if(!isset($_SESSION['email']) || $_SESSION['email'] == ""){
    header('location:login.php');
}else{
    $session_email = $_SESSION['email'];
    $select = mysqli_query($db, "SELECT * FROM user_table WHERE email = '$session_email'");
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


if($_SESSION['integrity'] == "PMS"){
    header('location:logout.php');
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
	submitPrequalification();
	editPrequalification();

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
            if($_SESSION['integrity'] == "Admin" || $_SESSION['integrity'] == "Others"){
                include_once('includes/home.php');
            }else{
                include_once('includes/document/overview.php');
            }
        }
        
        

        if(isset($_GET['page']) && $_GET['page'] == "tender_overview"){
        include_once('includes/tender/overview.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "add_tender"){
        include_once('includes/tender/add_tender.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "edit"){
        include_once('includes/tender/edit_tender.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "tender_view"){
        include_once('includes/tender/tender_view.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "advanced_tender_view"){
        include_once('includes/tender/advanced_tender_view.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "tender_search"){
        include_once('includes/tender/tender_search.php');
        }
        
        
        if(isset($_GET['page']) && $_GET['page'] == "print_tender"){
        include_once('includes/tender/print_tender.php');
        }

        
        if(isset($_GET['page']) && $_GET['page'] == "pending"){
        include_once('includes/tender/report/pending.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "inprogress"){
        include_once('includes/tender/report/inprogress.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "awaiting"){
        include_once('includes/tender/report/awaiting.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "submitted"){
        include_once('includes/tender/report/submitted.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "approved"){
        include_once('includes/tender/report/approved.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "onhold"){
        include_once('includes/tender/report/onhold.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "declined"){
        include_once('includes/tender/report/declined.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "awarded"){
        include_once('includes/tender/report/awarded.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "abortive"){
            include_once('includes/tender/report/abortive.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "nigeria"){
        include_once('includes/tender/report/nigeria.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "ghana"){
        include_once('includes/tender/report/ghana.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "ivory_coast"){
        include_once('includes/tender/report/ivory_coast.php');
        }
        
        
        
        // Document Page
        if(isset($_GET['page']) && $_GET['page'] == "document_overview"){
        include_once('includes/document/overview.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "tender_document"){
        include_once('includes/document/tender_document.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "profile_document"){
        include_once('includes/document/profile_document.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "presentation_document"){
        include_once('includes/document/presentation_document.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "add_document"){
        include_once('includes/document/add_document.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "edit_document"){
        include_once('includes/document/edit_document.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "document_search"){
        include_once('includes/document/document_search.php');
        }
        
        
        
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
		
		
		if(isset($_GET['page']) && $_GET['page'] == "print_preq"){
        include_once('./print_preq.php');
        }
        
        
        
		
		
		
		
		// Prequalification Page
        if(isset($_GET['page']) && $_GET['page'] == "clients_preq"){
        include_once('includes/prequalification/overview.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "prequalification"){
        include_once('includes/prequalification/all_preq.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "add_preq"){
        include_once('includes/prequalification/add_preq.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "edit_preq"){
        include_once('includes/prequalification/edit_preq.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "preq_search"){
        include_once('includes/prequalification/preq_search.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "view_preq"){
        include_once('includes/prequalification/view_preq.php');
        }
        
		
		
        
        
        // Web of Influence
//        if(isset($_GET['page']) && $_GET['page'] == "woi_overview"){
//        include_once('includes/client/overview.php');
//        }
        
//        if(isset($_GET['page']) && $_GET['page'] == "woi"){
//        include_once('includes/woi/woi.php');
//        }
        
        
        if(isset($_GET['page']) && $_GET['page'] == "woi_overview"){
        include_once('includes/woi/woi_overview.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "add_woi"){
        include_once('includes/woi/add_woi.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "edit_woi"){
        include_once('includes/woi/edit_woi.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "woi_search"){
        include_once('includes/woi/woi_search.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "view_woi"){
        include_once('includes/woi/view_woi.php');
        }



        // clients survey
        if(isset($_GET['page']) && $_GET['page'] == "survey_overview"){
        include_once('includes/survey/survey_overview.php');
        }

        if(isset($_GET['page']) && $_GET['page'] == "survey"){
        include_once('includes/survey/survey.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "add_survey"){
        include_once('includes/survey/add_survey.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "edit_survey"){
        include_once('includes/survey/edit_survey.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "survey_search"){
        include_once('includes/survey/survey_search.php');
        }
        
        if(isset($_GET['page']) && $_GET['page'] == "view_survey"){
        include_once('includes/survey/view_survey.php');
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
    

<!-- Modal for validation -->
<div id="validationModal" class="modal">
	<div class="modal-content">
		<span class="close closeModalBtn">&times;</span>
		<p id="validationMessage"></p>
	</div>
</div>    
    
    
    
    
<div id="confirmationModal" class="confirmation-modal">
    <div class="confirmation-modal-content">
		<div id="successMessage" class="message success success-message" style="display: none;"></div>
		<div id="errorMessage" class="message error error-message" style="display: none;"></div>

		
        <span class="close closeModalBtn">&times;</span>
        <span class='fas fa-exclamation-triangle error-icon'></span> <div class='error-err-message'>Are you sure you want to delete client?</div>
        <div class="confirmFLex">
        <button id="confirmDelete">Yes</button>
        <button id="cancelDelete" class="close cancelDelete">No</button>
        </div>
    </div>
</div>    
    
    

<div id="confirmationModal" class="confirmation-modal tender-confirmation-modal">
    <div class="confirmation-modal-content">
		<div id="successMessage" class="message success success-message" style="display: none;"></div>
		<div id="errorMessage" class="message error error-message" style="display: none;"></div>

		
        <span class="close closeModalBtn">&times;</span>
        <span class='fas fa-exclamation-triangle error-icon'></span> <div class='error-err-message'>Are you sure you want to delete this tender document?</div>
        <div class="confirmFLex">
        <button id="confirmTenderDocDelete" class="yes-btn">Yes</button>
        <button id="cancelDelete" class="close cancelDelete">No</button>
        </div>
    </div>
</div>    
    
    
    
<div id="confirmationModal" class="confirmation-modal tech-confirmation-modal">
    <div class="confirmation-modal-content">
		<div id="successMessage" class="message success success-message" style="display: none;"></div>
		<div id="errorMessage" class="message error error-message" style="display: none;"></div>

		
        <span class="close closeModalBtn">&times;</span>
        <span class='fas fa-exclamation-triangle error-icon'></span> <div class='error-err-message'>Are you sure you want to delete this technical document?</div>
        <div class="confirmFLex">
        <button id="confirmTechDocDelete" class="yes-btn">Yes</button>
        <button id="cancelDelete" class="close cancelDelete">No</button>
        </div>
    </div>
</div>    
    
    

	
<!-- Success Modal -->
<div id="successModal" class="modal">
  <div class="modal-content">
    <span class="close closeModalBtn">&times;</span>
<!--
    <div class="modal-header">
      <h2>Success!</h2>
    </div>
-->
    <div class="modal-body">
     	<span class="success-icon fas fa-check"></span>
        <div class="success-message">Successfully deleted!</div>
    </div>
  </div>
</div>
	
	
	
<!--
<div id="printModal" class="modal">
	<div class="print-modal-container">
		<div class="print-invoice-container">
			<div class="print-modal-close">Close</div>
		</div>
	</div>
</div>    
-->
    
    
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="modalContent"></div>
    </div>
</div>    
    
    
</body>
    
    
<script type="text/javascript" src="assets/js/style.js"></script>
<script type="text/javascript" src="assets/js/edit_submit.js"></script>
<script type="text/javascript" src="assets/js/submit_tender.js"></script>
<script type="text/javascript" src="assets/js/libraries/wow.min.js"></script>
<script type="text/javascript" src="assets/js/select2.min.js"></script>
<script type="text/javascript" src="assets/js/printThis.js"></script>
<script>
new WOW().init();
</script>

    
 
<script>
$(document).ready(function () {
    $(".project_country").change(function () {
    var val = $(this).val();
        if(val == "Nigeria") {
            $("#size").html("<option value=''>Select Nigerian City</option><?php getNgncities(); ?>");
        }else if(val == "Ghana") {
            $("#size").html("<option value=''>Select Ghanian City</option><?php getGhacities(); ?>");
        }else if(val == "Ivory Coast") {
            $("#size").html("<option value=''>Select Ivory Coast City</option><?php getCivcities(); ?>");
        }else{
            $("#size").html("<option value=''>Select Project City</option>");
        }
    });
    
    
    
    $("#clients").change(function () {
        var keyval = $("#clients").val();
        var person = $("#keypersons");

        if (keyval != "") {
            person.attr("required", true);

            $.ajax({
                url: 'keypersons.php',
                method: 'post',
                data: 'keyval=' + keyval,
            }).done(function (keypersons) {
                console.log(keypersons);

                // Clear previous options and add new options
                person.html("<option value=''> Select Keyperson </option>" + keypersons + "<option value='Others'>Others</option>");
            })

        } else {
            // If no client selected, reset options
            person.html("<option value=''> Select Keyperson </option>");
            person.attr("required", false);
        }
    });
    
    
});  
</script>
    

<script>
    
$(document).ready(function() {
    $('#division').select2({
        //dropdownParent: $(".tender-form-group").parent()  
    });
});  
    
   
$(document).ready(function() {
    $('.select--select').select2({
        //dropdownParent: $(".tender-form-group").parent()  
    });
});        
    
   
$(document).ready(function() {
    $('.project_city').select2({
        //dropdownParent: $(".tender-form-group").parent()  
    });
});    
    
    
$(document).ready(function() {
    $('.project_country').select2({
        //dropdownParent: $(".tender-form-group").parent()  
    });
});    
   
    
$(document).ready(function() {
    var clientPreSelect = $('.clients-select-pred').select2({
        ajax: {
            url: 'script/get_project_clients.php',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (client) {
                        return {
                            id: client.clients_id,
                            text: client.clients_name
                        };
                    })
                };
            },
            cache: true,
            data: function (params) {
                return {
                    q: params.term // Send the search term to the server
                };
            }
        },
    });

    clientPreSelect.on('select2:select', function (e) {
        var selectedClient = e.params.data;
        var $parentWrapper = $(this).closest('.tender-fg-wrapper');
        $parentWrapper.find('.clients-id-pred').val(selectedClient.id);
        $parentWrapper.find('.clients-name-pred').val(selectedClient.text);
    });

    clientPreSelect.on('select2:clear', function () {
        var $parentWrapper = $(this).closest('.tender-fg-wrapper');
        $parentWrapper.find('.clients-id-pred').val('');
        $parentWrapper.find('.clients-name-pred').val('');
    });
});

    
    
    
    
$(document).ready(function() {
    $('.keypersons-select-pred').select2({
        //dropdownParent: $(".tender-form-group").parent()  
    });
});    
    
$(document).ready(function () {
    
// Function to initialize Select2 for clients dropdown
function initializeClientsSelect(container) {
    var clientsSelect = container.find('.clients-select');

    // Check if Select2 has been initialized
    if (!clientsSelect.hasClass('select2-hidden-accessible')) {
        clientsSelect.select2({
            ajax: {
                url: 'script/get_project_clients.php',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (client) {
                            return {
                                id: client.clients_id,
                                text: client.clients_name
                            };
                        })
                    };
                },
                cache: true,
                data: function (params) {
                    return {
                        q: params.term // Send the search term to the server
                    };
                }
            },
            dropdownParent: container
        });

        clientsSelect.on('select2:select', function (e) {
            var selectedClient = e.params.data;
            container.find('.clients-id').val(selectedClient.id);
            container.find('.clients-name').val(selectedClient.text);
        });

        clientsSelect.on('select2:clear', function () {
            container.find('.clients-id').val('');
            container.find('.clients-name').val('');
        });
    }

    return clientsSelect;
}

// Function to initialize Select2 for keypersons dropdown
function initializeKeyPersonsSelect(container) {
    var keypersonsSelect = container.find('.keypersons-select');

    // Check if Select2 has been initialized
    if (!keypersonsSelect.hasClass('select2-hidden-accessible')) {
        keypersonsSelect.select2({
            // Your Select2 configuration options
        });
    }

    return keypersonsSelect;
}

// Function to handle change event for clients-select
function handleClientsChange() {
    var keyval = $(this).val();
    var keypersonsSelect = $(this).closest('.tender-fg-wrapper').find('.keypersons-select');

    if (keyval != "") {
        keypersonsSelect.attr("required", true);

        $.ajax({
            url: 'keypersons.php',
            method: 'post',
            data: 'keyval=' + keyval,
        }).done(function (keypersons) {
            console.log(keypersons);

            // Clear previous options and add new options
            keypersonsSelect.html("<option value=''> Select Keyperson </option>" + keypersons + "<option value='Others'>Others</option>");

            // Initialize Select2 for the new keypersons-select
            initializeKeyPersonsSelect(keypersonsSelect);
        });

    } else {
        // If no client selected, reset options
        keypersonsSelect.html("<option value=''> Select Keyperson </option>");
        keypersonsSelect.attr("required", false);
    }
}

    
// Function to handle change event for clients-select
function handleClientsPreChange() {
    var keypreval = $(this).val();
    var keypersonsPreSelect = $(this).closest('.tender-fg-wrapper').find('.keypersons-select-pred');

    if (keypreval != "") {
        keypersonsPreSelect.attr("required", true);

        $.ajax({
            url: 'keypersons.php',
            method: 'post',
            data: 'keyval=' + keypreval,
        }).done(function (keypersons) {
            console.log(keypersons);

            // Clear previous options and add new options
            keypersonsPreSelect.html("<option value=''> Select Keyperson </option>" + keypersons + "<option value='Others'>Others</option>");

            // Initialize Select2 for the new keypersons-select
            initializeKeyPersonsSelect(keypersonsPreSelect);
        });

    } else {
        // If no client selected, reset options
        keypersonsPreSelect.html("<option value=''> Select Keyperson </option>");
        keypersonsPreSelect.attr("required", false);
    }
}    

    
    
// Event delegation for handling change in clients-select
$(document).on('change', '.clients-select-pred', handleClientsPreChange);    
$(document).on('change', '.clients-select', handleClientsChange);


// Function to add a new tender form group
function addNewTenderGroup() {
    var newTenderGroup = $('<div class="tender-fg-wrapper">' +
        '<div class="tender-form-group">' +
            '<label class="tender-form-label">Project Client <span class="asterisk">***</span></label>' +
            '<select name="project_client[]" class="tender-input clients-select" aria-label="Select Project\'s Client" required>' +
                '<option value="" selected>Select Client</option>' +
            '</select>' +
            '<span class="fas fa-users tender-ficon"></span>' +
            '<input type="hidden" name="clients_id[]" class="clients-id">' +
            '<input type="hidden" name="clients_name[]" class="clients-name">' +
            '<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a client</span></span>' +
            '<a class="tender-form-title" href="./?page=add_client">+ Add new client</a>' +
        '</div>' +

        '<div class="tender-form-group">' +
            '<label class="tender-form-label">Select Keyperson <span class="asterisk">***</span></label>' +
            '<select name="key_person[]" class="tender-input keypersons-select" aria-label="Select Keypersons" required>' +
                '<option value="" selected>Select Keyperson</option>' +
            '</select>' +
            '<span class="fas fa-city tender-ficon"></span>' +
            '<span class="form-error"><span class="form-error-icon fas fa-exclamation-triangle"></span> <span class="form-error-text">Please select a keyperson</span></span>' +
            '<a class="tender-form-title" href="./?page=add_keyperson">+ Add keyperson</a>' +
        '</div>' +

        '<a class="removeBtn" disabled>Remove</a>' +
    '</div>');

    // Append the new tender form group
    $('.tender-fg-container').append(newTenderGroup);

    // Manually initialize Select2 for clients and keypersons in the new tender form group
    initializeClientsSelect(newTenderGroup);
    initializeKeyPersonsSelect(newTenderGroup);
}

// Initialize Select2 for keypersons and clients in the first row
initializeKeyPersonsSelect($('.tender-fg-wrapper:first'));
initializeClientsSelect($('.tender-fg-wrapper:first'));

// Add new tender form group on click
$('.addProject').on('click', function () {
    addNewTenderGroup();
});
    
    
    
    

// Remove tender form group
$(document).on('click', '.removeBtn', function () {
    var tenderGroup = $(this).closest('.tender-fg-wrapper');

    // Only remove if there's more than one tender form group
    if ($('.tender-fg-wrapper').length > 1) {
        tenderGroup.remove();
    }
});


});

</script>    
    
    
    
    
<!-- End User -->
<script>

$(document).ready(function () {
    // Initialize Select2 for endUserSelect
    var endUserSelect = $('#end_user').select2({
        ajax: {
            url: 'script/get_end_users.php',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (endUser) {
                        return {
                            id: endUser.clients_name,
                            text: endUser.clients_name
                        };
                    })
                };
            },
            cache: true,
            data: function (params) {
                return {
                    q: params.term // Send the search term to the server
                };
            }
        },
        //dropdownParent: $(".tender-form-group").parent();
    });
});    
    
</script>
    
<!-- Project Manager -->
<script>

$(document).ready(function () {
    // Initialize Select2 for endUserSelect
    var projectManagerSelect = $('#project_manager').select2({
        ajax: {
            url: 'script/get_project_manager.php',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (projectManager) {
                        return {
                            id: projectManager.clients_name,
                            text: projectManager.clients_name
                        };
                    })
                };
            },
            cache: true,
            data: function (params) {
                return {
                    q: params.term // Send the search term to the server
                };
            }
        },
        //dropdownParent: $(".tender-form-group").parent();
    });
});    
    
</script>
   
    
<!-- QS Manager -->
<script>

$(document).ready(function () {
    // Initialize Select2 for endUserSelect
    var qsManagerSelect = $('#qs_manager').select2({
        ajax: {
            url: 'script/get_qs_manager.php',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (qsManager) {
                        return {
                            id: qsManager.clients_name,
                            text: qsManager.clients_name
                        };
                    })
                };
            },
            cache: true,
            data: function (params) {
                return {
                    q: params.term // Send the search term to the server
                };
            }
        },
        //dropdownParent: $(".tender-form-group").parent();
    });
});    
    
</script>
    
    
<!-- Mep Consultants -->
<script>

$(document).ready(function () {
    // Initialize Select2 for endUserSelect
    var qsManagerSelect = $('#mep_consultant').select2({
        ajax: {
            url: 'script/get_mep_consultants.php',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (mepConsltData) {
                        return {
                            id: mepConsltData.clients_name,
                            text: mepConsltData.clients_name
                        };
                    })
                };
            },
            cache: true,
            data: function (params) {
                return {
                    q: params.term // Send the search term to the server
                };
            }
        },
        //dropdownParent: $(".tender-form-group").parent();
    });
});    
    
</script>
    
    

<!-- Architects -->
<script>

$(document).ready(function () {
    // Initialize Select2 for endUserSelect
    var architectsSelect = $('#architects').select2({
        ajax: {
            url: 'script/get_architects.php',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (architectsData) {
                        return {
                            id: architectsData.clients_name,
                            text: architectsData.clients_name
                        };
                    })
                };
            },
            cache: true,
            data: function (params) {
                return {
                    q: params.term // Send the search term to the server
                };
            }
        },
        //dropdownParent: $(".tender-form-group").parent();
    });
});    
    
</script>    
    
    
    
<!-- Add & Remove Tender Document -->
<script>

// Add new tender form group
$('.addDocument').on('click', function () {
    // Clone the first .tender-fg-wrapper
    var newDocumentGroup = $('<div class="doc-fg-wrapper">' +
    '<div class="tender-form-group tender-fg-full">' +
        '<label class="tender-form-label">Enter Document Name</label>' +
        '<input type="text" name="tender_document[]" id="tender_document" placeholder="Enter Tender Document" class="tender-input">' +
        '<span class="fas fa-file tender-ficon"></span>' +
    '</div>' +
    '<a class="removeDocumentBtn" disabled>Remove Document</a>' +
    '</div>');;


    // Clear values and disable removeBtn
    newDocumentGroup.find('#tender_document').val('');
    newDocumentGroup.find('.removeDocumentBtn').prop('disabled', false);

    // Append the new tender form group
    $('.doc-fg-container').append(newDocumentGroup);

});

// Remove tender form group
$(document).on('click', '.removeDocumentBtn', function () {
    var documentGroup = $(this).closest('.doc-fg-wrapper');
    
    // Only remove if there's more than one tender form group
    if ($('.doc-fg-wrapper').length > 1) {
        documentGroup.remove();
    }
});    
    
</script>    
   
    
<!-- Add & Remove Technical Document -->
<script>

// Add new tender form group
$('.addTechDocument').on('click', function () {
    // Clone the first .tender-fg-wrapper
    var newTechDocumentGroup = $('<div class="tech-doc-fg-wrapper">' +
    '<div class="tender-form-group tender-fg-full">' +
        '<label class="tender-form-label">Enter Technical Document</label>' +
        '<input type="text" name="technical_document[]" id="technical_document" placeholder="Enter Technical Document" class="tender-input">' +
        '<span class="fas fa-file tender-ficon"></span>' +
    '</div>' +
    '<a class="removeTechDocumentBtn" disabled>Remove Document</a>' +
'</div>');

    // Clear values and disable removeBtn
    newTechDocumentGroup.find('#technical_document').val('');
    newTechDocumentGroup.find('.removeTechDocumentBtn').prop('disabled', false);

    // Append the new tender form group
    $('.tech-doc-fg-container').append(newTechDocumentGroup);

});

// Remove tender form group
$(document).on('click', '.removeTechDocumentBtn', function () {
    var techDocumentGroup = $(this).closest('.tech-doc-fg-wrapper');
    
    // Only remove if there's more than one tender form group
    if ($('.tech-doc-fg-wrapper').length > 1) {
        techDocumentGroup.remove();
    }
});    
    
</script>    
   
      
    
<!-- Delete Single Row -->
<script>
    
    
let rowToDelete;

// Function to open the confirmation modal
function openConfirmationModal(row) {
    rowToDelete = row;
    $('#confirmationModal').css('display', 'flex');
}

// Function to close the confirmation modal
function closeConfirmationModal() {
    $('#confirmationModal').css('display', 'none');		
}    
    
    

// Function to open the confirmation modal
function openTenderDocConfirmationModal(row) {
    rowToDelete = row;
    $('.tender-confirmation-modal').css('display', 'flex');
}    
    
// Function to close the confirmation modal
function closeTenderDocConfirmationModal() {
    $('.tender-confirmation-modal').css('display', 'none');		
} 

    

// Function to open the confirmation modal
function openTechDocConfirmationModal(row) {
    rowToDelete = row;
    $('.tech-confirmation-modal').css('display', 'flex');
}    
    
// Function to close the confirmation modal
function closeTechDocConfirmationModal() {
    $('.tech-confirmation-modal').css('display', 'none');		
}    
    
    
    

// Click event handler for the delete button
function deleteThisRow(button) {
    openConfirmationModal($(button).closest('.tender-fg-wrapper')); // Corrected class name
}
    

// Click event handler for the delete button
function deleteTenderDoc(button) {
    openTenderDocConfirmationModal($(button).closest('.doc-fg-wrapper')); // Corrected class name
}    
 
    
// Click event handler for the delete button
function deleteTechDoc(button) {
    openTechDocConfirmationModal($(button).closest('.tech-doc-fg-wrapper')); // Corrected class name
}    
    

$('#confirmDelete').click(function() {
    // Asynchronously delete data from the database
    let id = $(rowToDelete).find('.clients_tab_id').val(); // Corrected class name
    
    $.ajax({
        url: 'script/delete_single_client.php', // Provide the correct URL for your PHP script
        type: 'POST',
        data: { id: id },
        success: function(response) {
            if (response === 'success') {
                // Server-side deletion successful

                // Remove row visually
                $(rowToDelete).remove();
                closeConfirmationModal();

                // Show success message
                handleSuccess('Row deleted successfully!');
            } else {
                handleError('Error occurred while deleting row.');
            }
        },
        error: function() {
            handleError('Error occurred while communicating with the server.');
        }
    });
	
	
 // Event listener for close button in success modal
    $('#successModal .close').click(function() {
        $('#successModal').css('display', 'none');
    });
	
	
});
    
    

    
$('#confirmTenderDocDelete').click(function() {
    // Asynchronously delete data from the database
    let id = $(rowToDelete).find('.tender_doc_id').val(); // Corrected class name
    
    $.ajax({
        url: 'script/delete_single_tender_doc.php', // Provide the correct URL for your PHP script
        type: 'POST',
        data: { id: id },
        success: function(response) {
            if (response === 'success') {
                // Server-side deletion successful

                // Remove row visually
                $(rowToDelete).remove();
                closeTenderDocConfirmationModal();

                // Show success message
                handleSuccess('Row deleted successfully!');
            } else {
                handleError('Error occurred while deleting row.');
            }
        },
        error: function() {
            handleError('Error occurred while communicating with the server.');
        }
    });
	
	
 // Event listener for close button in success modal
    $('#successModal .close').click(function() {
        $('#successModal').css('display', 'none');
    });
	
	
});    
    

    
    
$('#confirmTechDocDelete').click(function() {
    // Asynchronously delete data from the database
    let id = $(rowToDelete).find('.tech_doc_id').val(); // Corrected class name
    
    $.ajax({
        url: 'script/delete_single_tech_doc.php', // Provide the correct URL for your PHP script
        type: 'POST',
        data: { id: id },
        success: function(response) {
            if (response === 'success') {
                // Server-side deletion successful

                // Remove row visually
                $(rowToDelete).remove();
                closeTechDocConfirmationModal();

                // Show success message
                handleSuccess('Row deleted successfully!');
            } else {
                handleError('Error occurred while deleting row.');
            }
        },
        error: function() {
            handleError('Error occurred while communicating with the server.');
        }
    });
	
	
 // Event listener for close button in success modal
    $('#successModal .close').click(function() {
        $('#successModal').css('display', 'none');
    });
	
	
});   
    
    

function handleSuccess(message) {
    $('#successMessage').text(message);
    $('#successModal').css('display', 'flex');
}


// Event listener for clicking outside the success modal content
window.onclick = function(event) {
    var modal = document.getElementById('successModal');
    if (event.target == modal) {
        $('#successModal').css('display', 'none');
    }
};	
	
	

// Click event handler for the No button in the confirmation modal
$('.cancelDelete').click(function() {
	closeConfirmationModal();
	closeTenderDocConfirmationModal();
	closeTechDocConfirmationModal();
});

// Click event handler for the close button in the confirmation modal
$('.close').click(function() {
	closeConfirmationModal();
    closeTenderDocConfirmationModal();
    closeTechDocConfirmationModal();
});    
    
    
</script>
  
    
    
</html>