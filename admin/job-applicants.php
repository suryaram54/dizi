<?php
include "connect.php";
include "logic.php";
// include "candaction.php";
include "uplogic.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job Applicants</title>
  
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
              <li><a href="job-applicants.html">JOB APPLICANTS</a></li>
              <li><a href="#">POST A NEW JOB</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
  
  
  <!-- ======= End Hero Section ======= -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container" align="right">
        <ol>
          <li><a href="../index.html">Home</a></li>
          <li>Job Applicants</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->
    
         
    <!-- ======= About Us Section ======= -->
    <section id="jobs" class="jobs" style="background:url(../assets/img/hexbg3.jpg) no-repeat;">
      <div class="container-fluid" data-aos="fade-up">

        <!--<div class="section-title" data-aos="fade-up">
          <h2>Job Posts</h2>
        </div>-->
        
        <div class="row">
          <div class="col-lg-12 entries">
          
            <article class="entry">
              <table class="table table-striped table-responsive">
                <thead style="background:#099; color:#FFF;">
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>E-MAIL</th>
                  <th>MOBILE</th>
                  <th>SKILLS</th>
                  <th>CURRENT LOCATION</th>
                  <th>TOTAL EXPERIENCE</th>
                  <th>RELEVANT EXPERIENCE</th>
                  <th>CURRENT CTC</th>
                  <th>EXPECTED CTC</th>
                  <th>NOTICE PERIOD</th>
                  <th>RESUME</th>
                  <th>OFFERS IF ANY</th>
                  <th>APPLIED DATE</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($files as $file): ?>

                <tr>
                  <td><?php echo $file['id']; ?></td>
                  <td><?php echo $file['name']; ?></td>
                  <td><?php echo $file['email']; ?></td>
                  <td><?php echo $file['mobile']; ?></td>
                  <td><?php echo $file['skill']; ?></td>
                  <td><?php echo $file['location']; ?></td>
                  <td><?php echo $file['Texp']; ?></td>
                  <td><?php echo $file['Rexp']; ?></td>
                  <td><?php echo $file['CTC']; ?></td>
                  <td><?php echo $file['ECTC']; ?></td>
                  <td><?php echo $file['NP']; ?></td>
                  <td><?php echo $file['file']; ?></td>
                  <td><?php echo $file['offer']; ?></td>
                  <td><?php echo $file['id']; ?></td>
                </tr>
                <?php endforeach;?>

                </tbody>
              </table> 
            </article><!-- End job entry -->
            
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