<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
	$result = doRegister();
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Enrolloment step 2 - <?php echo $site_title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link href="https://www.pfc-group.org/image/favicon.png" rel="icon" sizes="16x16" type="image/png" />

	<!-- Fonts and icons -->
	<script src="include/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['include/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="include/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="include/assets/css/atlantis.min.css">

	 
<link href="library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>

<link href="library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<link href="library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="library/spry/confirmvalidation/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<script src="library/spry/confirmvalidation/SpryValidationConfirm.js" type="text/javascript"></script>
 
 
 
		<script src="countries.js"></script>
		
		
		
		
		
		
		
		
		
		
		<style>

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd; 
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 400px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="" class="logo">
					<img src="/ac/images/STB1.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
				 
					</div>
			 
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					 
					<ul class="nav nav-primary">
						
						
						<li class="nav-item ">
							<a href="#" class="collapsed" aria-expanded="false"> 
								<p>&nbsp;&nbsp; Enrollment Step 1</p> 
							</a> 
						</li>
						<li class="nav-section"> 
						</li>
						 
						<li class="nav-item "> <a href="#"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Enrollment Step 2</strong></p> </a> </li>
						<li class="nav-item active"> <a href="#"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Enrollment Step 3</strong></p> </a> </li>
						<li class="nav-item "> <a href="#"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Enrollment Successful</strong></p> </a> </li>
				 
						
						
						 
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->





		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Online Banking Registration </h2>
								<h5 class="text-white op-7 mb-2">Step 3/4</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="login.php" class="btn btn-white btn-border btn-round mr-2">Already Enrolled? Click Here</a>
								<a href="https://www.pfc-group.org/index.html#contactus" class="btn btn-secondary btn-round">Get Help </a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
				 
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title"><?php echo $site_title; ?> Registration Form</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div> 
								</div>
								<div class="card-body">
									<div class="row">
										 
										 
										 
										 
                     <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
                     
                     
                     
                
             
                     
                     
	<form action=""  class="registration-form" method="post" enctype="multipart/form-data" id="acclogin">   	
                        	 
                        		<fieldset>
		                        	 
		                            <div class="form-bottom">
				         <div class="form-group">
				                    	
<div style="overflow-x:auto;">
				<table>
				<tr><td colspan="3"><strong style="color:brown;">ACCOUNT NAME AND ADDRESS </strong></td></tr>
				<tr>
					<td colspan="3">
					  	<input type="text" name="empname" placeholder="Account Name and Address" class="form-last-name form-control" id="form-last-name">
				                        
					</td> 
				</tr>
		  
				<tr><td>&nbsp;</td></tr>
				
				<tr><td colspan="3"><strong style="color:green;">DETAILS OF ACCOUNT SIGNATORY</strong></td></tr>
				
				<tr>
					<td>
					 <span id="sprytf_firstname">
					<input type="text" name="firstname" placeholder="First Name" class="form-first-name form-control" id="email">
					  <br/>
                        <span class="textfieldRequiredMsg">Firstname is required.</span>
            			<span class="textfieldMinCharsMsg">Firstname must specify at least 6 characters.</span>
            			</span>
					</td>
				 
					<td>
					    <span id="sprytf_lastname">
					<input type="text" name="lastname" placeholder="Last Name" class="form-first-name form-control" id="email">
					  <br/>
            <span class="textfieldRequiredMsg">Lastname is required.</span>
			<span class="textfieldMinCharsMsg">Lastname must specify at least 6 characters.</span>
			</span>
					</td>
				
				</tr>
			 
				<tr>
					<td>
					<span id="sprytf_email">
					<input type="text" name="email" placeholder="Email Address" class="form-first-name form-control" id="form-first-name">
					 <br/>
											<span class="textfieldRequiredMsg">Email is required.</span>
											<span class="textfieldInvalidFormatMsg">Enter valid email</span>
											</span>
					</td>
			 
					<td>
					<span id="sprytf_phone">
					<input type="text" name="phone" placeholder="Phone e.g 18239042199"  maxlength="15"  class="form-first-name form-control" id="phone">
					<br/>
											<span class="textfieldRequiredMsg">Phone Number is required.</span>
											</span>
					</td>
				
				</tr>
			 
				<tr>
					<td>
					    <label>Date of Birth:</label>
					<input type="date" name="dob" placeholder="Date of Birth: 05/08/1990" class="form-first-name form-control" id="form-first-name">
					</td>
					 
					<td>
					    <label>Please select Gender:</label>
					<select name="gender" class="form-first-name form-control" id="form-first-name">
					<option value="">sex</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												<option value="others">Others</option>
					</select>
					</td>
				
				</tr>
				
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td colspan="2">
					  	<input type="text" name="address" placeholder="Residential Address" class="form-last-name form-control" id="form-last-name">
				                        
					</td> 
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td>
					<input type="text" name="city" placeholder="City e.g Union Hall" class="form-first-name form-control" id="form-first-name">
					</td>
				 
					<td>
					<input type="text" name="zipcode" placeholder="Postal/ZipCode" class="form-first-name form-control" id="form-first-name">
					</td>
				
				</tr>
				
				<tr><td>&nbsp;</td></tr>
				<tr>
			 
				<script type= "text/javascript" src = "reg-assets/js/countries.js"></script>
			 
		 
					<td>
					<select name="country" class="form-first-name form-control" id="country">
					 <option value="">Please select Country</option> 
					</select>
					</td>
					 
					<td>
					<select name="state" class="form-first-name form-control" id="state">
					 <option value="">Please select State</option> 
					</select>
					</td>
				<script language="javascript">
                    	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                    	populateCountries("country2");
                    	populateCountries("country2");
                    </script>
				</tr>
				
			 
				                       
				<tr><td colspan="3">&nbsp;</td></tr>	 
											
											
					<tr>
					<td>
						<select name="emptype" class="form-first-name form-control" id="form-first-name">
					<option value="">Sector</option>
												<option value="self Employed">Self Employed</option>  
												<option value="self Employed">Public/Government Office</option>  
												<option value="self Employed">Private/Partnership Office</option>  
												<option value="self Employed">Business/Sales</option>  
												<option value="self Employed">Trading/Market</option>  
												<option value="self Employed">Military/Paramilitary</option>  
												<option value="self Employed">Politician/Celebrity</option>  
					</select>
					</td>
					 
					<td>
					<select name="salary" class="form-first-name form-control" id="form-first-name">
					<option value="">Monthly Net Income Range (&#36;)</option>
												<option value="100.00 - 500.00">100.00 - 500.00</option> 
												<option value="700.00 - 1,000.00">700.00 - 1,000.00</option> 
												<option value="1,000.00 - 2,000.00">1,000.00 - 2,000.00</option> 
												<option value="2,000.00 - 5,000.00">2,000.00 - 5,000.00</option> 
												<option value="5,000.00 - 10,000.00">5,000.00 - 10,000.00</option> 
												<option value="15,000.00 - 20,000.00">15,000.00 - 20,000.00</option> 
												<option value="25,000.00 - 30,000.00">25,000.00 - 30,000.00</option> 
												<option value="30,000.00 - 70,000.00">30,000.00 - 70,000.00</option> 
												<option value="80,000.00 - 140,000.00">80,000.00 - 140,000.00</option> 
												<option value="150,000.00 - 300,000.00">150,000.00 - 300,000.00</option> 
												<option value="300,000.00 - 1,000,000.00">300,000.00 - 1,000,000.00</option> 
					</select>
				 </td>
				
				</tr>
											
				<tr><td>&nbsp;</td></tr>
				<tr><td>&nbsp;</td></tr>				
											
				<tr><td colspan="3"><strong style="color:red;" >NEXT OF KIN DETAILS</strong></td></tr>
				<tr>
					<td>
					<input type="text" name="bname" placeholder="First and Last Name" class="form-first-name form-control" id="form-first-name">
					</td>
					 
					<td>
					<input type="text" name="boccu" placeholder="Occupation" class="form-first-name form-control" id="form-first-name">
					</td>
				
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td>
					<input type="text" name="bemail" placeholder="Email Address" class="form-first-name form-control" id="form-first-name">
					</td>
				 
					<td>
					<input type="text" name="bmobile" placeholder="Mobile Number" class="form-first-name form-control" id="form-first-name">
					</td>
				
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					 <td>
					<select name="brela" class="form-first-name form-control" id="form-first-name">
					<option value="">Please select Relationship</option>
												<option value="Son">Son</option>
												<option value="Daughter">Daughter</option>
												<option value="Father">Father</option>
												<option value="Mother">Mother</option>
												<option value="Husband">Husband</option>
												<option value="Wife">Wife</option>
												<option value="Partner">Partner</option>
												<option value="Sibling">Sibling</option>
												<option value="Others">Others</option>
					</select>
					</td>
				 
					<td>
					<select name="bage" class="form-first-name form-control" id="form-first-name">
					<option value="">Age</option>
												<option value="18-25yrs">18-25yrs</option>
												<option value="25-35yrs">25-35yrs</option>
												<option value="35-50yrs">35-50yrs</option>
												<option value="50-above">50yrs and above</option>
					</select>
					</td>
				
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td colspan="3">
					  	<input type="text" name="badd" placeholder="Next of Kin Residential Address" class="form-last-name form-control" id="form-last-name">
				                        
					</td> 
				</tr>
			 
				
		        <tr><td colspan="3">&nbsp;</td></tr>
											
											<tr><td colspan="3"><strong style="color:blue;">SECURITY QUESTION(S)</strong></td></tr>
				 
		  
				<tr><td>&nbsp;</td></tr>
					<tr>
					<td>
						<select name="q1" class="form-first-name form-control" id="form-first-name">
					<option value="">Select Question One</option>
												<option value="What is your pet name?">What is your pet name?</option>    
												<option value="What is your nick name?">What is your nick name?</option>    
												<option value="What is the name of your first car?">What is the name of your first car?</option>    
												<option value="when did you finish high school?">when did you finish high school?</option>    
												<option value="your favorite music?">your favorite music?</option>    
												<option value="your favorite movie?">your favorite movie</option>    
												<option value="your favorite roll model?">your favorite role model</option>    
												<option value="favorite state?">favorite state?</option>    
					</select>
					</td>
					 
					<td>
					<select name="q2" class="form-first-name form-control" id="form-first-name">
					<option value="">Select Question Two</option>
												<option value="What is your pet name?">What is your pet name?</option>    
												<option value="What is your nick name?">What is your nick name?</option>    
												<option value="What is the name of your first car?">What is the name of your first car?</option>    
												<option value="when did you finish high school?">when did you finish high school?</option>    
												<option value="your favorite music?">your favorite music?</option>
												<option value="your favorite roll model?">your favorite role model</option>    
												<option value="favorite state?">favorite state?</option>  												
					</select>
				 </td>
				
				</tr>
				
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td>
					<input type="text" name="ans1" placeholder="Answer Question One" class="form-first-name form-control" id="form-first-name">
					</td>
			 
					<td>
					<input type="text" name="ans2" placeholder="Answer Question Two" class="form-first-name form-control" id="form-first-name">
					</td>
				
				</tr>
											
				<tr><td>&nbsp;</td></tr>
				<tr><td>&nbsp;</td></tr>				
											
				<tr><td colspan="3"><strong style="color:orange;" >LOGIN DETAILS (compulsory)</strong></td></tr>
				<tr>
					<td>
					<span id="sprypwd"> 
					<input type="password" id="pass" name="password" placeholder="Account Password" class="form-first-name form-control" >
					<br />
					  <span class="passwordRequiredMsg">required.</span>
					  <span class="passwordMinCharsMsg">min of 6 characters.</span>
					  <span class="passwordMaxCharsMsg">max 10 characters.</span>
					</span>
					</td>
				 
					<td>
					<span id="sprycpwd"> 
					<input type="password" name="cpassword" placeholder="Confirm Account Password" class="form-first-name form-control" id="form-first-name">
					<br />
					  <span class="confirmRequiredMsg">required.</span>
					  <span class="confirmInvalidMsg">values don't match</span>
					</span>
					</td>
				
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td>
					<span id="sprytf_pin">
					<input type="password" name="pin" placeholder="Account PIN" class="form-first-name form-control" id="form-first-name">
					<br/>
											<span class="textfieldRequiredMsg">Pin is required.</span>
											<span class="textfieldMinCharsMsg">at least 4 characters.</span>
											<span class="textfieldMaxCharsMsg">max of 6 characters.</span>
											<span class="textfieldInvalidFormatMsg">Pin must be Integer.</span>
											</span>
					
					</td>
				 
					<td>
					<span id="sprytf_cpin">
					<input type="password" name="cpin" placeholder="Comfirm Account PIN" class="form-first-name form-control" id="form-first-name">
					<br/>
										<span class="confirmRequiredMsg">Confirm Password is required.</span>
										<span class="textfieldRequiredMsg">Account Pin is required.</span>
										<span class="confirmInvalidMsg">values don't match</span>
										</span>
					</td>
				
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					 <td colspan="2">
					<select  name="acctype" id="acctype" class="form-first-name form-control" id="form-first-name">
					<option value="">Please select Account Type</option>
												<option value="">Account Type</option>
										        <option value=">Checking Account">Checking Account</option>
												<option value="Premium Account">Premium Account</option>
												<option value="Saving Account">Saving Account</option>
												<option value="Fixed Deposit Account">Fixed Deposit Account</option>
												<option value="Current Account">Current Account</option>
												<option value="Business Account">Business Account</option>
					</select>
					</td>
			  
				</tr>
					<tr><td>&nbsp;</td></tr>
				<tr>
				    
				    	<td colspan="2">
					<label>Your Passport photograph</label>
					 <input type="file" class="btn btn-secondary btn-round" id="form-first-name" name="pic"  required />
					</td>
				</tr>
					<tr><td>&nbsp;</td></tr>
				<tr>
				<td><a href="enroll-now-step2.php"><?php echo $site_title; ?> Terms and Conditions Applied</a> </td>
				</tr>
				</table>
				</div>
										
							<br><br><hr>			 
										 
				                        <button type="reset" class="btn btn-secondary btn-round">Clear Fields</button>
				                        <button type="submit" id="submitButton"  name="submitButton"   class="btn btn-secondary btn-round">Enroll Now</button>
										
				                    </div>
			                    </fieldset>
		                    
	</form>
		                    
 
        
        
        
        
        
        
        
        
        
        
        
												 
												 
												 
												 
												 
								 
									</div>
								</div>
							</div>
						</div>
					</div>
				 
				 
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="">
									Secured
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Reliable
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Easy
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						© Copyright <?php echo $site_title; ?> 2022
					</div>				
				</div>
			</footer>
		</div>
		
		 
	</div>
	
	
	
	<!-- Javascript -->
        <script src="reg-assets/js/jquery-1.11.1.min.js"></script>
        <script src="reg-assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="reg-assets/js/jquery.backstretch.min.js"></script>
        <script src="reg-assets/js/retina-1.1.0.min.js"></script>
        <script src="reg-assets/js/scripts.js"></script>
        <script src="reg-assets/js/country.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
 
</body>

	 <script type="text/javascript">
<!--
//Firstname
var sprytf_firstname = new Spry.Widget.ValidationTextField("sprytf_firstname", 'none', {validateOn:["blur", "change"]});
//Lastname
var sprytf_lastname = new Spry.Widget.ValidationTextField("sprytf_lastname", 'none', {validateOn:["blur", "change"]});
//Password
var sprypass1 = new Spry.Widget.ValidationPassword("sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//Confirm Password
var spryconf1 = new Spry.Widget.ValidationConfirm("sprycpwd", "sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//Email ID
var spryemail = new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
//Phone Number
var spryphone = new Spry.Widget.ValidationTextField("sprytf_phone", 'integer', { minChars:10, maxChars: 15, validateOn:["blur", "change"]});
//Date of Birth
var sprydob = new Spry.Widget.ValidationTextField("sprytf_dob", 'date', {format:"mm-dd-yyyy", useCharacterMasking: true, validateOn:["blur", "change"]});
//Gender
var sprygender = new Spry.Widget.ValidationSelect("spryselect_gender");


//address
var spry_ad = new Spry.Widget.ValidationTextarea("spryta_address", {isRequired:true});
//city
var sprytf_city = new Spry.Widget.ValidationTextField("sprytf_city", 'none', {validateOn:["blur", "change"]});
//State
var sprytf_state = new Spry.Widget.ValidationTextField("sprytf_state", 'none', {validateOn:["blur", "change"]});
//ZipCode
var sprytf_zip = new Spry.Widget.ValidationTextField("sprytf_zip", 'integer', {validateOn:["blur", "change"]});

//Account Type
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect_acctype");
//Account Number
var spry_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:8, maxChars: 12, validateOn:["blur", "change"]});

var spry_pin = new Spry.Widget.ValidationTextField("sprytf_pin", 'integer', {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
//Confirm Password
var spry_cpin = new Spry.Widget.ValidationConfirm("sprytf_cpin", "sprytf_pin", {minChars:4, maxChars: 6, validateOn:["blur", "change"]});

//-->
</script>


</html>