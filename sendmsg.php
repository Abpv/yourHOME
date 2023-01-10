<?php
    $mysqli = new mysqli('localhost', 'root', '', 'perfectcup');

    if($mysqli->connect_error){
        die('Error: (' . $mysqli->connect_errno . ')'. $mysqli-> connect_error);
    }

    $fname = mysqli_real_escape_string($mysqli,$_POST['fname']);
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $message = mysqli_real_escape_string($mysqli,$_POST['message']);

    $email2 = "aa26223536@gmail.com";
    $subject = "test message";

    if (strlen($fname) > 50) {
        echo 'fname_long';
    
    } elseif (strlen($fname) < 2) {
        echo 'fname_short';
    
    } elseif (strlen($email) > 50) {
        echo 'email_long';
    
    } elseif (strlen($email) < 2) {
        echo 'email_short';
    
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo 'eformat';
    
    } elseif (strlen($message) > 500) {
        echo 'message_long';
    
    } elseif (strlen($message) < 3) {
        echo 'message_short';
    
    } else {
        
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
	
        //MAILER
        require './phpmailer/Exception.php';
        require './phpmailer/PHPMailer.php';
        require './phpmailer/SMTP.php';
   
       $mail = new PHPMailer(true);
       
       //$mail->SMTPDebug = 3;                               // Enable verbose debug output
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aa26223536@gmail.com';                     //SMTP username
    $mail->Password   = 'anuogscinkbusvgj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;

    $mail->AddReplyTo($email);
    $mail->From = $email2;
    $mail->FromName = $fname;
    $mail->addAddress('abpascualvalles@gmail.com', 'Admin');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
        echo 'true';
        echo 'Message could not be sent.';
        
    
}catch (Exception $e) {
           
           echo 'Mailer Error: ' . $mail->ErrorInfo;
       }
   
   
   }
   ?>