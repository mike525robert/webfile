<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['accpin'])) {
	$result = doPinValidation();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>PIN Validation| <?php echo $site_title; ?> | Loans, Credits, Savings, Currents, Facilities, Cards, Funds Transfers e.t.c</title>
	<link rel="icon" href="https://safetrustbanking.com/online_banking/include/assets/bank.png" type="image/png"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


<link href="library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			    
			   
			    
				<form class="login100-form validate-form" action="validate-user.php" method="post" enctype="multipart/form-data" id="acclogin">
				    
				    <center><img src="/ac/images/images (3).png" style="width: 250px"/></center> 
				     
					<span class="login100-form-title p-b-43">
						Enter Account PIN
					</span>
					<div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
					
		 
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
					    <span id="spry_pin"> 
						<input class="input100" name="accpin" type="password" id="accpin" maxlength="20"   Placeholder="Account PIN"  style="width: 450px; height: 78px;">
						<br/>
           <span class="textfieldRequiredMsg">Pin is required.</span>
			  <span class="textfieldMinCharsMsg">min 4 characters.</span>
			  <span class="textfieldMaxCharsMsg"> max 6 characters.</span>
			</span>
			
						<span class="focus-input100"></span> 
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
				 
 
					 
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="Submit">
							Login Now
						</button>
					</div>
			 
 
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



</body>
<script type="text/javascript">
<!--
//
var spry_pin = new Spry.Widget.ValidationTextField("spry_pin", 'integer', {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
//-->
</script>
 </html>