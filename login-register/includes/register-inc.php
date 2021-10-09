<?php 
    if(isset($_POST['submit'])){
        // add DB 
        // require 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // simple validation

        // if(empty($username) || empty($password) || empty($confirmPassword)){
        //     header("Location: ../register.php?error=emptyfields");

        //     // this is not working 



        //     $sql = "INSERT INTO users (username, password) VALUE($username , $password)";
        // }

        $sql = "INSERT INTO users (username, password) VALUE($username , $password)";
    }
?>