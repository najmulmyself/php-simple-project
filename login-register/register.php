<?php

include "includes/header.php";
?>

<div class="mt-5">
    <h1 class="text-primary">Register</h1>
    <p>Already have an Account ? <a class="text-decoration-none" href="login.php">Login Here !</a> </p>

</div>
<div>
    <form action="includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="Username" class="input-f">
        <input type="password" name="password" placeholder="Password" class="input-f">
        <input type="password" name="confirmPassword" placeholder="Confirm Password" class="input-f">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
    include "includes/footer.php";


    // if(isset($_POST['submit'])){
    //     // add DB 
    //     // require 'database.php';

    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $confirmPassword = $_POST['confirmPassword'];
        
    //     echo $username;
    // }
    // else if(!isset($_POST['submit'])){
    //     echo " fuck";
    // }

?>