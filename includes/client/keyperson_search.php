<?php
if(isset($_POST['search_keyperson'])){
$search = mysqli_real_escape_string($db, $_POST['search']);
      
$select = mysqli_query($db, "SELECT * FROM keypersons_table WHERE clients_name LIKE '%$search%' || clients_email LIKE '%$search%' || clients_hq_location LIKE '%$search%' || clients_category LIKE '%$search%' || key_person LIKE '%$search%' || title LIKE '%$search%' || info LIKE '%$search%'");
$selected = mysqli_fetch_assoc($select);
$number = mysqli_num_rows($select);

if($number > 0){
$sn = 0;
?>
<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Keyperson Search Result    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        Found <?php echo $number; ?> result(s) for <?php echo $search; ?> 
        </div>

    </div>

    <div class="home-heading-col-2">
        <a href="index.php?page=keypersons" class="back-btn"><i class="fas fa-home"></i> Home</a>
    </div>

</div>


<div class="table-container">

    <!--
        <div class="success-message wow bounceIn"><i class="fas fa-check-circle"></i> Your tender was successfully created!</div>

        <div class="error-message wow bounceIn"><i class="fas fa-exclamation-triangle"></i> Sorry, submission failed!</div>
    -->    


    <div class="form-title">Document Table</div>

<!--    <a href="all_report_tender.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>-->

    <form method="post" action="index.php?page=keyperson_search">
        <div class="form-wrapper-flex">
            <div class="form-group search-box">
                <label>Search with keyperson's details & click the search button to submit</label>
                <div class="form-control">
                    <input type="search" name="search" required placeholder="Keyperson Search">
                    <button name="search_keyperson" class="fas fa-search" type="submit"></button>
                </div>
            </div>
        </div>
    </form>

    <div class="table-wrapper">

        <table>
            <thead>
                <tr>
                    <td>S/N</td>
                    <td>Client's Name</td>
                    <td>Key Person</td>
                    <td>Category</td>
<!--                    <td>HQ Location</td>-->
                    <td>Created at</td>
                    <td>Updated at</td>
                    <td style="max-width: 200px">Action</td>
                </tr>
            </thead>

            <tbody>
                
                <?php
                    foreach($select as $selected){
                        $sn += 1;
                        $id = $selected['id'];    
                        $clients_name = $selected['clients_name'];    
                        $clients_email = $selected['clients_email'];    
                        $clients_address = $selected['clients_address'];    
                        $clients_hq_location = $selected['clients_hq_location'];    
                        $clients_category = $selected['clients_category'];
                        $key_person = $selected['key_person'];
                        $key_persons_tel = $selected['key_persons_tel'];
                        $key_persons_email = $selected['key_persons_email'];
                        $info = $selected['info'];
                        $title = $selected['title'];
                        $created_at = date('d-m-Y', strtotime($selected['created_at']));
                        $updated_at = date('d-m-Y', strtotime($selected['updated_at']));
                ?>
                
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td class="tab-width"><?php echo $clients_name; ?></td>
                    <td><?php echo $key_person; ?></td>
                    <td><?php echo $clients_category; ?></td>
<!--                    <td><?php echo $clients_hq_location; ?></td>-->
                    <td><?php echo $created_at; ?></td>
                    <td><?php echo $updated_at; ?></td>
                    <td class="tab-width">
                        <a href="index.php?page=view_keyperson&id=<?php echo $id; ?>" class="fas fa-eye action-download" target="_blank"></a>
                        <a href="index.php?page=edit_keyperson&id=<?php echo $id; ?>" class="fas fa-edit action-edit"></a>
                        <a href="delete.php?action=delete_keyperson&id=<?php echo $id; ?>" class="fas fa-trash action-delete" onclick="return confirm('Are you sure you want to delete this keyperson?')"></a>
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
    Keyperson Search Result    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    No results found! 
    </div>
    <a href="index.php?page=keypersons" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=keypersons" class="back-btn"><i class="fas fa-home"></i> Home</a>
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
    <a href="index.php?page=keypersons" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=keypersons" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>
<?php
}
