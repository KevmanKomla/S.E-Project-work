<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./signUp.css">
    <title>Login</title>
    <style>
         .form{
             width: 230px;
             height: 280px;

         }
    </style>
</head> 
<body>
    <?php
    require('./connection.php');
    if (isset($_POST['login_button'])) {
        $_SESSION['validate']=false;
        $name=$_POST['FirstName'];
        $password=$_POST['password'];
        $p=crud::conect()->prepare('SELECT *FROM crudtable WHERE name=:n;password=:p');
        $p->bindValue(':n', $name);
        $p->bindValue(':p', $password);
        $p->execute();
        $p->fetch(PDO::FETCH_ASSOC);
        if ($p->rowCount()>0) {
           $_SESSION['name']=$name;
           $_SESSION['password']=$password;
           $_SESSION['validate']=true;
           header('location:home.php');
        }else{
            echo 'Make sure you are registered';
        }
    } 
    ?>
    <div class="form">
        <div class="title">
          <center><p>Login form</p></center>
        </div> 
       <form action="" method="post">
          <input type="text" name="FirstName" placeholder="Name">
          <div class="password-field"><br>
            <input type="password" name="password" placeholder="Password" id="password">
           <center> <button type="button" id="show-hide-btn" onclick="togglePassword()">Show</button></center>
          </div>
          <input type="submit" value="Login" name="login_button" >
          <center>  <p>Don't have an account? <a href="signup.php">Sign up</a></p></center>
        </form>
    </div>
    
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var showHideBtn = document.getElementById("show-hide-btn");
            
            if (passwordField.type === "password") {
                passwordField.type = "text";
                showHideBtn.innerHTML = "Hide";
            } else {
                passwordField.type = "password";
                showHideBtn.innerHTML = "Show";
            }
        }
    </script>
</body>
