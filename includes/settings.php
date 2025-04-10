<div class="report-container">
    <div class="vc-box-col-header"><span class="fas fa-users-cog"></span> User Settings</div>
    <div class="report-flex-box">
        
        <a href="index.php?page=users" class="report-box-col wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-users rbc-icon"></div>
            <div class="rbc-text">Total Users</div>
            <div class="rbc-number"><?php getTotalUsers(); ?></div>
        </a>
        
        
        <?php
            if($_SESSION['integrity'] == "Admin"){
        ?>
        
        <a href="index.php?page=add_user" class="report-box-col rbc-gc-4 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-user-plus rbc-icon"></div>
            <div class="rbc-text">User</div>
            <div class="rbc-number">Add</div>
        </a>
        <?php
            }
        ?>
        <a href="index.php?page=update_user" class="report-box-col rbc-gc-2 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-edit rbc-icon btc"></div>
            <div class="rbc-text btc">User</div>
            <div class="rbc-number btc">Update</div>
        </a>
        
        <?php
            if($_SESSION['integrity'] == "Admin"){
        ?>
        
        <a href="index.php?page=delete_user" class="report-box-col rbc-gc-6 wow fadeIn">
            <div class="rbc-circle-one"></div>
            <div class="rbc-circle-two"></div>
            <div class="fas fa-trash rbc-icon"></div>
            <div class="rbc-text">User</div>
            <div class="rbc-number">Delete</div>
        </a>
        
        <?php
            }
        ?>
        
    </div>
</div>