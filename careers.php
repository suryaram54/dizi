
<?php
include "connect.php";
include "logic.php";
include "candaction.php";
// include "uplogic.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Careers_Dizitive IT Solutions</title>
  
  <meta name="description" content="Dizitive IT is a software provider of best in class integrated business, technology, service management and process solutions on a global delivery model">
  <meta name="keywords" content="software development company, software solutions, software technology, information technology services, software updates, software maintenance, application management, inventory management, hospital management, real-estate management, school management, best it company, intime delivery solutions, software company in india, software company in hyderabad, software company in vijayawada, software company in visakhapatnam, software company in vizag, software company in rajahmundry, software company in east godavari district, software company in andhrapradesh, software company in kakinada, software company in norway, software company in urope, software company in usa, best web development company in andhrapradesh, best web development company in rajahmundry, rajahmundry, kakinada, vizag, visakhapatnam, vijayawada, hyderabad, banglore, norway, east godavari">
  
  <link href="assets/img/dis-fav.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
		
</style>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <a href="index.html" class="logo mr-auto"><img src="assets/img/dizitiveit-solutions-logo6.png"> </a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="scrollto"><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="drop-down"><a href="#">Services</a>
                <ul>
                  <li><a href="mobile-application-development.html">Mobile Application Development</a></li>
                  <li><a href="enterprise-application-development.html">Enterprise Application Development</a></li>
                  <li><a href="enterprise-database-administration.html">Enterprise Data Base Administration</a></li>
                  <li><a href="web-development.html">Web Application Development</a></li>
                  <li><a href="aws-azure.html">AWS & Azure</a></li>
                  <li><a href="it-staff-augmentation.html">IT Staff Augmentation</a></li>
                </ul>
              </li>
              <li class="active"><a href="careers.html">Careers</a></li>
              <!--<li><a href="jobs.html">jobs</a></li>-->
              <li><a href="contact.html">Contact</a></li>
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
          <li><a href="index.html">Home</a></li>
          <li>Careers</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    
    <!-- ======= About Us Section ======= -->
    <section id="jobs" class="jobs" style="background:url(assets/img/hexbg3.jpg) no-repeat;">
      <div class="container" data-aos="fade-up">

        <div class="section-title" data-aos="fade-up">
          <h2>Join Our Team</h2>
        </div>
        
        <div class="row">
          <div class="col-lg-8 entries">
          
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
                    <!-- <a href="description.php?updateId='.$id.'">'.$job_title.'</a> -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#yModal">
    Open modal
  </button> -->
                      <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#yModal">Apply</a>
                      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> -->
    <!-- Open modal
  </button>
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
  </button>
                      <a href="adminupdate.php?updateid='.$id.'" class="text-light">update</a> -->
                      <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                    </p>
                  </td>
                </tr>
              </table>
              <?php endforeach;?>

            </article><!-- End job entry -->
            
            
            
          </div><!-- End job post entries list -->

          <div class="col-lg-4">
            <div class="sidebar">
			<h3 class="sidebar-title">Our Work Culture</h3>
              <div class="sidebar-item recent-posts">
                Update Soon...
              </div>
            </div>
          </div>
          <!-- End col-lg-4- -->

        </div>
		<!-- End row -->
        
      </div>
    </section><!-- End About Us Section -->

  </main>
  <!-- End #main -->



  
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Hyderabad<span>.</span></h3>
            <p>DIZITIVE IT SOLUTIONS<br>
              THE PLATINA,
              B 607, Gachibowli,<br>
              HYDERABAD-500032, Telangana, India</p><br>
            
            <h3>Banglore<span>.</span></h3>
            <p>
              DIZITIVE IT SOLUTIONS<br>
              Panacea Golden Nest, Varthur Main Road,
              Vinayaka Nagar, Gunjur,<br>
              BENGALURU-560087, Karnataka, India.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Rajahmundry<span>.</span></h3>
            <p>
              DIZITIVE IT SOLUTIONS<br>
              D.No : 4-408/AIII,<br>
              Balajipeta Road, Bommuru,<br>
              RAJAHMUNDRY-533124,<br>
              East Godavari Dist, <br>
              Andhra Pradesh, India.
            </p><br>

            <h3>Norway<span>.</span></h3>            
            <h3>Indonesia<span>.</span></h3>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="mobile-application-development.html">Mobile Application Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="enterprise-application-development.html">Enterprise Application Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="enterprise-database-administration.html">Enterprise Data Base Administration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="web-development.html">Web Application Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aws-azure.html">AWS & Azure</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="it-staff-augmentation.html">IT Staff Augmentation</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          	<h4>Site Map</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="careers.html">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="jobs.html">jobs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; 2022. <strong><span>Dizitive IT Solutions</span></strong>.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/DIZITIVE/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.linkedin.com/company/dizitiveit-solutions/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
        <a href="https://twitter.com/dizitive" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/js/main.js"></script>




  
  <div class="modal" id="yModal">
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
        <input type="text" class="form-control" placeholder="Name" name="name" >
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Mobole" name="mobile">
      </div>

      <div class="form-group">
        <!-- <label>Email</label> -->
        <input type="email" class="form-control" placeholder="Email ID" name="email" >
      </div>
      <div class="form-group">
        <!-- <label>skill </label> -->
        <input type="text" class="form-control" placeholder="skill Set Expertise" name="skill">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Current Location" name="location">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Total Exp" name="Texp">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Relevant Exp" name="Rexp">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Current CTC" name="CTC">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Expected CTC" name="ECTC">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Notice Period" name="NP">
      </div>
    
      <div class="form-group">
        <!-- <label>file</label> -->
        <input type="file" name="file" download>
      </div>
      <div class="form-group">
        <!-- <label>file</label> -->
        
        Offer Holding if Any: <input type="radio" name="offer" value="yes" >YES
        <input type="radio" name="offer"  value="no">NO

      </div>
      <button type="submit" name='submit'class="btn btn-primary">Submit</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>





</body>

</html>