<?php
if(isset($_POST['search_document'])){
$search = mysqli_real_escape_string($db, $_POST['search']);
      
$select = mysqli_query($db, "SELECT * FROM document_table WHERE document_title LIKE '%$search%' || document_category LIKE '%$search%' || presentation_code LIKE '%$search%' || document_type LIKE '%$search%' || updated_content LIKE '%$search%' || document LIKE '%$search%'");
$selected = mysqli_fetch_assoc($select);
$number = mysqli_num_rows($select);

if($number > 0){
$sn = 0;
?>
<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Document Search Result    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        Found <?php echo $number; ?> result(s) for <?php echo $search; ?> 
        </div>

    </div>

    <div class="home-heading-col-2">
        <a href="index.php?page=tender_document" class="back-btn"><i class="fas fa-home"></i> Home</a>
    </div>

</div>


<div class="table-container">

    <!--
        <div class="success-message wow bounceIn"><i class="fas fa-check-circle"></i> Your tender was successfully created!</div>

        <div class="error-message wow bounceIn"><i class="fas fa-exclamation-triangle"></i> Sorry, submission failed!</div>
    -->    


    <div class="form-title">Document Table</div>

<!--    <a href="all_report_tender.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>-->

    <form method="post" action="index.php?page=document_search">
        <div class="form-wrapper-flex">
            <div class="form-group search-box">
                <label>Search with document details & click the search button to submit</label>
                <div class="form-control">
                    <input type="search" name="search" required placeholder="Document Search">
                    <button name="search_document" class="fas fa-search" type="submit"></button>
                </div>
            </div>
        </div>
    </form>

    <div class="table-wrapper">

        <table>
            <thead>
                <tr>
                    <td>S/N</td>
                    <td>Title</td>
                    <td>Category</td>
                    <td>Code</td>
                    <td>Type</td>
                    <td>Last Updated</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                
                <?php
                    foreach($select as $selected){
                        $sn += 1;
                        $id = $selected['id'];    
                        $document_title = $selected['document_title'];    
                        $document_category = $selected['document_category'];    
                        $presentation_code = $selected['presentation_code'];    
                        $document_type = $selected['document_type'];    
                        $updated_content = $selected['updated_content'];    
                        $document = $selected['document'];
                ?>
                
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td class="tab-width"><?php echo $document_title; ?></td>
                    <td><?php echo $document_category; ?></td>
                    <td><?php echo $presentation_code; ?></td>
                    <td><?php echo $document_type; ?></td>
                    <td><?php echo $updated_content; ?></td>
                    <td>
                        <a href="assets/css/files/<?php echo $document; ?>" class="fas fa-file action-download" target="_blank"></a>
                        <a href="index.php?page=edit_document&id=<?php echo $id; ?>" class="fas fa-edit action-edit"></a>
                        <a href="delete.php?action=delete_document&id=<?php echo $id; ?>" class="fas fa-trash action-delete" onclick="return confirm('Are you sure you want to delete this document?')"></a>
                    </td>
                </tr>
                
                <?php
                  
                    }
                        
                ?>
                
            </tbody>
        </table>


    </div>

</div>

<?php
}elseif($number == 0){
?>
<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Document Search Result    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    No results found! 
    </div>
    <a href="index.php?page=tender_document" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=tender_document" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>
<?php
}
}
?>

<?php
if(!isset($_POST['search']) || $_POST['search'] == ""){
?>
<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    404 not found!    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Please ensure that you fill the search box!    
    </div>
    <a href="index.php?page=tender_document" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=tender_document" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>
<?php
}
