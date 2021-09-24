<?php
include "db.php"
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
<body>
    <div class="container">
        <h2>welcome</h2>

<div class="col-lg-8 m-auto d-block my-5">  
<div class="card">
<h3>welcome</h3>
</div><br>


<form action="result.php" method='post'>
<?php

for($i=1; $i < 6; $i++){
    $sql="select quiz.id, quiz.qname, queans.question, queans.op1,queans.op2,queans.op3,queans.op4
    from quiz
    LEFT JOIN queans 
    on queans.quiz_id = quiz.id
    where queans.quiz_id=$i";

    // $sql = "select * from questions where qid=$i";
    $result = mysqli_query($conn, $sql) or die("Query Failed. : questions");
    while($row = mysqli_fetch_array($result)){
        echo "<div class='card'><h3>{$row['question']}</h3> </div> 
        <div class='card-body'><input type='radio' value={$row['op1']}></div>   
         ";
         
        
    }
}
?>

<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
</form>
</div>
 </div>
 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
         
</body>
</html>