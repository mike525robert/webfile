<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkAdmin();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'detail' :
		$content    = 'cot-list.php';
		$pageTitle  = 'View HMT Codes';
	break;
	
	case 'addcot' :
		$content    = 'addcot.php';
		$pageTitle  = 'Add HMT Codes';
	break;
	
	default :
		$content 	= 'cot-list.php';		
		$pageTitle 	= 'View HMT Codes';
}

$script    = array('user.js','jquery.min.js');
require_once '../include/template.php';
?>