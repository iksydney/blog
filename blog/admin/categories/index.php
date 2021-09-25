<?php 
include("../../path.php");
include "../../app/includes/adminHeader.php";
include("../../app/controllers/categories.php");?>

<?php
$pageTitle="Frontier Harvesters || Manage Categories";
?>


 <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        <?php include "../../app/includes/adminSidebar.php";?>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Category</a>
                <a href="index.php" class="btn btn-big">Manage Category</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Categories</h2>
                
                <?php include ('../../app/includes/messages.php'); ?>
                
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $key => $category):?>
                        <tr>
                            <td><?php echo $key +1;?></td>
                            <td><?php echo $category['name']; ?></td>
                            <td><a href="edit.php?id=<?php echo $category['id'];?>" class="edit">edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $category['id'] ?>" class="delete">delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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