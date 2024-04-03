 

<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Acknowledgement</h4>
                  <p class="card-category">Dear <?php echo $_SESSION['hlbank_user']['fname'] ?> <?php echo $_SESSION['hlbank_user']['lname'] ?> &nbsp; &nbsp;&nbsp; Bank A/C No: <?php echo $_SESSION['hlbank_user']['acc_no'] ?>,  
</p>
<br>

<h4 style=" color:white;">Reference Number:  SSIBN37GHSFTSGGS<?php echo $_SESSION['hlbank_user']['acc_no'] ?><?php echo $_SESSION['hlbank_user']['id'] ?></h4>

                </div>
                <div class="card-body">
                 <form action="" method="POST" enctype="multipart/form-data" />
              <p style="text-align:justify; color:black;">
                    We Are Please To Inform You That Your Message Was Sent Successfully Via Our Secured Internal Messaging Channel With End-To-End Encryption. We Will Get In Touch With You
                    Via Your Registered Emaill Address On Our Database</p>
                    <p style="text-align:justify; color:black;">
                    
                    In Addition, We Congratulate You For Choosing Prudent Financial Corporation For Your Online Banking Transactions. Please Do Dot Resend This Email. Resend Only 
                    Accepted After 1 Business Working Day. </p>
                    
                    <br>
                    Regards
                    <br/>
                    <h3 style=" color:green;">Prudent Financial Corporation</h3>
               
                     
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
				<?php
	$my_pic = $_SESSION['hlbank_user']['pics'];
   	$upics = (isset($my_pic) && $my_pic != "") ? $my_pic : "anonymous-user.jpg"; 
   	?>
                  <a href="">
                    <img class="img" src="<?php echo WEB_ROOT; ?>images/thumbnails/<?php echo $upics; ?>" alt="Photo"  height="130px" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Account User</h6>
                  <h4 class="card-title"><?php echo $_SESSION['hlbank_user_name'];  ?></h4>
                  <p class="card-description">
                    Your are welcome to our online banking platform, the most secured Internet banking channel in UK, America, Asia, & Europe
                  </p>
                  <a href="" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>