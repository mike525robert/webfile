<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Panel | Credit, Loans, Mortage, Insurance and Online Baking
  </title>
 
 <link type="image/x-icon" href="<?php echo WEB_ROOT; ?>include/assets/bank.png" rel="shortcut icon">
 
 
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
   <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>include/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>include/assets/css/atlantis.min.css">

  <!-- Fonts and icons -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo WEB_ROOT; ?>include/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	
<link href="<?php echo WEB_ROOT;?>admin/include/admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<style>
body {background-color:#F8F8F8;}
</style>
<?php
$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'admin/library/' . $script[$i]. '"></script>';
	}
}
?>



<style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>


<style> 

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo WEB_ROOT; ?>include/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          <img src="<?php echo WEB_ROOT; ?>include/assets/bank.png" alt="logo" height="80px" />
        </a>
      </div>
      <div class="sidebar-wrapper">
       
	   <!------Side Bar----------->
	  <ul class="nav">
		
 
	  
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo WEB_ROOT; ?>admin/">
             <i ><img src="<?php echo WEB_ROOT; ?>include/assets/1.png" ></i>
              <p>Main Menu</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo WEB_ROOT; ?>admin/user/">
              <i ><img src="<?php echo WEB_ROOT; ?>include/assets/3.png" ></i>
              <p>Users Information</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo WEB_ROOT; ?>admin/account/">
             <i ><img src="<?php echo WEB_ROOT; ?>include/assets/2.png" ></i>
              <p>Accounts Informations</p>
            </a>
          </li>
          
           <li class="nav-item ">
            <a class="nav-link" href="<?php echo WEB_ROOT; ?>admin/card">
              <i ><img src="<?php echo WEB_ROOT; ?>include/assets/4.png" ></i>
              <p>Credit Cards</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="<?php echo WEB_ROOT; ?>admin/loan/">
              <i ><img src="<?php echo WEB_ROOT; ?>include/assets/5.png" ></i>
              <p>Approve Loans</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="<?php echo WEB_ROOT; ?>admin/cot/">
              <i ><img src="<?php echo WEB_ROOT; ?>include/assets/7.png" ></i>
              <p>HMT Codes Menu</p>
            </a>
          </li>
              
           <li class="nav-item ">
            <a class="nav-link" href="<?php echo WEB_ROOT; ?>admin/tax">
             <i ><img src="<?php echo WEB_ROOT; ?>include/assets/8.png" ></i>
              <p>FVC Codes Menu</p>
            </a>
          </li>
         
           <li class="nav-item ">
            <a class="nav-link" href="<?php echo $self; ?>?logout">
             <i ><img src="<?php echo WEB_ROOT; ?>include/assets/9.png" ></i>
              <p>Logout Here</p>
            </a>
          </li>
  
      
         
  
	   
	   <!------Side Bar----------->
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
								 <h4><strong style="color:brown;">Welcome: Admin Officer, Your Logged IP: <?php echo $_SERVER['REMOTE_ADDR']; ?> &nbsp; &nbsp;  at: <?php echo date("h:i A d M Y"); ?></strong></h4> 
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
           
            <ul class="navbar-nav">
        
             	



              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
				
		
				
				
				
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/user/">Users Information</a>
                  <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/account/">Accounts Details</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo $self; ?>?logout">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
	  
	  
	  
							  <div class="content">
							   
											<!-- Content Here -->
															<?php require_once $content;?>
													
												<!-- Content Here -->	
							  </div>
							  
							  
							  
							  
							  
							  
							  
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right">
           Copyright &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, PQF Online Banking <i class="material-icons"></i> 
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  	<!--   Core JS Files   -->
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/core/popper.min.js"></script>
	<script src="<?php echo WEB_ROOT; ?>include/assets/js/core/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>

 
