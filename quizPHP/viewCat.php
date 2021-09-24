
<?php
$insert = false;
$update = false;
$delete = false;
// connecting to DataBase
$servername="localhost";
$username="root";
$password="";
$database="users";
// create a connection
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("Sorry Failed to connect --> " . mysqli_connect_error());
}

if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $delete=true;
    $sql = "DELETE FROM `categories` WHERE `sno` = $sno";
    $result = mysqli_query($conn,$sql);
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['snoEdit'])){
      $sno = $_POST["snoEdit"];
      $category = $_POST["ecategory"];
      $description = $_POST["descriptionEdit"];
  
    // update query
      $sql = "UPDATE `categories` SET `category` = '$category' , `description` = '$description' WHERE `categories`.`sno` = $sno";
      $result=mysqli_query($conn, $sql);
      if($result){
        $update = true;
      }
      else{
        echo "We could not update the record successfully";
      }
    }
    else{
      $category = $_POST["category"];
      $description = $_POST["description"];      
  }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    <title>Document</title>
</head>
<body>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/TriviaQuiz/viewCat.php" method="POST">
      <input type="hidden" name="snoEdit" id="snoEdit">
      <div class="mb-3">
        <label for="ecategory" class="form-label">Update Category</label>
        <input type="text" class="form-control" id="ecategory" name="ecategory" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Update Description</label>
        <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
      </div>
      <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <button type="submit" class="btn btn-primary">Update Note</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `categories`";
    $result=mysqli_query($conn,$sql);
    $sno = 0;
    while($row=mysqli_fetch_assoc($result)){
      $sno = $sno+1;
      echo "  <tr>
      <th scope='row'>" . $row['sno'] . "</th>
      <td>" . $row['category'] . "</td>
      <td>". $row['description'] ."</td>
      <td><button class='edit btn btn-sm btn-primary' id=". $row['sno'].">Edit</button>  <button class='delete btn btn-sm btn-primary' id=d". $row['sno'].">Delete</button></td>
    </tr>";
    }
    
    ?>

  </tbody>
</table>
</div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
    crossorigin="anonymous"></script>

    <script>
      edits = document.getElementsByClassName('edit');
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click",(e)=>{
          console.log("edit", );
          tr = e.target.parentNode.parentNode;
          category = tr.getElementsByTagName("td")[0].innerText;
          description =  tr.getElementsByTagName("td")[1].innerText;
          console.log(category,description);
          ecategory.value = category;
          descriptionEdit.value = description;
          snoEdit.value=e.target.id;
          console.log(e.target.id);
          $('#editModal').modal('toggle');
        })
      })

      deletes = document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element)=>{
        element.addEventListener("click",(e)=>{
          console.log("delete", );
          sno = e.target.id.substr(1,);
         
        if(confirm("Are you sure to delete a note!")){
          console.log("yes");
          window.location =`/TriviaQuiz/viewCat.php?delete=${sno}`;
          // TODO: Create a form and use POST request to submit a form
         } 
        else{
          console.log("no");
         }
        })
      })
    </script>
</body>
</html>