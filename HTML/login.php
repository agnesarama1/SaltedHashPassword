<!doctype html>
<html lang="en">
<head>
  <title>LogInSignUP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="login1.css">
</head>
<body>
<div class="card-3d-wrap mx-auto">
<?php
require_once("connectDB.php");

if(isset($_POST['submit'])){


  $email = mysqli_real_escape_string($conn, $_POST['email']);

  $sql = "SELECT * FROM `user_form` WHERE `email` = '$email'";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){

     $user = mysqli_fetch_assoc($result);

     // Verify the password using the stored salt and hashed password
     $pass = $_POST['password'] . $user['salt'];

     if(password_verify($pass, $user['password'])){
        // Password matches, log in the user
        session_start();
        $_SESSION["user_form"] = "yes";
        header('location:home.php');
     }else{
    echo "<div class='alert alert-danger p-3'>Incorrect email or password.</div>";
    //echo "<div class='alert alert-danger p-3'>All fields are required</div>"; 
  }
  

  }else{

    echo "<div class='alert alert-danger p-3'>User not found!</div>";
  }

};
mysqli_close($conn);

?>

<form action="" method="POST" >
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        
          
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Log In
                      </h4>
                      <div class="form-group">
                        <input type="email" class="form-style" name="email" placeholder="Email">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" class="form-style" name = "password" placeholder="Password">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                     <input class='btn' type="submit" name="submit" value="Login"></input>
                      <p class="signupklasa"><a href="signup.php" class="createacc">Create an account.</p>

                     
                    </div>
                  </div>
                </div>
              </div>
</form>
</body>