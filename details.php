<?php
include 'insert.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Details</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="main_content">
        <p>Details Page</p>
        <form class="registration_form" action="" method="post">
            <tr>
                <td>Name:</td>
                <td>
                    <?php echo $_SESSION['name'] ?>
                </td>
            </tr><br>
            <tr>
                <td>Email:</td>
                <td>
                    <?php echo $_SESSION['email'] ?>
                </td>
            </tr><br>
            <tr>
                <td>Branch:</td>
                <td>
                    <?php echo $_SESSION['branch'] ?>
                </td>
            </tr><br>
            <tr>
                <td>Gender:</td>
                <td>
                    <?php echo $_SESSION['gender'] ?>
                </td>
            </tr><br>
            <tr>
                <td>Registration No:</td>
                <td>
                    <?php echo $_SESSION['regno'] ?>
                </td>
            </tr><br>
            <tr>
                <td>Mobile No:</td>
                <td>
                    <?php echo $_SESSION['mobileno'] ?>
                </td>
            </tr>
        </form>
    </div>
</body>

</html>