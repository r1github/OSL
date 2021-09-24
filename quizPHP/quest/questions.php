<?php
include 'db.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="newquizz.css" class="href">
    <title>Welcome</title>
</head>
<body style="background-color:#95B9C7;">



<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;
}
else{
  $loggedin=false;
}

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">🏆️Britannica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        ';
        if($loggedin){
          echo  '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/TriviaQuiz/quiz.php">Home</a>
        </li> 
          <li class="nav-item">
          <a class="nav-link" href="/TriviaQuiz/logout.php">Logout</a>
        </li>';
        } 
        
     echo '</ul>
      <form class="d-flex" method="get" action="search.php">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> ';
?>


    <div class="container">
    <div class="head">
        <header>
            <div class="timer">
                <div class="time_text">Time Left</div>
                <div id="timer_sec">15</div>
            </div>
        </header>
    </div>
        <h2 class="text-center">Welcome <?php echo $_SESSION['username'] ?></h2>

<div class="col-lg-8 m-auto d-block my-5">  

<h3 class="text-center">Try to attempt all the questions! All the best👍</h3>
<br>


<form action="result.php" method='post'>
<?php
    $sql = "select * from queans where quiz_id =".$_GET['cat_id'];
    $i = 0;

    $result = mysqli_query($conn, $sql) or die("Query Failed. : questions");
    while($row = mysqli_fetch_array($result)){
        ?>

        <div class="card"> <h3 class="card-header"> <?php
        echo $row['question'];
        ?></h3>

            <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $i ?>]" value="<?php echo $row['op1']; ?>">
            <?php echo $row['op1'] ?>
            </div>
            <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $i ?>]" value="<?php echo $row['op2']; ?>">
            <?php echo $row['op2'] ?>
            </div>
            <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $i ?>]" value="<?php echo $row['op3']; ?>">
            <?php echo $row['op3'] ?>
            </div>
            <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $i ?>]" value="<?php echo $row['op4']; ?>">
            <?php echo $row['op4'] ?>
            </div>
          
<?php
$i = $i+1;
}


?>
<input type="hidden" name="quizz" value="<?php echo $_GET['cat_id']; ?>">
<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
</form>
</div>
 </div>
 </div>

 <script>
var seconds =60, 
$seconds= document.querySelector("#timer_sec");
(function countdown(){
    $seconds.textContent = seconds + (seconds==0 ? '' : 's')
    if(seconds --> 0)
    setTimeout(countdown,1000)
})();
 </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
         
</body>
</html>