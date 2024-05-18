
<?php


session_start();

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Perform any necessary logout actions here

    // Destroy the session and redirect  to  the login page or any other desired location
    session_destroy();
     header("Location: login.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="../CSS/home.css">

</head>
<body>
<div class="back"></div>
 <div><img style="width:10%;"src="">
</div>
<p style="margin-right: 15%">
<img style = " width: 5% ; margin-left:15%" src = "">
</p>
<div class="container">
            <h1 style="color:white;"> Greeting Message</h1>
            <p style="color:white;  ">In this guide, we'll show you how to develop a simple web application for user management where passwords are stored 
                in the database as "salted hash". This method enhances the security of password storage by using a unique salt 
                for each user, increasing protection against various attacks.</p>
            <!-- <p>This project is implemented by group 3 using HTML,
                 CSS and PHP for saving your data and especially<br> your password as salted hash</p> -->
            <h1></h1>
         <button>   <a href="login.php" class="btn">Log Out </a> </button>
    </div>
</body>
</html>