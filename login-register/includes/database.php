<?php
            require 'register-inc.php' ;
    // require "register-inc.php";

    $dbHost = "localhost";
    $dbUser = "login-reg";
    $dbPass = "";
    $dbName = "users";


    $conn = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);

    if($conn){
            echo "connected";
    }
    else{
        die("Could not connect to database");
    }

    // DATABASE CREATING ;
    // $sql = "CREATE DATABASE users";

    // if (mysqli_query($conn , $sql)){
    //     echo "database created successfully";
    // }
    // else{
    //     echo "Error Creating database : " . mysqli_error($conn);
    // }

    //Creating database Table;

    // $sql = "CREATE TABLE users (
    //     id INT(6) AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(30) NOT NULL,
    //     password VARCHAR(30) NOT NULL
    // )";

    // if(mysqli_query($conn , $sql)){
    //     echo "Table Created Successfully";

    // }
    // else{
    //     echo "Error creating table : " . mysqli_error($conn);
    // }

        // INSERTING DATA INTO users;

        // $sql = "INSERT INTO users (username, password)
        // VALUES ('adele', 1234557),
        // ('ema' , '12fsdfasdfna'),
        // ('peter' , '4512654flkasdjf')";
        
        // if (mysqli_query($conn, $sql)) {
        //   echo "New record created successfully";
        // } else {
        //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }



        // CONNETCTION FROM REGISTER-INC
        $result = mysqli_query($conn , "INSERT INTO users (username, password) VALUES ('baaal' , 545645646)");

        if($result){
            echo "New record created successfully";
        } else {
            echo "Error: " .  "<br>" . mysqli_error($conn);
        }
?>