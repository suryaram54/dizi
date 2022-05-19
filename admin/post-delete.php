<?php
 include 'connect.php';
 if(isset($_GET['id'])){
   $id=$_GET['id'];
   $sql="delete from `admin` where id=$id";
   $result=mysqli_query($con,$sql);
 if($result){
  //  echo "deleted successfully";
   header('location:job-post.php');

 }else{
   die(mysqli_error($con));
 }
   
 }

?>
