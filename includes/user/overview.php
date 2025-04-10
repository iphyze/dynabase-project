<?php

if($_SESSION['integrity'] == "Admin"){
?>    

<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Users    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        This allows for user account updates    
        </div>

    </div>

    <div class="home-heading-col-2">
        <div class="date-display">Date: <?php echo date('jS M, Y'); ?></div>
    </div>

</div>

        
        
<div class="box-wrapper">

    <div class="bx-wrapper-col user-box wow fadeInUp">


    </div>

    <div class="bx-wrapper-col bxwc-split wow fadeInUp" data-wow-delay='.5s'>

            <a class="grid-box-col gb-color-1">
                <div class="grid-box-title">Total Users</div>
                <div class="grid-box-figure"><?php getTotalUsers() ?></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->            
            </a>
            <a href="index.php?page=user_view" class="grid-box-col gb-color-2">
                <div class="grid-box-title">View All Users</div>
                <div class="grid-box-figure fas fa-users"></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>
            <a href="index.php?page=add_user" class="grid-box-col gb-color-3">
                <div class="grid-box-title">Add New User</div>
                <div class="grid-box-figure fas fa-user-plus"></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>
            <a href="index.php?page=update_user" class="grid-box-col gb-color-4">
                <div class="grid-box-title">Edit My Profile</div>
                <div class="grid-box-figure fas fa-users-cog"></div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <!--<div class="grid-box-days">Last Added: Document</div>-->
            </a>

    </div>

</div>
        

<!--
<div class="detailed-report-container">


    <div class="detailed-report-flexbox">

        <div class="drf-col drf-col-col-md">
            <div class="drf-col-heading">Documents Report</div>
            <div class="drf-col-number"><?php getTotalTender() ?></div>
            <div class="drf-col-number drfc-ns">Total Tenders</div>
            <div class="drf-col-text">The above shows the total number of tenders that have been created so far with different statuses.</div>
        </div>

        <div class="drf-col">
            <div class="dfr-col-flexbox">
                <div class="drfc-fb-status-title">Pending</div>
                <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-pending"></div></div>
                <div class="drfc-fb-status-number"><?php getTotalPendingTender() ?></div>
            </div>

            <div class="dfr-col-flexbox">
                <div class="drfc-fb-status-title">In Progress</div>
                <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-progess"></div></div>
                <div class="drfc-fb-status-number"><?php getTotalInProgressTender() ?></div>
            </div>

            <div class="dfr-col-flexbox">
                <div class="drfc-fb-status-title">Awaiting</div>
                <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-awaiting"></div></div>
                <div class="drfc-fb-status-number"><?php getTotalAwaitingTender() ?></div>
            </div>

            <div class="dfr-col-flexbox">
                <div class="drfc-fb-status-title">Submitted</div>
                <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-submitted"></div></div>
                <div class="drfc-fb-status-number"><?php getTotalSubmittedTender() ?></div>
            </div>

            <div class="dfr-col-flexbox">
                <div class="drfc-fb-status-title">Approved</div>
                <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-approved"></div></div>
                <div class="drfc-fb-status-number"><?php getTotalApprovedTender() ?></div>
            </div>

            <div class="dfr-col-flexbox">
                <div class="drfc-fb-status-title">On Hold</div>
                <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-hold"></div></div>
                <div class="drfc-fb-status-number"><?php getTotalOnHoldTender() ?></div>
            </div>


            <div class="dfr-col-flexbox">
                <div class="drfc-fb-status-title">Declined</div>
                <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-declined"></div></div>
                <div class="drfc-fb-status-number"><?php getTotalDeclinedTender() ?></div>
            </div>


        </div>

        <div class="drf-col">

            <div class="drf-col-heading">Countries</div>
            <div class="drf-col-number">3</div>
            <div class="drf-col-number drfc-ns">Total Countries</div>

            <div class="drfc-country-flexbox">
                <div class="country-icon"></div>
                <div class="country-text">Nigeria</div>
                <div class="country-number"><?php getTotalNigeriaTender() ?></div>
            </div>
            <div class="drfc-country-flexbox">
                <div class="country-icon c-icon-ghana"></div>
                <div class="country-text">Ghana</div>
                <div class="country-number"><?php getTotalGhanaTender() ?></div>
            </div>
            <div class="drfc-country-flexbox">
                <div class="country-icon c-icon-civ"></div>
                <div class="country-text">Cote D Ivoire</div>
                <div class="country-number"><?php getTotalCivTender() ?></div>
            </div>
        </div>

    </div>


</div>
-->

<?php
}else{
?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    404 Access Denied!    
    </div>
<!--
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Please ensure that you fill the search box!    
    </div>
-->
    <a href="./" class='success-message theme-color'><i class='fas fa-arrow-left'></i> Go Back</a>

</div>

<div class="home-heading-col-2">
    <a href="./" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>

<?php
}
?>
