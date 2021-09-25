<?php
if(!$pageTitle){
    $pageTitle='Frontier Harvesters || Categories Add Section';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/149993346e.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <title><?php echo $pageTitle;?></title>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Custom Styling -->
     <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>
<header>
        <a class="logo" href="<?php echo BASE_URL . '/index.php';?>">
            <h1 class="logo-text"><span>Frontier</span>Harvesters</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li>
            <a href="#">
                <i class="fa fa-user"></i>
                    Ogbonna Ikenna
                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
            <ul>
            <li><a href="#" class="logout">Logout</a></li>
            </ul>
            </li>
        </ul>
    </header>