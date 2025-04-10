<?php
if(isset($_POST['search_btn'])){
$search = mysqli_real_escape_string($db, $_POST['search']);
      
$select = mysqli_query($db, "SELECT * FROM project_info_table WHERE project_title LIKE '%$search%' || division LIKE '%$search%' || project_country LIKE '%$search%' || project_city LIKE '%$search%' || project_status LIKE '%$search%' || tender_code LIKE '%$search%' || progress LIKE '%$search%'");
$selected = mysqli_fetch_assoc($select);
$number = mysqli_num_rows($select);

if($number > 0){
?>
<div class="dc-box">
    <div class="dc-box-title">Search Results</div>
    <div class="dc-box-text">Found <?php echo $number; ?> result(s) for <?php echo $search; ?></div>
    <a href="index.php" class="back-btn">Back</a>
</div>
<?php
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
?>
<div class="display-content">
    <div class="dc-box">
        <div class="dc-box-title">Project Title</div>
        <div class="dc-box-text"><?php echo $project_title; ?></div>
    </div>
    
    <div class="dc-box">
        <div class="dc-box-title">Division</div>
        <div class="dc-box-text"><?php echo $division; ?></div>
    </div>
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Project Duration</div>
        <div class="dc-box-text"><?php echo $project_duration; ?></div>
    </div>-->
    
    <div class="dc-box">
        <div class="dc-box-title">Project Country</div>
        <div class="dc-box-text"><?php echo $project_country; ?></div>
    </div>
    
    <!--<div class="dc-box">
        <div class="dc-box-title">Project City</div>
        <div class="dc-box-text"><?php echo $project_city; ?></div>
    </div>-->
    
    <div class="dc-box">
        <div class="dc-box-title">Tender Code</div>
        <div class="dc-box-text"><?php echo $tender_code; ?></div>
    </div>
    
    <div class="dc-box">
        <div class="dc-box-title">Status</div>
        <div class="dc-box-text">
            <?php 
                if($progress == "Awaiting"){
                    echo "<span class='p-print-btn'>{$progress}</span>";
                }elseif($progress == "In Progress"){
                    echo "<span class='d-download-btn'>{$progress}</span>";
                }elseif($progress == "Pending"){
                    echo "<span class='d-delete-btn'>{$progress}</span>";
                }elseif($progress == "Submitted"){
                    echo "<span class='p-submitted-btn'>{$progress}</span>";
                }
            ?>
        </div>
    </div>
    
    <div class="dc-box">
        <div class="dc-box-title">Tender Progress</div>
        <div class="dc-box-text">
            <?php 
                if($progress == "Awaiting"){
                    echo "<span class='p-print-btn'>{$progress}</span>";
                }elseif($progress == "In Progress"){
                    echo "<span class='d-download-btn'>{$progress}</span>";
                }elseif($progress == "Pending"){
                    echo "<span class='d-delete-btn'>{$progress}</span>";
                }
            ?>
        </div>
    </div>
    
    <div class="dc-link-box">
        <a href="download.php?code=<?php echo $code; ?>" class="download-btn" target=_blank><span class="fas fa-download"></span> Download</a>
        <a href="index.php?page=edit&code=<?php echo $code; ?>" class="print-btn"><span class="fas fa-edit" target=_blank></span> Edit</a>
        <a href="delete.php?code=<?php echo $code; ?>" onclick="return confirm('Are you sure you want to delete this tender?')" class="delete-btn"><span class="fas fa-trash" target=_blank></span> Delete</a>
    </div>
</div>
<?php
    }
}elseif($number == 0){
?>
<div class="display-content">
    <div class="dc-box-title">No results found!</div>
</div>
<?php
}
}
?>

<?php
if(!isset($_POST['search']) || $_POST['search'] == ""){
?>
<div class="dc-box">
    <div class="dc-box-title">Please ensure that you fill the search box!</div>
    <a href="index.php" class="dc-box-text">&larr; Go back</a>
</div>
<?php
}
?>