<?php
require_once '../../../Plugins/PHPMailer/PHPMailer/PHPMailerAutoload.php';
class Mail {
  //This is a class for sending mail using the phpmailer
  public static function sendMail($subject, $body, $address) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'pristineproperties910@gmail.com';
    $mail->Password = 'Jackanddeclan';
    $mail->AddReplyTo('pristineproperties910@gmail.com', 'Pristine Properties');
    $mail->SetFrom('pristineproperties910@gmail.com', 'Pristine Properties');
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($address);

    $mail->Send();
  }
}
