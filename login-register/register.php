<?php

include "includes/header.php";
?>

<div class="mt-5">
    <h1 class="text-primary">Register</h1>
    <p>Already have an Account ? <a class="text-decoration-none" href="login.php">Login Here !</a> </p>

</div>
<div>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" class="input-f">
        <input type="password" name="password" placeholder="Password" class="input-f">
        <input type="password" name="confirmPassword" placeholder="Confirm Password" class="input-f">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
    include "includes/footer.php";

?>