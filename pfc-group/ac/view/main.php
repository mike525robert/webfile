 
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 90%;
  border: 1px solid #ddd; 
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>

 
 
 
 
 
 
 
 
 
 
 
 

    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Open Bootstrap Modal on Page Load</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $("#myModal").modal('show');

        });

    </script>

    </head>

    <body>

    <div id="myModal" class="modal fade">
        
        <?php 
	$funds_data = $_SESSION['funds_data'];
	extract($funds_data);
	$acc_type = "";
	if($toption == "DT") { $acc_type = "Domestic Transfer";}
	else {$acc_type = "International Transfer";}
?>

        <div class="modal-dialog">

            <div class="modal-content">

                

                <div class="modal-body">
<p style="text-align:center; color:green;"><img src="<?php echo WEB_ROOT; ?>include/assets/logo-ok-png-2.png" width="100" ></a></p>
                    <h1 style="text-align:center; color:green;"><strong>TRANSACTION SUCCESSFUL</strong></h1>
                    
                    <h1 style="text-align:center; color:orange;"><strong>&#36; <?php echo $amt; ?>.00</strong></h1>
                    
                    <p style="text-align:center;">You have successfully transferred &#36; <?php echo $amt; ?>.00 to <?php echo $acc_no; ?> of  <?php echo $rname; ?> . Transaction Reference Number# <?php echo $_SESSION['funds_data']['tx_no']; ?>STBNK </p>

                    
                    <p style="text-align:center; color:blue;">International transaction initiated successfully, it will take 3-5 working days to credit funds in receivers account.
A detail of this transaction has been recorded in your estatement and email. We recommend you contact the receiver of the fund to await  3-5 working days.</p>

                    
                    
                    
                    <form>

                        <div class="form-group" style="text-align:center;">

                             <button type="submit"  href="<?php echo WEB_ROOT; ?>view/?v=index" class="btn btn-primary">Okay</button>

                        </div>

                        
 

                    </form>

                </div>

            </div>

        </div>

    </div>

    </body>

    </html>


 
 
 
  
 
 
 




 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/bank.png" width="70" >International Transaction Successful</h2>
	 
							</div>
						 
						</div>
					</div>
	</div>	 

 
  





 
<p>Please note we have initiated the international transaction successfully and it will take 3, 4 working days to credit funds in receivers account.</p>
<p>A detail of this transaction has been recorded in your account statement. We recommend you to kindly contact the receiver of the fund to await  3, 4 working days.</p>

<strong style="color:#0000CC;font-size:16px;">Transaction Details</strong><br /><br />
<?php 
	$funds_data = $_SESSION['funds_data'];
	extract($funds_data);
	$acc_type = "";
	if($toption == "DT") { $acc_type = "Domestic Transfer";}
	else {$acc_type = "International Transfer";}
?>
<table  border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
 
	<tr>
    	<td width="260" height="30"><strong>Receviers Country</strong></td>
        <td height="30"><?php echo $rcountry; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Receviers State</strong></td>
        <td height="30"><?php echo $rstate; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Receviers email</strong></td>
        <td height="30"><?php echo $remail; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Receviers Name</strong></td>
        <td height="30"><?php echo $rname; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Receviers Account Number</strong></td>
        <td height="30"><?php echo $acc_no; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Fund Amount ($)</strong></td>
        <td height="30"><?php echo $amt; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Fund Transfer Type</strong></td>
        <td height="30"><?php echo $acc_type; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Transaction Refrence No#</strong></td>
        <td height="30"><?php echo $_SESSION['funds_data']['tx_no']; ?>PFC</td>
	</tr>
</table>
