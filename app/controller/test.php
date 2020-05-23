<?php


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'onurkantaryedek@gmail.com';
    $mail->Password   = '1903forza';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet = 'UTF-8';
    
    $mail->setFrom('onurkantaryedek@gmail.com', 'Web Tasarım Projesi');
    $mail->addAddress('onurkantr@gmail.com', 'Onur Kantar');

    $mail->isHTML(true);
    $mail->Subject = 'Test Mesajı';
    $mail->Body    = 'Bu Bir Test Mesajı';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
