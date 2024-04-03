<?php

require_once 'config.php';
require_once 'database.php';

function send_email($data) {
	$to = $data['to'];
	$sub = $data['sub'];
	$msg = $data['msg'];
	$message = get_email_msg($data);
	$header = "From: support@pfc-group.org \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$retval = mail ($to,$sub,$message,$header);
	
  
	
}

function get_email_msg($data) {
	$msg_text = "";
	
	switch($data['msg']) {
		
		case 'acc_open':
			$msg_text = '';
		break;
		
		case 'otp':
			$msg_text = sprintf(" 
			
		 
                            
                     Your Prudent Financial Corporation One Time Transaction Authorization (OTP) Code  : %u", $data['token'] );
                     
                    
			
			
		break;
		
		case 'change_pwd':
			$msg_text = sprintf(" 
			
			
			
			
		Your Prudent Financial Corporation password is successfully changed. New Password is : %s", $data['pwd']);
		break; 
		
		case 'change_pin':
			$msg_text = sprintf(" 
			
			Dear Customer, </br>
			
			A user - A user has requested for the change of you Prudent Financial Corporation account Personal Identification Number,
			
			Your Account PIN is successfully changed to a New Personal Identification Number (PIN) to : %u", $data['pin']);
		break;		
		
		case 'transfer':
			$msg_text = $data['body'];
		break;
		
		case 'register':
			$msg_text = $data['body'];
		break;
		
	}//switch
	return $msg_text;
}

?>