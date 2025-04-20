<?php
if(isset($_GET['id']) && $_GET['id'] != ""){
    
$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM clients_survey_form WHERE id = '$id'");
$selected = mysqli_fetch_assoc($select);

$quality = $selected['quality'] ?: 'Nil';
$quality_comments = $selected['quality_comments'] ?: 'Nil';
$timeline = $selected['timeline'] ?: 'Nil';
$timeline_comments = $selected['timeline_comments'] ?: 'Nil';
$expertise = $selected['expertise'] ?: 'Nil';
$expertise_comments = $selected['expertise_comments'] ?: 'Nil';
$communication = $selected['communication'] ?: 'Nil';
$communication_comments = $selected['communication_comments'] ?: 'Nil';
$resolution = $selected['resolution'] ?: 'Nil';
$resolution_comments = $selected['resolution_comments'];
$cleaniness = $selected['cleaniness'] ?: 'Nil';
$cleaniness_comments = $selected['cleaniness_comments'] ?: 'Nil';
$safety = $selected['safety'] ?: 'Nil';
$safety_comments = $selected['safety_comments'] ?: 'Nil';
$response = $selected['response'] ?: 'Nil';
$response_comments = $selected['response_comments'] ?: 'Nil';
$electrical_services = $selected['electrical_services'] ?: 'Nil';
$mechanical_services = $selected['mechanical_services'] ?: 'Nil';
$filled_by = $selected['filled_by'] ?: 'Nil';
$position = $selected['position'] ?: 'Nil';
$office_address = $selected['office_address'] ?: 'Nil';
$phone_number = $selected['phone_number'] ?: 'Nil';
$fax_number = $selected['fax_number'] ?: 'Nil';
$project_title = $selected['project_title'] ?: 'Nil';
$company = $selected['company'] ?: 'Nil';
$location = $selected['location'] ?: 'Nil';
$email = $selected['email'] ?: 'Nil';
$createdAt = date('jS M, Y', strtotime($selected['createdAt']));
$updatedAt = date('jS M, Y', strtotime($selected['updatedAt']));

?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Clients Survey    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Client Survey Data 
    </div><br />

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=view_survey" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

<!-- <a href="view_client.php?id=<?php echo $_GET['id']; ?>"  class='success-message theme-color'><i class='fas fa-file'></i> Print</a>     -->
    
</div>



<div class="print-container" style="page-break-before: always">

<div class="tender-title">
<!-- <i class="fas fa-user tender-icon"></i>-->
    Full Client's Survey Details are shown below
</div>    
    
<div class="tender-flexbox">

    <div class="tender-col">
        <div class="tc-title">Filled By:</div> <div class="tc-text"><?php echo $filled_by; ?></div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Position</div> 
        <div class="tc-text">
        <?php echo $position ?>
        </div>
    </div>


    <div class="tender-col">
        <div class="tc-title">Email-Address:</div> <div class="tc-text"><?php echo $email; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Office Address:</div> 
        <div class="tc-text">
        <?php echo $office_address ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Phone Number:</div> <div class="tc-text"><?php echo $phone_number; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Fax Number:</div> 
        <div class="tc-text">
        <?php echo $fax_number ?>
        </div>
    </div>
    

    <div class="tender-col tc-full">Quality</div>
    
    <div class="tender-col">
        <div class="tc-title">Overall Quality of construction work</div> 
        <div class="tc-text">
        <?php echo $quality ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $quality_comments ?>
        </div>
    </div>
    
    
    <div class="tender-col tc-full">Timeline Accuracy</div>
    
    <div class="tender-col">
        <div class="tc-title">Construction Timeliness Accuracy</div> 
        <div class="tc-text">
        <?php echo $timeline ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $timeline_comments ?>
        </div>
    </div>

    <div class="tender-col tc-full">Experience & Expertise</div>
    
    <div class="tender-col">
        <div class="tc-title">Overall Level of Professionalism</div> 
        <div class="tc-text">
        <?php echo $expertise ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $expertise_comments ?>
        </div>
    </div>


    <div class="tender-col tc-full">Communication</div>
    
    <div class="tender-col">
        <div class="tc-title">Communication with the service managers</div> 
        <div class="tc-text">
        <?php echo $communication ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $communication_comments ?>
        </div>
    </div>


    <div class="tender-col tc-full">Problem Resolution Ability</div>
    
    <div class="tender-col">
        <div class="tc-title">Challenges Resolution Ability</div> 
        <div class="tc-text">
        <?php echo $resolution ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $resolution_comments ?>
        </div>
    </div>
    
    <div class="tender-col tc-full">Jobsite Cleaniness</div>
    
    <div class="tender-col">
        <div class="tc-title">Cleaniness of jobsite during project</div> 
        <div class="tc-text">
        <?php echo $cleaniness ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $cleaniness_comments ?>
        </div>
    </div>


    <div class="tender-col tc-full">Safety</div>
    
    <div class="tender-col">
        <div class="tc-title">Safety of Jobsite during project</div> 
        <div class="tc-text">
        <?php echo $safety ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $safety_comments ?>
        </div>
    </div>


    <div class="tender-col tc-full">Client's Compliant</div>
    
    <div class="tender-col">
        <div class="tc-title">Response to client's complaint</div> 
        <div class="tc-text">
        <?php echo $response ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Comments</div> 
        <div class="tc-text">
        <?php echo $response_comments ?>
        </div>
    </div>
    

    <div class="tender-col tc-full">Overall Opinions on Services</div>
    
    <div class="tender-col">
        <div class="tc-title">Electrical Services</div> 
        <div class="tc-text">
        <?php echo $electrical_services ?>
        </div>
    </div>

    <div class="tender-col">
        <div class="tc-title">Mechnaical Services</div> 
        <div class="tc-text">
        <?php echo $mechanical_services ?>
        </div>
    </div>


    <div class="tender-col tc-full">
        User Credential
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Created By</div> <div class="tc-text"><?php echo $filled_by; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Created At</div> <div class="tc-text"><?php echo $createdAt; ?></div>
    </div>
    
    <div class="tender-col">
        <div class="tc-title">Updated At</div> <div class="tc-text"><?php echo $updatedAt; ?></div>
    </div>
    
    
</div>        
    
</div>


<?php
}elseif(!isset($_GET['code']) || $_GET['code'] == ""){
?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    404 not found!    
    </div>

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