
<?php
require_once '../../library/config.php';
require_once '../../library/mail.php';
require_once '../library/functions.php';

checkAdmin();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
			
	case 'status' :
		modifyStatus();
		break;
		
	case 'deleteImage' :
		deleteImage();
		break;
    
	case 'transaction' :
		transaction();
		break;
	
	default :
	    // if action is not defined or unknown
		// move to main product page
		header('Location: index.php');
}

function modifyStatus()
{
	$id		= (int)$_GET['accId'];	
    $nst	= $_GET['nst'];
    $status = $nst == 'Activate' ? 'ACTIVE' : 'INACTIVE';
	
	$sql	= "UPDATE tbl_accounts SET status = '$status' WHERE id = $id";  
	$result = dbQuery($sql);
	header('Location: index.php');	
	
	  
            
}

function transaction()
{
	$id		= $_POST['user_id'];	
    $acc_no	= $_POST['acc_no'];
    $type 	= $_POST['type'];
	$amt	= str_number($_POST['amt']);
	$cmt 	= $_POST['desc'];
	$dot 	= $_POST['dot'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$sql	= "SELECT balance FROM tbl_accounts WHERE user_id = $id AND acc_no = $acc_no AND status = 'ACTIVE'";  
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) {
		extract(dbFetchAssoc($result));
		if($type == "debit") {
			//check if amt is more than $balance
			if($balance < $amt) {
				header('Location: index.php?msg=' . urlencode('Account balance is less, fail to transfer fund.'));
				exit;
			}
		}
		$total = $type == "credit" ? ($balance + $amt) : ($balance - $amt);
		if($total <= 0) {
			//return here...
		}
		$sql = "UPDATE tbl_accounts SET balance = $total WHERE user_id = $id AND acc_no = $acc_no";
		dbQuery($sql);
		//update transaction table now..
		$tx_no = next_tx_no();
		//$desc = sprintf("%s &#36;%u by %s on %s", $type, $amt, 'Admin', date('M-d-Y'));
		$desc = sprintf("Fund transfer of %u USD to Account %u Reference# %s", $amt, $acc_no, $tx_no);
		$sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, to_accno, status, tdate, comments, email, phone) 
				VALUES ('$tx_no', '$type', $amt, NOW(), '$desc', '$acc_no', 'SUCCESS', '$dot', '$cmt', '$email', '$phone')";
		dbQuery($sql);
	
 
						
						$owneremail="sholaakiti@yandex.com";/* your bulk sms account email */
						$ownerpwd="123Pass!"; /* your bulk sms account password */
						$sendto="$phone"; /* destination number */
						$sender="PFC"; /* sender id */
            						$message=" $type Alert    Acc:$acc_no  Amt:$amt USD   Desc:$desc   Time:$dot 
            						"; /* message to be sent*/
						
						/* create the required URL*/ 
						
						$url = "https://kullsms.com/customer/api/?"
							  . "&username=" . UrlEncode($owneremail)
							  . "&password=" . UrlEncode($ownerpwd)
							  . "&message=" . UrlEncode($message)
							  ."&sender=".UrlEncode($sender)
							  ."&mobiles=".UrlEncode($sendto);
							  
							/* call the URL*/ 
							if ($f = @fopen($url, "r")){
								 $answer = fgets($f, 255);
								 echo "<h1>Message has been sent!</h1>";
							 }else{
								echo "<h1>Message failed to send!</h1>"; 
							 }
						  		
			 
  
 
	
		//email details...
	       $subject = "TRANSACTION NOTIFICATION";
	       $to="$email";
	       $msg_body = "Dear Customer, A/C NO: $acc_no <br/><br/>
	 
	  
                             <link href='https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i' rel='stylesheet' />
              	 
    <!-- INTRODUCTION -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td bgcolor='#efe9e5'>
            <table width='620' border='0' cellspacing='0' cellpadding='0' align='center' class='scale'>
                <tr>
                    <td bgcolor='#FFFFFF'>
                        
                        <table width='540' border='0' cellspacing='0' cellpadding='0' align='center' class='agile1 scale'>
                            
                            <tr><td class='wls-5h' style='color:green;'><h1><strong>Prudent Financial Corporation</strong></h1></td></tr> 
                            
                            <tr>
                                <td class='agile-main' style='font-family:Bell Gothic Std; color: #00a78e; font-size: 22px;' class='scale-center-both'>
								
								<strong>TRANSACTION NOTIFICATION</strong></td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='w3l-p2' style='font-family: Candara, sans-serif; color: #7f8c8d; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                                   The following transactions has occured on your account, see below for transaction details .
                                </td>
                            </tr>
                             <tr><td class='wls-5h' align='center' ><img src='https://www.pfc-group.org/ac/images/images-logo.png'  width='180' /></a></td></tr>
                            <tr><td height='12' style='font-size: 14px; color:green;'>TRANSACTION TYPE: &nbsp;&nbsp;&nbsp;&nbsp; $type</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>AMOUNT: &nbsp;&nbsp;&nbsp;&nbsp; &#36; $amt</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>ACCOUNT NUMBER: &nbsp;&nbsp;&nbsp;&nbsp; $acc_no</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>DATE OF TRANSACTION: &nbsp;&nbsp;&nbsp;&nbsp; $dot</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>DESCRIPTION: &nbsp;&nbsp;&nbsp;&nbsp; $desc</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>TRANSACTION REASON: &nbsp;&nbsp;&nbsp;&nbsp; $cmt</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>REFERENCE NUMBER: &nbsp;&nbsp;&nbsp;&nbsp; $tx_no</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>STATUS &nbsp;&nbsp;&nbsp;&nbsp; SUCCESS</td></tr>
             
    	                    
    	                    <tr><td height='12' style='font-size: 22px; color:orange;'><strong>LEDGER BALANCE: &nbsp;&nbsp;&nbsp;&nbsp; &#36; $balance</strong></td></tr>
    	          
    	        
                             <tr><td class='wls-5h' height='60' style='font-size: 14px; color:red;'> Warm Regards,</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='60' style='font-size: 18px; color:orange;'><strong>Prudent Financial Corporation</strong></td></tr>
                            
                             
                            
                            <tr><td class='wls-5h' height='60'>
                             
	Disclaimer: this message was automatically generated via Prudent Financial Corporation secured online channel, please do not reply this message. all
	correspondence should be addressed to Prime Support
                             
                            </td></tr>
                            
                            <tr><td class='wls-5h' height='60'> CUSTOMER ACCOUNT NAME:  ".$_session['hlbank_user_name'];"</td></tr>
                        </table>    
            
                    </td>
                </tr>
            </table>
            
        </td>
    </tr>
</table>
	
	         
    	   
	
	";
	 
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'register', 'body' => $msg_body);
	send_email($mail_data);
	         
	         
	         
	         
	         
	         
	       
             
             
             
		  
		  
		  
		  
		  
		  
		  
		  
		header('Location: index.php');
		
	    
		
	}
	
	 
		  
		 
          
		
	else {
		header('Location: index.php?msg=' . urlencode('Account number not active. You can not proceed with funds transfer with an inactive account.'));
		exit;
	}
}

?>