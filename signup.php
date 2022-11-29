<?php

include 'insert.php';
if (isset($_POST['register'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);
  $regno = mysqli_real_escape_string($conn, $_POST['regno']);
  $mobileno = mysqli_real_escape_string($conn, $_POST['mobileno']);
  $branch = mysqli_real_escape_string($conn, $_POST['branch']);
  $sex = mysqli_real_escape_string($conn, $_POST['sex']);
  $hobies1 = mysqli_real_escape_string($conn, $_POST['hobies1']);
  $hobies2 = mysqli_real_escape_string($conn, $_POST['hobies2']);
  $hobies3 = mysqli_real_escape_string($conn, $_POST['hobies3']);

  $hobies= $hobies1." ".$hobies2." ".$hobies3;

  $select = "SELECT email from STUDENT";
  $res = mysqli_query($conn, $select);

  if (mysqli_num_rows($res) > 0) {
    $emailarray = [];
    while ($array = mysqli_fetch_array($res)) {
      $emailarray[] = $array['email'];
    }

    if (!in_array($email, $emailarray, TRUE)) {
      $query = "INSERT INTO STUDENT VALUES('$name','$dob','$regno','$email','$password','$mobileno','$sex','$hobies','$branch')";

      // $query = "INSERT INTO TEST VALUES('$name','$dob','$regno','$email','$password','$mobileno')";

      $run = mysqli_query($conn, $query);
      if ($run) {
        echo '<script>alert("Added Successfully")</script>';
        header("location:signin.php");

      } else {
        echo '<script>alert("Failed")</script>';
      }
    } else {
      echo '<script>alert("User with same email already exist")</script>';
    }
  } else {
    echo '<script>alert("No data in database")</script>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignUp</title>
  <link rel="stylesheet" href="style.css" />

</head>

<body>

  <div class="main_content">
    <p>Registration Form</p>


    <form class="registration_form" action="" method="post">
      <input type="text" placeholder="Name" name="name" required />
      <input type="date" placeholder="DOB" name="dob" required />
      <input type="text" name="regno" placeholder="Registration No." required />
      <input type="email" placeholder="Email Address" name="email" required />
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
        placeholder="Password" name="password" required />
      <input type="text" placeholder="Mobile No." name="mobileno" required />
      <div class="gender">
        <span>Choose Your Gender</span>
        <input type="radio" value="male" name="sex" placeholder="Male" />
        <label for="male">Male</label>
        <input type="radio" value="female" name="sex" placeholder="Female" />
        <label for="female">Female</label>
      </div>
      <div class="hobbies">
        <span>Choose your hobbies:</span>
        <div class="choices">
          <div class="ticks">
            <input type="checkbox"  id="playing" name="hobies1" value="playing" />
            <label for="playing">Playing</label>
          </div>
          <div class="ticks">
            <input type="checkbox" id="singing" name="hobies2" value="Singing" />
            <label for="singing">Singing</label>
          </div>
          <div class="ticks">
            <input type="checkbox" name="hobies3" id="coding" value="coding" />
            <label for="coding">Coding</label>
          </div>
        </div>
      </div>
      <div class="branch">
        <label for="branch">Choose Your Branch</label>
        <select class='option' name="branch">
          <option value="">--select--</option>
          <option value="PE">PE</option>
          <option value="CSE">CSE</option>
          <option value="IT">IT</option>
          <option value="ETC">ETC</option>
        </select>
      </div>
      <input type="submit" name="register" onclick="store()" value="Register" class='btn'></input>
      <input type="reset" name="Reset" value="Reset" class='btn'></input>
    </form>
    <div class="signup">
      <p>Already Have an Account:</p>
      <span><a href="./signin.php">SignIn</a></span>
    </div>
  </div>
</body>

</html>