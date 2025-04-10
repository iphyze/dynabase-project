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
    

    <div class="form-title">All Clients Data</div>
    <a class="form-title" href="./?page=add_client">+ Add Clients</a>

<!--<a href="all_report_tender.php" class='success-message theme-color'><i class='fas fa-file'></i> Export Excel</a>-->

    <form method="post" action="index.php?page=client_search">
        <div class="form-wrapper-flex">
            <div class="form-group search-box">
                <label>Search with client's details & click the search button to submit</label>
                <div class="form-control">
                    <input type="search" name="search" required placeholder="Client Search">
                    <button name="search_client" class="fas fa-search" type="submit"></button>
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
                    <td>Website</td>
                    <td>Category</td>
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
                    $pick = mysqli_query($db, "SELECT * FROM clients_table");
                    $total_results = mysqli_num_rows($pick);
                    $total_page_num = ceil($total_results/$results_per_page);
                    $offset = ($num - 1) * $results_per_page;

                    $select = mysqli_query($db, "SELECT * FROM clients_table ORDER BY clients_name ASC LIMIT $offset, $results_per_page");
                    $selected = mysqli_fetch_assoc($select);
                    $number = mysqli_num_rows($select);
                    $sn = 0;                        

                    if($number > 0){
                        foreach($select as $selected){
                            $sn += 1;
                            $id = $selected['id'];    
                            $clients_name = substr($selected['clients_name'], 0, 20);    
                            $clients_email = $selected['clients_email'];    
                            $clients_website = $selected['clients_website'];    
                            $clients_address = $selected['clients_address'];    
                            $clients_hq_location = $selected['clients_hq_location'];    
                            $clients_category = $selected['clients_category'];
                            $created_at = date('jS M, Y - h:iA', strtotime($selected['created_at']));
                            $updated_at = date('jS M, Y - h:iA', strtotime($selected['updated_at']));
                            
                    ?>
                
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td class="tab-width"><?php echo $clients_name; ?></td>
                    <td>
                        <?php
                            
                            if($clients_website != ""){
                                echo "<a href='{$clients_website}' class='fas fa-link'></a>";     
                            }else{
                                echo "NIL";
                            }
                            
                        ?>
                    </td>
                    <td><?php echo $clients_category; ?></td>
<!--                    <td><?php echo $clients_hq_location; ?></td>-->
<!--
                    <td><?php //echo $created_at; ?></td>
                    <td><?php //echo $updated_at; ?></td>
-->
                    <td class="tab-width">
                        <a href="index.php?page=view_client&id=<?php echo $id; ?>" class="fas fa-eye action-download" target="_blank"></a>
                        <a href="index.php?page=edit_client&id=<?php echo $id; ?>" class="fas fa-edit action-edit"></a>
                        <a href="delete.php?action=delete_client&id=<?php echo $id; ?>" class="fas fa-trash action-delete" onclick="return confirm('Are you sure you want to delete this client data?')"></a>
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
    <?php include_once('pagination/client_pagination.php');?>
</div>
    
</div>