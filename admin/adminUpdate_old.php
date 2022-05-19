<?php 
    $sql="select * from crud";

    $result=mysqli_query($con,$sql);
    // $files = $_GET['file'];

    if($result){
       while($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];
   $name=$row['name'];
   $email=$row['email'];
   $mobile=$row['mobile'];
    
   $skill=$row['skill'];
   $location=$row['location'];
   $Texp=$row['Texp'];
   $Rexp=$row['Rexp'];

   $CTC=$row['CTC'];
   $ECTC=$row['ECTC'];
   $NP=$row['NP'];
   $offer=$row['offer'];
   $file=$row['file'];
  //  print_r($file);
  //  die();
  //  print( $image);
  //  die();
  //  echo "<img src='images/".$row['imagename']."' >";   

  

       }

    }
    
    
    
    
    ?>