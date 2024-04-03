<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['accno']) && isset($_POST['pass'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login| <?php echo $site_title; ?> | Loans, Credits, Savings, Currents, Facilities, Cards, Funds Transfers e.t.c</title>
	<link rel="icon" href="/online_banking/include/assets/bank.png" type="image/png"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/online_banking/include/assets/bank.png"/>
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
			    
			   
			    
				<form class="login100-form validate-form" action="#" method="post" enctype="multipart/form-data" id="acclogin">
				    
				    <center>	<a href="../index.html"><img src="images/images (3).png" style="width: 250px"/></a></center> 
				     
					<span class="login100-form-title p-b-43" style="color:orange;">
						Restricted Area, Customer Access
					</span>
					<div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid Account Number">
					    <span id="sprytextfield1" style="text-align:left;">
						<input class="input100" type="text"  Placeholder=" <?php echo $site_initial; ?> Account Number" name="accno" id="accno" style="width: 450px; height: 78px;">
						 <br/>
            <span class="textfieldRequiredMsg">Account Number is required.</span>
			<span class="textfieldInvalidFormatMsg">Invalid Account Number.</span>
			</span>
						<span class="focus-input100"></span> 
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
					    <span id="sprypassword1" style="text-align:left;"> 
						<input class="input100" type="password"name="pass"  id="pass"   Placeholder=" <?php echo $site_initial; ?> Account Password"  style="width: 450px; height: 78px;">
						 <br />
              <span class="passwordRequiredMsg">Password is required.</span>
			  <span class="passwordMinCharsMsg">min of 6 characters.</span>
			  <span class="passwordMaxCharsMsg">max of 10 characters.</span>
			</span>
			
			
						<span class="focus-input100"></span> 
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
				 
<br><hr>
						<div>
							<a href="enroll-now-step1.php" class="txt1">
							New Customer? Enroll Here
							</a>
							&nbsp;&nbsp;&nbsp;
							<a href="../index.html" class="txt1">
							BACK TO HOME
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="Submit">
							Continue
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

<script>
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {validateOn:["blur", "change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//-->
</script>
</html>