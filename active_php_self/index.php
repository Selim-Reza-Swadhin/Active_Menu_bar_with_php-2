<!-- ACTIVE MENU BAR -->
<!-- ========================================================= -->
<?php
//active page or menu bar
//echo $_SERVER['PHP_SELF'];
//exit();

$page = explode('/', $_SERVER['PHP_SELF']);
//var_dump($page);
//$page_count = $page[count($page) - 4];
//$page_count = $page[count($page) - 3];
//$page_count = $page[count($page) - 2];
//$page_count = $page[count($page) - 1];
//echo 'Last array index count = '.$page_count;
//or

$page_active = end($page);

//echo 'Last array index count = '.$page_active;
//exit();

?>
