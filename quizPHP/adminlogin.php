<?php
include "elements/db_connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   
    <title>Document</title>
</head>
<body style="background-color:#95B9C7; ">

<button  style="margin:20px 40px; ">
<a class="nav-link " href="/TriviaQuiz/index.php">Home</a></button>
    <div class="login-form text-center" style="border:solid black 2px; margin:150px 400px;background-color: #DCDCDC;">
        <h2 class="my-4">ADMIN LOGIN PANEL</h2>
        <form  method="POST">
            <div class="input-field my-2">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Admin Name" name="name">
            </div>
            <div class="input-field my-2">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
            </div>
           
            <button class="btn btn-primary my-1" type="submit" name="signin">Sign in</button>
        </form>
    </div>

    <?php
    if(isset($_POST['signin'])){
        $query = "SELECT * FROM `admin` WHERE `name`='$_POST[name]' AND `password`='$_POST[password]'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['admin_login_id']=$_POST['name'];
            header("location:admin1/index.php");
        }
        else {
            echo "<script>alert('Incorrect Password');</script>";
        }
    }
    
    ?>
</body>
</html>