<?php

$to = "recipient@example.com";
$subject = "Example HTML Email";
$message = "<html><body>This is an example of an HTML email message.</body></html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: sender@example.com' . "\r\n";

mail($to, $subject, $message, $headers);

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error: email not sent.";
}

?>