<?php
require_once './library/config.php';
require_once './library/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Enrolloment step 1 - <?php echo $site_title; ?></title>
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
						<li class="nav-item active">
							<a href="#" class="collapsed" aria-expanded="false"> 
								<p>&nbsp;&nbsp; Enrollment Step 1</p> 
							</a> 
						</li>
						<li class="nav-section"> 
						</li>
						 
						<li class="nav-item"> <a href="#"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Enrollment Step 2</strong></p> </a> </li>
						<li class="nav-item"> <a href="#"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Enrollment Step 3</strong></p> </a> </li>
						
						<li class="nav-item"> <a href="#"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Enrollment Successful</strong></p> </a> </li>
				 
						
						
						 
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
								<h5 class="text-white op-7 mb-2">Step 1/4</h5>
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
										<h4 class="card-title"><?php echo $site_title; ?>  -  Kindly notify us if you require additional security features (Tokens, OTPs etc)</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div> 
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="table-responsive table-hover table-sales">
												 
												 
												 
												 
												 
												 
												 
												 
												 
		 <section aria-labelledby="intro" role="banner" class="banner full-width html-bnr">
        <div class="section-inner mob-pad-0">
          <div class="banner-wpr">
            <div class="banner-img img-right"></div>
            <div class="banner-text">
              <h1 id="intro" class="h2 text-black">Join Prudent Financial Corporation Today</h1>
              <p>Get more with an <?php echo $site_title; ?> Checking Bank Account.</p>
              <fieldset class="radio-wpr">
                <legend><span class="roboto-medium">Open an Account Today</span></legend>
                <input type="radio" id="small-business-eaccount-1" name="open-account" value="" >
				<label for="small-business-eaccount-1"><?php echo $site_title; ?>   Personal Account Package</label>
<br><hr>
                <input type="radio" id="small-business-account-1" name="open-account" value="">
				<label for="small-business-account-1"><?php echo $site_title; ?>  Business Account Package</label> 
              </fieldset>
		
		
			<button id="btn1" class="btn btn-secondary btn-round" ><a href="enroll-now-step2.php" style="color:white;">Get Started Now</a></button>
			
			
			
		  </div>
          </div>
        </div>
      </section>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
											</div>
										</div>
										<div class="col-md-6">
										 
										</div>
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
 
</body>
</html>