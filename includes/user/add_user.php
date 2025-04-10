<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Add New User    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to add a new user. 
    </div>

</div>

<div class="home-heading-col-2">
    <a href="index.php?page=user_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>
</div>

</div>


<div class="notification">
Please note that password will be automatically generated as Firstname_123!
</div>


<div class="form-container">


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
    
    


<form method="post" action="">

    <!-- Project Information -->

    <div class="form-wrapper">

        <div class="form-title">User Form</div>

        <div class="form-wrapper-flex">
            <div class="form-group">
                <label>First Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="fname" required placeholder="First Name">
                    <span class="fas fa-user"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Last Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="lname" required placeholder="Last Name">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Email <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="email" name="email" required placeholder="Email">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>


            <div class="form-group">
                <label>Integrity <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="integrity" required>
                        <option value=""> -- Select Integrity -- </option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                    <span class="fas fa-users-cog select-icon"></span>
                </div>
            </div>

        </div>


    </div>

    <div class="form-wrapper no-border">
        <div class="form-wrapper-flex">
            <div class="form-group">
                <div class="form-control">
                    <button name="register_user">Add User</button>
                </div>
            </div>
        </div>
    </div>


</form>

</div>

<script>
function CountWords(s) {
var maxChars = 500;
if (s.value.length > maxChars) {
s.value = s.value.substring(0, maxChars);
}
else {
$("#words").html((maxChars - s.value.length) + " characters left.");
}
}
</script>