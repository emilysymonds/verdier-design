<?php
require_once '../../library/config.php';
require_once '../../library/funciones_db.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'main' :
		$content 	= 'main.php';		
		$pageTitle 	= 'Admin';
		break;

	case 'add' :
		$content 	= 'add.php';		
		$pageTitle 	= 'Admin - Agregar trabajo';
		break;
		

	default :
		$content 	= 'main.php';		
		$pageTitle 	= 'Admin';
}

require_once '../include/template.php';
?>
