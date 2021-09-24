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

    <title>Welcome to Britannica</title>
  </head>
  <body>
  <?php require "elements/db_connect.php";?> 
  <?php require "elements/nav.php"; ?>

  <!-- search results  -->

<div class="Scontainer my-3">
    <h1>Search Result for <em>"<?php echo  $_GET['search'] ?>"</em></h1>   
    <div class="result py-5">
        <h3 style="color:purple; margin-left:-8px;"><a href="/categories/ddf" >click to this link for more!</a></h3>
        <p style="color:black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur libero quisquam explicabo fugit consequatur ut velit magni dolore? Repudiandae exercitationem at neque ducimus totam et architecto. Maxime quod ducimus explicabo!
        Maiores assumenda deleniti quidem itaque cum fugiat placeat eum voluptate cupiditate amet dolorum saepe eligendi culpa nam, voluptatibus earum illo excepturi neque consectetur, nihil ratione dignissimos minima impedit veritatis! Et.
        </p>
    </div>
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