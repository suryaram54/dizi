<?php 
include "connect.php";

$sql="select * from admin";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
?>
<?php
// $job_title=$row['job_title'];
// $experience=$row['experience'];
// $skills=$row['skills'];
// $salary=$row['salary'];
// $location=$row['location'];
// $summary=$row['summary'];

// include "job-post.php";
// $id=$_GET['id'];
// print_r($id);
// die();
if(isset($_GET['id'])){
  $id=$_GET['id'];
$sqll="select * from `admin` where id=$id";
$result=mysqli_query($con,$sqll);
$row=mysqli_fetch_assoc($result);
$job_title=$row['job_title'];
$experience=$row['experience'];
$skills=$row['skills'];
$salary=$row['salary'];
$location=$row['location'];
$summary=$row['summary'];
}
if(isset($_POST['submit']))
{
 $job_title=$_POST['job_title'];
 $experience=$_POST['experience'];
 $skills=$_POST['skills'];
 $salary=$_POST['salary'];
 $location=$_POST['location'];
 $summary=$_POST['summary'];

 

 $sql="update `admin` set id=$id,job_title='$job_title',experience='$experience',skills='$skills',salary='$salary',location='$location',summary='$summary' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo"data inserted successfully";
    header('location:job-post.php');
  }else{
    die(mysqli_error($con));
  }
}

?>
