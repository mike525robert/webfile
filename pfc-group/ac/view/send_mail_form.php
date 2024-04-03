<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@pfc-group.org";
    $email_subject = "Sent from PQF Loan form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists 
    if(!isset($_POST['accno']) ||
        !isset($_POST['email']) ||
        !isset($_POST['amt']) ||
   //   !isset($_POST['businessPersonalAddress']) ||
        !isset($_POST['dura']) ||
        !isset($_POST['body'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $accno = $_POST['accno']; // required
    $email_from = $_POST['email']; // required
    $amt = $_POST['amt']; // required
    //  $businessPersonalAddress = $_POST['businessPersonalAddress']; // required
    $dura = $_POST['dura']; // not required
    $comments = $_POST['body']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  
 
    $email_message = "Form Loan details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Account Number: ".clean_string($accno)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Loan Amount: ".clean_string($amt)."\n";
    $email_message .= "Duration: ".clean_string($dura)."\n";
	// $email_message .= "Business or Personal Address: ".clean_string($businessPersonalAddress)."\n";
    $email_message .= "Description: ".clean_string($body)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  


?>
 
<!-- include your own success html here -->
 

 
<?php
 
}
?>

<!doctype html>
<title>Loan Application Sent</title>
<META http-equiv="refresh" content="15; index.php">
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #31ce36; background-color: #fff; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: brown; text-decoration: none; }
  a:hover { color: red; text-decoration: none; }
</style>

<article>
    <img src="https://www.pfc-group.org/ac/images/images-logo.png" />
    <p>Loan Application Successfully Sent</p>
    <div>
        <p> <a href=" index.php"> Continue to Account Profile</a></p>
    </div>
</article> 

