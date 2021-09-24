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
      if(!$loggedin){
        
       echo ' <li class="nav-item">
       <a class="nav-link active" aria-current="page" href="/TriviaQuiz/index.php">Home</a>
       <li class="nav-item">
          <a class="nav-link" href="/TriviaQuiz/login.php">Login</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/TriviaQuiz/signup.php">SignUp</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/TriviaQuiz/adminlogin.php">Admin</a>
      </li>
       ';}

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
