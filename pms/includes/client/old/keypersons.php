<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Keypersons    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        View all profiled keypersons details below, edit, delete data. 
        </div>

    </div>

    <div class="home-heading-col-2">
        <a href="index.php?page=client_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
    </div>

</div>


<div class="table-container">

    <!--
        <div class='success-message wow bounceIn'><i class='fas fa-check-circle'></i> Your tender was successfully created!</div>

        <div class='error-message wow bounceIn'><i class='fas fa-exclamation-triangle'></i> Sorry, submission failed!</div>
    -->    

    
    <?php
    if(!empty($_SESSION['message'])){
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }
    ?>
    

    <div class="form-title">All Keypersons Data</div>

    <a href="./downloads/all_keypersons.php" class='success-message theme-color'><i class='fas fa-download'></i> Download All</a>

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
                    if(isset($_GET['num']) && $_GET['num'] != ""){
                            $num = $_GET['num'];
                         }else{
                            $num = 1;
                    }

                    $results_per_page = 20;
                    $pick = mysqli_query($db, "SELECT * FROM keypersons_table WHERE created_by = '{$_SESSION['email']}'");
                    $total_results = mysqli_num_rows($pick);
                    $total_page_num = ceil($total_results/$results_per_page);
                    $offset = ($num - 1) * $results_per_page;

                    $select = mysqli_query($db, "SELECT * FROM keypersons_table WHERE created_by = '{$_SESSION['email']}' ORDER BY key_person ASC LIMIT $offset, $results_per_page");
                    $selected = mysqli_fetch_assoc($select);
                    $number = mysqli_num_rows($select);
                    $sn = 0;                        

                    if($number > 0){
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
                        <a href="index.php?page=logs&id=<?php echo $id; ?>" class="action-edit">Log</a>
                    </td>
                </tr>
                
                
                <?php
                    }
                }elseif($number == 0){
                ?>
                <tr>
                    <td colspan="7">No results found!</td>
                </tr>
                <?php
                }
                ?>

                
                
            </tbody>
        </table>


    </div>

<div class="pagination-box">
    <?php include_once('pagination/keyperson_pagination.php');?>
</div>    
    
</div>