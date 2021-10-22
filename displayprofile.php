



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3 mb-4">All User Profiles</h1>
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <?php  
     include('conn.php');
          
          $sql = "select * from logindata";
          $res = mysqli_query($conn,$sql);
          while($ak= mysqli_fetch_assoc($res)){
          ?>
          <tr>
              <td><?php echo $ak['id']; ?></td>
              <td><?php echo $ak['fname']; ?></td>
              <td><?php echo $ak['lname']; ?></td>
              <td><?php echo $ak['username']; ?></td>
              <td><?php echo $ak['email']; ?></td>
              <td><?php echo $ak['password']; ?></td>
            <td><a href="editprofile.php?edit=<?php echo $ak['id'];?>" class="btn btn-success" >Edit_Profile</td>
            <td><a href="deleteprofile.php?delete=<?php echo $ak['id'];?>" class="btn btn-danger" >Delete_Profile</td>
          </tr>

 <?php  } ?>
</table>
    </div>
</body>
</html>