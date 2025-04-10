<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        All Tender    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        View all tender details below, edit, delete data. 
        </div>

    </div>

    <div class="home-heading-col-2">
        <a href="index.php?page=tender_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
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
    

    <div class="form-title">All Tender</div>

    <a href="downloads/all_report_tender.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>
<!--    <a href="#" onClick="window.print()" class='success-message theme-color'><i class='fas fa-file'></i> Print</a>-->

    <form method="post" action="index.php?page=tender_search">
        <div class="form-wrapper-flex">
            <div class="form-group search-box">
                <label>Search with tender details & click the search button to submit</label>
                <div class="form-control">
                    <input type="search" name="search" required placeholder="Tender Search">
                    <button name="search_btn" class="fas fa-search" type="submit"></button>
                </div>
            </div>
        </div>
    </form>

    <div class="table-wrapper">

        <table>
            <thead>
                <tr>
                    <td>Code</td>
                    <td>Title</td>
                    <td>Project Code</td>
                    <td>Country</td>
                    <td>Doc Link</td>
                    <td>Status</td>
                    <td>Progress</td>
                    <td>Action</td>
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
                    $pick = mysqli_query($db, "SELECT * FROM project_info_table");
                    $total_results = mysqli_num_rows($pick);
                    $total_page_num = ceil($total_results/$results_per_page);
                    $offset = ($num - 1) * $results_per_page;

                    $select = mysqli_query($db, "SELECT * FROM project_info_table ORDER BY id DESC LIMIT $offset, $results_per_page");
                    $selected = mysqli_fetch_assoc($select);
                    $number = mysqli_num_rows($select);
                    $sn = 0;                        

                    if($number > 0){
                        foreach($select as $selected){
                            $sn += 1;
                            $project_title = substr($selected['project_title'], 0, 30);
                            $division = $selected['division'];
                            $project_duration = $selected['project_duration'];
                            $project_country = $selected['project_country'];
                            $project_city = $selected['project_city'];
                            $code = $selected['code'];
                            $document_link = $selected['document_link'];
                            $tender_code = $selected['tender_code'];
							
							
							$make = mysqli_query($db, "SELECT * FROM project_code_table WHERE tender_code = '$code'");
							$made = mysqli_fetch_assoc($make);
							$makeNum = mysqli_num_rows($make);
							
							if($makeNum > 0){
								
								$project_code = $made['project_code'];
								
							}else{
								
								$project_code = "Unawarded";
							}
							
							
                            $project_status = $selected['project_status'];
                            $progress = $selected['progress'];
                            $vendor_information = $selected['vendor_information'];
                    ?>
                
                <tr>
                    <td><?php echo $tender_code; ?></td>
                    <td class="tab-width"><?php echo $project_title; ?></td>
                    <td><?php echo $project_code; ?></td>
                    <td><?php echo $project_country; ?></td>
                    <td>
                        <?php  
                        
                            if($document_link != ""){
                                echo "<a href='{$document_link}' class='fas fa-link' target='_blank'></a>";
                            }
                            
                        ?>
                    </td>
                    <td>
                        <?php 
                            
                            if($project_status == "Approved"){
                                echo '<span class="stat-approved">Approved</span>';
                            }elseif($project_status == "Pending"){
                                echo '<span class="stat-pending">Pending</span>';
                            }elseif($project_status == "In Progress"){
                                echo '<span class="stat-progress">In Progress</span>';
                            }elseif($project_status == "Awaiting"){
                                echo '<span class="stat-awaiting">Awaiting</span>';
                            }elseif($project_status == "Submitted"){
                                echo '<span class="stat-submitted">Submitted</span>';
                            }elseif($project_status == "On Hold"){
                                echo '<span class="stat-hold">On Hold</span>';
                            }elseif($project_status == "Declined"){
                                echo '<span class="stat-declined">Declined</span>';
                            }elseif($project_status == "Awarded"){
                                echo '<span class="stat-progress">Awarded</span>';
                            }
                            
                        ?>
                    </td>
                    <td>
                    
                        <?php 
                            
                            if($progress == "Approved"){
                                echo '<span class="stat-approved">Approved</span>';
                            }elseif($progress == "Pending"){
                                echo '<span class="stat-pending">Pending</span>';
                            }elseif($progress == "In Progress"){
                                echo '<span class="stat-progess">In Progress</span>';
                            }elseif($progress == "Awaiting"){
                                echo '<span class="stat-awaiting">Awaiting</span>';
                            }elseif($progress == "Submitted"){
                                echo '<span class="stat-submitted">Submitted</span>';
                            }elseif($progress == "On Hold"){
                                echo '<span class="stat-hold">On Hold</span>';
                            }elseif($progress == "Declined"){
                                echo '<span class="stat-declined">Declined</span>';
                            }elseif($progress == "Awarded"){
                                echo '<span class="stat-progess">Awarded</span>';
                            }
                            
                        ?>
                        
                    </td>
                    <td>
<!--                        <a href="download.php?code=<?php echo $code; ?>" class="fas fa-download action-edit"></a>-->
                        <a href="index.php?page=print_tender&code=<?php echo $code; ?>" class="fas fa-eye action-download"></a>
                        <a href="index.php?page=edit&code=<?php echo $code; ?>" class="fas fa-edit action-edit"></a>
                        <a href="delete.php?action=delete_tender&code=<?php echo $code; ?>" class="fas fa-trash action-delete" onclick="return confirm('Are you sure you want to delete this tender?')"></a>
                    </td>
                </tr>
                
                
                <?php
                    }
                }elseif($number == 0){
                ?>
                <tr>
                    <td colspan="7"></td>
                </tr>
                <?php
                }
                ?>

                
                
            </tbody>
        </table>


    </div>


    <div class="pagination-box">
        <?php include_once('pagination/pagination.php');?>
    </div>

</div>