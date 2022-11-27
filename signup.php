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
  $hobies = mysqli_real_escape_string($conn, $_POST['hobies']);


  $query = "INSERT INTO STUDENT VALUES('$name','$dob','$regno','$email','$password','$mobileno','$sex','$hobies','$branch')";

  // $query = "INSERT INTO TEST VALUES('$name','$dob','$regno','$email','$password','$mobileno')";

  $run = mysqli_query($conn, $query);
  if ($run) {
    echo '<script>alert("Added Successfully")</script>';
    header("location:signin.php");

  } else {
    echo "Failed";
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
        <p>Choose Your Gender</p>
        <input type="radio" value="male" name="sex" placeholder="Male" />
        <label for="male">Male</label>
        <input type="radio" value="female" name="sex" placeholder="Female" />
        <label for="female">Female</label>
      </div>
      <div class="hobbies">
        <p>Choose your hobbies:</p>
        <div class="choices">
          <div class="ticks">
            <input type="checkbox" name="hobies" value="playing" />
            <label for="playing">Playing</label>
          </div>
          <div class="ticks">
            <input type="checkbox" name="hobies" value="Singing" />
            <label for="singing">Singing</label>
          </div>
          <div class="ticks">
            <input type="checkbox" name="hobies" value="coding" />
            <label for="coding">Coding</label>
          </div>
        </div>
      </div>
      <div class="branch">
        <label for="branch">Choose Your Branch</label>
        <select name="branch">
          <option value="">--select--</option>
          <option value="PE">PE</option>
          <option value="CSE">CSE</option>
          <option value="IT">IT</option>
          <option value="ETC">ETC</option>
        </select>
      </div>
      <input type="submit" name="register" value="register"></input>
      <input type="reset" name="Reset" value="Reset"></input>
      <!-- <button type="reset">Reset</button> -->
    </form>
    <div class="signup">
      <p>Already Have an Account:</p>
      <span><a href="./signin.php">SignIN</a></span>
    </div>
  </div>
</body>

</html>