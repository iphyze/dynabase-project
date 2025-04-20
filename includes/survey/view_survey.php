<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Client's Survey Data    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        Click or select the client's survey whose record you want to view.    
        </div>

    </div>

    <div class="home-heading-col-2">
        <div class="date-display">Date: <?php echo date('jS M, Y'); ?></div>
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
    

    <div class="form-title">All Clients Survey</div>
    <!-- <a class="form-title" href="./?page=add_client">+ Add Clients</a><br> -->
    <a class="form-title" href="./?page=survey_overview">&larr; Back</a>

<!--<a href="all_report_tender.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>-->

    <form method="post" action="index.php?page=survey_search">
        <div class="form-wrapper-flex">
            <div class="form-group search-box">
                <label>Search with survey details & click the search button to submit</label>
                <div class="form-control">
                    <input type="search" name="search" required placeholder="Survey Search" style="padding-left: 10px;">
                    <button name="search_survey" class="fas fa-search" type="submit"></button>
                </div>
            </div>
        </div>
    </form>

    <div class="table-wrapper">

        <table>
            <thead>
                <tr>
                    <td>S/N</td>
                    <td>Name</td>
                    <td>Tel</td>
                    <td>Email</td>
<!--                    <td>HQ Location</td>-->
<!--
                    <td>Created at</td>
                    <td>Updated at</td>
-->
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
                    $pick = mysqli_query($db, "SELECT * FROM clients_survey_form");
                    $total_results = mysqli_num_rows($pick);
                    $total_page_num = ceil($total_results/$results_per_page);
                    $offset = ($num - 1) * $results_per_page;

                    $select = mysqli_query($db, "SELECT * FROM clients_survey_form ORDER BY createdAt DESC LIMIT $offset, $results_per_page");
                    $selected = mysqli_fetch_assoc($select);
                    $number = mysqli_num_rows($select);
                    $sn = 0;                        

                    if($number > 0){
                        foreach($select as $selected){
                            $sn += 1;
                            $id = $selected['id'];    
                            $filled_by = substr($selected['filled_by'], 0, 20);    
                            $phone_number = $selected['phone_number'];    
                            $email = $selected['email'];
                            $created_at = date('jS M, Y - h:iA', strtotime($selected['createdAt']));
                            $updated_at = date('jS M, Y - h:iA', strtotime($selected['updatedAt']));
                            
                    ?>
                
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td class="tab-width"><?php echo $filled_by; ?></td>
                    <td><?php echo $phone_number; ?></td>
                    <td><?php echo $email; ?></td>
                    <td class="tab-width">
                        <a href="index.php?page=survey&id=<?php echo $id; ?>" class="fas fa-eye action-download" target="_blank"></a>
                        <!-- <a href="index.php?page=edit_client&id=<?php echo $id; ?>" class="fas fa-edit action-edit"></a> -->
                        <!-- <a href="delete.php?action=delete_survey&id=<?php echo $id; ?>" class="fas fa-trash action-delete" onclick="return confirm('Are you sure you want to delete this survey?')"></a> -->
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
    <?php include_once('pagination/survey_pagination.php');?>
</div>
    
</div>