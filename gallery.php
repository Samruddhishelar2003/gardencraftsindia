<?php
include('header.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Garden - Gallery</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="manifest" href="site.html">
	<link rel="apple-touch-icon" href="icon.html">
	<!-- Place favicon.ico in the root directory -->

	<!-- bootstrap v4.0.0 -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- fontawesome-icons css -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- themify-icons css -->
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<!-- elegant css -->
	<link rel="stylesheet" href="assets/css/elegant.css">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- venobox css -->
	<link rel="stylesheet" href="assets/css/venobox.css">
	<!-- jquery-ui.min css -->
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<!-- slick css -->
	<link rel="stylesheet" href="assets/css/slick.css">
	<!-- slick-theme css -->
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<!-- helper css -->
	<link rel="stylesheet" href="assets/css/helper.css">
	<!-- style css -->
	<link rel="stylesheet" href="style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<style>* {
  margin: 0;
  padding: 0;
}
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}
.portfolio {
  display: flex;
  flex-wrap: wrap;
  min-width: 320px;
}

.portfolio h2 {
  flex-basis: 100%;
  text-align: center;
  margin: 50px auto 30px;
  text-transform: uppercase;
  font-size: 20px;
  letter-spacing: 2px;
  color: #111;
}
.card {
  width: 25%;
  overflow: hidden;
  position: relative;
}
.card .content {
  z-index: 2;
  width: 100%;
  position: absolute;
  bottom: -100px;
  transition: all 0.7s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  box-sizing: border-box;
  min-height: 100px;
  background: #111;
}
.card .image {
  z-index: 1;
  height:;
}
.card img {
  height:;
  width: 100%;
  transition: all 0.5s ease;
  transform: scale(1.2);
}

.card:hover .content {
  bottom: 0px;
  color: #fff;
}

.card:hover .image img {
  transform: scale(1);
}

.card .content span:first-child {
  text-transform: uppercase;
  margin-bottom: 10px;
  font-weight: 700;
  letter-spacing: 1px;
  text-align: center;
  color: #fff;
  font-size: 16px;
}

.card .content span:last-child {
  font-size: 14px;
  color: #18cfab;
  text-align: center;
  font-weight: 700;
}


@media screen and (max-width: 768px) {
  .card {
  width: 50%;
  }
  .card .content {
    bottom: 0;
  }
}

@media screen and (max-width: 480px) {
  .card {
  width: 100%;
  }
}</style>
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  	<!--header-area start-->
  	<header class="header-area">
		<!--header-top-->
	  	
		<!--header-bottom-->
		
  	<!--header-area end-->
	
	<!--page-banner-area start-->
	<div class="page-banner-area bg-5">
		<div class="container">
			<div class="row align-items-center height-400">
				<div class="col-lg-12">
					<div class="page-banner-text text-center text-white">
						<h2>Gallery</h2>
						<ul class="site-breadcrumb">
							<li><a href="index.php">Home</a> <span>></span></li>
							<li>Gallery</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--page-banner-area end-->
	
	<!--project-area start-->
	<div class="portfolio">
  <h2 class="title">Projects We Provide</h2>
  <a href="#" class="card">
    <div class="content">
      <span class="title">Kitchen Gardening</span>
      <span class="category">Residential Gardening</span>
    </div>
    <div class="image">
	<img src="assets/images/required/kitchen.png" alt="" height="350px" width="100px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Balcony Gardening</span>
      <span class="category">Residential Gardening</span>
    </div>
    <div class="image">
      <img src="assets/images/required/balcony.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Vertical Gardening</span>
      <span class="category">Residential Gardening</span>
    </div>
    <div class="image">
	<img src="assets/images/required/vertical.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Terrace Gardening</span>
      <span class="category">Residential Gardening</span>
    </div>
    <div class="image">
	<img src="assets/images/required/terrace.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Office Spaces</span>
      <span class="category">Commercial Gardening</span>
    </div>
    <div class="image">
	<img src="assets/images/required/commercial.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Hotel Interior</span>
      <span class="category">Commercial Gardening</span>
    </div>
    <div class="image">
	<img src="assets/images/required/hotel.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Cafe Interior</span>
      <span class="category">Commercial Gardening</span>
    </div>
    <div class="image">
	<img src="assets/images/required/cafe.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Landscaping</span>
      <span class="category">Landscaping</span>
    </div>
    <div class="image">
	<img src="assets/images/required/landscaping.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Cafe Wall</span>
      <span class="category">Fine Art </span>
    </div>
    <div class="image">
	<img src="assets/images/required/cafewall.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Wall Art</span>
      <span class="category">Fine Art </span>
    </div>
    <div class="image">
	<img src="assets/images/required/wallart.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Terracota Wall Plates</span>
      <span class="category">Fine Art </span>
    </div>
    <div class="image">
    <img src="assets/images/required/terracota2.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Terracotta Water Fountain</span>
      <span class="category">Fine Art </span>
    </div>
    <div class="image">
    <img src="assets/images/required/waterfountain.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Canvas</span>
      <span class="category">Fine Art </span>
    </div>
    <div class="image">
    <img src="assets/images/required/canvas.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Interior Decor</span>
      <span class="category">Interior Design</span>
    </div>
    <div class="image">
    <img src="assets/images/required/interior.png" alt="" height="350px"/>
    </div>
  </a>

  <a href="#" class="card">
    <div class="content">
      <span class="title">Interior Decor</span>
      <span class="category">Interior Design</span>
    </div>
    <div class="image">
    <img src="assets/images/required/interior2.png" alt="" height="350px"/>
    </div>
  </a>

</div>
	<!--project-area end-->
	
	<!--subscribe-area start-->
	
	<!--subscribe-area end-->
	
	<!--footer-area start-->
	
	<!--footer-area end-->
  
	<!-- modernizr js -->
	<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<!-- jquery-1.12.0 version -->
	<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
	<!-- bootstra.min js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- meanmenu js -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- easing js -->
	<script src="assets/js/jquery.easing.min.js"></script>
	<!---venobox-js-->
	<script src="assets/js/venobox.min.js"></script>
	<!---slick-js-->
	<script src="assets/js/slick.min.js"></script>
	<!---waypoints-js-->
	<script src="assets/js/waypoints.js"></script>
	<!---counterup-js-->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!---isotop-js-->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery-ui js -->
	<script src="assets/js/jquery-ui.min.js"></script>
	<!-- jquery.countdown js -->
	<script src="assets/js/jquery.countdown.min.js"></script>
	<!-- plugins js -->
	<script src="assets/js/plugins.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
</body>

</html>
<?php
include('footer.php');
?>