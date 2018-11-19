<?php
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['message'])){
      $fName = $_POST['first_name'];
      $lName = $_POST['last_name'];
      $email = $_POST['email'];
      $msg = $_POST['message'];
      $toEmail = 'seanbrwh@gmail.com ';
      $subject = 'Contact Request From ' . $fName.' '.$lName;
      $body = '<h2>Contact Request</h2>
        <h4>Name</h4><p>'.$fName.' '.$lName.'</p>
        <h4>E-mail</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$msg.'</p>';
      $headers = "MIME-Version: 1.0". "\r\n";
      $headers .="Content-Type:text/html:charset=UTF-8" . "\r\n";
      $headers .="From: " .  $fName.' '.$lName .' '. "<".$email.">"."\r\n";
      echo mail($toEmail, $subject, $body, $headers);
    }
?>