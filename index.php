<?php

// echo "Hello World <br/>";

// $a = 2;
// $b = 5;
// $total = $a * $b;

// echo "\n {$total} = {$a} * {$b}";


//  CONNECTING TO A DATABASE 

 $conn = mysqli_connect('localhost' , 'najmul' , '2580' , 'php-simple-project');

 if(!$conn){
    echo "Connection Error";
 }
 else{
     echo "connected successfully";
 }

 // GET DATA FROM DATABASE

  // write query to database

$sql = "SELECT title,ingredients,id FROM food";

//make query and get results

$results = mysqli_query($conn, $sql);

// fetch results

$food = mysqli_fetch_all($results , MYSQLI_ASSOC);

// print_r($food);

foreach($food as $key => $value){
    // echo $value;

    foreach($value as $key => $value1){
        echo $key . " : " .  $value1 . "<br>";
    }
}

$erros = array(
    "email" => "",
    "title" => "",
    "ingredients" => ""
); 

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
            // if(isset($_POST['submit'])){
            //     echo "Email is : " . $_POST['email'];
            //     echo "Title is : " . $_POST['title'];
            //     echo "Ingredients is : " . $_POST['ingredients'];
            // }
            // else{
            //     echo "";
            // }

            // to avoid xss attacks , we need to use htmlspecialchars() . this method converts the characters into HTML entites

            // need to use the following method instead :

            if(isset($_POST['submit'])){
                // echo "Email is : " . htmlspecialchars($_POST['email']);
                // echo "Title is : " . htmlspecialchars($_POST['title']);
                // echo "Ingredients is : " . htmlspecialchars($_POST['ingredients']);
                 
                // we will add the validation:

                if(!empty($_POST['email'])){
                    echo "Email : " . $_POST['email'];
                }
                else{
                    $erros['email'] = "Email must be required";
                }
                if(!empty($_POST['title'])){
                    echo "Title : " . $_POST['title'];
                }
                else{
                    $erros['title'] = "Title must be required";
                }
                if(!empty($_POST['ingredients'])){
                    echo "Ingredients : " . $_POST['ingredients'];
                }
                else{
                    $erros['ingredients'] = "At least one ingredient must be required";
                }
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

<!-- // WHEN USER WILL SUBMIT THE FORM WE NEED TO REDIRECT TO THE OTHER PAGE WE WANT TO DO ACTION : -->

<!-- // by doing this we can use a method called header() | we need to pass the property named location -->

<!-- header("Location : index.php"); -->