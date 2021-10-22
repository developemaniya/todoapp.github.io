<?php 

include('conn.php');

if(isset($_GET['delete'])){
   
    $id = $_GET['delete'];
    
   
    $sql = "delete from data where id=$id";
    $result= mysqli_query($conn,$sql);

    if($result){
        header('location:todo.php');
    }else{
        echo "data not deleted";
    }
}

?>
