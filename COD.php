<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>World Of Dresses</title>
	<meta charset="UTF-8">
	<meta name="description" content="World Of Dresses">
	<meta name="keywords" content="World Of Dresses, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/flaticon.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/jquery-ui.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/style.css" />


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
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="img/logowd11.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form action="index.php" class="header-search-form">
							<input type="text" placeholder="  Search for Products,Brands & more....">
							<button><i class="flaticon-search"></i></button>

							<form>
							</form>
						</form>
					</div>

					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<i class="flaticon-profile"></i>
								<?php
								if (isset($_SESSION['username'])) {
									echo "<html>";


									echo $_SESSION['username'];
								}
								?>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">Collections</a>
						<ul class="sub-menu">
							<li><a href="./casualwear.php">Casual Wear</a></li>
							<li><a href="./partywear.php">Party Wear</a></li>
							<li><a href="./designerwear.php">Designer Wear</a></li>
						</ul>
					</li>
					<li><a href="#">Category</a>
						<ul class="sub-menu">
							<li><a href="./categoryDM.php">Dress Materials</a></li>
							<li><a href="./categorykurti.php">Kurtis</a></li>
							<li><a href="./categorygowns.php">Gowns</a></li>
							<li><a href="./categorysarees.php">Sarees</a></li>
							<li><a href="./categorylehangas.php">Lehangas</a></li>
						</ul>
					</li>


					<li><a href="./contact.html">Contact</a></li>
					<li><a href="./about1.php">About Us</a></li>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
					$count = 0;
					if (isset($_SESSION['cart'])) {
						$count = count($_SESSION["cart"]);
					}
					?>
					<a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
					<!--<li><a href="#">LOGIN</a>
						<ul class="sub-menu">
							<li><a href="/project/login.html">USER</a></li>
							<li><a href="/project/admin/index.php">ADMIN</a></li>
						</ul>
				<	</li>-->
				</ul>
			</div>
		</nav>
		</div>
	</header>




	<!-- Header section end -->
	<!-- Page info -->

	<!-- Page info end -->


	<br><br>
	<div class="container">
		<div class="jumbotron">

			<h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
			<?php
			$sqlquery = "select * from user_order ";
			$result = mysqli_query($con, $sqlquery);
			$idrow = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $idrow['id'];
			?>
			<?php

			$nuid = $_SESSION['id'];
			$query = mysqli_query($con, "select * from user_order where id = '$nuid' ORDER BY created DESC");
			while ($row = mysqli_fetch_array($query)) {
				$_SESSION['id'] = $row['id'];
			?>
		</div>
	</div>
	<br>

	<h2 class="text-center"> Thank you for Ordering at WORLD OF DRESSES ! The ordering process is now complete.</h2>



	<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo ($row['order_no']); ?></span> </h3>
	<br>
	<center><button class="btn btn-success"><a href="index.php">Okay</a> </button></center>
	<br>
<?php }; ?>
<!-- Footer section -->
<section class="footer-section">
	<div class="container">
		<b>
			<div class="footer-logo text-center text-white">
				<h3><a href="index.html">WORLD OF DRESSES</a></h3>
			</div><b>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget about-widget">
							<h2>About</h2>
							<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
							<img src="img/cards.png" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget about-widget">
							<h2>Questions</h2>
							<ul>
								<li><a href="">About Us</a></li>
								<li><a href="">Track Orders</a></li>
								<li><a href="">Returns</a></li>

								<li><a href="">Shipping</a></li>

							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget contact-widget">

							<div class="con-info">

							</div>
							<div class="con-info">
								<span>B.</span>
								<p>khradhi gao chandan nager </p>
							</div>
							<div class="con-info">
								<span>C.</span>
								<p>7843012342/p>
							</div>
							<div class="con-info">
								<span>D.</span>
								<p>chopdaraaliaya1999@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
	</div>
	<div class="social-links-warp">
		<div class="container">
			<div class="social-links">
				<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
				<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
				
			</div>
			<br>
				<div class="whatsapp">
						<a href="https://api.whatsapp.com/send?phone=918329071960" target="_blank">
						<h5><i class="fa fa-whatsapp fa-3x fa" aria-hidden="true"></i></h5></a>
					</div>

			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

		</div>
	</div>
</section>

<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>