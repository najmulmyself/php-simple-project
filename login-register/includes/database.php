<?php
    $dbHost = "localhost";
    $dbUser = "login-reg";
    $dbPass = "";
    $dbName = "";


    $conn = mysqli_connect($dbHost , $dbUser , $dbPass);

    if($conn){
            echo "connected";
    }
    else{
        die("Could not connect to database");
    }
?>