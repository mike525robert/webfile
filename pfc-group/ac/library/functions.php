<?php
require_once('mail.php');

/*
	Check if a session user id exist or not. If not set redirect
	to login page. If the user session id exist and there's found
	$_GET['logout'] in the query string logout the user
*/
function checkUser()
{
	// if the session id is not set, redirect to login page
	if (!isset($_SESSION['hlbank_user'])) {
		header('Location: ' . WEB_ROOT . 'login.php');
		exit;
	}
	// the user want to logout
	if (isset($_GET['logout'])) {
		doLogout();
	}
}


function next_tx_no() {
	$sql = "SELECT tx_no FROM tbl_transaction ORDER BY id DESC LIMIT 1";
	$result = dbQuery($sql);
	extract(dbFetchAssoc($result));
	$tx_num		= (int)substr($tx_no, 2);
	$next_id 	= $tx_num+1; // increment by One
	return 'TX'.$next_id;
}

function str_number($str) {
	$number = '';
	$number = str_replace('$', '', $str);
	$number = str_replace(',', '', $number);
	return doubleval($number);
}

 





function doPinValidation() {
	$errorMessage = '';
	
	$pin = $_SESSION['hlbank_tmp']['pin'];
	$ipPin = $_POST['accpin'];
	
	if($pin == $ipPin) {
		$_SESSION['hlbank_user'] = $_SESSION['hlbank_tmp'];
		



//email details...
		
		   $subject = "LOGIN NOTIFICATION FROM USER IP: ".$_SERVER['REMOTE_ADDR'];"  ";
	       $to=" ".$_SESSION['hlbank_user']['email'];" ";
	       $msg_body = "Dear Customer, $acc_no <br/><br/>
	 
	
                	<style>
                table {
                  border-collapse: collapse;
                  border-spacing: 0;
                  width: 100%;
                  border: 1px solid #ddd;
                }
                
                th, td {
                  text-align: left;
                  padding: 16px;
                }
                
                tr:nth-child(even) {
                  background-color: #f2f2f2
                }
                </style>
                
                 
                
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
								
								<strong>LOGIN NOTIFICATION</strong></td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='w3l-p2' style='font-family: Candara, sans-serif; color: #7f8c8d; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                                   A user from the above mentioned IP accessed your account via our online banking channel, we write to notify you for security 
             reasons and to further protect your account against internet and cyber crimes. Please kindly notify our Premium Support if you did not try to access your  
             account via the above Internet Protocol
                                </td>
                            </tr>
                             
                            
                             <tr><td class='wls-5h' height='60' style='font-size: 14px; color:red;'> Warm Regards,</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='60' style='font-size: 18px; color:orange;'><strong>Prudent Financial Corporation</strong></td></tr>
                            
                             
                            
                            <tr><td class='wls-5h' height='60'>
                             
	Disclaimer: this message was automatically generated via Prudent Financial Corporation  secured online channel, please do not reply this message. All
	correspondence should be addressed to Premium Support.
                             
                            </td></tr>
                            
                            <tr><td class='wls-5h' height='60'> CUSTOMER ACCOUNT NAME:  ".$_SESSION['hlbank_user_name'];"</td></tr>
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


  
        
        
        
            
		unset($_SESSION['hlbank_tmp']);
		header('Location: index.php');
		
		
		  
		exit;
	}
	else {
		$errorMessage = '
		<p style="text-align:justify; color:orange;">Dear Customer, <br/> we have discovered suspicious activities on your account; because an unauthorized IP
address carried out a transaction on your account, consequently, your account has been flagged by our risk assessment department. kindly visit our nearest branch with your
identification card and utility bill to confirm your identity before it can be reactivated. <br/>Thank you.</p>';
	}
	return $errorMessage;
}
 
 
 
function doLogin()
{
	$errorMessage = '';
	
	$accno 	= (int)$_POST['accno'];
	$pwd 	= $_POST['pass'];
	
	$sql = "SELECT u.fname, u.lname, u.email, u.is_active, u.pics, u.phone, u.dob, u.empname, u.emptype, u.salary, u.bname, u.boccu, u.bemail, u.bmobile,
			u.brela, u.bage, u.badd, u.q1, u.q2, u.ans1, u.ans2,
			a.acc_no, a.user_id, a.pin, a.type, a.msg, a.status,
			ad.address, ad.city, ad.state, ad.zipcode, ad.country
			FROM tbl_users u, tbl_accounts a, tbl_address ad
			WHERE a.acc_no = $accno AND u.pwd = PASSWORD('$pwd')
			AND u.id = a.user_id AND ad.user_id = u.id AND u.is_active != 'FALSE'";
	$result = dbQuery($sql);
	
	if (dbNumRows($result) == 1) {
		$row = dbFetchAssoc($result);
		$_SESSION['hlbank_tmp'] = $row;
		$_SESSION['hlbank_user_name'] =	strtoupper( $row['fname'].' '.$row['lname']);
		header('Location: validate-user.php');
		exit;
	}
	else {
		$errorMessage = '<p style=" color:red;">Wrong Banking Credentials !!!</p>';
	}
	return $errorMessage;
}


/*
	Logout a user
*/
function doLogout()
{
	if (isset($_SESSION['hlbank_user'])) {
		unset($_SESSION['hlbank_user']);
		//session_unregister('hlbank_user');
	}
	header('Location: login.php');
	exit;
}


function doRegister()
{
	$fname 	= $_POST['firstname'];
	$lname 	= $_POST['lastname'];
	$email 	= $_POST['email'];
	$phone 	= $_POST['phone'];
	$dob 	= $_POST['dob'];
	$gender = $_POST['gender'];
	$add 	= $_POST['address'];
	$city 	= $_POST['city'];
	$zip	= (int)$_POST['zipcode'];
	$country 	= $_POST['country'];
	$state 	= $_POST['state']; 
	$empname 	= $_POST['empname'];
	$emptype 	= $_POST['emptype'];
	$salary 	= $_POST['salary'];
	$bname 	= $_POST['bname'];
	$boccu 	= $_POST['boccu'];
	$bemail 	= $_POST['bemail'];
	$bmobile 	= $_POST['bmobile'];
	$brela 	= $_POST['brela'];
	$bage 	= $_POST['bage'];
	$badd 	= $_POST['badd'];
	$q1 	= $_POST['q1'];
	$q2 	= $_POST['q2'];
	$ans1 	= $_POST['ans1'];
	$ans2 	= $_POST['ans2']; 
	$pwd 	= $_POST['password']; 
//	$accno 	= (int)$_POST['accno']; 
	$pin	= (int)$_POST['pin'];
	$type 	= $_POST['acctype'];
	
	$errorMessage = '';
	
	$sql = "SELECT fname FROM tbl_users WHERE fname = '$fname'";
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) {
		$errorMessage = 'Prudent Financial Corporation Customer With The Username Already Exist, Please Try Another Name.';
		return $errorMessage;
	}
	
	//first check if account number is already register or not...
	$accno = rand(9999999999, 99999999999);
	$accno = strlen($accno) != 10 ? substr($accno, 0, 10) : $accno;
	/*
	$sql = "SELECT acc_no FROM tbl_accounts WHERE acc_no = $accno";
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) {
		$errorMessage = 'Account number is already registered.';
		return $errorMessage;
	}
	*/
	
	$images = uploadProductImage('pic', SRV_ROOT . 'images/thumbnails/');
	$thumbnail = $images['thumbnail'];
	$insert_id = 0; 
	$sql = "INSERT INTO tbl_users (fname, lname, email, phone, dob, gender, empname, emptype, salary, bname, boccu, bemail, bmobile, brela, bage, 
badd, q1, q2, ans1, ans2, pwd, is_active, utype, pics, bdate)
			VALUES ('$fname', '$lname', '$email', '$phone', '$dob','$gender', '$empname', '$emptype', '$salary', '$bname', '$boccu', '$bemail',
'$bmobile', '$brela', '$bage', '$badd', '$q1', '$q2', '$ans1', '$ans2',	PASSWORD('$pwd'),'FALSE', 'USER', '$thumbnail', NOW())";	
	dbQuery($sql);
	$insert_id = dbInsertId();
	
	//now create a user address. 
	$sql = "INSERT INTO tbl_address (user_id, address, city, state, zipcode, country) 
			VALUES ($insert_id, '$add', '$city', '$state', $zip, '$country')";
	dbQuery($sql);
	
	//and now create a account table entry...
	$sql = "INSERT INTO tbl_accounts (user_id, acc_no, type, balance, pin, status, bdate) 
			VALUES ($insert_id, $accno, '$type', 0, $pin, 'INACTIVE', NOW())";
	dbQuery($sql);
	
	
	
	                    $owneremail="sholaakiti@yandex.com";/* your bulk sms account email */
						$ownerpwd="123Pass!"; /* your bulk sms account password */
						$sendto="$phone"; /* destination number */
						$sender="PFC"; /* sender id */
            						$message="Dear $fname, You have successfully enrolled for Prudent Financial Corporation Online Banking, Your A/C NO is $accno
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
						  		

	
	
	
	
	
	
	
	
	
	
	//now send email
	//email it now.	
	 
	$subject = "ACCOUNT NOTIFICATION";
	$to = $email;
	$msg_body = "Dear $fname $lname,<br/><br/>
	 
	
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
								
								<strong>ACCOUNT NOTIFICATION</strong></td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='w3l-p2' style=' text-align: justify; font-family: Candara, sans-serif; color: #7f8c8d; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                                Dear $fname $lname, Thank you so much for allowing us to help you with your recent Premium Account opening. We are committed to providing our customers with the highest
	level of service and the most innovative banking products possible. We are very glad you chose us as your financial institution and hope that you 
	will take advantage of our wide variety of savings, investment and loan products which are all designed to meet your specific needs.
                                </td>
                            </tr>
                            
                            <tr>
                                <td class='w3l-p2' style=' text-align:justify; font-family: Candara, sans-serif; color: #7f8c8d; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                       For more detailed information about any of our products, Loans, Credit Cards or other financial services, please contact Premium Support or the relationship officer that would be assigned to you shortly.
	
                                </td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:blue;'><strong>ACCOUNT DETAIL</strong></td></tr>
                             
                             <tr><td height='12' style='font-size: 16px; color:green;'>&nbsp;Account Number: $accno</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:green;'>&nbsp; Account Type: $type</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:green;'>&nbsp; Account PIN: $pin</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:green;'>&nbsp;Account Password: ***** (used in registration)</td></tr>
                             
                             <tr><td height='12' style='font-size: 22px; color:red;'>&nbsp;STATUS: INACTIVE</td></tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr><td height='12' style='font-size: 16px;'>Please do not hesitate to contact us, should you have any questions. We will contact you in the very near future to ensure you are
	completely satisfied with the services you have received thus far.</td></tr>
                            
                            
                             <tr><td class='wls-5h' height='60' style='font-size: 16px; color:red;'> Warm Regards,</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='60' style='font-size: 18px; color:orange;'><strong>Prudent Financial Corporation</strong></td></tr>
                            
                             
                            
                            <tr><td class='wls-5h' height='60'>
                             
	Disclaimer: this message was automatically generated via Prudent Financial Corporation secured online channel, please do not reply this message. all
	correspondence should be address to Premium Support or your relationship Officer
                             
                            </td></tr>
                            
                            <tr><td class='wls-5h' height='60'> CUSTOMER ACCOUNT NAME: $fname &nbsp; $lname</td></tr>
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
		
	header('Location: enroll-success.php');
	exit;
	
}

/*
	Create a thumbnail of $srcFile and save it to $destFile.
	The thumbnail will be $width pixels.
*/
function createThumbnail($srcFile, $destFile, $width, $quality = 75)
{
	$thumbnail = '';
	
	if (file_exists($srcFile)  && isset($destFile))
	{
		$size        = getimagesize($srcFile);
		$w           = number_format($width, 0, ',', '');
		$h           = number_format(($size[1] / $size[0]) * $width, 0, ',', '');
		
		$thumbnail =  copyImage($srcFile, $destFile, $w, $h, $quality);
	}
	
	// return the thumbnail file name on sucess or blank on fail
	return basename($thumbnail);
}

/*
	Copy an image to a destination file. The destination
	image size will be $w X $h pixels
*/
function copyImage($srcFile, $destFile, $w, $h, $quality = 75)
{
    $tmpSrc     = pathinfo(strtolower($srcFile));
    $tmpDest    = pathinfo(strtolower($destFile));
    $size       = getimagesize($srcFile);

    if ($tmpDest['extension'] == "gif" || $tmpDest['extension'] == "jpg")
    {
       $destFile  = substr_replace($destFile, 'jpg', -3);
       $dest      = imagecreatetruecolor($w, $h);
       imageantialias($dest, TRUE);
    } elseif ($tmpDest['extension'] == "png") {
       $dest = imagecreatetruecolor($w, $h);
       imageantialias($dest, TRUE);
    } else {
      return false;
    }

    switch($size[2])
    {
       case 1:       //GIF
           $src = imagecreatefromgif($srcFile);
           break;
       case 2:       //JPEG
           $src = imagecreatefromjpeg($srcFile);
           break;
       case 3:       //PNG
           $src = imagecreatefrompng($srcFile);
           break;
       default:
           return false;
           break;
    }

    imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);

    switch($size[2])
    {
       case 1:
       case 2:
           imagejpeg($dest,$destFile, $quality);
           break;
       case 3:
           imagepng($dest,$destFile);
    }
    return $destFile;

}

/*
	Create the paging links
*/
function getPagingNav($sql, $pageNum, $rowsPerPage, $queryString = '')
{
	$result  = mysql_query($sql) or die('Error, query failed. ' . mysql_error());
	$row     = mysql_fetch_array($result, MYSQL_ASSOC);
	$numrows = $row['numrows'];
	
	// how many pages we have when using paging?
	$maxPage = ceil($numrows/$rowsPerPage);
	
	$self = $_SERVER['PHP_SELF'];
	
	// creating 'previous' and 'next' link
	// plus 'first page' and 'last page' link
	
	// print 'previous' link only if we're not
	// on page one
	if ($pageNum > 1)
	{
		$page = $pageNum - 1;
		$prev = " <a href=\"$self?page=$page{$queryString}\">[Prev]</a> ";
	
		$first = " <a href=\"$self?page=1{$queryString}\">[First Page]</a> ";
	}
	else
	{
		$prev  = ' [Prev] ';       // we're on page one, don't enable 'previous' link
		$first = ' [First Page] '; // nor 'first page' link
	}
	
	// print 'next' link only if we're not
	// on the last page
	if ($pageNum < $maxPage)
	{
		$page = $pageNum + 1;
		$next = " <a href=\"$self?page=$page{$queryString}\">[Next]</a> ";
	
		$last = " <a href=\"$self?page=$maxPage{$queryString}{$queryString}\">[Last Page]</a> ";
	}
	else
	{
		$next = ' [Next] ';      // we're on the last page, don't enable 'next' link
		$last = ' [Last Page] '; // nor 'last page' link
	}
	
	// return the page navigation link
	return $first . $prev . " Showing page <strong>$pageNum</strong> of <strong>$maxPage</strong> pages " . $next . $last; 
}


/*
	Upload an image and return the uploaded image name 
*/
function uploadProductImage($inputName, $uploadDir)
{
	$image     = $_FILES[$inputName];
	$imagePath = '';
	$thumbnailPath = '';
	
	// if a file is given
	if (trim($image['tmp_name']) != '') {
		$ext = substr(strrchr($image['name'], "."), 1); //$extensions[$image['type']];

		// generate a random new file name to avoid name conflict
		$imagePath = md5(rand() * time()) . ".$ext";
		
		list($width, $height, $type, $attr) = getimagesize($image['tmp_name']); 

		// make sure the image width does not exceed the
		// maximum allowed width
		
		if (LIMIT_USER_WIDTH && $width > MAX_USER_IMAGE_WIDTH) {
			$result    = createThumbnail($image['tmp_name'], $uploadDir . $imagePath, MAX_USER_IMAGE_WIDTH);
			$imagePath = $result;
		} else {
			$result = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
		}	
		
		if ($result) {
			// create thumbnail
			$thumbnailPath =  md5(rand() * time()) . ".$ext";
			$result = createThumbnail($uploadDir . $imagePath, $uploadDir . $thumbnailPath, THUMBNAIL_WIDTH);
			
			// create thumbnail failed, delete the image
			if (!$result) {
				unlink($uploadDir . $imagePath);
				$imagePath = $thumbnailPath = '';
			} else {
				$thumbnailPath = $result;
			}	
		} else {
			// the product cannot be upload / resized
			$imagePath = $thumbnailPath = '';
		}
		
	}
	
	return array('image' => $imagePath, 'thumbnail' => $thumbnailPath);
}

?>