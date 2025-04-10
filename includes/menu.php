<?php


//function homePageActive(){
//    if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] == 'views') || (isset($_GET['page']) && $_GET['page'] == 'edit') || (isset($_GET['page']) && $_GET['page'] == 'pending') || (isset($_GET['page']) && $_GET['page'] == 'inprogress')){
//        echo "active";
//    }
//}
//
//function addPageActive(){
//    if(isset($_GET['page']) && $_GET['page'] == "add"){
//        echo "active";
//    }
//}
//
//function settingsPageActive(){
//    if(isset($_GET['page']) && $_GET['page'] == "settings" || (isset($_GET['page']) && $_GET['page'] == 'users') || (isset($_GET['page']) && $_GET['page'] == 'add_user')){
//        echo "active";
//    }
//}



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



if(isset($_GET['page']) && $_GET['page'] == "tender_overview" || isset($_GET['page']) && $_GET['page'] == "tender_view" || isset($_GET['page']) && $_GET['page'] == "advanced_tender_view" || isset($_GET['page']) && $_GET['page'] == "add_tender" || isset($_GET['page']) && $_GET['page'] == "tender_search" || isset($_GET['page']) && $_GET['page'] == "submitted" || isset($_GET['page']) && $_GET['page'] == "pending" || isset($_GET['page']) && $_GET['page'] == "inprogress" || isset($_GET['page']) && $_GET['page'] == "awaiting" || isset($_GET['page']) && $_GET['page'] == "approved" || isset($_GET['page']) && $_GET['page'] == "onhold" || isset($_GET['page']) && $_GET['page'] == "declined" || isset($_GET['page']) && $_GET['page'] == "edit" || isset($_GET['page']) && $_GET['page'] == "print_tender"){
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


if(isset($_GET['page']) && $_GET['page'] == "client_overview" || isset($_GET['page']) && $_GET['page'] == "clients" || isset($_GET['page']) && $_GET['page'] == "add_client" || isset($_GET['page']) && $_GET['page'] == "edit_client" || isset($_GET['page']) && $_GET['page'] == "client_search" || isset($_GET['page']) && $_GET['page'] == "keypersons" || isset($_GET['page']) && $_GET['page'] == "add_keyperson" || isset($_GET['page']) && $_GET['page'] == "edit_keyperson" || isset($_GET['page']) && $_GET['page'] == "keyperson_search" || isset($_GET['page']) && $_GET['page'] == "view_client"){
$ccl_active = 'mcl-active';
$cca_active = 'mca-active';
}else{
$ccl_active = '';
$cca_active = '';
}




if(isset($_GET['page']) && $_GET['page'] == "clients_preq" || isset($_GET['page']) && $_GET['page'] == "prequalification" || isset($_GET['page']) && $_GET['page'] == "add_preq" || isset($_GET['page']) && $_GET['page'] == "edit_preq" || isset($_GET['page']) && $_GET['page'] == "preq_search" || isset($_GET['page']) && $_GET['page'] == "view_preq"){
$pcl_active = 'mcl-active';
$pca_active = 'mca-active';
}else{
$pcl_active = '';
$pca_active = '';
}



if(isset($_GET['page']) && $_GET['page'] == "woi" || isset($_GET['page']) && $_GET['page'] == "woi_overview" || isset($_GET['page']) && $_GET['page'] == "add_woi" || isset($_GET['page']) && $_GET['page'] == "edit_woi" || isset($_GET['page']) && $_GET['page'] == "woi_search"){
$woi_active = 'mcl-active';
$wow_active = 'mca-active';
}else{
$woi_active = '';
$wow_active = '';
}



?>

<div class="menu-container">
    <ul class="mc-wrapper">
    
        <!-- Home Menu -->
        <li class="mc-wrapper-li <?php echo $mcl_active?>"><a class="mc-wrapper-a <?php echo $mca_active?>" href="./"><i class="fas fa-th mc-icon <?php echo $mca_active?>"></i> Dashboard</a></li>
        
        <?php
            if($_SESSION['integrity'] == "Admin" || $_SESSION['integrity'] == "Others"){
        ?>
        
        <!-- Tender Menu -->
        <li class="mc-wrapper-li <?php echo $tcl_active?>"><a class="mc-wrapper-a mc-dropdown <?php echo $tca_active?>"><i class="fas fa-briefcase mc-icon <?php echo $tca_active?>"></i> Tender <i class="fas fa-angle-right mc-right-icon <?php echo $tca_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=tender_overview">- Tender Overview</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_tender">- New Tender</a></li>
        </ul>
            
        </li>
        
        
        <?php
            }
        ?>
        
        
        <?php
        
            if($_SESSION['integrity'] != "Others"){
        
        ?>
        
        <!-- Documents -->
        <li class="mc-wrapper-li <?php echo $dcl_active?>"><a class="mc-wrapper-a mc-dropdown <?php echo $dca_active?>"><i class="fas fa-file mc-icon <?php echo $dca_active?>"></i> Documentation <i class="fas fa-angle-right mc-right-icon <?php echo $dca_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=document_overview">- Overview</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_document">- New Document</a></li>
        </ul>
            
        </li>
        
        <?php
            }
        ?>
        
        
        <!-- Clients Menu -->
        <li class="mc-wrapper-li <?php echo $ccl_active?>"><a class="mc-wrapper-a <?php echo $cca_active?> mc-dropdown"><i class="fas fa-handshake mc-icon <?php echo $cca_active?>"></i> Clients <i class="fas fa-angle-right mc-right-icon <?php echo $cca_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=client_overview">- Overview</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_client">- New Client</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_keyperson">- New Keyperson</a></li>
        </ul>    
            
        </li>
        
		
		
		<!-- Prequalification Menu -->
        <li class="mc-wrapper-li <?php echo $pcl_active?>"><a class="mc-wrapper-a <?php echo $pca_active?> mc-dropdown"><i class="fas fa-users mc-icon <?php echo $pca_active?>"></i> Prequalification <i class="fas fa-angle-right mc-right-icon <?php echo $pca_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=clients_preq">- Overview</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_preq">- New Prequalification</a></li>
        </ul>    
            
        </li>
        
        
        <!-- Web of Influence Menu -->
        <li class="mc-wrapper-li <?php echo $woi_active?>"><a class="mc-wrapper-a <?php echo $wow_active?> mc-dropdown"><i class="fas fa-globe mc-icon <?php echo $wow_active?>"></i> Web of Influence <i class="fas fa-angle-right mc-right-icon <?php echo $wow_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=woi_overview">- Overview</a></li>
            <li class="mc-wrapper-sli"><a class="mc-wrapper-sla" href="index.php?page=add_woi">- New WOI</a></li>
        </ul>    
            
        </li>
        
        
        <!-- User Profile Menu -->
        
        <li class="mc-wrapper-li <?php echo $ucl_active?>"><a class="mc-wrapper-a <?php echo $uca_active?> mc-dropdown"><i class="fas fa-user-cog mc-icon <?php echo $uca_active?>"></i> User Profile <i class="fas fa-angle-right mc-right-icon <?php echo $uca_active?>"></i></a>
        
        <ul class="mc-wrapper-sl">
            <?php
                if($_SESSION['integrity'] == "Admin"){
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