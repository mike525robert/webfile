  <?php
	 
 
	require('cot-tax-database-connection.php');
	
  ?>


<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/support.png" >Customer Service Desk</h2>
								<h5 class="text-white op-7 mb-2">
								   Customer service is the act of taking care of the customer's needs by providing and delivering professional, 
helpful, high quality service and assistance before, during, and after the customer's requirements are met. Customer service is meeting the
needs and desires of any customer, Use our Internal Messaging Application to Contact our customer's service with easy.
								    
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
                 <form action="<?php echo WEB_ROOT; ?>view/process.php?action=support" method="post">
             
                 
                            <input type="hidden" class="form-control"  name="" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>" disabled/> 
                            <input type="hidden" class="form-control"  name="email"  value="<?php echo $_SESSION['hlbank_user']['email']; ?>"/>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" rows="5" name="body" placeholder="Enter Message Details Here" required=""></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary pull-right">Send</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>