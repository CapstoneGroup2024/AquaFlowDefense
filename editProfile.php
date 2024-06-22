<?php 
    include('includes/header.php');
    include('includes/navbar.php');
    include('functions/userFunctions.php'); 

    // Assuming $con is your database connection
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id='$user_id'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result); // Fetch user data
        }
    }
?>
<link rel="stylesheet" href="assets/css/profile.css">   
<section class="p-5 p-md-5 text-sm-start mt-4">
    <div class="Register mt-4">
        <div class="heading">Profile Form</div>
        <div class="profile-card">
            <img src="assets/images/user.png" alt="Profile Picture">

            <h2 contenteditable="true"><?= isset($data['name']) ? $data['name'] : 'Your Name' ?></h2>
            <form class="regform" action="functions/updateprofile.php" method="POST">
                <div class="text-dark">
                <div class="row ">
                        <div class="col-md-6">
                        <div class="input-wrapper ">
                            Name: <input type="text" id="username" name="name" class="full-width" placeholder="Enter your name" style="margin-left: 10px" value="<?= isset($data['name']) ? $data['name'] : '' ?>">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-wrapper">
                                Phone: <input type="text" id="phone" name="phone" class="us" placeholder="Enter your phone number"  style="margin-left: 10px" value="<?= isset($data['phone']) ? $data['phone'] : '' ?>">
                            </div>
                        </div>
                    </div>
                        <div class="input-wrapper mt-3">
                                Address: <input type="text" id="address" name="address" class="us" placeholder="Enter your address"   style="margin-left: 10px" value="<?= isset($data['address']) ? $data['address'] : '' ?>">
                            </div>
                    <li>
                        <input type="hidden" name="confirmUpdate" value="1">
                        <button type="submit" id="submitbtn" name="profileUpdateBtn" class="button-text mt-4">Submit</button>
                    </li>
                </div>
            </form>
        </div>
    </div>
</section>

<!--------------- ALERTIFY JS --------------->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    <?php
        if(isset($_SESSION['message'])){ // CHECK IF SESSION MESSAGE VARIABLE IS SET
    ?>
    alertify.alert('AquaFlow', '<?= $_SESSION['message']?>').set('modal', true).set('movable', false); // DISPLAY MESSAGE MODAL
    <?php
        unset($_SESSION['message']); // UNSET THE SESSION MESSAGE VARIABLE
        }
    ?>
</script>

<!--------------- FOOTER --------------->
<?php include('includes/footer.php');?>
