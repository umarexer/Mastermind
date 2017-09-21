<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MONSTERMIND</title>
    <link rel="shortcut icon" href="IMG/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>


<!-- LOGO -->
<img class="logo" src="IMG/logo.png">

<!-- LOG IN TEXT -->
<header>


    <span>LOG IN</span>
    <hr>
</header>

<!-- FORM -->
<form id="index-form" action="includes/login.inc.php" method="POST">
    <input name="userName" placeholder="USERNAME">
    <br>
    <input type="password" name="pass" placeholder="PASSWORD">
    <br>
    <input type="submit" name="submit" value="LOG IN">
</form>

<!-- TKEST ONDER DE LOGIN KNOP -->
<div class="forgot-password">
    <a href="forgotpassword.php">Forgot password</a>
</div>
<div class="register">
    <a href="register.php">Register</a>
</div>

<!-- FOOTER -->
<footer>
    <span>© <script src="JS/currentyear.js"></script> Danny Fokkema & Luke de Weert</span>
</footer>

<!-- SCRIPT -->

</body>
</html>