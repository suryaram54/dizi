<?php 
include "connect.php";
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
//  $password=$_POST['password'];
 $mobile=$_POST['mobile'];
 $skill=$_POST['skill'];
 $location=$_POST['location'];
 $Texp=$_POST['Texp'];
 $Rexp=$_POST['Rexp'];
 $CTC=$_POST['CTC'];
 $ECTC=$_POST['ECTC'];
 $NP=$_POST['NP'];
 $offer=$_POST['offer'];



///file
$pname=rand(1000,10000)."_".$_FILES["file"]["name"];
$tname=$_FILES["file"]["tmp_name"];
$upload_dir='./images';
move_uploaded_file($tname,$upload_dir.'/'.$pname);


///file

 $sql="insert into `crud`(name,email,mobile,skill,location,Texp,Rexp,CTC,ECTC,NP,offer,file)values('$name','$email','$mobile','$skill','$location','$Texp','$Rexp','$CTC','$ECTC','$NP','$offer','$pname')";
  $result=mysqli_query($con,$sql);
  // print($result);
  // die();
  if($result){
    // echo"data inserted successfully";
    // die();
    header('location:careers.php');
  }else{
    die(mysqli_error($con));
  }
}

?>

