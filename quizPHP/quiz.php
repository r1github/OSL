<?php
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
    <link rel="stylesheet" href="style.css">
    <title>Quizz</title>
    
</head>
<body>
  <?php require "elements/nav.php"?>
  <h1>Welcome  <?php echo $_SESSION['username'] ?></h1>
    <div class="container2">
     
        <header>
            <div class="timer">
                <div class="time_text">Time Left</div>
                <div id="timer_sec">15</div>
            </div>
            
            <!-- <div id="showScore" class="scoreArea reload"> </div>-->
              <button id="reload" class="showScore">NEXT</button> 
            </header>
            <div class="hh4">
              
                <div class = "divv" style="background-color: black;"><h4 style="color:white;">FACT OR FICTION: NINTENDO</h4>
                </div>  
                <div id="nishi">
                  <p class="quiz" id="nis" style="color: black; font-size: 1.5rem;">Nintendo was founded in 19th-century Japan and started out by making playing cards.</p>
                </div>
                   
            </div>
            <div class="g grid disable-all" >
                <div class="col-100 col-sm-50 pb-20">
                   <button class="nbtn" name="choice" type="submit" id="submit">
                    <h3>TRUE</h3> 
                   </button>  
                </div>
                <div class="col-100 col-sm-50 pb-20">
                    <button class="nbtn2" name="choice" type="submit" id="submit">
                    <h3>FALSE</h3>
                </button>
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

     

     <script src="questions.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
          
</body>
</html>