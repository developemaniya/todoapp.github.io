<?php  

$conn=mysqli_connect('localhost','root','','todo_list');
 if($conn){
     echo "";
 }else{
     echo 'connection faield';
 }

?>