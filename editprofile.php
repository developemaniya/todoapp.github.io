<?php 
include('conn.php');

if(isset($_POST['submit'])){

        $id = $_GET['edit'];
   
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "update logindata set fname='$fname', lname='$lname',username='$username',email='$email',password='$password' where id=$id";
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container register mt-5">
       <div class="row">
           <h2 class="text-center">Edit Your Profile</h1>
           <div class="col-md-6 m-auto">
             <form method="post" class="needs-validation" action="">
                <div class="mt-1">
                    <label for="" class="form-label">First_Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First_name" required>
                </div>
                <div class="mt-1">
                    <label for="" class="form-label">Last_Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last_Name" required>
                </div>
                <div class="mt-1">
                    <label for="" class="form-label">User_Name</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="User_Name" required>
                </div>
                <div class="mt-1">
                    <label for="" class="form-label">Email_id</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email_id" required>
                </div>
                <div class="mt-1">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
               
                   
                <button type="submit" class="btn btn-success mt-4" name="submit" id="submit">Edit_here</button>
                <button class="btn btn-light mt-4"><a href="login.php" class="text-black">Login_here</a></button>             
               
             </form>    
           </div>
       </div>
    </div>
    
</body>
</html>