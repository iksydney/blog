<?php 
include("../../path.php");
include "../../app/includes/adminHeader.php";
include("../../app/controllers/categories.php");?>
<?php
$pageTitle="Frontier Harvesters|| Edit Category";
?>


 <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        <?php include "../../app/includes/adminSidebar.php";?>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Create Category</a>
                <a href="index.php" class="btn btn-big">Manage Category</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Category</h2>
                <?php  include "../../app/helpers/formErrors.php"; ?>
                    <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="text-input">
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                        </div>
                        <div>
                            <label for="">Description</label>
                            <textarea name="description" id="body" ><?php echo $description; ?></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" name="update-topic" class="btn btn-big">Update Category</button>
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