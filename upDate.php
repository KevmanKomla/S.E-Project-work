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
      $Firstname=$_POST['FirstName'];
      $lastName=$_POST['LastName'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $confiPassword=$_POST['confiPassword'];
     if(!empty($_POST['FirstName'])&& !empty($_POST['LastName'])&& !empty($_POST['email'])&& !empty($_POST['password'])){
        if ( $password == $confiPassword) {
            $p=crud::conect()->prepare('UPDATE crudtable SET name=:n,lastName=:l,email=:e,password=:p');
        $p->bindValue(':n',$Firstname);
        $p->bindValue(':l',$lastName);
        $p->bindValue(':e',$email);
        $p->bindValue(':p', $password);
        $p->execute();
             echo 'Updated';
        }else{
            echo 'Password does not match!';
        }
     }  
     }
    
    ?>
    <div class="form" >
        <div class="title">
            <center><p>Update Form</p></center>
        </div> 
       <form action="" method="post">
          <input type="text" name="FirstName" placeholder="Name">
          <input type="text" name="LastName" placeholder="Last name">
          <input type="text" name=" email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="confiPassword" placeholder="Confirm password">
         <input type="submit" value="UPDATE" name="signUp_button" >
    
       </form>
    </div>
</body>
</html>
