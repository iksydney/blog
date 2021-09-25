<?php 
include("../../path.php");
include "../../app/includes/adminHeader.php";
include("../../app/controllers/posts.php");
?>
<?php
$pageTitle="Frontier Harvesters || Manage Posts";
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
                <h2 class="page-title">Manage Post</h2>
                <?php include ('../../app/includes/messages.php'); ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post):?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $post['title']?></td>
                            <td>Ogbonna</td>
                            <td><a href="edit.php?id=<?php echo $post['id'];?>" class="edit">edit</a></td>
                            <td><a href="" class="delete">delete</a></td>
                            <?php if ($post['published']):?>
                                <td><a href="" class="publish">unpublish</a></td>
                            <?php else: ?>
                                <td><a href="" class="publish">publish</a></td>
                            <?php endif;?>
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