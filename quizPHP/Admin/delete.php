<?php

// connecting to DataBase
$servername="localhost";
$username="root";
$password="";
$database="quiz";
// create a connection
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("Sorry Failed to connect --> " . mysqli_connect_error());
}

$id=$_GET['id'];
$sql="DELETE FROM `quiz` WHERE id=$id";
$result = mysqli_query($conn,$sql);
header('location:quiz.php')
  ?>