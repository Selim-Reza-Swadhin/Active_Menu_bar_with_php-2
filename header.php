<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        ul>.active
        {
             background-color: orange;
        }
         a{
             color: #fff;
         }

    </style>
</head>
<body class="bg-info">
<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="nav-item <?php if($page == 'home'){echo 'active';}?>">
        <a href="home.php?home=success" class="nav-link">Home</a>
    </li>
    <li class="<?php if($page == 'contact'){echo 'active';}?>">
        <a href="contact.php" class="nav-link">Contact</a>
    </li>
    <li class="<?php if($page == 'news'){echo 'active';}?>">
        <a href="news.php" class="nav-link">News</a>
    </li>
    <li class="<?php if($page == 'popular'){echo 'active';}?>">
        <a href="popular.php" class="nav-link">Popular</a>
    </li>
    <li class="<?php if ($page == 'selim'? 'active': '');?>">
        <a href="selim.php" class="nav-link">Selim</a>
    </li>
    <li class="<?php if($page == 'selima'){echo 'active';}?>">
        <a href="selimm.php" class="nav-link">Selima</a>
    </li>
</ul>
