<?php 

include('conn.php');
 if(isset($_POST['submit'])){
    $id = $_GET['edit'];
    
   
  $title = $_POST['title'];
  $desc = $_POST['description'];
 
  $sql = "update data set title='$title', description='$desc' where id=$id";
  $result = mysqli_query($conn,$sql);

  if($result){
    echo 'edit sucessfully';
  }else{
    echo 'failed to edit values';
  }


 }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Welcome Your Todo List</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="navbar.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="todo.php">Create_Todo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
          </div>
        </div>
      </nav>

  <!--navbar end-->
   
 
   <div class="container todo_app">
          <form method="post" action="">
          <div class="mb-3 mt-5">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control"  id="desc" name="description" rows="3" placeholder="Description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit" id="submit">Save_Todo</button>  
          </form>    
       
      
       <!-- container close-->
   </div>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>