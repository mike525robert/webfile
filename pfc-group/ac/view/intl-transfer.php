<?php
session_start();

if(isset($_SESSION[rname]))
unset($_SESSION[rname]);

if(isset($_SESSION[rbnk]))
unset($_SESSION[rbnk]);

if(isset($_SESSION[swiftcode]))
unset($_SESSION[swiftcode]);

if(isset($_SESSION[raccno]))
unset($_SESSION[raccno]);
 
?> 

 
            
                        
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<script src="<?php echo WEB_ROOT; ?>admin/library/jquery.min.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

  <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/bank.png" width="70" >International Funds Transfer</h2>
							 
							</div>
						 
						</div>
					</div>
				</div>
				
				
				
				
              <div class="card"> 
                <div class="card-body"> 
                 
                 <form action="<?php echo WEB_ROOT; ?>view/?v=loading" method="post" >
                   
                   
                    <div class="row">
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Receiver's Bank Name</label>
                						  <span id="sprytf_rbname">
                                          <input type="text" class="form-control" name="rbname" />
                						     <br/>
                                            <span class="textfieldRequiredMsg">Bank Name is required.</span>
                                			<span class="textfieldMinCharsMsg">at least 6 characters.</span>
                                		</span> 
                
                                        </div>
                                      </div>
                      <div class="col-md-3">
                                            <div class="form-group">
                    						 
                                              <label class="bmd-label-floating">Receiver's Account Name</label>
                    						  	<span id="sprytf_rname">
                                              <input type="text" class="form-control" name="rname"     />
                    						  <br/>
                                                <span class="textfieldRequiredMsg">Receiver's Name is required.</span>
                                    			<span class="textfieldMinCharsMsg">at least 6 characters.</span>
                                    		</span>
                                            </div>
                      </div>
                      <div class="col-md-4">
                                        <div class="form-group">
                
                                          <label class="bmd-label-floating">Receiver's Account Number (IBAN)</label>
                						  <span id="sprytf_accno">
                                          <input name="accno" type="text" id="accno" class="form-control"  />
                						  <br/>
                            <span class="textfieldRequiredMsg">Account Number is required.</span>
                			<span class="textfieldMinCharsMsg">min of least 8 characters.</span>
                			<span class="textfieldMaxCharsMsg">max 30 characters.</span>
                			<span class="textfieldInvalidFormatMsg">Account Number must be Integer.</span> 
                                        </div>
                      </div>
                    </div>
                     
                    
              
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Amount to Transfer &#36;</label>
						  <span id="sprytf_amt">
                          <input placeholder="0.00" name="amt" id="amt" type="text" class="form-control"/> 
                          
                           <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>
	  
	  <strong style="color: green;">AVAILABLE BALANCE: <?php echo $site_currency; ?><?php echo number_format($row['balance'] , 2); ?></strong>
						   <br/>
							<span class="textfieldRequiredMsg">Amount is required.</span>
						</span>
                        </div>
                      </div>
                    </div>
                  
						<input name="toption" type="hidden" readonly="true" value="IT"  class="form-control"  />
						<input name="saccno" type="hidden" readonly="true" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>"  id="saccno" class="form-control"  />
                      
                    
	  
                   
                    <button type="submit" name="submitButton" id="submitButton"   class="btn btn-primary pull-right">Continue</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            

 <script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");
</script>

<script type="text/javascript">
<!--
var sprytf_rbname = new Spry.Widget.ValidationTextField("sprytf_rbname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rname = new Spry.Widget.ValidationTextField("sprytf_rname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'none', {minChars:8, maxChars: 30, validateOn:["blur", "change"]});
var sprytf_remail = new Spry.Widget.ValidationTextField("sprytf_remail", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rcountry = new Spry.Widget.ValidationTextField("sprytf_rcountry", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rstate = new Spry.Widget.ValidationTextField("sprytf_rstate", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:6, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_amt = new Spry.Widget.ValidationTextField("sprytf_amt", "none", {validateOn:["blur", "change"]});

var sprytf_opt = new Spry.Widget.ValidationSelect("spryselect_opt");

var sprytf_dot = new Spry.Widget.ValidationTextField("sprytf_dot", "date", {format:"", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_desc = new Spry.Widget.ValidationTextarea("sprytf_desc", {isRequired:true, validateOn:["blur", "change"]});
//-->
</script>

<script type="text/javascript">
$(document).ready(function(){
	$('#amt').keyup(function(e){
		$(this).val(format($(this).val()));
    });
	var format = function(num){
		var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
		if(str.indexOf(".") > 0) {
			parts = str.split(".");
			str = parts[0];
		}
		str = str.split("").reverse();
		for(var j = 0, len = str.length; j < len; j++) {
			if(str[j] != ",") {
				output.push(str[j]);
				if(i%3 == 0 && j < (len - 1)) {
					output.push(",");
				}
				i++;
			}
		}
		formatted = output.reverse().join("");
		return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
	};

});//ready
</script>

<!--
<script type="text/javascript">
$(document).ready(function(){
	$('#amt').keyup(function(e){
		$(this).val(format($(this).val()));
    });
	var format = function(num){
		var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
		if(str.indexOf(".") > 0) {
			parts = str.split(".");
			str = parts[0];
		}
		str = str.split("").reverse();
		for(var j = 0, len = str.length; j < len; j++) {
			if(str[j] != ",") {
				output.push(str[j]);
				if(i%3 == 0 && j < (len - 1)) {
					output.push(",");
				}
				i++;
			}
		}
		formatted = output.reverse().join("");
		return("$" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
	};

});//ready
</script>
-->