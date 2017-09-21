<?php

session_start();

if (isset($_POST['submit'])) {
    include'dbh.inc.php';

    $userName = mysqli_real_escape_string ($conn, $_POST['userName']);
    $pass = mysqli_real_escape_string ($conn, $_POST['pass']);
    // Hashing het password
    $hashedPWD = hash('sha512', $pass);

    // Error controle
    // kijken of er niks is ingevuld
    if(empty($userName) || empty($pass)){
        header("Location: ../index.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM websiteusers WHERE userName='$userName'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            header("Location: ../index.php?login=error1");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)){
                if ($hashedPWD != $row['pass']){
                    header("Location: ../index.php?login=error2");
                    //echo "User typed: " . $hashedPWD . "<br>";  //DEBUG
                    //echo "Database says: " . $row['pass'] . "<br>"; //DEBUG
                    exit();
                } elseif ($hashedPWD == $row['pass']){
                    // Login the user
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../index.php?login=succes");
                    exit();
                }
            }
        }
    }

} else{
    header("Location: ../index.php?login=error");
    exit();
}

