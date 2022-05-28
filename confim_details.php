<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
// error_reporting(0);
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
	<br>
	<div class="container">
		<div class="row d-flex">
			<div row="col-sm-4">
				<?php
				$uid = $_SESSION['user_id'];
				$query = mysqli_query($con, "select * from users where user_id = '$uid'");
				while ($row = mysqli_fetch_array($query)) {
				?>
					<div class="card shadow mb-6">
						<div class="card-header py-">
							<h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
						</div>

						<div class="card-body">

							<form autocomplete="off" action="confirm_details_update.php" method="post" enctype="multipart/form-data">
								<!-- <div class="form-group">
								<label>Full Name</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
								</div>
							</div> -->

								<!-- <div class="form-group">
									<label>User id</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="user_id" value="<?php echo ($row['user_id']) ?>" id="user_id" placeholder="Enter Contact Number">
									</div>
								</div> -->

								<div class="form-group">
									<label>Username</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="username" value="<?php echo ($row['username']) ?>" placeholder="Enter your full name..." id="username" pattern="[A-Za-z ]+" title="letters only" required="true">
									</div>
								</div>

								<div class="form-group">
									<label>Contact Number</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="contact_no" value="<?php echo ($row['contact_no']) ?>" id="contact_no" placeholder="Enter Contact Number">
									</div>
								</div>

								<!-- <div class="form-group">
									<label>Email</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="email" value="<?php echo ($row['email']) ?>" id="email" placeholder="Enter Contact Number">
									</div>
								</div> -->

								<br>
								<h6 class="m-0 font-weight-bold text-primary">Contact Information</h6><br>
								<div class="form-group">
									<label>Address</label>
									<div class="col-sm-5">
										<textarea class="form-control" id="address" name="address" required="true" placeholder="Enter your complete address here"></textarea>
									</div>
									<!-- <div class="form-group">
										<label>State</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="state" name="state" value="<?php echo ($row['state']) ?>" placeholder="Enter your State Here" required="true">
										</div>
									</div>
									<div class="form-group">
										<label>City</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="city" name="city" value="<?php echo ($row['city']) ?>" placeholder="Enter your State Here" required="true">
										</div>
									</div>
									<div class="form-group">
										<label>Land Mark </label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="landmark" name="landmark" value="<?php echo ($row['landmark']) ?>" placeholder="Enter your Land Mark Here" required="true">
										</div>
									</div>
									<div class="form-group">
										<label>Pin Code</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="pin_code" name="pin_code" value="<?php echo ($row['pin_code']) ?>" placeholder="Enter your Pin Code Here" required="true">
										</div>
									</div>-->
									<br>
									<div class="col-sm-3">
										<!-- <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to Update?');">Update </button> -->
										<center><input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit"></center>
							</form>
						<?php }; ?>
						</div>
					</div>
			</div>
		</div>

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
										<p>khradhi gaon chandan Nager</p>
									</div>
									<div class="con-info">
										<span>C.</span>
										<p>7843012342</p>
									</div>
									<div class="con-info">
										<span>D.</span>
										<p>chopdaraaliya1999@gmail.com</p>
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
						<h5><i class="fa fa-whatsapp fa-3x fa-spin" aria-hidden="true"></i></h5></a>
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
		</b>
	</div>
	</section>
</body>

</html>