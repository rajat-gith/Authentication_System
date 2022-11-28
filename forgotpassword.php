<?php
session_start();
include 'insert.php';
$email = $email = mysqli_real_escape_string($conn, $_POST['email']);
$newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
$confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);


if (isset($_POST['set'])) {

    $select = "SELECT email from student";
    $res = mysqli_query($conn, $select);

    $emailarray = [];
    
    if (mysqli_num_rows($res) > 0) {
        while ($array = mysqli_fetch_array($res)) {
            $emailarray[] = $array['email'];
        }
        if (in_array($email, $emailarray, TRUE)) {

            if ($newpassword == $confirmpassword) {
                $run = " UPDATE STUDENT SET password='$confirmpassword' 
                    WHERE email = '$email'";
                $result = mysqli_query($conn, $run);
                if ($result) {
                    echo '<script>alert("Password Changed Successfully")</script>';
                    header("location:signin.php");
                } else {
                    echo '<script>alert("Check Again!!!")</script>';
                }
            } else {
                echo '<script>alert("Password does not match")</script>';

            }
        } else {
            echo '<script>alert("User does not exist")</script>';
        }
    } else {
        echo "<script type='text/javascript'>alert('No data in database');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="main_content">
        <p>Forgot Password</p>
        <form class="registration_form" action="" method="post">
            <input type="email" placeholder="Email Address" name="email" required />
            <input type="password" placeholder="New Password" name="newpassword" required />
            <input type="password" placeholder="Confirm Password" name="confirmpassword" required />
            <input type="submit" name="set" value="Set"></input>
            <input type="reset" name="Reset" value="Reset"></input>
        </form>
    </div>
</body>

</html>