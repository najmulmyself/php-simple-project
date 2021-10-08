<?php 
    if(isset($_POST['submit'])){
        // add DB 
        require 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
    }
?>