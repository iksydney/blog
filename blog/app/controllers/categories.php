<?php  include("../../path.php");
include ("../../app/database/db.php");
include ("../../app/helpers/validateCategory.php");

$table = 'categories';

$errors = array();
$id = '';
$name = '';
$description = '';

$categories = selectAll($table);


if(isset($_POST['add-topic'])){
    $errors = validateCategory($_POST);

    if (count($errors) === 0){
      unset($_POST['add-topic']);
    $category_id = create('categories', $_POST);
    $_SESSION['message'] = 'Category created successfully';
    $_SESSION['type'] = 'success';
    header("Location: index.php"); 
    exit();  
    }else{
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $category = selectOne($table, ['id' =>$id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
}

if (isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Category deleted successfully';
    $_SESSION['type'] = 'success';
    header("Location: index.php"); 
    exit();
}

if (isset($_POST['update-topic'])){
    $errors = validateCategory($_POST);

    if (count($errors) === 0){
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $category_id = update($table, $id, $_POST);
    $_SESSION['message'] = 'Category Updated successfully';
    $_SESSION['type'] = 'success';
    header("Location: index.php"); 
    exit();
}else{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
}
}
