
<?php 
include "connect.php";
if(isset($_POST['submit']))
{
 $job_title=$_POST['job_title'];
 $experience=$_POST['experience'];
//  $password=$_POST['password'];
 $skills=$_POST['skills'];
 $salary=$_POST['salary'];
 $location=$_POST['location'];
 $summary=$_POST['summary'];
 





 $sql="insert into `admin`(job_title,experience,skills,salary,location,summary)values('$job_title','$experience','$skills','$salary','$location','$summary')";
  $result=mysqli_query($con,$sql);
  // print($result);
  // die();
  if($result){
    // echo"data inserted successfully";
    // die();
    header('location:job-post.php');
  }else{
    die(mysqli_error($con));
  }
}

?>




