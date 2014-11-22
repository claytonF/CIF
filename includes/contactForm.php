  <?php
  
  
//variables posted back from form //
$required = "required";
$formName = $_POST["name"];
$formEmail = $_POST["email"];
$formMessage = $_POST["message"];
$humanChecker=$_POST['humanChecker'];
$phoneNbr=$_POST['phoneNbr'];
$subscribed=$_POST['subscribeBox'];



if ($humanChecker != "") {$humanChecker == "If you are human please do not enter anything in this box.";}
if ($phoneNbr != "") {$phoneNbr == "If you are human please do not enter anything in this box.";}
?>

<a name="tab"></a>
<?php
if($humanChecker == "" && $phoneNbr == "" && $formName != $required && $formName != "" && $formEmail != $required && $formEmail != "" && preg_match( '/^[A-Z0-9._-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z.]{2,6}$/i' , $formEmail) && $formMessage != $required && $formMessage != "") {
echo "<div class=\"messageSent\">Thank you for your message.</div>";
};

?>		
        <form name="contactForm" id="contactForm" action="#tab" method="post">
        	
                  <fieldset>
                    <div class="contactField">
                    	<label for="name" >Name</label>
                        <input type="text" class="input" id="name" name="name" <?php if ($formName=="required") {echo "style=\"color:red;\"";} ?> value="<?php if ($formName=="") {echo $required;} else {echo "$formName";} ?>" onFocus="clearText(this)" onBlur="inputBlur(this)" />		
                    </div>
                    <div class="contactField">
                    	<label for="email" >Email</label>
                        <input type="email" class="input" id="email" name="email" <?php if ($formEmail=="" || $formEmail=="required") {echo "value=\"required\"";} elseif (!preg_match( '/^[A-Z0-9._-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z.]{2,6}$/i' , $formEmail)) {echo "value=\"Invalid email address\""; echo "style=\"color:red;\"";} else {echo "value=\"$formEmail\"";} ?> onFocus="clearText(this)" onBlur="inputBlur(this)" />
                    </div>
                    <div class="contactTextarea">
                    	<label for="message" >Message</label>
                        <textarea name="message" class="input textarea" <?php if ($formMessage=="required") {echo "style=\"color:red;\"";} ?> id="message" onFocus="clearText(this)" onBlur="inputBlur(this)"><?php if ($formMessage=="" ) {echo $required;} else {echo $formMessage;} ;?></textarea>
                    </div>
                    <input type="text" class="humanChecker" name="humanChecker" id="humanChecker" value="<?php if ($humanChecker=="" ) {echo "";} else {echo "If you are human please do not enter anything in this box.";} ;?>" />
                    <input type="text" class="phoneNbr" name="phoneNbr" id="phoneNbr" value="<?php if ($phoneNbr=="" ) {echo "";} else {echo "If you are human please do not enter anything in this box.";} ;?>" />
                    <div id="subscribeContainer">
                    	<input type="checkbox" id="subscribeBox" <?php if($subscribed == "on") {echo "checked=\"checked\"";}; ?> name="subscribeBox" />
                        <label id="subscribeBoxLabel" for="subscribeBox">Check this box if you would like to subscribe to our mailing list</label>
                   </div>
                </fieldset>
          	<div id="m_submit"><input type="submit" class="submitBtn" value="Submit" /></div>
        </form>

<?php
if($humanChecker == "" && $phoneNbr == "" && $formName != $required && $formName != "" && $formEmail != $required && $formEmail != "" && preg_match( '/^[A-Z0-9._-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z.]{2,6}$/i' , $formEmail) && $formMessage != $required && $formMessage != "") {
$subscribeChecked = "";
if($subscribed == "on") {$subscribeChecked = "yes";} else {$subscribeChecked = "no";};
$to = "info@cottageindustryfilms.co.uk";
$subject = "Message from Cottage Industry Films website";
$body = '
<html>
<body>
<table width=100%>
<tr><td colspan="2">Thank you for you message. Below is a copy of the message we received.</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td align="right" valign=top>Name:</td>
<td valign=top>'. $formName. '</td>
</tr>
<tr>
<td align="right" valign=top>Email:</td>
<td valign=top>'. $formEmail. '</td>
</tr>
<tr>
<td align="right" valign=top>Message:</td>
<td valign=top>'. $formMessage. '</td>
</tr>
<tr>
<td align="right" valign=top>Subscribed to mailing list:</td>
<td valign=top>'. $subscribeChecked. '</td>
</tr>
</table>
</body>
</html>
';

$headers = "From: info@cottageindustryfilms.co.uk";
$headers .= "\r\nBcc: info@cottageindustryfilms.co.uk";
$headers .= "\r\nContent-Type: text/html; charset=iso-8859-1";




mail($to, $subject, $body, $headers);}

?>

