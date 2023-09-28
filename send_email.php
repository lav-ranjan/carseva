<?php
require 'path_to_phpmailer/PHPMailerAutoload.php';  // Replace with the actual path to PHPMailer

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // Configure the SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';  // Replace with the SMTP host provided by your email service
    $mail->Port = 587;  // Replace with the SMTP port provided by your email service
    $mail->SMTPAuth = true;
    $mail->Username = 'your-username';  // Replace with your SMTP username
    $mail->Password = 'your-password';  // Replace with your SMTP password

    // Set the email details
    $mail->setFrom($email, $name);
    $mail->addAddress('your-email@example.com');  // Replace with your own email address
    $mail->Subject = 'New Form Submission';
    $mail->Body = "Name: $name\nPhone: $phone\nEmail: $email";

    // Send the email
    if ($mail->send()) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error sending email: ' . $mail->ErrorInfo;
    }
}
?>
<!-- https://www.youtube.com/watch?v=9tD8lA9foxw&pp=ygUac210cCBzZW5kIG1haWwgIHBocCB0ZWx1Z3U%3D -->