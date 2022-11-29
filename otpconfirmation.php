<?php
session_start();
include 'insert.php';

if (isset($_POST['set'])) {


    if ($_POST['otp']==$_SESSION['otp']) {
        echo '<script>alert("OTP Confirmed")</script>';
        header("location:forgotpassword.php");
    }
    else{
        echo '<script>alert("OTP Incorrect")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enter OTP</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="main_content">
        <p>Enter OTP</p>
        <form class="registration_form" action="" method="post">
            <input type="text" placeholder="Enter OTP" name="otp" required />
            <input type="submit" name="set" value="Send"></input>
        </form>
    </div>
</body>

</html>