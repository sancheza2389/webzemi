<?php
//requires PHPMailer files
use PHPMailer\PHPMailer\PHPMailer;
require __DIR__ . '/vendor/autoload.php';

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (empty($name)) {
    $errors[] = 'Name is empty';
  }

  if (empty($email)) {
    $errors[] = 'Email is empty';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is invalid';
  }

  if (empty($message)) {
    $errors[] = 'message is empty';
  }


  if (empty($errors)) {
    $toEmail = 'info@webzemi.com';
    $emailSubject = 'New email from potential client. (Webzemi.com contact form)';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {
      header('Location: index.php');
    } else {
      $errorMessage = 'Oops, something went wrong. Please try again later';
    }

  } else {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color:red;'>{$allErrors}</p>"
  }
}

 ?>
