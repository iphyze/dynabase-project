<?php


if(!isset($_GET['page'])){
$mcl_active = 'mcl-active';
$mca_active = 'mca-active';
}else{
$mcl_active = '';
$mca_active = '';
}



if(isset($_GET['page']) && $_GET['page'] == "document_overview" || isset($_GET['page']) && $_GET['page'] == "tender_document" || isset($_GET['page']) && $_GET['page'] == "add_document" || isset($_GET['page']) && $_GET['page'] == "edit_document" || isset($_GET['page']) && $_GET['page'] == "profile_document" || isset($_GET['page']) && $_GET['page'] == "presentation_document"){
$dcl_active = 'mcl-active';
$dca_active = 'mca-active';
}else{
$dcl_active = '';
$dca_active = '';
}



if(isset($_GET['page']) && $_GET['page'] == "tender_overview" || isset($_GET['page']) && $_GET['page'] == "tender_view" || isset($_GET['page']) && $_GET['page'] == "add_tender" || isset($_GET['page']) && $_GET['page'] == "tender_search" || isset($_GET['page']) && $_GET['page'] == "submitted" || isset($_GET['page']) && $_GET['page'] == "pending" || isset($_GET['page']) && $_GET['page'] == "inprogress" || isset($_GET['page']) && $_GET['page'] == "awaiting" || isset($_GET['page']) && $_GET['page'] == "approved" || isset($_GET['page']) && $_GET['page'] == "onhold" || isset($_GET['page']) && $_GET['page'] == "declined" || isset($_GET['page']) && $_GET['page'] == "edit" || isset($_GET['page']) && $_GET['page'] == "print_tender"){
$tcl_active = 'mcl-active';
$tca_active = 'mca-active';
}else{
$tcl_active = '';
$tca_active = '';
}



if(isset($_GET['page']) && $_GET['page'] == "user_overview" || isset($_GET['page']) && $_GET['page'] == "add_user" || isset($_GET['page']) && $_GET['page'] == "user_view" || isset($_GET['page']) && $_GET['page'] == "user_search" || isset($_GET['page']) && $_GET['page'] == "update_user" || isset($_GET['page']) && $_GET['page'] == "reset"){
$ucl_active = 'mcl-active';
$uca_active = 'mca-active';
}else{
$ucl_active = '';
$uca_active = '';
}




if(isset($_GET['page']) && $_GET['page'] == "client_overview" || isset($_GET['page']) && $_GET['page'] == "view_keyperson" || isset($_GET['page']) && $_GET['page'] == "clients" || isset($_GET['page']) && $_GET['page'] == "add_client" || isset($_GET['page']) && $_GET['page'] == "edit_client" || isset($_GET['page']) && $_GET['page'] == "client_search" || isset($_GET['page']) && $_GET['page'] == "keypersons" || isset($_GET['page']) && $_GET['page'] == "add_keyperson" || isset($_GET['page']) && $_GET['page'] == "edit_keyperson" || isset($_GET['page']) && $_GET['page'] == "keyperson_search" || !isset($_GET['page'])){
$ccl_active = 'mcl-active';
$cca_active = 'mca-active';
}else{
$ccl_active = '';
$cca_active = '';
}


?>

<div class="menu-container">
    <ul class="mc-wrapper">
        
        <!-- Clients Menu -->
        <li class="mc-wrapper-li <?php echo $ccl_active?>"><a class="mc-wrapper-a <?php echo $cca_active?> mc-dropdown"><i class="fas fa-handshake mc-icon <?php echo $cca_active?>"></i> Contacts <i class="fas fa-angle-right mc-right-icon <?php echo $cca_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=client_overview">- Overview</a></li>
			<li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=clients">- All Companies</a></li>
			<li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=keypersons">- All Contacts</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_client">- (+) Add Company</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_keyperson">- (+) Add Contact</a></li>
        </ul>    
            
        </li>
        
        
        <!-- User Profile Menu -->
        
        <li class="mc-wrapper-li <?php echo $ucl_active?>"><a class="mc-wrapper-a <?php echo $uca_active?> mc-dropdown"><i class="fas fa-user-cog mc-icon <?php echo $uca_active?>"></i> User Profile <i class="fas fa-angle-right mc-right-icon <?php echo $uca_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <?php
                if($_SESSION['integrity'] == "PMS Admin"){
            ?>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=user_overview"> - Overview</a></li>
            <?php
                }
            ?>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=update_user"> - My Profile</a></li>
        </ul>    
            
        </li>
        
    </ul>
</div>