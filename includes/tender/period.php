<!-- Period Covered - Months covered, RFIs' due date & tender due date -->

    <div class="form-wrapper">

        <div class="form-title">Period Covered - Months covered, RFIs' due date & tender due date</div>

        <div class="form-wrapper-flex">
            
            
            <div class="form-group">
                <label>Tender Received Date (1st Revision) <i class="asterisk">Current: <?php echo $tender_received_date; ?></i></label>
                <div class="form-control">
                    <input type="date" name="tender_received_date" value="<?php echo $tender_r_date; ?>">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>

            <div class="form-group hide-approved">
                <label>RFI's Due Date (1st Revision) <i class="asterisk">Current: <?php echo $rfi_due; ?></i></label>
                <div class="form-control">
                    <input type="date" name="rfi_due" value="<?php echo $rfi_due_date; ?>">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Tender Due Date (1st Revision) <i class="asterisk">Current: <?php echo $tender_due; ?></i></label>
                <div class="form-control">
                    <input type="date" name="tender_due" value="<?php echo $tender_due_date; ?>">
                    <span class="fas fa-calendar-alt"></span>
                </div>
            </div>

            <div class="form-group hide-submitted">
                <label>Tender Submission Date (1st Revision) <i class="asterisk">Current: 
                    <?php 
                    if(!empty($tender_submission_date)){echo $tender_submission_date;}else{echo "N/A";} 
                    ?></i></label>
                <div class="form-control">
                    <input type="date" name="tender_submission_date" value="<?php 
                        if(!empty($tender_submission_date)){echo $tender_submission_date;}else{echo "dd-mm-yyyy";} ?>" class="submission_date">
                    <span class="fas fa-calendar-alt"></span>
                </div>
            </div>

            <div class="form-group hide-submitted">
                <label>Tender Amount <i class="asterisk">***</i></label>
                <div class="form-control">
                    <input type="number" name="tender_amount" class="tender_amt" value="<?php echo $tender_amount; ?>">
                    <span class="fas fa-money-bill"></span>
                </div>
            </div>

            
            <div class="form-group hide-submitted">
                <label>Tender Currency <i class="asterisk">***</i></label>
                <div class="form-control">
                    <select name="currency" class="currence">
                        <option value="<?php echo $currency; ?>"> -- <?php echo $currency; ?> -- </option>
                        <option value="NGN">Naira</option>
                        <option value="USD">Dollars</option>
                        <option value="GBP">Pounds</option>
                        <option value="EUR">Euros</option>
                        <option value="ZAR">Rands</option>
                        <option value="GHC">Cedis</option>
                        <option value="CFA">Cefas</option>
                    </select>
                    <span class="fas fa-money-bill select-icon"></span>
                </div>
            </div>
                                        

        </div>


    </div>