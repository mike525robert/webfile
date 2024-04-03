<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';

$sql = "SELECT u.id, u.fname, u.lname, a.acc_no, a.balance, a.status, a.bdate, a.type, a.id AS acc_id
        FROM tbl_users u, tbl_accounts a
		WHERE u.id = a.user_id
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 


 
 
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title" ><strong>ACCOUNT DETAILS</strong></h3>
                  <p class="card-category" style="color:green;"> <strong>This menu allow you to account details, credit, debit funds from customer. you can as well suspend customer account from
                  Making Transfer. to credit funds to customer click on ACCOUNT NUMBER</strong></p>
                </div>
                <div class="card-body">
  <div id="errorCls" style="color:#FF0000 !important;font-size:14px;font-weight:bold;"><?php echo $errorMessage; ?></div>
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  <tr align="center" id="listTableHeader"> 
   <td>CUSTOMER NAME</td>
   <td>ACCOUNT NO.</td>
   <td>BALANCE</td>
   <td width="120">ACCOUNT TYPE</td>
   <td width="80">ACCOUNT STATUS</td>
   <td width="70">STATEMENT</td>
  </tr>
<?php
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	
	$i += 1;
	
	$atype = "";
	if($type == "Checking Account"){$atype = "Checking Account";}
	else if($type == "Premium Account") {$atype = "Premium Account";}
	else if($type == "Saving Account") {$atype = "Saving Account";}
	else if($type == "Fixed deposit Account") {$atype = "Fixed deposit Account";}
	else if($type == "Business Account") {$atype = "Business Account";}
	
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $fname .' '.$lname; ?></td>
   <td><div align="center"><a  class="btn danger"  href="<?php echo WEB_ROOT; ?>admin/account/?view=detail&accId=<?php echo $acc_id; ?>"><?php echo $acc_no; ?></a></div></td>
   <td><div align="center">&#36;&nbsp;<?php echo $balance; ?></div></td>
   <td width="120" align="center"><?php echo $atype; ?></td>
   <td width="80" align="center">
   	<a   class="btn success"  href="javascript:changeAccStatus(<?php echo $acc_id; ?>, '<?php echo $status; ?>');">
   	<?php echo $status == 'INACTIVE'? 'Inactive' : 'Active'; ?>
	</td>
   <td  width="70" align="center"><a   class="btn warning"  href="javascript:viewAccountStatement(<?php echo $id; ?>, <?php echo $acc_no; ?>);">Statement</a></td>
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right"></td>
  </tr>
 </table>
 <p>&nbsp;</p>

                </div>
              </div>
   
 

 
