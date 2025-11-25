<?php
$page = $_GET['page'] ?? 'dashboard';
include 'views/header.php';

$path = explode('/', $page);
$folder = $path[0];
$file = $path[1] ?? 'index';

$mod = "modules/$folder/$file.php";

if (file_exists($mod)) include $mod;
else include "views/$page.php";

include 'views/footer.php';
?>