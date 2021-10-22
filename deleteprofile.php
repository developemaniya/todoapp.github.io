<?php 

include('conn.php');

if(isset($_GET['delete'])){
   
    $id = $_GET['delete'];
      
    $sql = "delete from logindata where id=$id";
    $result= mysqli_query($conn,$sql);

    if($result){
        header('location:displayprofile.php');
    }else{
        echo "data not deleted";
    }
}

?>
