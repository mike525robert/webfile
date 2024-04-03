<?php 
$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';
$msgMessage = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '&nbsp;';
?>



<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<script src="<?php echo WEB_ROOT; ?>admin/library/jquery.min.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div id="errorCls" style="color:#FF0000 !important;font-size:14px;font-weight:bold;"><?php echo $errorMessage; ?></div>
<div style="color:#99FF00 !important;font-size:14px;font-weight:bold;"><?php echo $msgMessage; ?></div>



                <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-white pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/bank.png" width="70" >Local Funds Transfer</h2>
							 
							</div>
						 
						</div>
					</div>
				</div>
				
				
				
	 
              <div class="card">
                 
                <div class="card-body">
                  
				  <form action="<?php echo WEB_ROOT; ?>view/process.php?action=transfer" method="post" >
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group"> 
                          <input type="hidden" class="form-control" value="STBANK" name="rbname"/> 
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group"> 
                          <input type="hidden" class="form-control" value="Same Bank"  name="rname" />
		 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">

                          <label class="bmd-label-floating"></label>
						  
                          <input name="" type="hidden" id="accno" class="form-control"/>
						  
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3">
                                            <div class="form-group">
                    						 
                                              <label class="bmd-label-floating">Recipient Bank Name</label>
                    						  	<span id="sprytf_rname">
                                              <input type="text" class="form-control" name=""     />
                    						  <br/>
                                                <span class="textfieldRequiredMsg">Recipient Bank Name is required.</span>
                                    			<span class="textfieldMinCharsMsg">at least 6 characters.</span>
                                    		</span>
                                            </div>
                      </div>
                        
                      <div class="col-md-3">
                        <div class="form-group">
 
                          <label class="bmd-label-floating">Recipient Account Number</label>
						 	  <span id="sprytf_accno">
                          <input type="text" class="form-control" name="accno" type="text" id="accno"/>
						  <br/>
            <span class="textfieldRequiredMsg">Account Number is required.</span>
			<span class="textfieldMinCharsMsg">min of least 10 characters.</span>
			<span class="textfieldMaxCharsMsg">max 15 characters.</span>
			<span class="textfieldInvalidFormatMsg">Account Number must be Integer.</span>
		</span>
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                                            <div class="form-group">
                    						 
                                              <label class="bmd-label-floating">Recipient Sort Code</label>
                    						  	<span id="sprytf_rname">
                                              <input type="text" class="form-control" name=""     />
                    						  <br/>
                                                <span class="textfieldRequiredMsg">Recipient Sort Code is required.</span>
                                    			<span class="textfieldMinCharsMsg">at least 6 characters.</span>
                                    		</span>
                                            </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Sender's Account Number</label>
                          <input name="saccno" type="text" readonly="true" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>"  id="saccno" class="form-control"  />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Amount to Transfer &#36;</label>
						  <span id="sprytf_amt">
                          <input placeholder="0.00" name="amt" id="amt" type="text" class="form-control"/>
						   <br/>
							<span class="textfieldRequiredMsg">Amount is required.</span>
						</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
						<input name="toption" type="hidden" readonly="true" value="LT"  class="form-control"  />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date of Transfer</label> 
						<span id="sprytf_dot">
                          <input type="date"  name="dot" class="form-control">
						     <br/>
								<span class="textfieldRequiredMsg">Date of Transfer is required.</span>
								<span class="textfieldInvalidFormatMsg">Invalid date format.</span>
							</span>
                        </div>
                      </div>
                   
                    </div>
					
					
	  
	  
	   
	  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Transfer Descriptions</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
							<span id="sprytf_desc">
                            <textarea name="desc" id="desc"  class="form-control" rows="5"></textarea>
							<br/>
            <span class="textareaRequiredMsg">Description is required.</span>
			<span class="textareaMinCharsMsg">Description must specify at least 10 characters.</span>
		</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submitButton" id="submitButton"   class="btn btn-primary pull-right">Transfer Now</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
         

 
<script type="text/javascript">
<!--
var sprytf_rbname = new Spry.Widget.ValidationTextField("sprytf_rbname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rname = new Spry.Widget.ValidationTextField("sprytf_rname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:10, maxChars: 15, validateOn:["blur", "change"]});
var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:10, maxChars: 20, validateOn:["blur", "change"]});
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