 	<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/loan.png" >Start Funds Transfer</h2>
								<h5 class="text-white op-7 mb-2">
								    Choose Transfer Option
								    
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
                  <form>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <!-----TO switch to HMT CODE REQUEST change ?v=Transfer   to  ?v=intl-transfer---BELOW -->
                          <a href="<?php echo WEB_ROOT; ?>view/?v=intl-transfer"><img src="<?php echo WEB_ROOT; ?>include/assets/intl.png" title="International Funds Transfer" height="100"/></a>
						  <h3><strong >International Funds Transfer</strong></h3>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <a href="<?php echo WEB_ROOT; ?>view/?v=local-transfer"><img src="<?php echo WEB_ROOT; ?>include/assets/local.png" title="Local Funds Transfer"  height="100" /></a>
						  <h3><strong >Local Funds Transfer</strong></h3>
                        </div>
                      </div>
                    </div>
                     
                <br><hr>
                    <button type="submit" class="btn btn-primary pull-right">Add Beneficiary</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>