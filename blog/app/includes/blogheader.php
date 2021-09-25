<?php
if(!$pageTitle){
    $pageTitle="Frontier Harvesters Blog Admin";
}
?>

<?php
include "path.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <title><?php echo $pageTitle;?></title>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <a href="<?php echo BASE_URL . '/index.php'?>" class="logo">
            <h1 class="logo-text"><span>Frontier</span>Harvesters</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="<?php echo BASE_URL . '/index.php'?>">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
        
        <?php if(isset($_SESSION['id'])):?>
            <li>
                <a href="#">
                <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username'];?>
                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
            <ul>
                <?php if($_SESSION['admin']):?>
                    <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                <?php endif;?>
                <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
            </ul>
            </li>
        <?php else: ?>
            <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
            <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li> 
        <?php endif;?>
        </ul>
    </header>