 	  <?php
	 
 
	require('cot-tax-database-connection.php');
	
  ?>
 	
 
 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/loan.png" >Start Local Funds Transfer</h2>
								<h5 class="text-white op-7 mb-2">
								   Enter Beneficiary Account Details
								    
								</h5>
							</div>
						 
						</div>
					</div>
				</div>
				
				
 	<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
            
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data" />
                   
                   <?php
									if(isset($_POST['check']))
									{
										//Get form data
										$acc_no=$_POST['acc_no'];
										
										$query=mysqli_query($conn,"SELECT * FROM `tbl_accounts` WHERE `acc_no`=$acc_no");
										$row=mysqli_fetch_array($query);
										if($row['acc_no']==$acc_no){
										   
										   
										   echo '<meta content="10; url=?v=local-transfer2"       http-equiv="refresh" />';
                        			echo '<h4 style="color:brown; font-size:14px;">Beneficiary Account Number is valid</h4>';
                        			  echo '<img src="../include/assets/loading.gif" width="150px" height="130px" alt="">';	
										}else{
										   echo "<h4>Invalid Account Number!</h4>"; 
										}
									 }
								
								?>
                   
                    
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <label>Local Transfer</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control" name="acc_no" placeholder="Enter Beneficiary Account Number" required=""/>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <button type="submit"  name="check" class="btn btn-primary pull-right">Validate Account</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>