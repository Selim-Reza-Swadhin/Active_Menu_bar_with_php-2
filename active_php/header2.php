<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        ul>.active
        {
             background-color: hotpink;
        }
         a{
             color: #fff;
         }

    </style>
</head>
<body class="bg-info">
<!-- Nav tabs -->
<?php
echo $path = $_SERVER['SCRIPT_FILENAME'];
echo '<br>';
echo $current_page = basename($path, '.php');
echo '<br>';
echo '<br>';
?>
<ul class="nav nav-tabs">
    <li class="nav-item <?= $current_page == 'home' ? 'active':'';?>">
        <a href="./home.php?home=success" class="nav-link">Home</a>
    </li>
    <li>
        <a href="./contact.php" class="nav-link <?= $current_page == 'contact' ? 'active':'';?>">Contact</a>
    </li>
    <li>
        <a href="./news.php" class="nav-link <?= $current_page == 'news' ? 'active':'';?>">News</a>
    </li>
    <li>
        <a href="./popular.php" class="nav-link <?= $current_page == 'popular' ? 'active':'';?>">Popular</a>
    </li>
    <li>
        <a href="./selim.php" class="nav-link <?= $current_page == 'selim' ? 'active':'';?>">Selim</a>
    </li>
    <li>
        <a href="./selimm.php" class="nav-link <?= $current_page == 'selimm' ? 'active':'';?>">Selima</a>
    </li>
</ul>
