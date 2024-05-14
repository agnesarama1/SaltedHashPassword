<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
</head>
<body>
    

<div class="container">
<?php
include_once( 'connectDB.php');
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = $_POST['password'];
  $password_confirm = $_POST['confirm_pass'];

  $errors = array();

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_pass']) ){

  echo "<div class='alert alert-danger p-3'>All fields are required</div>";
}
else{

 // Generate a random salt
 $salt = bin2hex(random_bytes(16));

 // Hash the password using the salt and the bcrypt algorithm
 $pass = $password . $salt;
 $pass = password_hash($pass, PASSWORD_BCRYPT);

 // Hash the confirm password using the same salt and bcrypt algorithm
 $cpass = $password_confirm. $salt;
 $cpass = password_hash($cpass, PASSWORD_BCRYPT);

 $select = "SELECT * FROM user_form WHERE email = '$email'";

 $result = mysqli_query($conn, $select);

 if(mysqli_num_rows($result) > 0){

  echo "<div class='alert alert-danger p-3'>Email already exists</div>";

 }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          array_push($errors, "Email is not valid");
        }
        if (strlen($password)<8) {
          echo "<div class='alert alert-danger p-3'>Password must be at least 8 charactes long</div>";
        }
        if ($password!==$password_confirm) {
          echo "<div class='alert alert-danger p-3'>Password does not match.</div>";
        }
      
        if(!password_verify($_POST['password'] . $salt, $cpass)){
         $error[] = 'Password not matched!';
      }else{
        $sql = "INSERT INTO user_form ( name, email, password, salt) VALUES ( ?, ?,?, ?)";
            $statemant = mysqli_stmt_init($conn);
            $prepareStatemant = mysqli_stmt_prepare($statemant,$sql);
            if ($prepareStatemant) {
                mysqli_stmt_bind_param($statemant,"ssss", $name, $email, $pass, $salt);
                mysqli_stmt_execute($statemant);
                echo "<div class='alert alert-success p-3'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          };
        };
      }
 mysqli_close($conn);
?>



</div>

</body>
</html>