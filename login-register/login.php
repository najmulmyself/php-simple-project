<?php

include "includes/header.php";
?>

<div class="mt-5">
    <h1 class="text-primary">Log In</h1>
    <p>Need Account ? <a class="text-decoration-none" href="register.php">Register Here !</a> </p>

</div>
<div>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" class="input-f">
        <input type="password" name="password" placeholder="Password" class="input-f">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
    include "includes/footer.php";

?>