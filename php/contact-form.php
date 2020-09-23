<?php
$to_email = 'wrzosdev@gmail.com';
$subject = 'wrzos.dev contact form';
$message = base64_encode(serialize($_POST));
$headers = 'From: wrzosinf@wn28.webd.pl';
$result = mail($to_email,$subject,$message,$headers);
if(!$result) {
echo "error"
} else {
echo "success"
}
?>