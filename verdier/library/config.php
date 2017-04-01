<?php

 
session_start();

//configuracion de base de datos
$server="localhost";
$basedatos="verdier";
$user="root";
$pass="root";

$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'library/config.php'), '', $thisFile);
$srvRoot  = str_replace('library/config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);

// exceed 200 pixels
define('MAX_CATEGORY_IMAGE_WIDTH', 1200);
// do we need to limit the product image width?
// setting this value to 'true' is recommended
define('LIMIT_PRODUCT_WIDTH',     false);

// maximum width for all product image
define('MAX_PRODUCT_IMAGE_WIDTH', 600);


?>