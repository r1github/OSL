<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   
    <title>Fact-O-Fiction</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<?php
  require "elements/nav.php";
  ?>

    <div class="container1">
      <div class="out_wrap">
        <div> <h5 style="background-color: rgb(3, 3, 61); color: white; text-align: center;">ENTERTAINMENT & POP CULTURE</h5></div>
        <div class="fact">
      <h2>Fact or Fiction: Nintendo</h2>
      <p>Can you pick out the facts from the fiction about everyone’s favorite family-friendly gaming company—or will it be Game Over?</p>
      <div>
        <a href="login.php"><button class="btn">Start This Quiz</button></a>
        <!-- <form action="quiz.html">
    <button class="btn" type="submit">S</button></form> -->
      </div>  
      <div>
        <p class="p1">You have 30 seconds to answer each question. The faster you answer, the higher your score. When you are done, try again to beat your best score!</p>
      </div>  
    </div>
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


     <!-- script section  -->
     <script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
     <script>
       $(document).ready(function(){
         $('.dropdown-toggle').dropdown()
       });
     </script>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
          
</body>
</html>