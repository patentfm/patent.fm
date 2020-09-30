<?php
echo "success111";
error_reporting(0);
echo "success222";
/*
echo "success333";
 * ------------------------------------
echo "success444";
 * Contact Form Configuration
echo "success555";
 * ------------------------------------
echo "success666";
 */
echo "success777";

echo "success888";
$to    = "wrzosdev@gmail.com"; // <--- Your email ID here
echo "success999";

echo "success101010";
$server_email = 'wrzosinf@wn28.webd.pl';  // Your server email to authenticate outgoing emails. eg: name@yourdomain.com
echo "success111111";
/*
echo "success121212";
 * ------------------------------------
echo "success131313";
 * END CONFIGURATION
echo "success141414";
 * ------------------------------------
echo "success151515";
 */
echo "success161616";

echo "success171717";
$name     = $_POST["name"];
echo "success181818";
$email    = $_POST["email"];
echo "success191919";
$website  = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "success202020";
$website = dirname($website);
echo "success212121";
$website = dirname($website);
echo "success222222";

echo "success232323";
if (isset($email) && isset($name)) {
echo "success242424";

echo "success252525";
	$subject  = "New Contact Message from $name"; // <--- Contact for Subject here.
echo "success262626";

echo "success272727";
	$msg      = 'Hello Admin, <br/> <br/> Here are the Message details:';
echo "success282828";
	$msg     .= ' <br/> <br/> <table border="1" cellpadding="6" cellspacing="0" style="border: 1px solid  #eeeeee;">';
echo "success292929";
	foreach ($_POST as $label => $value) {
echo "success303030";
	    $msg .= "<tr><td width='100'>". ucfirst($label) . "</td><td width='300'>" . $value . " </tr>";
echo "success313131";
	}
echo "success323232";
	$msg      .= " </table> <br> --- <br>This e-mail was sent from $website";
echo "success333333";

echo "success343434";
/*
echo "success353535";
 * ------------------------------------
echo "success363636";
 * Send Mail via PHP Mailer
echo "success373737";
 * ------------------------------------
echo "success383838";
 */
echo "success393939";

echo "success404040";
date_default_timezone_set('Etc/UTC');
echo "success414141";

echo "success424242";
require 'phpmailer/PHPMailerAutoload.php';
echo "success434343";
//Create a new PHPMailer instance
echo "success444444";
$mail = new PHPMailer;
echo "success454545";
//Set who the message is to be sent from
echo "success464646";
$mail->setFrom($server_email, $name);
echo "success474747";
//Set an alternative reply-to address
echo "success484848";
$mail->addReplyTo($email, $name);
echo "success494949";
//Set who the message is to be sent to
echo "success505050";
$mail->addAddress($to);
echo "success515151";
//Set the HTML True
echo "success525252";
$mail->isHTML(true);
echo "success535353";

echo "success545454";
$mail->Subject = $subject;
echo "success555555";
$mail->Body = $msg;
echo "success565656";

echo "success11";
//send the message, check for errors
echo "success22";
if (!$mail->send()) {
echo "success33";
    echo "Mailer Error: " . $mail->ErrorInfo;
echo "success44";
} else {
echo "success55";
    echo "success66";
echo "success77";
}
echo "success88";

echo "success";
//echo "success";
echo "success";

echo "success";
} // END isset
echo "success";

echo "success";

echo "success";

?>