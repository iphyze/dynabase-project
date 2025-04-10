<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Welcome <?php echo $user_fname; ?>    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        All systems are running smoothly! You have <a href="#"><?php getTotalOnHoldTender() ?> Tender(s) On Hold!</a>    
        </div>

    </div>

    <div class="home-heading-col-2">
        <div class="date-display">Date: <?php echo date('jS M, Y'); ?></div>
    </div>

</div>



<div class="box-wrapper">

    <div class="bx-wrapper-col bxwc-whole wow fadeInUp">

    </div>

    <div class="bx-wrapper-col bxwc-split wow fadeInUp" data-wow-delay='.5s'>

            <a href="index.php?page=tender_view" class="grid-box-col gb-color-1">

                <div class="grid-box-title">Total Tender</div>
                <div class="grid-box-figure"><?php getTotalTender() ?></div>
                <div class="grid-box-days">Click to view all</div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>

            </a>
            <div class="grid-box-col gb-color-2">
                <div class="grid-box-title">Total Nigeria</div>
                <div class="grid-box-figure"><?php getTotalNigeriaTender(); ?></div>
                <div class="grid-box-days"><?php getTotalNigeriaTenderThisYear() ?> This Year</div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
            </div>
            <div class="grid-box-col gb-color-3">
                <div class="grid-box-title">Total Ghana</div>
                <div class="grid-box-figure"><?php getTotalGhanaTender(); ?></div>
                <div class="grid-box-days"><?php getTotalGhanaTenderThisYear() ?> This Year</div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
            </div>
            <div class="grid-box-col gb-color-4">
                <div class="grid-box-title">Total Ivory Coast</div>
                <div class="grid-box-figure"><?php getTotalCivTender(); ?></div>
                <div class="grid-box-days"><?php getTotalCivTenderThisYear() ?> This Year</div>
                <div class="circle-one"></div>
                <div class="circle-two"></div>
            </div>

    </div>

</div>



<div class="detailed-report-container">


<div class="detailed-report-flexbox">

    <div class="drf-col drf-col-col-md">
        <div class="drf-col-heading">Detailed Reports</div>
        <div class="drf-col-number"><?php getTotalTender(); ?></div>
        <div class="drf-col-number drfc-ns">Total Tenders</div>
        <div class="drf-col-text">The above shows the total number of tenders that have been created so far with different statuses.</div>
    </div>

    <div class="drf-col">
        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">Pending</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-pending" style="width:<?php getTotalPendingTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalPendingTender(); ?></div>
        </div>

        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">In Progress</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-progess" style="width:<?php getTotalInProgressTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalInProgressTender(); ?></div>
        </div>

        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">Awaiting</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-awaiting" style="width:<?php getTotalAwaitingTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalAwaitingTender(); ?></div>
        </div>

        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">Submitted</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-submitted" style="width:<?php getTotalSubmittedTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalSubmittedTender(); ?></div>
        </div>

        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">Approved</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-approved" style="width:<?php getTotalApprovedTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalApprovedTender(); ?></div>
        </div>

        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">On Hold</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-hold" style="width:<?php getTotalOnHoldTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalOnHoldTender(); ?></div>
        </div>


        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">Declined</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-declined" style="width:<?php getTotalDeclinedTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalDeclinedTender(); ?></div>
        </div>

        <div class="dfr-col-flexbox">
            <div class="drfc-fb-status-title">Abortive</div>
            <div class="drfc-fb-status-bar"><div class="status-bar-guide drfcs-abortive" style="width:<?php getTotalAbotiveTenderPerc() ?>%;"></div></div>
            <div class="drfc-fb-status-number"><?php getTotalAbortiveTender(); ?></div>
        </div>


    </div>

    <div class="drf-col">

        <div class="drf-col-heading">Countries</div>
        <div class="drf-col-number">3</div>
        <div class="drf-col-number drfc-ns">Total Countries</div>

        <div class="drfc-country-flexbox">
            <div class="country-icon"></div>
            <div class="country-text">Nigeria</div>
            <div class="country-number"><?php getTotalNigeriaTender(); ?></div>
        </div>
        <div class="drfc-country-flexbox">
            <div class="country-icon c-icon-ghana"></div>
            <div class="country-text">Ghana</div>
            <div class="country-number"><?php getTotalGhanaTender(); ?></div>
        </div>
        <div class="drfc-country-flexbox">
            <div class="country-icon c-icon-civ"></div>
            <div class="country-text">Cote D Ivoire</div>
            <div class="country-number"><?php getTotalCivTender(); ?></div>
        </div>
    </div>

</div>


</div>