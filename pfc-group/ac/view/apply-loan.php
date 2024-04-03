  <?php
	 
 
	require('cot-tax-database-connection.php');
	
  ?>

<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/loan.png" >Loan Facility Application</h2>
								<h5 class="text-white op-7 mb-2">
								    in need of facility? kindly complete the form below, approval take 1-2 business working days
								    
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
                 <form id="" class="form-quote" action="send_mail_form.php" method="post">
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="accno" type="text" placeholder="Account Number *" class="form-control required" required >
									</div>
									<div class="form-field col-md-6">
										<input name="amt" type="text" placeholder="Enter Loan Amount e.g 10,000 *" class="form-control" required >
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="email" type="email" placeholder="Email *" class="form-control required email" required >
									</div>
									<div class="form-field col-md-6">
										<input name="dura" type="text" placeholder="Duration of Loan (E.g 12 Months) *" class="form-control required" required >
									</div>
								</div>
							
								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="body" placeholder="Enter Full Loan Details *" class="txtarea form-control required" required ></textarea>
									</div>
								</div>
								
								<button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
								<div class="form-results"></div>
							</form>
                </div>
              </div>
            </div>
           
          </div>
        </div>