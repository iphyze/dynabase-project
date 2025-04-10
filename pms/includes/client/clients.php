<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Companies & Contact Persons    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        Click or select the companies's category whose record you want to view.    
        </div>

    </div>

<!--
    <div class="home-heading-col-2">
        <div class="date-display">Date: <?php echo date('jS M, Y'); ?></div>
    </div>
-->
    
    <div class="home-heading-col-2">
        <a href="index.php?page=client_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
    </div>
    

</div>  

        
        
<div class="box-wrapper">

    <div class="bx-wrapper-col bxwc-split bxwc-split-two wow fadeInUp">
        
            <a href="index.php?page=all_clients" class="grid-box-col gb-color-4">
                <div class="grid-box-title">All Companies</div>
                <div class="grid-box-figure"><?php getTotalClients() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
            </a>
        
            <a href="index.php?page=mep_clients" class="grid-box-col gb-color-1">
                <div class="grid-box-title">MEP Consultants</div>
                <div class="grid-box-figure"><?php getTotalMepClientsCategory() ?></div> 
                <div class="circle-one"></div>
                <div class="circle-two"></div>
            </a>
        
            <a href="index.php?page=project_manager_clients" class="grid-box-col gb-color-2">
                <div class="grid-box-title">Project Manager</div>
                <div class="grid-box-figure"><?php getTotalProjectManagerCategory() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>
        
            <a href="index.php?page=architect_clients" class="grid-box-col gb-color-3">
                <div class="grid-box-title">Architects</div>
                <div class="grid-box-figure"><?php getTotalArchitectsCategory() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>
        

    </div>

    <div class="bx-wrapper-col bxwc-split bxwc-split-two wow fadeInUp" data-wow-delay='.5s'>
        
            <a href="index.php?page=qs_manager_clients" class="grid-box-col gb-color-3">
                <div class="grid-box-title">Quantity Surveyor</div>
                <div class="grid-box-figure"><?php getTotalQsManagerCategory() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>

            <a href="index.php?page=general_clients" class="grid-box-col gb-color-2">
                <div class="grid-box-title">General/Main Contractors</div>
                <div class="grid-box-figure"><?php getTotalGenCategory() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->            
            </a>
            <a href="index.php?page=end_user_clients" class="grid-box-col gb-color-4">
                <div class="grid-box-title">End User / Owner</div>
                <div class="grid-box-figure"><?php getTotalEndUserCategory() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>
            <a href="index.php?page=other_clients" class="grid-box-col gb-color-1">
                <div class="grid-box-title">Others</div>
                <div class="grid-box-figure"><?php getTotalOthersCategory() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>

    </div>

</div>