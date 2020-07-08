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
			<h2>Recipe</h2>
		</div>
	</section>
	<!-- Hero section end -->



	<br>
	<br>
	<br>



	<!-- Recipe big view -->
	<div class="recipe-view-section">
		<div class="rv-warp set-bg" data-setbg="{{$restorant->image}}"></div>
	</div>

	<!-- Recipe details section -->
	<section class="recipe-details-section">
		<div class="container">
			<div class="recipe-meta">
				<div class="racipe-cata">
					<span>{{$restorant->state}}</span>
				</div>
				<br>
				<h2>{{$restorant->name}}</h2>

			</div>
		<br>
				<div class="col-lg-12">
					<ul class="recipe-info-list">
						<h4>Description : {{$restorant->desc}}</h4><br><br>
						<h4>Time : {{$restorant->time}}</h4><br><br>
						<h4>Location : {{$restorant->location}}</h4><br><br>
						<h4>State : {{$restorant->state}}</h4><br><br>
						<h4>
						Rate : 
						@if($restorant->rate == "1")
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						@elseif($restorant->rate == "2")
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						@elseif($restorant->rate == "3")
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						@elseif($restorant->rate == "4")
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						@elseif($restorant->rate == "5")
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color: #e6e63f;"></i>
						@endif
						</h4><br><br>
					</ul>
				</div>
			</div>
	</section>
	<!-- Recipe details section end -->






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
</body>
</html>