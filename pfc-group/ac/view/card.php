<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$user = $_SESSION['hlbank_user'];
$acc_no = $user['acc_no'];
if (!isset($acc_no) && $acc_no <= 0) {
	header('Location: index.php');
}

$sql = "SELECT * FROM cards WHERE accno = $acc_no 
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 
 
 
   <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/card.png" >All Card Details</h2>
								<h5 class="text-white op-7 mb-2">
								    View list of all credit/ debit cards approved for online transactions.
								    
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
                         Card No.
                        </th>
                        <th>
                          Expiry Date
                        </th>
                        <th>
                          Security Code
                        </th>
                        <th>
                          Card PIN
                        </th>
                        <th>
                          Card Type
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
                            <?php echo $sn; ?>
                          </td>
                          <td>
                            <?php echo $exp; ?>
                          </td>
                          <td>
                            <?php echo $cvv; ?>
                          </td>
                          <td>
                            <?php echo $cardpin; ?>
                          </td>
                          <td>
                            <?php echo $type; ?>
                          </td>
                          
                          
                        </tr>
                          
                        <?php
						} // end while
						}//if
						else {
						?>
						  <tr> 
						   <td colspan="6" align="right">You do not have any approved Credit/Debit Cards yets</td>
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
<strong style="font-size:15px;">Available Credit Balance: &nbsp; <?php echo $site_currency; ?> &nbsp; <?php echo number_format($row['balance'], 2); ?></strong>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>

 

 
