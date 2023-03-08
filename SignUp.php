<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./signUp.css">
</head>
<body>
<?php
require('./connection.php');

if(isset($_POST['signUp_button'])) {
  $firstName = $_POST['FirstName'];
  $lastName = $_POST['LastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confiPassword = $_POST['confiPassword'];

  if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)) {
    if ($password == $confiPassword && strlen($password) >= 8) {
      $p = crud::conect()->prepare('INSERT INTO crudtable(name,lastName,email,password) VALUES(:n,:l,:e,:p)');
      $p->bindValue(':n', $firstName);
      $p->bindValue(':l', $lastName);
      $p->bindValue(':e', $email);
      $p->bindValue(':p', $password);
      $p->execute();
    } else {
      // Password and/or Confirm Password do not match, or Password is less than 8 characters
      echo "<script>";
      if ($password != $confiPassword) {
        echo "alert('Password and Confirm Password do not match.');";
      } else if (strlen($password) < 8) {
        echo "alert('Password must be at least 8 characters long.');";
      }
      echo "</script>";
    }
  } else {
    // One or more fields are empty
    echo "<script>";
    echo "alert('Please fill in all fields.');";
    echo "</script>";

  }
}
?>

    <div class="form" >
        <div class="title">
          <center> <p>Sign Up form</p></center>
        </div> 
       <form action="" method="post">
          <input type="text" name="FirstName" placeholder="Name">
          <input type="text" name="LastName" placeholder="Last name">
          <input type="text" name="email" placeholder="Email">
          <div class="password-container"><br>
            <input type="password" name="password" placeholder="Password" id="password-input">
            <center><button type="button" onclick="showPassword()">Show/hide Password</button></center>
          </div>
          <div class="password-container">
            <input type="password" name="confiPassword" placeholder="Confirm password" id="confirmpassword-input">
        <center><button type="button" onclick="showConfirmPassword()"> Show/hide Confirm Password</button></center>
          </div>
         <input type="submit" value="Sign Up" name="signUp_button" >
         <center>   <p>Already have an account? <a href="login.php">Login</a></p> </center>
    </form>
  </div>
 
  <script>
    function showPassword() {
      var passwordInput = document.getElementById("password-input");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    }
    
    function showConfirmPassword() {
      var confirmPasswordInput = document.getElementById("confirmpassword-input");
      if (confirmPasswordInput.type === "password") {
        confirmPasswordInput.type = "text";
      } else {
        confirmPasswordInput.type = "password";
      }
    }
  </script>
</body>

</html>
