                                                    
     <?php
	 
    session_start();

	error_reporting(0);
	
	require('../admin-config.php');
	
  ?>
                                                    
                                                    

   
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New HMT Codes For My Bank</h4>
                  <p class="card-category">Please Enter Preferred HMT Codes</p>
                </div>
                <div class="card-body">
                   
                   
					
                  <form name="myForm" action="" onsubmit="return validateForm()" method="post">
                   
  <script>
function validateForm() {
  var x = document.forms["myForm"]["type"].value;
  if (x == "") {
    alert("Please Enter HMT CODE in the field");
    return false;
  }
}

function validateForm() {
  var x = document.forms["myForm"]["pin"].value;
  if (x == "") {
    alert("Please Enter 5-10 digits HMT Code");
    return false;
  }
}
</script>
  
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          
                          <input type="text" class="form-control" name="type" id="type"  placeholder="HMT CODE" >
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <input type="text" class="form-control" placeholder="Enter  5-10 digits Code" name="pin" >
                        </div>
                      </div>
                    </div>
                 
                 <img src="<?php echo WEB_ROOT; ?>admin/captcha.png"><input type="button" class="width-65 pull-right btn btn-sm btn-success" >
		 <input type="text"  class="input-block-level" placeholder="Captcha" name="" required >
                    
                        
              <br><br>
                 
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add HMT CODE Now</button>
                    <div class="clearfix"></div>
                  </form>
                   	 
         
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Admin/Owner Of The Site</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    This is Management Panel
                  </p>
                  <a href="" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
 

                                                
                                               <?php
					                                if(isset($_POST['submit'])){
						   
						                            $conn = mysqli_connect($host, $username, $password, $database);
                                                    
                                                    // Check connection
                                                    
                                                    if (!$conn) {
                                                          die("Connection failed: " . mysqli_connect_error());
                                                    }
                                                     
                                                    echo ""; 
                                                    
                                                    $db_select = mysqli_select_db($con, $database);
						   
						                            $pin =$_REQUEST['pin'];
                                                    $type =$_REQUEST['type']; 
                                                    
                                                    $sql = "INSERT INTO `cot` (`id`, `pin`, `type`) VALUES (NULL, '$pin', '$type')";
                                                    
                            						 
                            						   $insert=mysqli_query($conn, $sql);
                            						   
                            						   if($insert){
                            							   echo '<h3>ACCOUNT CREATION WAS SUCCESSFUL!</h3>';
                            							   
                            						   }else{echo '<h3>REGISTRATION HAS FAILED!</h3>';}
                            					   }
                            					?>
							 
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
 
 

