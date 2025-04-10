<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        All Tender In Progress    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        View all tender in progress details below, edit, delete data. 
        </div>

    </div>

    <div class="home-heading-col-2">
        <a href="index.php?page=tender_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
    </div>

</div>


<div class="table-container">

    <!--
        <div class="success-message wow bounceIn"><i class="fas fa-check-circle"></i> Your tender was successfully created!</div>

        <div class="error-message wow bounceIn"><i class="fas fa-exclamation-triangle"></i> Sorry, submission failed!</div>
    -->    


    <div class="form-title">Tender In Progress</div>

    <a href="inprogress_report.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>

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
                    <td>S/N</td>
                    <td>Title</td>
                    <td>Division</td>
                    <td>Country</td>
                    <td>Code</td>
                    <td>Status</td>
                    <td>Progress</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                
                
                <?php
                
                    $select = mysqli_query($db, "SELECT * FROM project_info_table WHERE progress = 'In Progress' ORDER BY id DESC");
                    $selected = mysqli_fetch_assoc($select);
                    $number = mysqli_num_rows($select);
                    $sn = 0;                        

                    if($number > 0){
                        foreach($select as $selected){
                            $sn += 1;
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
                
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td class="tab-width"><?php echo $project_title; ?></td>
                    <td><?php echo $division; ?></td>
                    <td><?php echo $project_country; ?></td>
                    <td><?php echo $tender_code; ?></td>
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
                            }
                            
                        ?>
                        
                    </td>
                    <td>
                        <a href="download.php?code=<?php echo $code; ?>" class="fas fa-download action-download"></a>
                        <a href="index.php?page=edit&code=<?php echo $code; ?>" class="fas fa-edit action-edit"></a>
                        <a href="delete.php?action=delete_tender&code=<?php echo $code; ?>" class="fas fa-trash action-delete" onclick="return confirm('Are you sure you want to delete this tender?')"></a>
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


<!--
    <div class="pagination-box">
        <?php include_once('pagination/pagination.php');?>
    </div>
-->

</div>