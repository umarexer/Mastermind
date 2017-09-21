
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
    <span>REGISTER</span>
    <hr>
</header>

<!-- FORM -->
<form id="register-form" action="includes/signup.inc.php" method="POST">
    <input class="firstinput" placeholder="USERNAME" name="userName">
    <input type="password" placeholder="PASSWORD" name="pass">
    <br>
    <input class="firstinput" placeholder="E-MAIL" type="email" name="email">
    <input type="password" placeholder="REPEAT PASSWORD" name="rpassword">
    <br>
    <input type="submit" name="submit" value="REGISTER">
</form>

<!-- TKEST ONDER DE LOGIN KNOP -->
<div class="forgot-password">
    <a href="index.php">Log-in</a>
</div>

<!-- FOOTER -->
<footer>
    <span>© 2017 Danny Fokkema & Luke de Weert</span>
</footer>

</body>
</html>






