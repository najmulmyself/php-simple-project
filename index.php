<?php

// echo "Hello World <br/>";

// $a = 2;
// $b = 5;
// $total = $a * $b;

// echo "\n {$total} = {$a} * {$b}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>PHP Simple Project</title>
</head>
<body>
    <?php
    include "./header.php";
    ?>

<h1 class="container text-primary">Hello World!</h1>

    

    <p>
        <?php
            if(isset($_GET['submit'])){
                echo "Email is : " . $_GET['email'];
                echo "Title is : " . $_GET['title'];
                echo "Ingredients is : " . $_GET['ingredients'];
            }
            else{
                echo "";
            }
         ?></p>

    <?php
        include "./forms.php";
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>