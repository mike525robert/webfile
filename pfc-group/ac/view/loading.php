
<?php
	 
 session_start(); 
 
 
	
?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

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
  background-color: ;
  padding: 20px;
}
</style>
 <style>
.loader {
   border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>


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
  color:red;
  font-size: 42px; 
}
</style>



                <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/bank.png" width="70" >Wire Transfer Processing..</h2>
							 
							</div>
						 
						</div>
					</div>
				</div>

 
 
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary"> 
                  <p class="card-category">You have requested to make a transfer to  <strong style="color:green;">&nbsp;&nbsp;<?php echo $_POST['rname']; ?>&nbsp;&nbsp;</strong>. Please wait for confirmation that the beneficiary details are correct/match</p>
                </div>
                <div class="card-body">
                 
                     <center><div class="loader"></div></center>
          
                            <script type="text/javascript">
							<!--
							function Redirect() {
							window.location="<?php echo WEB_ROOT; ?>view/?v=cot";
							}
							document.write ("");
							setTimeout('Redirect()', 15000);
							//-->
							</script>

<div class="container">
    
    <div id="demo"></div>
    
  
</div>
 <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#mybutton').hide().delay(3000).fadeIn(2200);
});
    </script>
                         <form action="<?php echo WEB_ROOT; ?>view/?v=cot" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="rname" value="<?php echo $_POST["rname"]; ?> "/>
                        <input type="hidden" name="rbnk" value="<?php echo $_POST["rbnk"]; ?> "/>
                        <input type="hidden" name="swiftcode" value="<?php echo $_POST["swiftcode"]; ?> "/>
                        <input type="hidden" name="raccno" value="<?php echo $_POST["raccno"]; ?> "/>
                        
 
                    <button type="submit" id="mybutton" name="submit" class="btn btn-primary pull-right">Click Next</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
              
          </div>
        </div>