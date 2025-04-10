<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Tender Documents    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        View all tender document details below, edit, delete data. 
        </div>

    </div>

    <div class="home-heading-col-2">
        <a href="index.php?page=document_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
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
    

    <div class="form-title">All Tender Documents</div>

<!--<a href="all_report_tender.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>-->

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
                    <td>Created at</td>
                    <td>Updated at</td>
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
                    $pick = mysqli_query($db, "SELECT * FROM document_table");
                    $total_results = mysqli_num_rows($pick);
                    $total_page_num = ceil($total_results/$results_per_page);
                    $offset = ($num - 1) * $results_per_page;

                    $select = mysqli_query($db, "SELECT * FROM document_table WHERE document_type = 'Tender' ORDER BY id DESC LIMIT $offset, $results_per_page");
                    $selected = mysqli_fetch_assoc($select);
                    $number = mysqli_num_rows($select);
                    $sn = 0;                        

                    if($number > 0){
                        foreach($select as $selected){
                            $sn += 1;
                            $id = $selected['id'];    
                            $document_title = $selected['document_title'];    
                            $document_category = $selected['document_category'];    
                            $presentation_code = $selected['presentation_code'];    
                            $document_type = $selected['document_type'];    
                            $updated_content = $selected['updated_content'];    
                            $document = $selected['document'];
                            $created_at = date('jS M, Y - h:iA', strtotime($selected['created_at']));
                            $updated_at = date('jS M, Y - h:iA', strtotime($selected['updated_at']));
                            
                    ?>
                
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td class="tab-width"><?php echo $document_title; ?></td>
                    <td><?php echo $document_category; ?></td>
                    <td><?php echo $presentation_code; ?></td>
                    <td><?php echo $document_type; ?></td>
                    <td><?php echo $updated_content; ?></td>
                    <td><?php echo $created_at; ?></td>
                    <td><?php echo $updated_at; ?></td>
                    <td>
                        <a href="assets/css/files/<?php echo $document; ?>" class="fas fa-file action-download" target="_blank"></a>
                        <a href="index.php?page=edit_document&id=<?php echo $id; ?>" class="fas fa-edit action-edit"></a>
                        <a href="delete.php?action=delete_document&id=<?php echo $id; ?>" class="fas fa-trash action-delete" onclick="return confirm('Are you sure you want to delete this document?')"></a>
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
        <?php include_once('pagination/tender_pagination.php');?>
    </div>

</div>