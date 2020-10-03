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
             border-radius: 5px;
        }
         a{
             color: #fff;
         }

    </style>
</head>
<body class="bg-info">
<!-- Nav tabs -->
<?php
//active page or menu bar
echo $_SERVER['PHP_SELF'];
echo '<br>';

$page = explode('/', $_SERVER['PHP_SELF']);
//var_dump($page);
//$page_count = $page[count($page) - 4];
//$page_count = $page[count($page) - 3];
//$page_count = $page[count($page) - 2];
$page_count = $page[count($page) - 1];
echo 'Last array index count = '.$page_count;
echo '<br>';
//or

$page_active = end($page);

echo 'Last array index count = '.$page_active;
echo '<br>';
?>
<ul class="nav nav-tabs">
    <li class="nav-item <?= $page_count == 'home.php' ? 'active':'';?>">
        <a href="./home.php?home=success" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
        <a href="./contact.php" class="nav-link <?= $page_count == 'contact.php' ? 'active':'';?>">Contact</a>
    </li>
    <li class="nav-item <?= $page_count == 'news.php' ? 'active':'';?>">
        <a href="./news.php" class="nav-link">News</a>
    </li>
    <li class="nav-item">
        <a href="./popular.php" class="nav-link <?= $page_count == 'popular.php' ? 'active':'';?>">Popular</a>
    </li>
    <li class="nav-item <?= $page_count == 'selim.php' ? 'active':'';?>">
        <a href="./selim.php" class="nav-link">Selim</a>
    </li>
    <li>
        <a href="./selimm.php" class="nav-link <?= $page_count == 'selimm.php' ? 'active':'';?>">Selima</a>
    </li>
</ul>
