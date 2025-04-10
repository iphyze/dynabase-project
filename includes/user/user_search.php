<?php
if(isset($_POST['user_search_btn'])){
$search = mysqli_real_escape_string($db, $_POST['user_search']);
      
$select = mysqli_query($db, "SELECT * FROM user_table WHERE fname LIKE '%$search%' || lname LIKE '%$search%' || email LIKE '%$search%' || integrity LIKE '%$search%' || created_by LIKE '%$search%' || updated_by LIKE '%$search%'");
$selected = mysqli_fetch_assoc($select);
$number = mysqli_num_rows($select);

if($number > 0){
$sn = 0;
?>
<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        User Search Result    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        Found <?php echo $number; ?> result(s) for <?php echo $search; ?> 
        </div>

    </div>

    <div class="home-heading-col-2">
        <a href="index.php?page=user_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
    </div>

</div>


<div class="table-container">

    <!--
        <div class="success-message wow bounceIn"><i class="fas fa-check-circle"></i> Your tender was successfully created!</div>

        <div class="error-message wow bounceIn"><i class="fas fa-exclamation-triangle"></i> Sorry, submission failed!</div>
    -->    


    <div class="form-title">User Table</div>

    <!--
    <a href="all_report_tender.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>
    -->


    <form method="post" action="index.php?page=user_search">
        <div class="form-wrapper-flex">
            <div class="form-group search-box">
                <label>Search with user details & click the search button to submit</label>
                <div class="form-control">
                    <input type="search" name="user_search" required placeholder="User Search">
                    <button name="user_search_btn" class="fas fa-search" type="submit"></button>
                </div>
            </div>
        </div>
    </form>

    <div class="table-wrapper">

        <table>
            <thead>
                <tr>
                    <td>S/N</td>
                    <td>Fullname</td>
                    <td>Email</td>
                    <td>Integrity</td>
                    <td>Created By</td>
                    <td>Updated By</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                
                <?php
                    foreach($select as $selected){
                        $id = $selected['id'];
                        $sn += 1;
                        $fname = $selected['fname'];
                        $lname = $selected['lname'];
                        $email = $selected['email'];
                        $integrity = $selected['integrity'];
                        $created_by = substr($selected['created_by'], 0, -22);
                        $updated_by = substr($selected['updated_by'], 0, -22);
                ?>
                
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td class="tab-width"><?php echo $fname .' '. $lname; ?></td>
                    <td><?php echo $email; ?></td>
                    <td>
                        <?php 
                            
                            if($integrity == "Admin"){
                                echo '<span class="stat-approved">Admin</span>';
                            }elseif($integrity == "User"){
                                echo '<span class="stat-declined">User</span>';
                            }
                            
                        ?>
                    </td>
                    <td><?php echo $created_by; ?></td>
                    <td><?php echo $updated_by; ?></td>
                    <td>
                    
                        <?php 
                            
                            if($_SESSION['integrity'] == "Admin"){
                        ?>
                                <a href='index.php?page=reset&id=<?php echo $id; ?>' class='fas fa-edit action-edit' onclick='return confirm("Are you sure you want to reset the password for <?php echo $email ?>?")'></a>
                            
                                <a href='index.php?page=delete_user&id=<?php echo $id; ?>' class='fas fa-trash action-delete' onclick='return confirm("Are you sure you want to delete <?php echo $email ?>?")'></a>
                        
                        <?php    
                        }                            
                        ?>
                        
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
    User Search Result    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    No results found! 
    </div>
    <a href="index.php?page=user_view" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=user_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>
<?php
}
}
?>

<?php
if(!isset($_POST['user_search']) || $_POST['user_search'] == ""){
?>
<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    404 not found!    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Please ensure that you fill the search box!    
    </div>
    <a href="index.php?page=user_view" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=user_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>
<?php
}
