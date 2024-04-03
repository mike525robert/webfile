                <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>../ac/images/thumbnails/<?php echo $upics; ?>" style="float:right;" width="180"  /> Customer's Information</h2>
								<h5 class="text-white op-7 mb-2">
								    Complete Customer's profile, Employer Information, Next of Kin and Security Details
								    
								</h5>
							</div>
						 
						</div>
					</div>
				</div>
				
	 
              <div class="card"> 
                <div class="card-body">
                  <form>
                      <h3 style="font-weight:700; color:blue;">Account Information</h3>
                        
                           <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name & Address</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['empname']; ?>" disabled="disabled" > 
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                          <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Signatory Name</label>
                          <input type="text"  value="<?php echo $_SESSION['hlbank_user_name'];  ?>" class="form-control" disabled >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date of Birth</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['dob']; ?>" disabled>
                        </div>
                      </div> 
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email Address</label>
                          <input type="email" value="<?php echo $_SESSION['hlbank_user']['email']; ?>" disabled="disabled" class="form-control">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                          <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile number</label>
                          <input type="text"  value="<?php echo $_SESSION['hlbank_user']['phone']; ?>" class="form-control" disabled >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal/ZipCode</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['zipcode']; ?>" disabled>
                        </div>
                      </div> 
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="email" value="<?php echo $_SESSION['hlbank_user']['country']; ?>" disabled="disabled" class="form-control">
                        </div>
                      </div>
                    </div>
                     
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Residential Address</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['address']; ?>" disabled="disabled" > 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City/State</label>
                          <input type="text" class="form-control"  value="<?php echo $_SESSION['hlbank_user']['city']. ', '.$_SESSION['hlbank_user']['state'] ?>" disabled="disabled">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Account Number</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>" disabled="disabled">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Account Balance</label>
						   <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>
                          <input type="text" class="form-control" value="&#36;<?php echo number_format($row['balance']); ?>" disabled="disabled">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                         
                          <hr>
                          
                        
                        <div class="row">
                                  <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Eligible Loan State</label>
                                  <input type="text"  value="Active" class="form-control" disabled >
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Nature of Employment</label>
                                  <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['emptype']; ?>" disabled>
                                </div>
                              </div> 
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Estimated Salary Range (&#36;)</label>
                                  <input type="email" value="<?php echo $_SESSION['hlbank_user']['salary']; ?>" disabled="disabled" class="form-control">
                                </div>
                              </div>
                    </div>
                    
                    
                    
                    
                    <hr>
                    <h3 style="font-weight:700; color:brown;">Registered Next of Kin </h3>
                        
                   
                        
                        <div class="row">
                                  <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Beneficiary Name</label>
                                  <input type="text"  value="<?php echo $_SESSION['hlbank_user']['bname']; ?>" class="form-control" disabled >
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Occupation</label>
                                  <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['boccu']; ?>" disabled>
                                </div>
                              </div> 
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Beneficiary Email</label>
                                  <input type="email" value="<?php echo $_SESSION['hlbank_user']['bemail']; ?>" disabled="disabled" class="form-control">
                                </div>
                              </div>
                        </div>
                        
                         <div class="row">
                                  <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Beneficiary Mobile</label>
                                  <input type="text"  value="<?php echo $_SESSION['hlbank_user']['bmobile']; ?>" class="form-control" disabled >
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Relationship</label>
                                  <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['brela']; ?>" disabled>
                                </div>
                              </div> 
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Beneficiary Age Bracket</label>
                                  <input type="email" value="<?php echo $_SESSION['hlbank_user']['bage']; ?>" disabled="disabled" class="form-control">
                                </div>
                              </div>
                        </div>
                    
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Residential Address of Next of Kin</label>
                                  <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['badd']; ?>" disabled="disabled" > 
                                </div>
                              </div>
                            </div>
                            
                            
                            
                            <hr>
                            
                            <h3 style="font-weight:700; color:green;">Security Details</h3>
                        
                   
                        
                        <div class="row">
                                  <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Security Question One</label>
                                  <input type="text"  style="width:400px;" value="<?php echo $_SESSION['hlbank_user']['q1']; ?>" class="form-control" disabled >
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Answer One</label>
                                  <input type="text" style="width:500px;" class="form-control" value="<?php echo $_SESSION['hlbank_user']['ans1']; ?>" disabled>
                                </div>
                              </div>  
                        </div>
                         <div class="row">
                                  <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Security Question Two</label>
                                  <input type="text" style="width:400px;"  value="<?php echo $_SESSION['hlbank_user']['q2']; ?>" class="form-control" disabled >
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Answer Two</label>
                                  <input type="text" style="width:500px;" class="form-control" value="<?php echo $_SESSION['hlbank_user']['ans2']; ?>" disabled>
                                </div>
                              </div>  
                        </div>
                        
                         
                    
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Account PIN</label>
                                  <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['pin']; ?>" disabled="disabled" > 
                                </div>
                              </div>
                            </div>
                    
                     
                    
                    
                        </div>
                      </div>
                    </div>
                    
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
         
 
   

  