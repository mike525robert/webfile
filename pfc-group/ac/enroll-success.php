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
 
		<script src="countries.js"></script>
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
								<p>Enrollment Step 1</p> 
							</a> 
						</li>
						<li class="nav-section"> 
						</li>
						 
						<li class="nav-item "> <a href="#"> <p > <strong>Enrollment Step 2</strong></p> </a> </li>
						<li class="nav-item "> <a href="#"> <p > <strong>Enrollment Step 3</strong></p> </a> </li>
						
							<li class="nav-item active"> <a href="#"> <p style="color:brown;"> <strong>Enrollment Successful</strong></p> </a> </li>
				 
						
						
						 
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
								<h2 class="text-white pb-2 fw-bold">Acknowledgment Successful</h2>
								<h5 class="text-white op-7 mb-2">Step 4/4</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="https://www.pfc-group.org/index.html#contactus" class="btn btn-white btn-border btn-round mr-2">Get Help</a>
								<a href="login.php" class="btn btn-secondary btn-round">Login</a>
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
										<h4 class="card-title"><?php echo $site_title; ?> Acknowledgement</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div> 
								</div>
								<div class="card-body">
									<div class="row">
										 
										 
							

 

                                            <h2>Congratulations</h2> 
                                            
                                            
                                            
                    		  
                                            <table>
                                                
                                                <tr>
                                                    
                                                    <td colspan="2">
                                                        
                                         <p>Dear <strong style="color:green;">Customer,</strong> Please wait for Premium Support to validate your account, 
                                         before attempting to login to your account.</p>
                    		  <p>This Process can take <strong style="color:green;">1-3 hours</strong>, once your account is validated, you will be notified through your registered email address</p>
                    		  <p>Details of the Registration has been sent to your email address including the <strong style="color:orange;"><?php echo $site_title; ?> 10 Digit Account </strong>
                    		  Number and other information</p>                 
                                                        
                                                    </td>
                                                </tr>
                                                
                                             <tr>
                                                 <th>Account Status</th>
                                                 <th><strong style="color:red;">Inactive</strong></th>
                                             </tr>
                                             
                                             
                                             <tr><td colspan="2">kindly check your mail for further information</td></tr>
                                             
                                             
                                             
                                             <tr>
                                                 <td colspan="2">
                                                     
                                                      <p>Regards,</p>
            				 
            				 <p><strong>Premium Creation </strong> </p>
            				 <p>From <?php echo $site_title; ?></p>
                                                 </td>
                                             </tr>
                                            </table>

							
							
				  
            				
            								
        
        
        
        
        
        
        
        
        
        
        
												 
												 
												 
												 
												 
								 
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
 


</html>