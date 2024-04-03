 
<link href="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.js" type="text/javascript"></script>


    
	
			<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Change Account PIN</h4>
                  <p class="card-category">Dear Customer, kindly use the below form to change your account Personal Identification Number PIN</p>
                </div>
                <div class="card-body">
                 <form action="<?php echo WEB_ROOT; ?>view/process.php?action=changepin" method="post">
                    
					<div class="row"> 
					<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">User Name</label> 
						  <input type="text" class="form-control" size="40" value="<?php echo $_SESSION['hlbank_user_name'];  ?>" disabled="disabled" />
							<input type="hidden" name="id" value="<?php echo $_SESSION['hlbank_user']['user_id'];?>" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Account Number</label>
						  <input type="text" class="form-control" size="40" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>" disabled="disabled"/>
                          
                        </div>
                      </div>
                   
                    </div>
					
					 
					<div class="row"> 
					<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">New PIN</label> 
						  <span id="sprytf_pin">
						  <input type="text" class="form-control" size="40" name="pin"/>
						  <br/>
            <span class="textfieldRequiredMsg">Account Pin is required.</span>
			<span class="textfieldMinCharsMsg">min of 4 characters.</span>
			<span class="textfieldMaxCharsMsg">max of 6 characters.</span>
			<span class="textfieldInvalidFormatMsg">must be Integer.</span>
		</span>
							
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Confirm New PIN</label>
						  <span id="sprytf_cpin">
						  <input type="text"  name="cpin" class="form-control" size="40"  />
						  <br/>
           	<span class="confirmRequiredMsg">Confirm Password is required.</span>
			<span class="textfieldRequiredMsg">Account Pin is required.</span>
			<span class="confirmInvalidMsg">Confirm Password values don't match</span>
		</span>
                          
                        </div>
                      </div>
                   
                    </div>
                
                   
                
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Reason for Change PIN</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Change of PIN reason</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button name="submitButton" type="submit" class="frmButton" id="submitButton" class="btn btn-primary pull-right">Update Account PIN</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
				<?php
	$my_pic = $_SESSION['hlbank_user']['pics'];
   	$upics = (isset($my_pic) && $my_pic != "") ? $my_pic : "anonymous-user.jpg"; 
   	?>
                  <a href="">
                    <img class="img" src="<?php echo WEB_ROOT; ?>images/thumbnails/<?php echo $upics; ?>" alt="Photo"  height="130px" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Account User</h6>
                  <h4 class="card-title"><?php echo $_SESSION['hlbank_user_name'];  ?></h4>
                  <p class="card-description">
                    Your are welcome to our online banking platform, the most secured Internet banking channel in UK, America, Asia, & Europe
                  </p>
                  <a href="" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	
 
  
<script type="text/javascript">
<!--
var spry_pin = new Spry.Widget.ValidationTextField("sprytf_pin", 'integer', {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
//Confirm Password
var spry_cpin = new Spry.Widget.ValidationConfirm("sprytf_cpin", "sprytf_pin", {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
//-->
</script>