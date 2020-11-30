<?php


  $name = $_POST['name'];
  $user_email = $_POST['email'];
  $subject = $_POST['subject'];

  $message = $_POST['message'];
  $message = wordwrap($message, 75);
  $body = "Name:".$name."\n
           Email:".$user_email."\n
           Message:".$message;

  $reciever = 'admin@sycamoretemplecogic.org';


  mail($reciever, $subject, $body);
  header("Location: index.php");


?>
