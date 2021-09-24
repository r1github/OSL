<?php
include "db.php";?>

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


<button>
<a class="nav-link" href="/TriviaQuiz/quest/category.php">Home</a></button>
<div class="col-lg-8 text-center" style="margin-left:200px;">
<table class="table table-dark table-striped my-5">
<tr>
    <th colspan="2" class="bg-dark"><h1 class="text-white">Results</h1></th>
</tr>
<tr>
<td style="padding:2rem 2rem;"> 
    Total Score
</td>
<td>
<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $count = count($_POST['quizcheck']);
        
        $score = 0;
        $i=0;

        $selected = $_POST['quizcheck'];

        $sql= "Select * from queans where quiz_id= ".$_POST['quizz'];
        $result = mysqli_query($conn,$sql);

        while($row= mysqli_fetch_array($result)){
        
            $check = $row['correct'] == $selected[$i];
            if($check){
                $score++;
            }
            $i++;
        }
         echo '<br> your total score is '.$score .' out of '.$count; 
       
    } 
}
?>
</td>
</tr>
</table>
</div>
</body>
</html>

