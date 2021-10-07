<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $compabyName = $_POST['companyName'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "alex@webzemi.com";

  $headers = "From: ".$mailFrom;
  $txt = "You have a recieved an e-mail from ".$name." with ".$companyName.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}

 ?>
