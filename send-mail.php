<?php 
    require 'vendor/autoload.php';
    require_once 'includes/functions.php';

    if (isset($_POST['send_mail'])) 
    {
      $username = get_post($_POST['username']);
      $email    = get_post($_POST['email']);
      $message  = get_post($_POST['message']);

      $mail = new PHPMailer;

      $mail->isSMTP();                              
      $mail->Host = 'smtp.gmail.com';             // Specify main SMTP servers
      $mail->SMTPAuth = true;                           
      $mail->Username = 'username@gmail.com';     // SMTP username
      $mail->Password = 'secret';                 // SMTP password
      $mail->SMTPSecure = 'tls';                          
      $mail->Port = 587;                            

      $mail->setFrom($email, $username);
      $mail->addAddress('username@gmail.com');    // Add a recipient
      $mail->addReplyTo($email, $username);

      $mail->isHTML(true);                               

      $mail->Subject = 'Message from OnePage Web Template';
      $mail->Body    = $message;
      $mail->AltBody = $message;

      if(!$mail->send()) {
        header("Location: index.php?msg=fail#contact");
      } else {
        header("Location: index.php?msg=send#contact");
      }
    }