<?php
//if($page = 'selima');
include_once 'header2.php';
?>

<h2 class="bg-success text-center">Selima Page Active</h2>

<?php
echo $path = $_SERVER['SCRIPT_FILENAME'];
echo '<br>';
echo $current_page = basename($path, '.php');