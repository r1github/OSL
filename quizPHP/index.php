<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<!-- <script src="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/owl.carousel.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css"> -->
</head>

<body>
  <?php
  require "elements/nav.php";
  ?>

    <!-- body content  -->
<h1>Quizzes</h1><br><hr>
    <div class="container">
<h3>Browse Quizzes by Category</h3>
<div class="anchor">
    <ul class="list">
        <li><a href="login.php">ENTERTAINMENT & POP CULTURE</a></li>
        <li><a href="login.php">GEOGRAPHY & TRAVEL</a></li>
        <li><a href="login.php">HEALTH & MEDICINE</a></li>
        <li><a href="login.php">LIFESTYLES & SOCIAL ISSUES</a></li>
        <li><a href="login.php">LITERATURE</a></li>
        <li><a href="login.php">PHILOSOPHY & RELIGION</a></li>
        <li><a href="login.php">POLITICS, LAW & GOVERNMENT</a></li>
        <li><a href="login.php">SCIENCE</a></li>
        <li><a href="login.php">SPORTS & RECREATION</a></li>
        <li><a href="login.php">TECHNOLOGY</a></li>
        <li><a href="login.php">VISUAL ARTS</a></li>
        <li><a href="login.php">WORLD HISTORY</a></li>
    </ul>
    
</div>
    </div>
<div class="containers">


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active row">
            <div class="a col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="entertainment">
            <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">ENTERTAINMENT & POP CULTURE</h6></a>
            </div>
            <div class="b col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="mario">
              <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">GEOGRAPHY & TRAVEL</h6></a>
            </div>
            <div class="c col-lg-4"> <img src="pics/ent.jpg" class="d-block w-100" alt="mario">
            <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">HEALTH & MEDICINE</h6></div></a>
            <div class="a col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="entertainment">
            <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">
              LIFESTYLES & SOCIAL ISSUES
            </h6></div></a>
            <div class="b col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="mario">
            <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">
              LITERATURE
            </h6></div></a>
            <div class="c col-lg-4"> <img src="pics/ent.jpg" class="d-block w-100" alt="mario">
            <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">PHILOSOPHY & RELIGION</h6></div></a>
           
          </div>

          <div class="carousel-item">
            <div class="a col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="entertainment">
            <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">ENTERTAINMENT & POP CULTURE</h6>
              </div></a>
              <div class="b col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="mario">
                <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">GEOGRAPHY & TRAVEL</h6>
              </div></a>
              <div class="c col-lg-4"> <img src="pics/ent.jpg" class="d-block w-100" alt="mario">
              <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">HEALTH & MEDICINE</h6></div></a>
              <div class="a col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="entertainment">
              <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">
                LIFESTYLES & SOCIAL ISSUES
              </h6></div></a>
              <div class="b col-lg-4"><img src="pics/ent.jpg" class="d-block w-100" alt="mario">
              <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">
                LITERATURE
              </h6></div></a>
              <div class="c col-lg-4"> <img src="pics/ent.jpg" class="d-block w-100" alt="mario">
              <a href="fact-o-fiction.php"><h6 style="padding: 10px 0; margin-top: -30px;">PHILOSOPHY & RELIGION</h6></div></a>
           
          </div> 
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="false"></span>
          <span class="visually-visible">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="false"></span>
          <span class="visually-visible">Next</span>
        </button>
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

    <!-- script  -->

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