<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>InfoLaptop</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

		<div class="header">
			<a href="/">Welcome</a>
		</div>

		<?php if( !empty($user) ): ?>

			<br /> <?= $user['email']; ?> 
			<br /><br />
			<br /><br />

			<!-- ======= Header ======= -->
			<header id="header" class="fixed-top header-transparent">
		<div class="container">
			
		<div class="logo float-left">
			<a href="index.php"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
		</div>

		<nav class="nav-menu float-right d-none d-lg-block">
			<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="laptops.html">Laptops</a></li>
			<li><a href="testing.html">Testing</a></li>          
			<li><a href="wheretobuy.html">Where to Buy</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex justify-cntent-center align-items-center">
		<div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

		<!-- Slide 1 -->
		<div class="carousel-item active">
			<div class="carousel-container">
			<h2 class="animated fadeInDown">Welcome to <span>InfoLaptop</span></h2>
			<p class="animated fadeInUp">Here at InfoLaptop we specialize in research and specification testing of any brand of laptops, We provide you with the
				most up to date and accurate data and best offers on where to source the laptop you want. We research and find the best laptops of any brand chains. 
				InfoLaptop offers the oppurtinity to help you find what you are looking for and the specific information that would be valuable to you.
			</p>
			</div>
		</div>

		<!-- Slide 2 -->
		<div class="carousel-item">
			<div class="carousel-container">
			<h2 class="animated fadeInDown">About US</h2>
			<p class="animated fadeInUp">InfoLaptop is a laptop enthusiast place. With the help of our professional team, you will find that you want.
				We like to help our customers and provide them with the best experince with our services. We are professional and we do our jobs with the upmost care.
			</p>
			<a href="about.html" class="btn-get-started animated fadeInUp">Read More</a>
			</div>
		</div>

		<!-- Slide 3 -->
		<div class="carousel-item">
			<div class="carousel-container">
			<h2 class="animated fadeInDown">Our Services</h2>
			<p class="animated fadeInUp">We provide many services such as Laptops research, specification and testing and sourcing options.
				We showcase the top brands of laptop with their specifications, designs, performace and quality .</p>
			<a href="services.html" class="btn-get-started animated fadeInUp">Read More</a>
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
	</section><!-- End Hero -->

	<!-- ======= Features Section ======= -->
		<section class="features">
		<div class="container">

			<div class="section-title">
			<h2>Features</h2>
			<p>These are our main features and focus, to ensure our customers have the best quality services and a 
				good relatioship with us. </br>We like to tend to our cutomers need as much as we possibly can.</p>
			</div>
			</br>

			<div class="row" data-aos="fade-up">
			<div class="col-md-5">
				<img src="assets/img/features-1.svg" class="img-fluid" alt="">
			</div>
			<div class="col-md-7 pt-4">
				<h3>We test and perform checks on each laptop to attain as much information as possible.</h3>
				<p class="font-italic">
				To showcase top brand laptops, we take our research very seriously to ensure our customers understand what they want and need.
				</p>
				<ul>
				<li><i class="icofont-check"></i> Research and analysis on each Product.</li>
				<li><i class="icofont-check"></i> Quality of data and accuracy.</li>
				</ul>
			</div>
			</div>

			<div class="row" data-aos="fade-up">
			<div class="col-md-5 order-1 order-md-2">
				<img src="assets/img/features-2.svg" class="img-fluid" alt="">
			</div>
			<div class="col-md-7 pt-5 order-2 order-md-1">
				<h3>We make sure the information we provide is accurate.</h3>
				<p>
				We must have the most accurate and up to date infomation on each and every laptop. 
				This will allow our cutomers to know the specifications to what they want and need.
				Once they know what each laptops capabilities are then, they can decide if its suitable for them or not.
				</p>
			</div>
			</div>

			<div class="row" data-aos="fade-up">
			<div class="col-md-5">
				<img src="assets/img/features-3.svg" class="img-fluid" alt="">
			</div>
			<div class="col-md-7 pt-5">
				<h3>We compare our results with many other testers.</h3>
				<p>For our data to be valuable to our cutomers, it has to be uniqe and easy to understand.</p>
				<ul>
				<li><i class="icofont-check"></i> First we compare our result with other tester to see if our data have any similarities or differnces with other results.</li>
				<li><i class="icofont-check"></i> We summarise and point out the most important key data that is of value.</li>
				<li><i class="icofont-check"></i> We then put all the important information and construct them in a way where all our customers would be able to understand easily.</li>
				</ul>
			</div>
			</div>

			<div class="row" data-aos="fade-up">
			<div class="col-md-5 order-1 order-md-2">
				<img src="assets/img/features-4.svg" class="img-fluid" alt="">
			</div>
			<div class="col-md-7 pt-5 order-2 order-md-1">
				<h3>We keep track of all the data so that our information always up to date.</h3>
				<p>
				To stay up to date with all the top brand chain laptops, we follow and track all the infomations of each laptops. 
				This means that if anything changes with each specific laptop, we would be able to update our data for our cutomers very fast.
				</p>
			</div>
			</div>

		</div>
		</section><!-- End Features Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

		<div class="footer-top">
		<div class="container">
			<div class="row">

			<div class="col-lg-3 col-md-6 footer-links">
				<h4>Useful Links</h4>
				<ul>
				<li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
				<li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
				<li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-6 footer-links">
				<h4>Our Services</h4>
				<ul>
				<li><i class="bx bx-chevron-right"></i> <a href="testing.html">Research and Testing</a></li>
				<li><i class="bx bx-chevron-right"></i> <a href="laptops.html">Laptops</a></li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-6 footer-contact">
				<h4>Contact Us</h4>
				<p>
				Galway City <br>
				Galway<br>
				Ireland<br><br>
				<strong>Phone:</strong> +1 5589 55488 55<br>
				<strong>Email:</strong> infolaptop@gmail.com<br>
				</p>

			</div>

			<div class="col-lg-3 col-md-6 footer-info">
				<div class="social-links mt-3">
				<a href="https://twitter.com/explore" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="https://ie.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
			</div>

			</div>
		</div>
		</div>

		<div class="container">
		<div class="copyright">
			&copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
			
		</div>
		<div class="credits">
			<!-- All the links in the footer should remain intact. -->
			<!-- You can delete the links only if you purchased the pro version. -->
			<!-- Licensing information: https://bootstrapmade.com/license/ -->
			<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			<p style="color:rgb(219, 48, 48)">THIS IS A STUDENT PROJECT WEBSITE AND WILL NOT BE FOR PERSONAL USE, ALL INFORMATION IS FICTIONAL</p>
			<a href='https://www.logodesign.net/image/futuristic-text-6623ld'>Logo source Logodesign.net</a>
		</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counterup/counterup.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

	
		<a href="logout.php">Logout?</a>

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>

</body>
</html>