<?php  include("../../path.php");
include ("../../app/database/db.php");
include ("../../app/helpers/validatePost.php");


$table = 'posts';

$categories = selectAll('categories');
$posts = selectAll($table);

$errors = array();
$id = "";
$title = "";
$body = "";
$category_id ="";
$published =  "";

if(isset($_GET['id'])){
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $category_id =$post['category_id'];
    $published =  $post['published'];
}

if (isset($_POST['add-post'])){
    $errors = validatePost($_POST);
    
    if (count($errors) == 0){
        unset($_POST['add-post'], $_POST['category_id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published'])? 1: 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created Successfully";
        $_SESSION['type'] = "success";
        header("location: index.php");
}else{
    $title = $_POST['title'];
    $body = $_POST['body'];
    $category_id = $_POST['category_id'];
    $published = isset($_POST['published'])? 1: 0;
    }
}