	     
	             <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">My Account Dashboard</h2>
								<h5 class="text-white op-7 mb-2">
								    <strong>Welcome: <?php echo $_SESSION['hlbank_user_name'];  ?> / <?php echo $_SESSION['hlbank_user']['empname']; ?>,</strong> 
                            logged  User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?><br />Logged time: <?php echo date("h:i A d M Y"); ?>
								    
								    
								</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="<?php echo WEB_ROOT; ?>view/?v=Statement" class="btn btn-white btn-border btn-round mr-2">E-Statement</a>
								<a href="<?php echo WEB_ROOT; ?>view/?v=start-transfer" class="btn btn-secondary btn-round">Funds Transfer</a>
							</div>
						</div>
					</div>
				</div>
		
	            
	            
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
							    
							     <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>
								<div class="card-body">
									<div class="card-title">Ledger Balance</div>
									<div class="row py-3">
										<div class="col-md-4 d-flex flex-column justify-content-around">
											<div>
												<h6 class="fw-bold text-uppercase text-success op-8">Credit</h6>
												<h3 class="fw-bold"><?php echo $site_currency; ?><?php echo number_format($row['balance'] , 2); ?></h3>
											</div>
											<div>
											
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title"></h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									<p class="card-category">
									 <?php echo $site_title; ?>. All Rights Reserved </p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="table-responsive table-hover table-sales">
												
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				 
				 
				</div>
				
				</div>
				
				
				
			
	