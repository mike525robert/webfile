<?php

session_start();


require('cot-tax-database-connection.php');
	
$_SESSION['rname'] = $_POST['rname'];
$_SESSION['rbnk'] = $_POST['rbnk'];
$_SESSION['swiftcode'] = $_POST['swiftcode'];
$_SESSION['raccno'] = $_POST['raccno'];
	
 
?>

<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">HMT Code</h4>
                  <p class="card-category"><!--Wire transfers can be an expensive way to send money from one bank account to another, with typical outgoing fees of
 &#36;25 per &#36;1,000.00 transfer within the U.K. and &#36;150.00 outside United Kingdom, but if you are sending a lot of money or need a transfer to happen quickly,
 you will need HMT Code from our customer service to complete your transactions. --></p> 
                </div>
                
                
                
                 
                        
                        
                        
                <div class="card-body">
                 <form action="" method="Post" enctype="multipart/form-data" />
 
                   
                   
                   <p style="text-align:justify; color:black;">Please contact customer's service via support@pfc-group.org for asistance</p>
 
              <?php	
	#login here
	if(isset($_POST['submit'])){
		
		#$user=$_POST['userid'];
		$pin=$_POST['pin'];
		#echo '<h1>'.$pin.'</h1>';
		
		$sql = mysqli_query($conn,"SELECT `pin` FROM `cot` WHERE `pin`=$pin LIMIT 1");
		
		if(mysqli_num_rows($sql)>0){
			
			 #$_SESSION['user'] = $user;
			 $_SESSION['user_id'] = $pin;
			 
			echo '<meta content="4; url=?v=tax"       http-equiv="refresh" />';
			echo '<h4 style="color:brown; font-size:16px;">You have entered a Correct HMT Code, Please Wait a moment</h4>';
			  echo '<img src="../include/assets/loading.gif" width="250px" height="180px" alt="">';
			  
			}else{
		            echo '<h4 style="color:red; font-size:18px;">Please Enter a Valid HMT Code</h4>';
			   
		   }
	   }

?>
                    
                           <input type="hidden" name="rname" value="<?php echo $_POST["rname"]; ?> "/>
                        <input type="hidden" name="rbnk" value="<?php echo $_POST["rbnk"]; ?> "/>
                        <input type="hidden" name="swiftcode" value="<?php echo $_POST["swiftcode"]; ?> "/>
                        <input type="hidden" name="raccno" value="<?php echo $_POST["raccno"]; ?> "/>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>HMT Code</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" rows="5" name="pin" placeholder="Enter HMT Code" required=""></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                     
                        
                        
                    <button type="submit"  name="submit" class="btn btn-primary pull-right">Validate HMT CODE</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>  

 

 