<?php
$pageTitle = "Frontier Harvesters || Register";
?>
<?php
include "path.php";

include(ROOT_PATH . "/app/controllers/users.php");

?>

<?php
include 'app/includes/blogheader.php';
?>

    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username?>" id="" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email?>" id="" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password?>" id="" class="text-input">
            </div>
            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf?>" id="" class="text-input">
            </div>
            <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            <p>Or <a href="<?php echo BASE_URL . '/login.php'?>"> Sign In</a></p>
        </form>
    </div>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Custom Script -->
    <script src="js/scripts.js"></script>
    

     <!-- Font Script -->
     <script src="https://kit.fontawesome.com/568a4a18d9.js" crossorigin="anonymous"></script>
</body>
</html>