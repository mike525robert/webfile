<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$user = $_SESSION['hlbank_user'];
$acc_no = $user['acc_no'];
if (!isset($acc_no) && $acc_no <= 0) {
	header('Location: index.php');
}

$sql = "SELECT * FROM tbl_transaction WHERE to_accno = $acc_no 
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 

 
<style>
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: red;
  color: white;
  padding: 5px 8px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block2 {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 5px 8px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

 
</style>

  <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/statement.png" >  My Account Statement</h2>
								<h5 class="text-white op-7 mb-2">
								    Here is the list of your transactions as recored in your account statements
								    
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
                    <table class="table" id="estatement"> 
					  <thead class=" text-primary">
                        <th>
                         DATE
                        </th>
                        <th>
                          REFERENCE NO
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          DEBIT
                        </th>
                        <th>
                          CREDIT
                        </th>
                        <th>
                          STATUS
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
                            <?php echo $tdate; ?>
                          </td>
                          <td>
                            <?php echo $tx_no; ?><?php echo $site_initial; ?>
                          </td>
                          <td>
                            <?php echo $description; ?>
                          </td>
                          <td>
                            <button type="button" class="block">  <?php echo $tx_type == "debit" ? "&#36;&nbsp;" . number_format($amount, 2) : ""; ?></button>
                          </td>
                          <td class="text-primary">
                            <button type="button" class="block2">  <?php echo $tx_type == "credit" ? "&#36;&nbsp;" . number_format($amount, 2) : ""; ?></button>
                          </td>
                          <td><?php echo $status; ?>
                          </td>
                        </tr>
                          
                        <?php
						} // end while
						}//if
						else {
						?>
						  <tr> 
						   <td colspan="6" align="right">You have no transaction history yet, seems that you haven't done any transaction yet.</td>
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

 

 
