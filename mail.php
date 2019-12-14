<?php

$con=new mysqli("localhost","root","Aakash@369","registration");

if(isset($_POST['submit']))
{
    $username = $_POST["username"];
$query = mysqli_query($con,"SELECT * FROM `regi` WHERE `urname` = '$username'");
$row = mysqli_fetch_array($query);
if($row)
{
$password = $row['passwd'];
$f_name = $row['fname'];
$username = $row['urname'];
$email = $row['email'];
    $content = "
    <html>
      <head>
      </head>
      <body>
        <center><h2><b>Forgot Password Mail</b></h2></center><br><p>Dear ".$f_name." , <br>
        You Have received this mail because you have registered with us and you have clicked the forgot password option:-<br>
        Account Details with Moview :- <br>
        User Email:-  <b>".$email."</b><br>
        Password:- <b>".$password."</b><br>
        Use the above credentials for future use.<br>
        Team Moview</p>";
            $content2 = "</body>
        </html>";
        $body = $content.$content2;
    }
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'forwebsitepur@gmail.com';                     // SMTP username
    $mail->Password   = 'Website@369';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('forwebsitepur@gmail.com', 'Moview');
    $mail->addAddress($email, $f_name);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Forgotten password';
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("Location:index.php");
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
