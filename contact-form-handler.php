<?php
  require 'vendor/autoload.php';

  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $mailFrom = $_POST['mail'];
      $message = $_POST['message'];

      $mailTo = "gareth@caryfamily.co.uk";
      $headers = "From: ".$mailFrom;

      $txt = "You have an email from ".$name.".\n\n".$message;

      mail($mailTo, $subject, $txt, $headers);
      header("location: index.php?mailsend");
  }
