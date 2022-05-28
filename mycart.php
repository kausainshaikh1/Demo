<?php
session_start();
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


					<li><a href="./contact.php">Contact</a></li>
					<li><a href="./about1.php">About Us</a></li>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;
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

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cart</title>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center border rounded bg-ligh my-5">
					<h1>MY CART</h1>
				</div>
				<div class="col-lg-9">

					<table class="table">
						<thead class="text-center">
							<tr>
								<th scope="col">Serial No.</th>
								<th scope="col">Item Name</th>
								<th scope="col">Item Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>

								<th scope="col"></th>
							</tr>

						</thead>
						<tbody class="text-center">
							<?php
							if (isset($_SESSION['cart'])) {
								foreach ($_SESSION['cart'] as $key => $value) {
									$sr = $key + 1;
									echo "
            <tr>
            <td>$sr</td>
            <td>$value[Item_Name]</td>
            <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
            <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
            <td class='itotal'></td>
            <td>
            <form action='manage_cart.php' method='POST'>
                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
            </form>    
            </td>
            </tr>
         ";
								}
							}
							?>

						</tbody>
					</table>
				</div>
				<div class="col-lg-3">
					<div class="border bg-light rounded">
						<h4>Grand Total:</h4>
						<h5 class="text-right" id="gtotal"></h5>
						<br>
						<form>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
								<label class="form-check-label" for="flexRadioDefault2">
									Cash On Delivery
								</label>
							</div>
							<br>
							<br>

							<center><button class="btn btn-success"><a href="confim_details.php">confirm</a> </button></center>
						</form>
					</div>
				</div>
				<script>
					var gt = 0;
					var iprice = document.getElementsByClassName('iprice');
					var iquantity = document.getElementsByClassName('iquantity');
					var itotal = document.getElementsByClassName('itotal');
					var gtotal = document.getElementById('gtotal');

					function subTotal() {
						gt = 0;
						for (i = 0; i < iprice.length; i++) {
							itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);

							gt = gt + (iprice[i].value) * (iquantity[i].value);
						}
						gtotal.innerText = gt;
					}

					subTotal();
				</script>
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
										<p>kharadi gaon chandanNagar</p>
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
					</b>
				</b>
			</div>
			<div class="social-links-warp">
				<div class="container">
					<div class="social-links">
						<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
						<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
						
					</div>
					<br>
				<div class="whatsapp">
						<a href="https://api.whatsapp.com/send?phone=917843012342" target="_blank">
						<h5><i class="fa fa-whatsapp fa-3x fa-spin" aria-hidden="true"></i></h5></a>
					</div>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
			</div>
			</b>
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