<?php 
include("../../path.php");
include("../../app/controllers/posts.php");
include "../../app/includes/adminHeader.php";


?>
<?php
$pageTitle="Frontier Harvesters|| Manage Post";
?>


 <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        <?php include "../../app/includes/adminSidebar.php";?>
        
        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Create Post</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Post</h2>
                <?php  include "../../app/helpers/formErrors.php"; ?>
                <form action="create.php" method="post">
                        <div>
                            <label for="">Title</label>
                            <input type="text" name="title" class="text-input">
                        </div>
                        <div>
                            <label for="">Body</label>
                            <textarea name="body" id="body" ></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <label for=""></label>
                            <select name="category_id" class="text-input">
                                <option value="poultry"></option>
                                <?php foreach($categories as $key => $category):?>
                                    <?php if(!empty($category_id) && $category_id==$category['id']):?>
                                        <option selected value="<?php echo $category['id']?>"><?php echo $category['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $category['id']?>"><?php echo $category['name'] ?></option>
                                <?php endif;?>    
                                    <?php endforeach ?>
                                </select>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="published" id=""> Publish
                            </label>
                        </div>
                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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