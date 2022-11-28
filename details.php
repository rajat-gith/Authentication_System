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
    <div class="details_main_content">
        <p>Details Page</p>
        <div class="details_page">
            <div class="row">
                <p class="key">Name:</p>
                <p>
                    <?php echo $_SESSION['name'] ?>
                </p>
            </div>
            <div class="row">
                <p class="key">Email:</p>
                <p>
                    <?php echo $_SESSION['email'] ?>
                </p>
            </div>
            <div class="row">
                <p class="key">Branch:</p>
                <p>
                    <?php echo $_SESSION['branch'] ?>
                </p>
            </div>
            <div class="row">
                <p class="key">Gender:</p>
                <p>
                    <?php echo $_SESSION['gender'] ?>
                </p>
            </div>
            <div class="row">
                <p class="key">Registration No:</p>
                <p>
                    <?php echo $_SESSION['regno'] ?>
                </p>
            </div>
            <div class="row">
                <p class="key">Mobile No:</p>
                <p>
                    <?php echo $_SESSION['mobileno'] ?>
                </p>
            </div>


        </div>
    </div>
</body>

</html>