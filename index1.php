<?php

session_start();

if(!isset($_SESSION['username']))
{
	header('location:login.php');
}

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
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>



	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!--<form action="index.php">-->
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
							<button><i class="fa fa-search"></i></button>

						<form>

					</div>
					<!--<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="./login.html">Sign</a> In or <a href="./sign_up.html">Create Account</a>
							</div>-->
							

								
								<div class="col-xl-4 col-lg-5">
							<div class="user-panel">
							<div class="up-item">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<i class="flaticon-profile"></i>
									<?php
									if (isset($_SESSION['username'])) 
								{
									echo"<html>";
									
									
									 echo $_SESSION['username'];
									 
								}
								?>
								<!--<div class="dropdown">
									<button class="dropbtn">LOGIN</button>
									<div class="dropdown-content">
									<a href="/project/admin/index.php">ADMIN</a>
									<a href="/project/login.html">USER</a>

								<ul class="dropdown-menu">
								<i class="fa fa-angle-down hidden-side"></i>
								<li><a href="logout.php">Logout</a></li>
								</ul>
							</div>
						</div>-->
					</div>
					
						<!--<div class="user-panel">
							<div class="up-item">
								<div class="shopping-card">
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									


									<div class="div2">
									<i class="flaticon-bag">
									</i><a href="./cart.html" style="color: white;">Shopping Cart</a>
									</div>
									<span>0</span>

								</div>
								</div>
								
							</div>-->
						
						




								<!--<a href="#">Sign</a> In or <a href="./sign_up.html">Create Account</a>-->
								<!--<?php
								//if (isset($_SESSION['uname'])) 
								{
									// echo $_SESSION['uname'];
								}
								?>-->
								<!--<ul class="sub-menu">
								<li><a href="logout.php">Logout</a></li>
							</ul>-->
							

							<!--<ul class="ts-profile-nav">-->

			<!--<li class="ts-account">
				<a href="#"><img src="img/adminpi.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>-->

							
						<!--<div class="user-panel">
							<div class="up-item">
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="flaticon-profile"></i>
								<a href="/project/admin/index.php">Admin</a>
							</div>
						</div>-->
                                

						</div>
					</div>
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
					<?php 
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                    ?>
					<a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>  
                   
                    <a href="./logout.php"class="btn btn-outline-success">Log out </a>
                    
			</div>
			
		</nav>
	</header>
	<!-- Header section end -->



	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="Dresses/index/17.jpg">
				<!--<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-black">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					
				</div>-->
			</div>
			<div class="hs-item set-bg" data-setbg="Dresses/index/25.jpg">
				<!--<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
						
				</div>-->
			</div>
				<div class="hs-item set-bg" data-setbg="Dresses/index/12.jpg">
				</div>
				
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
                <form action="manage_cart.php" method="POST">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./Dresses/Dress_Materials/5.jpg" alt="">
						<div class="pi-links">
							 <button type="submit" name="Add_To_Cart"class="btn btn-info">Add To Cart</button>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>Price 2150</h6>
						<p>Fepic Designer Wear</p>
					</div>
                    <input type="hidden" name="Item_Name" value="Fepic Designer Wear">
                     <input type="hidden" name="price" value="2150">
				</div>
                </form>
                <form action="manage_cart.php" method="POST">
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="./Dresses/Sarees/10.jpg" alt="">
						<div class="pi-links">
							 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>Price 3500</h6>
						<p>TFH Designer Saree [D.NO:88-5104]</p>
					</div>
                     <input type="hidden" name="Item_Name" value="TFH Designer Saree [D.NO:88-5104]">
                     <input type="hidden" name="price" value="3500">
				</div>
                </form>
                <form action="manage_cart.php" method="POST">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./Dresses/Dress_Materials/18.jpg" alt="">
						<div class="pi-links">
							 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>Price 1850</h6>
						<p>Designer Dress Material</p>
					</div>
                    <input type="hidden" name="Item_Name" value="Designer Dress Material">
                     <input type="hidden" name="price" value="1850">
				</div>
                </form>
                <form action="manage_cart.php" method="POST">
				<div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Party_Wear/1.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 2900</h6>
							<p>Fepic Party Wear [D.No.61005]</p>
						</div>
                    <input type="hidden" name="Item_Name" value="Fepic Party Wear [D.No.61005]">
                     <input type="hidden" name="price" value="2900">
                    </div>
                </form>
                <form action="manage_cart.php" method="POST">
				<div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Party_Wear/9.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 2850</h6>
							<p>eba Lifestyle [D.No:1158]</p>
					
                            <input type="hidden" name="Item_Name" value="eba Lifestyle [D.No:1158]">
                     <input type="hidden" name="price" value="2850">
                    </div>
                    
					</div>
                </form>
			</div>
		</div>
		
	</section><hr><br>
	<!-- letest product section end -->

	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<center><ul class="product-filter-menu">
				<li><a href="./categoryDM.html">DRESS MATERIALS</a></li>
				<li><a href="./categorykurti.html">KURTIS</a></li>
				<li><a href="./categorygowns.html">GOWNS</a></li>
				<li><a href="./categorysarees.html">SAREES</a></li>
				<li><a href="./categorylehangas.html">LEHENGAS</a></li>
				
			</ul></center><br>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
                    <form action="manage_cart.php" method="POST">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="./Dresses/Gowns/2.jpg" alt="">
							<div class="pi-links">
								
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 3900</h6>
							<p>Mohini Glamour Designer Gown</p>
						</div>
                         <input type="hidden" name="Item_Name" value="Mohini Glamour Designer Gown">
                     <input type="hidden" name="price" value="3900">
					</div>
                    </form>
				</div>
				<div class="col-lg-3 col-sm-6">
                    <from action="manage_cart.php" method="POST">
					<div class="product-item">
						<div class="pi-pic">
							
							<img src="./Dresses/Dress_Materials/9.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 1950</h6>
							<p>Hot Lady Designer Collection</p>
						</div>
                        <input type="hidden" name="Item_Name" value="Hot Lady Designer Collection">
                     <input type="hidden" name="price" value="1950">
					</div>
                    </from>
				</div>
				<div class="col-lg-3 col-sm-6">
                    <form action="manage_cart.php" method="POST">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Sarees/6.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 3250</h6>
							<p>TFH Designer Saree [D.No: 9507]</p>
						</div>
                         <input type="hidden" name="Item_Name" value="TFH Designer Saree [D.No: 9507]">
                     <input type="hidden" name="price" value="3250">
					</div>
                    </form>
				</div>
				<div class="col-lg-3 col-sm-6">
                    <form action="manage_cart.php" method="POST">
                        <div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Dress_Materials/11.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 1850</h6>
							<p>Nitya Collection</p>
						</div>
                            <input type="hidden" name="Item_Name" value="Nitya Collection">
                     <input type="hidden" name="price" value="1850">
					</div>
                    </form>
				</div>
				<div class="col-lg-3 col-sm-6">
                    <form action="manage_cart.php" method="POST">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Dress_Materials/22.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 2000</h6>
							<p>FIONA Collection</p>
						</div>
                        <input type="hidden" name="Item_Name" value="FIONA Collection">
                     <input type="hidden" name="price" value="2000">
					</div>
                    </form>
				</div>
				<div class="col-lg-3 col-sm-6">
					<from action="manage_cart.php" method="POST">
                    <div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Casual_Wear/9.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 1300</h6>
							<p>eba Lifestyle [D.No.18004]</p>
						</div>
                         <input type="hidden" name="Item_Name" value="eba Lifestyle [D.No.18004]">
                     <input type="hidden" name="price" value="1300">
					</div>
                    </from>
				</div>
                    
				<div class="col-lg-3 col-sm-6">
                    <from action="manage_cart.php" method="POST">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Dress_Materials/23.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 1450</h6>
							<p>BELA Fashion</p>
                            <input type="hidden" name="Item_Name" value="BELA Fashion">
                     <input type="hidden" name="price" value="1450">
						</div>
					</div>
                    </from>
				</div>
				<div class="col-lg-3 col-sm-6">
					<from action="manage_cart.php" method="POST">
                    <div class="product-item">
						<div class="pi-pic">
							<img src="./Dresses/Gowns/21.jpg" alt="">
							<div class="pi-links">
								 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Price 2800</h6>
							<p>Aashirwad Designer Gown</p>
						</div>
                        <input type="hidden" name="Item_Name" value="Aashirwad Designer Gown">
                     <input type="hidden" name="price" value="2800">
					</div>
                    </from>
				</div>
			</div>
			<br><br>
		</div>
		
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->

	<!-- Banner section end  -->


	<!-- Footer section -->
	

	<section class="footer-section">
		<div class="container">
			<b><div class="footer-logo text-center text-white">
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
							<span>A.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>C.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>D.</span>
							<p>office@youremail.com</p>
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

	

	<!--</form>-->
	</body>
</html>
