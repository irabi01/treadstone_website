<?php

  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $mailFrom = $_POST['mail'];
      $mobilenumber = $_POST['mobilenumber'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      //error handler goes here
      $mailTo = "fatima.mohamed@treadstoneconsult.com";
      $headers = "Email From Treadstone Consulting Website, Sent by ".$mailFrom;
      $text = "You have received an e-mail from ".$name. ".\n\n".$message;

      mail($mailTo, $subject, $text,$headers);
      header("Location: contact.php?mailsend");
  }

 ?>
