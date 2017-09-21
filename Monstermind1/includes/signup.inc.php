<?php

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $rpass = mysqli_real_escape_string($conn, $_POST['rpassword']);

    //Eroor controle
    //kijken of er legen plaatsen zijn
    if (empty($userName) || (empty($pass)) || (empty($email))) {
        header("Location: ../register.php?signup=empty");
        exit();
    } else{
        //kijken of de ingevulde  password hetzelfde zijn
        if ($pass !== $rpass) {
            header("Location: ../register.php?signup=rpasswrong");
            exit();
        } else {
            // kijken of het wel een email is
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../register.php?signup=invalidemail");
                exit();
            } else {
                $sql = "SELECT * FROM websiteusers where userName='$userName'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: ../register.php?signup=usertaken");
                    exit();
                } else {
                    // Hashing het password
                    $hashedPWD = hash('sha512', $pass);
                    //insert the user into the database
                    $sql = "INSERT INTO websiteusers (userName, pass, email) VALUES ('$userName', '$hashedPWD', '$email');";
                    mysqli_query($conn, $sql);
                    header("Location: ../register.php?signup=signupsucces");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../register.php");
    exit();

}