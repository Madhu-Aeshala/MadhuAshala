<?php
$to = 'your-email@example.com';
$subject = 'Test Mail';
$message = 'This is a test email.';
$headers = 'From: no-reply@example.com' . "\r\n" .
           'Reply-To: no-reply@example.com' . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Mail sent successfully';
} else {
    echo 'Failed to send mail';
}
?>
