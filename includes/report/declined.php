<a href="index.php" class="back-btn">Back</a>
<div class="search-box">
    <form action="index.php?page=search" method="post">
    <input type="search" placeholder="Tender Search" name="search" required>
    <button class="fas fa-search" name="search_btn" type="submit"></button>
    </form>
</div>
<a href="declined_report.php" class="back-btn full-width" onclick="return confirm('You\'re about to download this report in excel format, is that ok?')">Export Declined Tender Report</a>
<?php
if(isset($_GET['num']) && $_GET['num'] != ""){
        $num = $_GET['num'];
     }else{
        $num = 1;
}
        
$results_per_page = 5;
$pick = mysqli_query($db, "SELECT * FROM project_info_table");
$total_results = mysqli_num_rows($pick);
$total_page_num = ceil($total_results/$results_per_page);
$offset = ($num - 1) * $results_per_page;
        
$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_status = 'Declined' ORDER BY id DESC LIMIT $offset, $results_per_page");
$selected = mysqli_fetch_assoc($select);
$number = mysqli_num_rows($select);

if($number > 0){
    foreach($select as $selected){
        $project_title = $selected['project_title'];
        $division = $selected['division'];
        $project_duration = $selected['project_duration'];
        $project_country = $selected['project_country'];
        $project_city = $selected['project_city'];
        $code = $selected['code'];
        $tender_code = $selected['tender_code'];
        $project_status = $selected['project_status'];
        $progress = $selected['progress'];
        $vendor_information = $selected['vendor_information'];
?>
<div class="display-content">
    <div class="dc-box">
        <div class="dc-box-title">Title</div>
        <div class="dc-box-text"><?php echo $project_title; ?></div>
    </div>
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Division</div>
        <div class="dc-box-text"><?php echo $division; ?></div>
    </div>-->
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Project Duration</div>
        <div class="dc-box-text"><?php echo $project_duration; ?></div>
    </div>-->
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Country</div>
        <div class="dc-box-text"><?php echo $project_country; ?></div>
    </div>..>
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Project City</div>
        <div class="dc-box-text"><?php echo $project_city; ?></div>
    </div>-->
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Tender Code</div>
        <div class="dc-box-text"><?php echo $tender_code; ?></div>
    </div>-->
    
    <div class="dc-box">
        <div class="dc-box-title">Status</div>
        <div class="dc-box-text">
            <?php 
                if($project_status == "On Hold"){
                    echo "<span class='p-print-btn'>{$project_status}</span>";
                }elseif($project_status == "Approved"){
                    echo "<span class='d-download-btn'>{$project_status}</span>";
                }elseif($project_status == "Declined"){
                    echo "<span class='d-delete-btn'>{$project_status}</span>";
                }
            ?>
        </div>
    </div>
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Progress</div>
        <div class="dc-box-text">
            <?php 
                #if($progress == "Awaiting"){
                    #echo "<span class='p-print-btn'>{$progress}</span>";
                #}elseif($progress == "In Progress"){
                    #echo "<span class='d-download-btn'>{$progress}</span>";
                #}elseif($progress == "Pending"){
                    #echo "<span class='d-delete-btn'>{$progress}</span>";
                #}
            ?>
        </div>
    </div>-->
    
    <div class="dc-link-box">
        <a href="index.php?page=edit&code=<?php echo $code; ?>" class="print-btn"><span class="fas fa-edit" target=_blank></span> Edit</a>
    </div>
</div>
<?php
    }
}elseif($number == 0){
?>
<div class="display-content">
    <div class="dc-box-title">There is no tender currently approved!</div>
</div>
<?php
}
?>
<div class="pagination-box">
    <?php include_once('./includes/pagination/declined_pagination.php');?>
</div>