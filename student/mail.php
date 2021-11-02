<?php
$toemail = "deekshugowdan@gmail.com";
$subject = "Test Email";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender\'s email";

if (mail($toemail, $subject, $body, $headers)) {
 
    echo "Email successfully sent to $toemail...";
 
} else {
 
    echo "Email sending failed...";

}