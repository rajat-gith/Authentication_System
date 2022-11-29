<?php
session_start();
include 'insert.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



if (isset($_POST['set'])) {
    $otp = rand(100000, 1000000);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rajatitwork@gmail.com';
    $mail->Password = "nybcplwgjmrumiti";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('rajatitwork@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Body = "$otp";

    if ($mail->send()) {
        echo '<script>alert("Mail Sent Successfully")</script>';
        $_SESSION['otp'] = $otp;
        header("location:otpconfirmation.php");
    }
    else{
        echo '<script>alert("Mail Not Sent")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send Email</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="main_content">
        <p>Send Email</p>
        <form class="registration_form" action="" method="post">
            <input type="email" placeholder="Email Address" name="email" required />
            <input type="submit" name="set" value="Send"></input>
        </form>
    </div>
</body>

</html>