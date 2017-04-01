<?php
require_once '../library/config.php';
require_once '../library/funciones_db.php';

checkUser();
$content = 'main.php';

$pageTitle = 'Admin';
require_once 'include/template.php';
?>