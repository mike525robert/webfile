<?php 
$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';
$msgMessage = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '&nbsp;';
?>
 
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<span id="errorCls" style="color:#FF0000 !important;"><?php echo $errorMessage; ?></span>
<span style="color:#99FF00 !important;font-size:14px;"><?php echo $msgMessage; ?></span>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2025 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = seconds + "seconds ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
  

<style>
#demo{
  text-align: center;
  color:brown;
  font-size: 24px;
  font-weight:700;
}
</style>



 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/bank.png" width="70" >Transaction Authorization Code</h2>
							 
							</div>
						 
						</div>
					</div>
				</div>	 
  
  
  
  
 
              <div class="card">
                <div class="card-header card-header-primary">
                   
                  <p class="card-category">
                The token code has been sent to your email : <span style="color:green;font-weight:bold;"><?php echo $_SESSION['hlbank_user']['email']; ?></span>
You have  <div id="demo"></div>  remaining to insert valid OTP. System will automatically redirect to 'Fund Transfer' page to initiate the full fund transfer again.
 
    <p style="text-align:justify; color:white;">Please contact customer's service via support@pfc-group.org for asistance</p>
     
                  </p>
                </div>
                <div class="card-body">
                <form action="<?php echo WEB_ROOT; ?>view/process.php?action=token" method="post">
                   
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label></label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <span id="sprytf_token">
                            <input type="text" class="form-control" rows="5" name="token" id="token" placeholder="Enter Transaction Authorization Code" required=""/>
                               <br/>
            <span class="textfieldRequiredMsg">Transaction Authorization Code is required.</span>
			<span class="textfieldInvalidFormatMsg">Transaction Authorization Code must be Integer.</span>
			<span class="textfieldMinCharsMsg">Transaction Authorization Code must specify at least 6 characters.</span>
			<span class="textfieldMaxCharsMsg">Transaction Authorization Code must specify at max 8 characters.</span>
		</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submitButton"  id="submitButton" class="btn btn-primary pull-right">Validate OTP</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          

 
  
<script type="text/javascript">
<!--
var sprytf_token = new Spry.Widget.ValidationTextField("sprytf_token", 'integer', {minChars:6, maxChars: 8, validateOn:["blur", "change"]});
//-->
</script>
<script src="<?php echo WEB_ROOT; ?>library/jquery.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>library/jquery.plugin.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>library/jquery.countdown.min.js"></script>
<script>
$(document).ready(function(){ 
	function timerdone(){
		var webRoot = '<?php echo WEB_ROOT; ?>'+'view/?v=Transfer';
		window.location.href = webRoot;
    }
    $('#defaultCountdown').countdown({
    	until: +180, 
        compact: true,
        onExpiry: timerdone,
        format: 'MS'
	});
})
</script>
<style>
#defaultCountdown {font-family:Verdana;font-size:18px;padding:0 5px ;color:white;border:1px solid #993300;background-color:brown;}
</style>
