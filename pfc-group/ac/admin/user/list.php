<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$sql = "SELECT u.id, u.fname, u.lname, u.bdate, u.is_active, u.email, u.phone, a.acc_no
        FROM tbl_users u, tbl_accounts a
		WHERE u.id = a.user_id
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 

 
 
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title" ><strong>CUSTOMER INFORMATION</strong></h3>
                  <p class="card-category" style="color:green;"> <strong>this menu will allow you to delete customer, suspend customer login, change
                  customer email address. TO CHANGE CUSTOMER EMAIL ADDRESS CLICK ON EMAIL</strong></p>
                </div>
                <div class="card-body">
                  <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  <tr align="center" id="listTableHeader"> 
   <td>USER NAME</td>
   <td>ACCOUNT NUMBER</td>
   <td>EMAIL/MOBILE</td>
   <td width="120">ENROLL DATE</td>
   <td width="80">CUSTOMER STATUS</td>
   <td width="70">DELETE CUSTOMER</td>
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
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $fname .' '.$lname; ?></td>
   <td><?php echo $acc_no; ?></td>
   <td><a  class="btn warning"  href="<?php echo WEB_ROOT; ?>admin/user/?view=email&userId=<?php echo $id; ?>"><?php echo $email; ?></a>&nbsp;/&nbsp;<?php echo $phone; ?></td>
   <td width="120" align="center"><?php echo $bdate; ?></td>
   <td width="80" align="center"><a  class="btn success"  href="javascript:changeUserStatus(<?php echo $id; ?>, '<?php echo $is_active; ?>');"><?php echo $is_active == 'FALSE'? 'Inactive' : 'Active'; ?></td>
   <td width="70" align="center"><a class="btn danger"  href="javascript:deleteUser(<?php echo $id; ?>);">Delete</a></td>
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
</form>
                </div>
              </div>
    
 


 



