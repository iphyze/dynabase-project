<div class="report-container">
    <div class="vc-box-col-header">Admin Dashboard - Tender Report</div>
    <div class="report-flex-box">
        
        <a href="index.php?page=views" class="report-box-col">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-bar rbc-icon"></div>
            <div class="rbc-text">Total Tender</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalTender(); ?></div>
        </a>
        
        <a href="index.php?page=pending" class="report-box-col rbc-gc-1 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-pie rbc-icon"></div>
            <div class="rbc-text">Progress: Pending</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalPendingTender(); ?></div>
        </a>
        
        <a href="index.php?page=inprogress" class="report-box-col rbc-gc-2 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-line rbc-icon btc"></div>
            <div class="rbc-text btc">Progress: In Progress</div>
            <div class="rbc-text btc">View More</div>
            <div class="rbc-number btc"><?php getTotalInProgressTender(); ?></div>
        </a>
        
        <a href="index.php?page=awaiting" class="report-box-col rbc-gc-3 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-area rbc-icon"></div>
            <div class="rbc-text">Progress: Awaiting</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalAwaitingTender(); ?></div>
        </a>
        
        <a href="index.php?page=submitted" class="report-box-col rbc-gc-4 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-area rbc-icon"></div>
            <div class="rbc-text">Progress: Submitted</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalSubmittedTender(); ?></div>
        </a>
        
        <a href="index.php?page=approved" class="report-box-col rbc-gc-5 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-bar rbc-icon"></div>
            <div class="rbc-text">Status: Approved</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalApprovedTender(); ?></div>
        </a>
        
        <a href="index.php?page=onhold" class="report-box-col rbc-gc-6 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-line rbc-icon"></div>
            <div class="rbc-text">Status: On Hold</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalOnHoldTender(); ?></div>
        </a>
        
        <a href="index.php?page=declined" class="report-box-col rbc-gc-7 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-chart-pie rbc-icon"></div>
            <div class="rbc-text">Status: Declined</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalDeclinedTender(); ?></div>
        </a>
        
        <a href="index.php?page=nigeria" class="report-box-col  rbc-gc-8 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-flag rbc-icon"></div>
            <div class="rbc-text">Projects in Nigeria</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalNigeriaTender(); ?></div>
        </a>
        
        <a href="index.php?page=ghana" class="report-box-col rbc-gc-9 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-flag rbc-icon"></div>
            <div class="rbc-text">Projects in Ghana</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalGhanaTender(); ?></div>
        </a>
        
        <a href="index.php?page=ivory_coast" class="report-box-col rbc-gc-10 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-flag rbc-icon"></div>
            <div class="rbc-text">Projects in Ivory Coast</div>
            <div class="rbc-text">View More</div>
            <div class="rbc-number"><?php getTotalCivTender(); ?></div>
        </a>
        
    </div>
</div>


