<?php
$session_mail = $_SESSION['email'];

$select = mysqli_query($db, "SELECT * FROM pm_users_table WHERE email = '$session_mail'");
$selected = mysqli_fetch_assoc($select);

if($selected){
$fname = $selected['fname'];
$lname = $selected['lname'];
$email = $selected['email'];
$integrity = $selected['integrity'];
$created_by = $session_mail;
$updated_by = $session_mail;
}
?>

<div class="home-heading">

<div class="home-heading-col-1">

    <div class="user-welcome wow fadeInUp">
    Edit User - <?php echo $fname . " " . $lname; ?>    
    </div>
    <div class="user-welcome-subtext wow fadeIn" data-wow-delay='.5s'>
    Fill the form below to update user details 
    </div>

</div>

<div class="home-heading-col-2">
    <?php
        
        if($_SESSION['integrity'] == "PMS Admin"){
            echo '<a href="index.php?page=user_overview" class="back-btn"><i class="fas fa-home"></i> Home</a>';
        }else{
            echo '<a href="./" class="back-btn"><i class="fas fa-home"></i> Home</a>';
        }
    
    ?>
    
</div>

</div>


<div class="notification">
Please note that the asterisked <span class="asterisk">(***)</span> forms are required!
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
    if(!empty($_SESSION['invalidPassErr'])){
        echo $_SESSION['invalidPassErr'];
        unset ($_SESSION['invalidPassErr']);
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
                    <input type="text" name="fname" required value="<?php echo $fname?>">
                    <span class="fas fa-user"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Last Name <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="text" name="lname" required value="<?php echo $lname?>">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            
            <div class="form-group">
                <label>Email <span class="asterisk">(Immutable)</span></label>
                <div class="form-control">
                    <input type="email" name="email" required value="<?php echo $session_mail; ?>" disabled style="background-color: #fcfcfc">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>

            <div class="form-group">
                <label>Password <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="password" name="password" placeholder="Password">
                    <span class="fas fa-key"></span>
                </div>
            </div>
            
            
            <div class="form-group">
                <label>Confirm Password <span class="asterisk">***</span></label>
                <div class="form-control">
                    <input type="password" name="cpassword" placeholder="Confirm Password">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            
            
            <?php
                if($_SESSION['integrity'] == "PMS Admin"){
            ?>
            
            <div class="form-group">
                <label>Integrity <span class="asterisk">***</span></label>
                <div class="form-control">
                    <select name="integrity" required>
                        <option value="<?php echo $integrity; ?>"> -- <?php echo $integrity; ?> -- </option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                    <span class="fas fa-users-cog select-icon"></span>
                </div>
            </div>

            
            <?php
            }else{
            ?>
        
            <input type="hidden" name="integrity" value="<?php echo $integrity; ?>">

            <?php
                }
            ?>
            
            
        </div>


    </div>

    <div class="form-wrapper no-border">
        <div class="form-wrapper-flex">
            <div class="form-group">
                <div class="form-control">
                    <button name="update_user">Update User</button>
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