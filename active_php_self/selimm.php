<?php
//if($page = 'selima');
include_once 'header2.php';
?>

<h2 class="bg-success text-center">Selima Page Active</h2>

<?php
echo $path = $_SERVER['SCRIPT_FILENAME'];
echo '<br>';
echo $current_page = basename($path, '.php');

echo '<br>';
echo '<br>';
echo '<br>';

//active page or menu bar
echo $_SERVER['PHP_SELF'];
echo '<br>';

$page = explode('/', $_SERVER['PHP_SELF']);
//var_dump($page);
//$page_count = $page[count($page) - 4];
//$page_count = $page[count($page) - 3];
//$page_count = $page[count($page) - 2];
$page_count = $page[count($page) - 1];
echo 'Last array index count = ' . $page_count;
echo '<br>';
//or

$page_active = end($page);

echo 'Last array index count = ' . $page_active;
echo '<br>';
