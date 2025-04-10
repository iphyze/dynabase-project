<div class="home-heading">

    <div class="home-heading-col-1">

        <div class="user-welcome wow fadeInUp">
        Clients & Keypersons    
        </div>
        <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
        This allows for creation & merging of clients & keypersons.    
        </div>

    </div>

    <div class="home-heading-col-2">
        <div class="date-display">Date: <?php echo date('jS M, Y'); ?></div>
    </div>

</div>

        
        
            <div class="box-wrapper">
        
                <div class="bx-wrapper-col document-box wow fadeInUp">
                    
                    
                </div>
                
                <div class="bx-wrapper-col bxwc-split wow fadeInUp" data-wow-delay='.5s'>
                    
                        <a href="index.php?page=clients" class="grid-box-col gb-color-1">
                            <div class="grid-box-title">Total Clients</div>
                            <div class="grid-box-figure"><?php getTotalClients() ?></div>
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                            <!--<div class="grid-box-days">Last Added: Document</div>-->            
                        </a>
                        <a href="index.php?page=keypersons" class="grid-box-col gb-color-2">
                            <div class="grid-box-title">Total Keypersons</div>
                            <div class="grid-box-figure"><?php getTotalKeypersons() ?></div>
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                            <!--<div class="grid-box-days">Last Added: Document</div>-->
                        </a>
					
						<!--
                        <a href="index.php?page=presentation_document" class="grid-box-col gb-color-3">
                            <div class="grid-box-title">Total Client Category</div>
                            <div class="grid-box-figure"><?php //getTotalPresentationDocuments() ?> 8</div>
                            <!--<div class="grid-box-days">Last Added: Document</div>-->
                        <!--
						</a>
				
                        <a href="index.php?page=tender_document" class="grid-box-col gb-color-4">
                            <div class="grid-box-title">Tender</div>
                            <div class="grid-box-figure"><?php getTotalTenderDocuments() ?></div>
                            <!--<div class="grid-box-days">Last Added: Document</div>-->
                        <!--
						</a>
						-->
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