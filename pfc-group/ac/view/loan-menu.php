 <?php
if (!defined('WEB_ROOT')) {
	exit;
}

$user = $_SESSION['hlbank_user'];
$acc_no = $user['acc_no'];
if (!isset($acc_no) && $acc_no <= 0) {
	header('Location: index.php');
}

$sql = "SELECT * FROM approved_loans WHERE accno = $acc_no 
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 
 
 
 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/loan.png" >Approved Loan Facilities Details on your Account</h2>
								<h5 class="text-white op-7 mb-2">
								    Here is the list of your approved Loans from our Customer's Service
								    
								</h5>
							</div>
						 
						</div>
					</div>
				</div>
				
				
				
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                 
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table"> 
					  <thead class=" text-primary">
                        <th>
                         Reference No
                        </th>
                        <th>
                          Loan Type
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Interest
                        </th>
                        <th>
                          Duration
                        </th>
                         <th>
                          Monthly Returns
                        </th>
                          <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        <tr class="<?php echo $class; ?>">
						
						<?php

if(dbAffectedRows($result) > 0) { //if
$i = 0;
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {$class = 'row1';} 
	else {$class = 'row2';}
	$i += 1;
?>
                         <td>
                            <?php echo $ref; ?>
                          </td>
                          <td>
                            <?php echo $type; ?>
                          </td>
                          <td>
                            &#36;<?php echo $amt; ?>.00
                          </td>
                          <td>
                            <?php echo $interest; ?>%
                          </td>
                          <td>
                            <?php echo $dura; ?>Months
                          </td>
                           <td>
                            &#36;<?php echo $mreturn; ?>.00
                          </td>
                          <td>
                            <?php echo $status; ?>
                          </td>
                          
                          
                        </tr>
                          
                        <?php
						} // end while
						}//if
						else {
						?>
						  <tr> 
						   <td colspan="6" align="right">You donot have any approved Loans yet</td>
						  </tr>
						<?php 
						}//else
	$user_id = $_SESSION['hlbank_user']['user_id'];
	$acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	$balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	$result = dbQuery($balance_sql);
	$row = dbFetchAssoc($result);
?>
</table>
<p>&nbsp;</p>
<strong style="font-size:15px;">Available Credit Balance: &nbsp; &#36; &nbsp; <?php echo number_format($row['balance'], 2); ?></strong>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>

 

 
