<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Replace with your SMTP credentials
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'hariharan66461';  // Replace with your email
    $mail->Password = 'tdlt etjq hgjt iiyv';  // Replace with your password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('rahulkannan33886@gmail.com', 'Rahul');
    $mail->addAddress('hariharan66461@gmail.com'); // Replace with your recipient email

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Quote Request';
    $mail->Body = '
        Name: ' . $_POST['name'] . '<br>
        Email: ' . $_POST['email'] . '<br>
        Phone: ' . $_POST['phone'] . '<br>
        Message: ' . $_POST['message'].'<br>
        Subject: '.$_POST['subject'];
    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}