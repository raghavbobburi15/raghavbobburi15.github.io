<?php
require 'PHPMailer/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "raghavbobburi@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from " . $_POST["Name"];
    $message = $_POST["Message"];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your email provider's SMTP server
    $mail->Port = 465; // Check your email provider's documentation for the correct port
    $mail->SMTPAuth = true;
    $mail->Username = 'raghavbobburi@gmail.com'; // Replace with your email address
    $mail->Password = 'ahxb grap zjvx ohrd'; // Replace with your email password
    $mail->setFrom($_POST["email"]);
    $mail->addAddress($recipient);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo "Thank you for your message. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
