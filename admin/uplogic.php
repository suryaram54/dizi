<?php 
 include "connect.php";
    $sql="select * from crud";
    $result=mysqli_query($con,$sql);
    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        // print_r($id);
        // die();

   $job_title=$row['job_title'];
 
   
  //  echo'
  //  <ul><li><a href="description.php?updateId='.$id.'">'.$job_title.'</a></p></li></ul>
  //  ';
       }
      }
     
?>