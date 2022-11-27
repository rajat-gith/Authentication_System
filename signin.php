<?php
session_start();
include 'insert.php';
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (isset($_POST['login'])) {

    $select = " SELECT * FROM STUDENT WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['regno'] = $row['regno'];
        $_SESSION['mobileno'] = $row['mobileno'];
        $_SESSION['branch'] = $row['branch'];
        $_SESSION['gender'] = $row['sex'];

        echo '<script>alert("Logged In Successfully")</script>';
        header("location:details.php");
        exit;

    } else {
        echo '<script>alert("Invalid Credentials")</script>';
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
        <p>Login Form</p>
        <form class="registration_form" action="" method="post">
            <input type="email" placeholder="Email Address" name="email" required />
            <input type="password" placeholder="Password" name="password" required />
            <input type="submit" name="login" value="Login"></input>
            <input type="reset" name="Reset" value="Reset"></input>
        </form>
        <div class="signup">
            <p>Already Have an Account:</p>
            <span><a href="./signup.php">SignUp</a></span>
        </div>
    </div>
</body>

</html>