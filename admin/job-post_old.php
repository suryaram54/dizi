<?php
include "connect.php";
include "logic.php";
include "adminUpdate.php";
include "post-job.php";
include "update.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job Posts</title>
  
  <meta name="description" content="Dizitive IT is a software provider of best in class integrated business, technology, service management and process solutions on a global delivery model">
  <meta name="keywords" content="software development company, software solutions, software technology, information technology services, software updates, software maintenance, application management, inventory management, hospital management, real-estate management, school management, best it company, intime delivery solutions, software company in india, software company in hyderabad, software company in vijayawada, software company in visakhapatnam, software company in vizag, software company in rajahmundry, software company in east godavari district, software company in andhrapradesh, software company in kakinada, software company in norway, software company in urope, software company in usa, best web development company in andhrapradesh, best web development company in rajahmundry, rajahmundry, kakinada, vizag, visakhapatnam, vijayawada, hyderabad, banglore, norway, east godavari">
  
  <link href="../assets/img/dis-fav.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style></style>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <a href="../index.html" class="logo mr-auto"><img src="../assets/img/dizitiveit-solutions-logo6.png"> </a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="scrollto"><a href="job-posts.html">JOB POSTS</a></li>
              <li><a href="#">POST A NEW JOB</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
  <!--  -->


  <?php 
    $sql="select * from admin";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];

   $job_title=$row['job_title'];
   $experience=$row['experience'];
   $skills=$row['skills'];
    
   $salary=$row['salary'];
   $location=$row['location'];
   $summary=$row['summary'];
       }
      }
  
  //  print( $image);
  //  die();
  //  echo "<img src='images/".$row['imagename']."' >";   
?>




  
   
  <div class="modal" id="sModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <?php 
    $sql="select * from admin";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];
   $job_title=$row['job_title'];
   $experience=$row['experience'];
   $skills=$row['skills'];
    
   $salary=$row['salary'];
   $location=$row['location'];
   $summary=$row['summary'];
       }
      }
  
  //  print( $image);
  //  die();
  //  echo "<img src='images/".$row['imagename']."' >";   
?>
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <!-- <label>Name</label> -->
        <input type="text" class="form-control" placeholder="job_title" name="job_title" name=<?php echo $job_title; ?> >
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Experience" name="experience">
      </div>

      <div class="form-group">
        <!-- <label>Email</label> -->
        <input type="text" class="form-control" placeholder="Skills" name="skills" >
      </div>
      <div class="form-group">
        <!-- <label>skill </label> -->
        <input type="text" class="form-control" placeholder="Salary" name="salary">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Location" name="location">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <textarea rows = "4" cols = "67" name = "summary">
          
         </textarea>
      </div>
      
      <button type="submit" style="text-align:center  !important"name='submit'class="btn btn-primary" >Submit</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- for update mondal -->
<div class="modal" id="DModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <!-- <label>Name</label> -->
        <input type="text" class="form-control" placeholder="job_title" name="job_title" >
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Experience" name="experience">
      </div>

      <div class="form-group">
        <!-- <label>Email</label> -->
        <input type="text" class="form-control" placeholder="Skills" name="skills" >
      </div>
      <div class="form-group">
        <!-- <label>skill </label> -->
        <input type="text" class="form-control" placeholder="Salary" name="salary">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Location" name="location">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <textarea rows = "4" cols = "67" name = "summary">
          
         </textarea>
      </div>
      
      <button type="submit" style="text-align:center  !important"name='submit'class="btn btn-primary" >Update</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- end update mondal -->
  <!-- ======= End Hero Section ======= -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container" align="right">
        <ol>
          <li><a href="../index.html">Home</a></li>
          <li>Job Posts</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="jobs" class="jobs" style="background:url(../assets/img/hexbg3.jpg) no-repeat;">
      <div class="container" data-aos="fade-up">

        <!--<div class="section-title" data-aos="fade-up">
          <h2>Job Posts</h2>
        </div>-->
        
        <div class="row">
          <div class="col-lg-12 entries">
          <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#sModal">Post New job</a>

            <article class="entry">
            
            <?php foreach ($files as $file): ?>

              <div class="col-lg-6" style="float:left; background:#099;">
              	<h2 class="entry-title"><?php echo $file['job_title']; ?></h2>
              </div>
              <div class="col-lg-6 pdate">Posted Date: <span>17-5-2022</span></div>
              
              <table class="table">
                <tr>
                    <td>Experience:</td><td><?php echo $file['experience']; ?></td>
                </tr>
                <tr>
                    <td>Skills:</td><td><?php echo $file['skills']; ?></td>
                </tr>
                <tr>
                    <td>Salary:</td><td><?php echo $file['salary']; ?></td>
                </tr>
                <tr>
                    <td>Location:</td><td><?php echo $file['location']; ?></td>
                </tr>
                <tr>
                    <td>Summery:</td><td><?php echo $file['summary']; ?> </td>
                </tr>
                <tr>
                  <td colspan="2">




                    <p align="right">
                      <?php 
                      
                      ?>

                    
                      <a href="update.php? id=<?php echo $file['id']?>" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#DModal">Update</a>
                      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> -->
    <!-- Open modal
  </button>
                      <a href="adminupdate.php?updateid='.$id.'" class="text-light">update</a> -->
                      <a href="post-delete.php? id=<?php echo $file['id']?>"class="btn btn-danger">Delete</a>
                    </p>
                  </td>
                </tr>
              </table>
              <?php endforeach;?>

            </article><!-- End job entry -->
            
            <!-- <article class="entry">
              <div class="col-lg-6" style="float:left; background:#099;">
              	<h2 class="entry-title">UI Developer</h2>
              </div>
              <div class="col-lg-6 pdate">Posted Date: <span>17-5-2022</span></div>
              
              <table class="table">
                <tr>
                    <td>Experience:</td><td>3 Years</td>
                </tr>
                <tr>
                    <td>Skills:</td><td>HTML 5, CSS 3, Bootstrap 5, JavaScript, JQuery, Photoshop, Wordpress</td>
                </tr>
                <tr>
                    <td>Salary:</td><td>Best in the Industry</td>
                </tr>
                <tr>
                    <td>Location:</td><td>Hyderabad</td>
                </tr>
                <tr>
                    <td>Summery:</td><td>Similique neque nam consequuntur ad non maxime aliquam quas.</td>
                </tr>
                <tr>
                  <td colspan="2">
                    <p align="right">
                      <a href="#" class="btn btn-info">Update</a>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </p>
                  </td>
                </tr>
              </table>
            </article>End job entry -->
            
          </div><!-- End job post entries list -->

        </div>
		<!-- End row -->
        
      </div>
    </section><!-- End About Us Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; 2022. <strong><span>Dizitive IT Solutions</span></strong>.
        </div>
      </div>
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <script src="../assets/js/main.js"></script>

</body>

</html>
