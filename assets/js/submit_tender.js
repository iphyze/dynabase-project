function validateForm() {
    let isValid = true;


    // Perform validation for each input field
    if ($("#project_title").val() === "") {
        $("#project_title").closest(".tender-form-group").find(".form-error").show();
        $("#project_title").focus();
        $("#project_title").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $("#project_title").closest(".tender-form-group").find(".form-error").hide();
        $("#project_title").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }

    if ($("#clients").val() === "") {
        $("#clients").closest(".tender-form-group").find(".form-error").show();
        $("#clients").focus();
        $("#clients").css('border', '1px solid #ffb4b4');
        //$(".select2.select2-container--open").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $("#clients").closest(".tender-form-group").find(".form-error").hide();
        $("#clients").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        //$(".select2.select2-container--open").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }
    
    
    
    if ($(".clients-select").val() === "") {
        $(".clients-select").closest(".tender-form-group").find(".form-error").show();
        $(".clients-select").focus();
        $(".clients-select").css('border', '1px solid #ffb4b4');
        //$(".select2.select2-container--open").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $(".clients-select").closest(".tender-form-group").find(".form-error").hide();
        $(".clients-select").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        //$(".select2.select2-container--open").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }
    
    
    
    if ($("#keypersons").val() === "") {
        $("#keypersons").closest(".tender-form-group").find(".form-error").show();
        $("#keypersons").focus();
        $("#keypersons").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $("#keypersons").closest(".tender-form-group").find(".form-error").hide();
        $("#keypersons").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }
    
    
    if ($(".keypersons-select").val() === "") {
        $(".keypersons-select").closest(".tender-form-group").find(".form-error").show();
        $(".keypersons-select").focus();
        $(".keypersons-select").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $(".keypersons-select").closest(".tender-form-group").find(".form-error").hide();
        $(".keypersons-select").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }
    
    
    if ($("#division").val() === "") {
        $("#division").closest(".tender-form-group").find(".form-error").show();
        $("#division").focus();
        $("#division").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $("#division").closest(".tender-form-group").find(".form-error").hide();
        $("#division").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }
    
    
    
    if ($(".project_country").val() === "") {
        $(".project_country").closest(".tender-form-group").find(".form-error").show();
        $(".project_country").focus();
        $(".project_country").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $(".project_country").closest(".tender-form-group").find(".form-error").hide();
        $(".project_country").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }
    
    
    
    if ($(".project_city").val() === "") {
        $(".project_city").closest(".tender-form-group").find(".form-error").show();
        $(".project_city").focus();
        $(".project_city").css('border', '1px solid #ffb4b4');
        isValid = false;
    }else{
        $(".project_city").closest(".tender-form-group").find(".form-error").hide();
        $(".project_city").css('border', '1px solid rgba(0, 0, 0, 0.08)');
        isValid = true;
    }
    
    

    // Add more validation as needed for other fields

    return isValid;
}



$(document).ready(function () {
    $("#submitBtn").on("click", function () {
        // Perform client-side validation
        if (validateForm()) {
            // If validation passes, submit the form
            submitForm();
        }
    });

    function submitForm() {
    let formData = new FormData(document.getElementById('tenderForm'));

    fetch('submit_tender.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (data.status === "success") {
            displayModal(data.message);
            document.getElementById('tenderForm').reset();

            // Now, reload the page after the modal is closed
            $(document).ready(function() {
                setTimeout(function() {
                    location.reload(true); // Reload the page
                }, 1000); // 1000 milliseconds = 1 second
            });
        } else {
            displayModal(data.message, true);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        displayModal("An error occurred while processing your request.", true);
    });
}

    // Rest of your existing code...

    function displayModal(message, isError) {
        let modal = document.getElementById('validationModal');
        let messageElement = document.getElementById('validationMessage');

        messageElement.innerHTML = message; // Use innerHTML to display HTML content

        modal.style.display = "flex";

        let closeBtn = modal.querySelector('.close');
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    }
});




//function validateForm() {
//    let isValid = true;
//
//
//    // Perform validation for each input field
//    if ($("#project_title").val() === "") {
//        $("#project_title").closest(".tender-form-group").find(".form-error").show();
//        $("#project_title").focus();
//        $("#project_title").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $("#project_title").closest(".tender-form-group").find(".form-error").hide();
//        $("#project_title").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//
//    if ($("#clients").val() === "") {
//        $("#clients").closest(".tender-form-group").find(".form-error").show();
//        $("#clients").focus();
//        $("#clients").css('border', '1px solid #ffb4b4');
//        //$(".select2.select2-container--open").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $("#clients").closest(".tender-form-group").find(".form-error").hide();
//        $("#clients").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        //$(".select2.select2-container--open").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//    
//    
//    
//    if ($(".clients-select").val() === "") {
//        $(".clients-select").closest(".tender-form-group").find(".form-error").show();
//        $(".clients-select").focus();
//        $(".clients-select").css('border', '1px solid #ffb4b4');
//        //$(".select2.select2-container--open").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $(".clients-select").closest(".tender-form-group").find(".form-error").hide();
//        $(".clients-select").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        //$(".select2.select2-container--open").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//    
//    
//    
//    if ($("#keypersons").val() === "") {
//        $("#keypersons").closest(".tender-form-group").find(".form-error").show();
//        $("#keypersons").focus();
//        $("#keypersons").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $("#keypersons").closest(".tender-form-group").find(".form-error").hide();
//        $("#keypersons").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//    
//    
//    if ($(".keypersons-select").val() === "") {
//        $(".keypersons-select").closest(".tender-form-group").find(".form-error").show();
//        $(".keypersons-select").focus();
//        $(".keypersons-select").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $(".keypersons-select").closest(".tender-form-group").find(".form-error").hide();
//        $(".keypersons-select").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//    
//    
//    if ($("#division").val() === "") {
//        $("#division").closest(".tender-form-group").find(".form-error").show();
//        $("#division").focus();
//        $("#division").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $("#division").closest(".tender-form-group").find(".form-error").hide();
//        $("#division").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//    
//    
//    
//    if ($(".project_country").val() === "") {
//        $(".project_country").closest(".tender-form-group").find(".form-error").show();
//        $(".project_country").focus();
//        $(".project_country").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $(".project_country").closest(".tender-form-group").find(".form-error").hide();
//        $(".project_country").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//    
//    
//    
//    if ($(".project_city").val() === "") {
//        $(".project_city").closest(".tender-form-group").find(".form-error").show();
//        $(".project_city").focus();
//        $(".project_city").css('border', '1px solid #ffb4b4');
//        isValid = false;
//    }else{
//        $(".project_city").closest(".tender-form-group").find(".form-error").hide();
//        $(".project_city").css('border', '1px solid rgba(0, 0, 0, 0.08)');
//        isValid = true;
//    }
//    
//    
//
//    // Add more validation as needed for other fields
//
//    return isValid;
//}
//
//$(document).ready(function() {
//    $("#submitBtn").on("click", function() {
//        // Perform client-side validation
//        if (validateForm()) {
//            // If validation passes, submit the form
//            submitForm();
//        }
//    });
//
//    function submitForm() {
//    let formData = new FormData(document.getElementById('tenderForm'));
//
//    fetch('submit_tender.php', {
//        method: 'POST',
//        body: formData
//    })
//    .then(response => response.text())
//    .then(data => {
//        if (data === "success") {
//            
//            
//            displayModal("<span class='fas fa-check success-icon'></span> <div class='success-message'>Your tender has been succesfully created!</div>");
//            document.getElementById('tenderForm').reset();
//			
//			$(document).ready(function() {
//				setTimeout(function() {
//                    location.reload(true); // Reload the page
//				}, 1000); // 3000 milliseconds = 3 seconds
//			});
//
//
//        } else {
//            displayModal(data);
//        }
//    })
//    .catch(error => {
//        console.error('Error:', error);
//    });
//}
//    
//    
//
//// Rest of your existing code...
//
//function displayModal(message, isError) {
//    let modal = document.getElementById('validationModal');
//    let messageElement = document.getElementById('validationMessage');
//
//    messageElement.innerHTML = message; // Use innerHTML to display HTML content
//
//    if (isError) {
//        messageElement.classList.add('error-message'); // Add error class
//    } else {
//        messageElement.classList.remove('error-message'); // Remove error class
//    }
//
//    modal.style.display = "flex";
//
//    let closeBtn = modal.querySelector('.close');
//    closeBtn.onclick = function() {
//        modal.style.display = "none";
//    };
//
//    window.onclick = function(event) {
//        if (event.target == modal) {
//            modal.style.display = "none";
//        }
//    };
//}   
//    
//});