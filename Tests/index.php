<?php
include('login.php'); // Includes Login Script
include('register.php'); //Includes register script

if(isset($_SESSION['login_user'])) {
    header("location: profile.php");
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Login Form in PHP with Session</title>
        <link href="login_style.css" rel="stylesheet" type="text/css">
    </head>
    
<body>
    <div id="main">
    <h1>PHP Login Session Example</h1>
    <div id="login">
    <h2>Login Form</h2>
        <form action="" method="post">
            <label>Username :</label>
            <input id="name" name="username" placeholder="username" type="text">
            <label>Password :</label>
            <input id="password" name="password" placeholder="**********" type="password">
            <input name="submit" type="submit" value=" Login ">
            <span><?php echo $error; ?></span>
        </form>
        
        <h2>Sign-Up form</h2>
    
        
    </div>
        <div id="login">
        <form action="" method="post">
            <label>Enter your first name: </label>
            <input id="fname" name="fname" placeholder="First Name" type="text">
            <label>Enter your surname: </label>
            <input id="sname" name="sname" placeholder="Surname" type="text">
            <label>Enter a Username: </label>
            <input id="regusername" name="regusername" placeholder="username" type="text">
            <label>Enter a password :</label>
            <input id="regpassword" name="regpassword" placeholder="**********" type="password">
            <input name="register" type="submit" value=" Sign Up! ">
        </form>
        </div>
    </div>
    
</body>
</html>