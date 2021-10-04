<?php

// include 'index.php';
    
?>

<form class="container">
  <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputText1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form  class ="container mt-5" action="index.php" method="POST">
    <label for="">Email</label>
    <input type="email" name="email"><br>
    <div class="text-danger">
      <?php echo $erros['email'] ?>
    </div>
    <label for="">Pizza Title</label>
    <input type="text" name="title"><br>
    <div class="text-danger">
      <?php echo $erros['title'] ?>
    </div>
    <label for="">Ingredients</label>
    <input type="text" name="ingredients"><br>
    <div class="text-danger">
      <?php echo $erros['ingredients'] ?>
    </div>
    <input type="submit" value="submit" name="submit">
</form>