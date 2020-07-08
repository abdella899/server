<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food Blog - Web Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="returnToHome" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<ul class="main-menu">
					<li><a href="returnToHome">Receipies</a></li>
					<li><a href="bestRestorant">Best restaurants</a></li>
					<li><a href="about">About Us</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</section>
	<!-- Hero section end -->




	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4>Leave a comment</h4>

						<form class="contact-form" method="GET" action="storeContact">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="name" placeholder="Name" required>
								</div>
								<div class="col-md-6">
									<input type="email" name="email" placeholder="E-mail" required>
								</div>
								<div class="col-md-12">
									<input type="text" name="title" placeholder="Title" required>
									<textarea name="message" placeholder="Message" required></textarea>
									<button class="site-btn">Send</button>
								</div>
							</div>
						</form>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="contact-info">
						<ul class="ct-list">
							<li>
								<h6>Address:</h6>
								<p>481 Creekside Lane Avila</p>
								<p>Beach, CA 93424</p>
							</li>
							<li>
								<h6>Phone:</h6>
								<p>+53 345 7953 32453</p>
								<p>+53 345 7557 822112</p>
							</li>
							<li>
								<h6>Email:</h6>
								<p>yourmail@gmail.com</p>
							</li>
						</ul>
						<div class="contact-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
</div>

			<br>
			<br>
			<br>

	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<li><a href="returnToHome">Receipies</a></li>
						<li><a href="bestRestorant">Best restaurants</a></li>
						<li><a href="about">About Us</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Food Blog <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="javascript:void(0)"> Abdella Ehab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc"></script>
	<script src="js/map.js"></script>
	
</body>
</html>