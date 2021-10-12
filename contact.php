<?php

  $result = "";
  if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPauth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'alex.sanchez.webdev@gmail.com';
    $mail->Password = '2theM@@n';

    $mail->setFrom($_POST['form_email']);
    $mail->addAddress('ruby.r.bonilla@gmail.com');
    $mail->addReplyTo($_POST['form_email']);

    $mail->isHTML(true);
    $mail->Subject = 'New Email from potential client! (Webzemi.com)';
    $mail->Body = '<h2 align=center>New email from '.$_POST['form_name'].' with '.$POST['companyName'].'</h2><br />
                   <p>'.$_POST['form_message'].'</p>';

    if (!$mail->send()) {
      echo("Somthing went wrong. Please try again.");
    } else {
      echo("Thank you, ".$_POST['form-name']."! You should be hearing from us soon.");
    }
  }
// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");
//
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
//
// require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
// require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
// require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';
//
// // passing true in constructor enables exceptions in PHPMailer
// $mail = new PHPMailer(true);
//
// try {
//   // Server settings
// } catch {
//
// }

// $errors = [];
// $errorMessage = '';
//
// if (!empty($_POST)) {
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $message = $_POST['message'];
//
//   if (empty($name)) {
//     $errors[] = 'Name is empty';
//   }
//
//   if (empty($email)) {
//     $errors[] = 'Email is empty';
//   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $errors[] = 'Email is invalid';
//   }
//
//   if (empty($message)) {
//     $errors[] = 'message is empty';
//   }
//
//
//   if (empty($errors)) {
//     $toEmail = 'info@webzemi.com';
//     $emailSubject = 'New email from potential client. (Webzemi.com contact form)';
//     $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
//
//     $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
//     $body = join(PHP_EOL, $bodyParagraphs);
//
//     wp_mail($toEmail, $emailSubject, $body, $headers);
//
//   } else {
//     $allErrors = join('<br/>', $errors);
//     $errorMessage = "<p style='color:red;'>{$allErrors}</p>"
//   }
// }

 ?>
