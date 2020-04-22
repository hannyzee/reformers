
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("main/head.php");?>
</head>

<body>
  <!-- ======= Header ======= -->
  <header  id="header" class="fixed-top d-flex align-items-center ">
   <?php include ("main/header.php");?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
      	<img src="assets/img/intro-carouse/1.jpg" alt="">
          <h2 class="animated fadeInDown">Welcome to <span>The Reformation Kingdom Community</span></h2>
          <p class="animated fadeInUp">The refromation Kingdom community is a faith based organization,perfecting human, social and city wide tranformation.We adavance the kingdom of God through righteous and holy lifestyle,strong marraiages and families and rich community life,all built on the pattern of the kingdom </p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Our Ministerial Team</h2>
          <p class="animated fadeInUp">Our Ministerial team focuses on equipping students with moral priniciples and tools for navigating life. We are many people but one community,many culture but one people, we are many tribes but one big family in christ, </p>
          <a href="about.php" class="btn-get-started animated fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Our Ministers</h2>
          <p class="animated fadeInUp">Our Ministerial build and noture young men and women on values that represent our faith in our lord and savoir Jesus christ.</p>
          <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
 <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="about-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              The reformation kingdom community is a faith based organization, perfecting human, social and city wide transformaation our vision pillars are.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> We are impact makers</li>
              <li><i class="ri-check-double-line"></i> We promote ethical business practices and value based leadership</li>
              <li><i class="ri-check-double-line"></i> We equip men and women to take over thr seven mountains</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              The refromation Kingdom community is a faith based organization,perfecting human, social and city wide tranformation.We adavance the kingdom of God through righteous and holy lifestyle,strong marraiages and families and rich community life,all built on the pattern of the kingdom.
            </p>
            <a href="about-us.php" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    

 <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">kingdom</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-3 box box-bg">
            <i class="ion-ios-people-outline"></i>
            <h4 class="title">Community</h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-3 box">
            <i class="ion-ios-book-outline"></i>
            <h4 class="title">Word</h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
		  <div class="col-lg-3 box box-bg">
            <i class="ion-ios-hand-outline"></i>
            <h4 class="title">Worship</h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>
      </div>
    </section><!-- #featured-services -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
     <?php include("main/contact.php");?>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <?php include ("main/footer.php");?>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>