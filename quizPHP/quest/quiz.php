<?php
include "db.php";

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
    <title>Document</title>
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

    
<!-- card  -->
<div class="container">
<div class='row row-cols-1 row-cols-md-3 g-4 my-5' style='width:65rem; margin-left:5rem;'>
  
      <?php 

      if(isset($_GET['cid'])){
          $cat_id = $_GET['cid'];
      }
       $sql = "select categories.id, categories.name, quiz.qname, quiz.id as quiz_id from categories
       LEFT JOIN quiz 
       on quiz.category_id = categories.id
       where quiz.category_id={$cat_id}
       order by categories.id desc";

       $result = mysqli_query($conn, $sql) or die("Query Failed. : quiz");
       if(mysqli_num_rows($result)>0){
        $active = '';
        while($row  = mysqli_fetch_assoc($result)){
            if(isset($_GET['cid'])){
                if($row['id']==$cat_id){
                    $active = 'active';
                }else{
                    $active = '';
                }
            }
           
           
            echo "
           
            <div class='col my-4' style='display:inline-block; width:20rem;'>
            <div class='card h-100'>
            <div class='card-body'>
            <h5 class='card-title'>{$row['qname']}</h5>".
            "<a href='questions.php?cat_id=".$row['quiz_id']."' class = 'btn btn-primary'>PLAY</a></div></div></div>";   
         }
 } ?>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>