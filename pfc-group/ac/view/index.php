<?php
require_once '../library/config.php';
require_once '../library/functions.php';

$_SESSION['hlbank_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$view = (isset($_GET['v']) && $_GET['v'] != '') ? $_GET['v'] : '';

switch ($view) {
	case 'Account' :
		$content 	= 'AccountDetails.php';		
		$pageTitle 	= 'View Account Details';
		break;
	
	case 'Summary' :
		$content 	= 'summary.php';		
		$pageTitle 	= 'Account Sumamry';
		break;	

	case 'ChangePwd' :
		$content 	= 'changepwd.php';		
		$pageTitle 	= 'Change Password ';
		break;

	case 'ChangePin' :
		$content 	= 'changepin.php';		
		$pageTitle 	= 'Change account Pin Number';
		break;

	case 'Transfer' :
		$content 	= 'FundTransfers.php';		
		$pageTitle 	= 'Fund Transfers';
		break;
	
	case 'Statement' :
		$content 	= 'statement.php';		
		$pageTitle 	= 'Account Statement';
		break;
		
		
		
		
			case 'card' :
		$content 	= 'card.php';		
		$pageTitle 	= 'Credit Cards';
		break;
		
		
			case 'loan-menu' :
		$content 	= 'loan-menu.php';		
		$pageTitle 	= 'Approved Loans';
		break;
		
			case 'start-transfer' :
		$content 	= 'start-transfer.php';		
		$pageTitle 	= 'Start International Transfer';
		break;
		
		case 'local-transfer' :
		$content 	= 'local-transfer.php';		
		$pageTitle 	= 'Local Funds  Transfer';
		break;
		
			case 'local-transfer2' :
		$content 	= 'local-transfer2.php';		
		$pageTitle 	= 'Local Funds  Transfer Step 2';
		break;
		
			case 'intl-transfer' :
		$content 	= 'intl-transfer.php';		
		$pageTitle 	= 'International Funds Transfer';
		break;
		
		
		case 'loading' :
		$content 	= 'loading.php';		
		$pageTitle 	= 'Intiating Transfer';
		break;
		
		case 'cot' :
		$content 	= 'cot.php';		
		$pageTitle 	= 'HMT Code';
		break;
		
		
		case 'tax' :
		$content 	= 'tax.php';		
		$pageTitle 	= 'Tax and VAT Code';
		break;
		
		
			case 'support' :
		$content 	= 'support.php';		
		$pageTitle 	= 'Customer Support';
		break;
		
		case 'contact-success' :
		$content 	= 'contact-success.php';		
		$pageTitle 	= 'Customer Support Acknowledgment';
		break;
		
		
		
			case 'apply-loan' :
		$content 	= 'apply-loan.php';		
		$pageTitle 	= 'Apply for Loan';
		break;
		
		
		case 'loan-success' :
		$content 	= 'loan-success.php';		
		$pageTitle 	= 'Loan Acknowledgment';
		break;
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	case 'Token' :
		$content 	= 'OTP.php';		
		$pageTitle 	= 'Transaction Authorization Code';
		break;		

	case 'IntFund' :
		$content 	= 'main.php';
		$pageTitle 	= 'International Transaction';
		break;
		
	default :
		$content 	= 'summary.php';		
		$pageTitle 	= 'Account Summary';
}

$script    = array('category.js');

require_once '../include/template.php';
?>
