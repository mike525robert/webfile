<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Home - <?php echo $site_title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo WEB_ROOT; ?>include/assets/bank.png" type="image/png"/>

	<!-- Fonts and icons -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/webfont/webfont.min.js"></script>
	 <script type= "text/javascript" src="<?php echo WEB_ROOT; ?>include/assets/js/countries.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo WEB_ROOT; ?>include/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>include/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>include/assets/css/atlantis.min.css">

	 <link href="<?php echo WEB_ROOT; ?>library/spry/tabbedpanels/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/tabbedpanels/SpryTabbedPanels.js" type="text/javascript"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="" class="logo">
					<img src="<?php echo WEB_ROOT; ?>/images/STB1.png" alt="navbar brand" class="navbar-brand">
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
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
			 
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">2</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 2 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														your <?php echo $site_title; ?> account has been successfully setup for transactions
													</span>
													<span class="time">3 minutes ago</span> 
												</div>
											</a>
 
									 
										</div>
										
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														<strong style="color: red;">Note from Customer Service:</strong> <?php echo $_SESSION['hlbank_user']['msg'] ?>
													</span>
													<span class="time">27 Mintues ago</span> 
												</div>
											</a>
 
									 
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
				 
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
								    									    					    <?php
	$my_pic = $_SESSION['hlbank_user']['pics'];
   	$upics = (isset($my_pic) && $my_pic != "") ? $my_pic : "anonymous-user.jpg"; 
   	?>
									<img src="<?php echo WEB_ROOT; ?>images/thumbnails/<?php echo $upics; ?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
										    					    <?php
	$my_pic = $_SESSION['hlbank_user']['pics'];
   	$upics = (isset($my_pic) && $my_pic != "") ? $my_pic : "anonymous-user.jpg"; 
   	?>
											<div class="avatar-lg"><img src="<?php echo WEB_ROOT; ?>images/thumbnails/<?php echo $upics; ?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo $_SESSION['hlbank_user_name'];  ?></h4>
												<p class="text-muted"><?php echo $_SESSION['hlbank_user']['email']; ?></p><a href="<?php echo WEB_ROOT; ?>view/?v=Account" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?php echo WEB_ROOT; ?>view/?v=Account">My Profile</a>
										<a class="dropdown-item" href="<?php echo WEB_ROOT; ?>view/?v=ChangePwd">Change Password</a>
										<a class="dropdown-item" href="<?php echo WEB_ROOT; ?>view/?v=ChangePin">Change PIN</a> 
										<a class="dropdown-item" href="<?php echo WEB_ROOT; ?>?logout">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
			 
					<ul class="nav nav-primary">
                                             <!------Side Bar----------->
                                            	   <?php include('menu.php'); ?>
                                            	   
                                            	   <!------Side Bar----------->
						 
					</ul>
				</div>
		</div>
		
		<!-- End Sidebar -->

		<div class="main-panel">
	     
	     <div class="content">
			
			    
			   
			                            <!-- Content Here -->
															<?php
														require_once $content;	 
														?>
													
	 
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
	<!--   Core JS Files   -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/core/popper.min.js"></script>
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/datatables/datatables.min.js"></script>

	

	<!-- jQuery Vector Maps -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/setting-demo.js"></script>
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:80,
			maxValue:100,
			width:7,
			text: 18,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>