<?php

  require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");
  class sendMail
  {
      function send($id){
      $mail = new PHPMailer\PHPMailer\PHPMailer();
      $mail->IsSMTP(); // enable SMTP

      $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication enabled
      $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = "poojya.madireddy@gmail.com";
      $mail->Password = "ramesh101@";
      $mail->SetFrom("poojya.madireddy@gmail.com");
      $mail->Subject = "DLS : action required";
      $mail->AddEmbeddedImage('image.jpg', 'logo_2u');
      echo "<img src='cid:logo_2u'>";
      $mail->Body = "<img src='cid:logo_2u'>";
      $mail->AddAddress($id);

      if(!$mail->Send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
         echo "Message has been sent";
      }
      }
     
}
// $s = new sendMail();
// $s->send("bharat.chandra200@gmail.com");
?>