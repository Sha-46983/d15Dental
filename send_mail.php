<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);
    $subject = trim($_POST['subject']);


    if (empty($full_name) || empty($email) || empty($phone) || empty($message)|| empty($subject)) {
        echo 'All fields are required.';
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
        exit();
    }

    try {

        

        $subject="Enquiry Mail from : ".$_POST['email'];
        $from=$_POST['email'];
        $msg ="From Page :d15dentist.ie\n";
        $msg.="Name:$full_name\n";
        $msg.="mobile:$phone\n";
        $msg.="email:$email\n";
        $msg.="subject:$subject\n";
        $msg.="query:$message\n";
mail("gatewaywebdesign@gmail.com", "Enquiry Mail from:d15dentist.ie/contact-us.html.ie","$msg","From:$email");
mail("info@d15dentist.ie", "Enquiry Mail from:d15dentist.ie/contact-us.html.ie","$msg","From:$email");
    
echo 'Message sent successfully!';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
