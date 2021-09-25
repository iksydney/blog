<?php 
include("../../path.php");
include "../../app/includes/adminHeader.php";
?>
<?php
$pageTitle="Frontier Harvesters|| Create Users";
?>


 <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        <?php include "../../app/includes/adminSidebar.php";?>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage User</a>
            </div>

            <div class="content">
                <h2 class="page-title">Create User</h2>
                    <form action="create.html" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" id="" class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" id="" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" id="" class="text-input">
                        </div>
                        <div>
                            <label>Role</label>
                            <input type="password" name="passwordConf" id="" class="text-input">
                            <div>
                                <label for="">Category</label>
                                <select name="category" class="text-input">
                                    <option value="Author">Author</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                        <div>
                            <button type="submit" class="btn btn-big">Add User</button>
                        </div>
                    </form>
            </div>
            
        </div>
        <!-- //Admin Content -->
    </div>
    <!--  //Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>

    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
    
</body>
</html>