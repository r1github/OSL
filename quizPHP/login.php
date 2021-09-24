<?php
$login = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'elements/db_connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
   
    $sql = "Select * from users where username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); //counts number of rows
    if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username'] = $username;
            header("location: quest/category.php");
        }
    else{
        $showError="Username is not registered";
    }
}
   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body style="background-color:#95B9C7;">
    <?php
    require 'elements/nav.php'
    ?>

<?php
if($login){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success! Your are logged in.</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
if($showError){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> Your account has not been created.</strong> '.$showError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

?>


<div class="container" style="padding:35px; margin-top:45px; height:400px;">
    <h1 class="text-center">Login!!</h1>



<form action="/TriviaQuiz/login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

<!-- footer  -->
<div class="footer">
      <div class="foot">
      <img class="fb" src="pics/facebook.png" alt="facebook">
      <img class="fb" src="pics/twitter.png" alt="twitter">
      <img class="fb" src="pics/instagram.png" alt="insta">
      <p>@ xyz .com</p>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>