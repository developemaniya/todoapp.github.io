<?php  
include('conn.php');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from logindata where email='$email'";
    $result = mysqli_query($conn,$sql);
    
    $total= mysqli_num_rows($result);
    echo $total;

    if($total === 1){
        header('location:todo.php');
    }else{
        echo "login failed";
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
    <div class="container mt-5">
       <div class="row">
           <h2 class="text-center">Login Form</h1>
           <div class="col-md-6 m-auto">
             <form method="post" class="needs-validation" action="">
                <div class="mt-1">
                    <label for="" class="form-label">Email_id</label>
                    <input type="email" class="form-control" id="title" name="email" placeholder="Email_id" required>
                </div>
                <div class="mt-1">
                    <label for="" class="form-label">Password</label>
                    <input type="text" class="form-control" id="title" name="password" placeholder="Password" required>
                </div>               
                <button type="submit" class="btn btn-success mt-4" name="submit" id="submit">Login_Here</button>
                <button class="btn btn-primary mt-4"><a href="register.php" class="text-white btr">Back_To_Register</button>
             </form>    
           </div>
       </div>
    </div>
    
</body>
</html>