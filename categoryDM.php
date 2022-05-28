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
									if (isset($_SESSION['username'])) 
								{
									echo"<html>";
									
									
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
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count = count($_SESSION["cart"]);
                    }
                    ?>
					<a href="mycart.php"class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
                    
					
 </ul>
			</div>
                </nav>
            </div>
    </header>
    
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>CAtegory PAge</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
				<form action="manage_cart.php" method="POST">
                    
				
					
					<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Aashirwad</a></li>
							<li><a href="#">FEPIC</a></li>
							<li><a href="#">FIONA</a></li>
							<li><a href="#">NITYA</a></li>
							<li><a href="#">Sana Safinaz</a></li>
						</ul>
					</div>
                    </form>
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
                         <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-sale">ON SALE</div>
									<img src="./Dresses/Dress_Materials/5.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.2150</h6>
									<p>Fepic Designer Wear</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Fepic Designer Wear">
                                 <input type="hidden" name="price" value="2150">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                      <form action="manage_cart.php" method="POST">

							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/2.jpg" alt=""><br>
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1800</h6>
									<p>Sana Safinaz Exclusive Lawn Collection</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Sana Safinaz Exclusive Lawn Collection">
                                 <input type="hidden" name="price" value="1800">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/9.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1950</h6>
									<p>Hot Lady Designer Collection</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Hot Lady Designer Collection">
                                 <input type="hidden" name="price" value="1950">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/7.jpg" alt="">
									<div class="pi-links">
									<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.2100</h6>
									<p>ZIONA Designer Wear</p>
								</div>
                                <input type="hidden" name="Item_Name" value="ZIONA Designer Wear">
                                 <input type="hidden" name="price" value="2100">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/10.jpg" alt="">
									<div class="pi-links">
								    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1800</h6>
									<p>Ganga Collection</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Ganga Collection">
                                 <input type="hidden" name="price" value="1800">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
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
									<h6>Rs.1850</h6>
									<p>Nitya Collection</p>
								</div>
                                  <input type="hidden" name="Item_Name" value="Nitya Collection">
                                 <input type="hidden" name="price" value="1850">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/12.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1900</h6>
									<p>Aashirwad Collection</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="Aashirwad Collection">
                                 <input type="hidden" name="price" value="1900">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/14.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1900</h6>
									<p>Aashirwad Collection</p>
								</div>
                                  <input type="hidden" name="Item_Name" value="Aashirwad Collection">
                                 <input type="hidden" name="price" value="1900">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/13.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1900</h6>
									<p>Aashirwad Collection</p>
								</div>
                                  <input type="hidden" name="Item_Name" value="Aashirwad Collection">
                                 <input type="hidden" name="price" value="1900">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-new">new</div>
									<img src="./Dresses/Dress_Materials/18.jpg" alt="">
									<div class="pi-links">
									<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1850</h6>
									<p>Designer Dress Material</p>
								</div>
                                  <input type="hidden" name="Item_Name" value="Designer Dress Material">
                                 <input type="hidden" name="price" value="1850">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/19.jpg"alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1850</h6>
									<p>Designer Dress Material</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Designer Dress Material">
                                 <input type="hidden" name="price" value="1850">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/20.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1250</h6>
									<p>Jay Vijay Collection</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Jay Vijay Collection">
                                 <input type="hidden" name="price" value="1250">
							</div>
                            </form></div>
							<div class="col-lg-4 col-sm-6">
                                <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/21.jpg"alt="">
									<div class="pi-links">
									<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1650</h6>
									<p>Elegantly Crafted Dress Material</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Elegantly Crafted Dress Material">
                                 <input type="hidden" name="price" value="1650">
							</div>
                                </form></div>
							<div class="col-lg-4 col-sm-6">
                                <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/22.jpg"alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.2000</h6>
									<p>FIONA Collection</p>
								</div>
                                <input type="hidden" name="Item_Name" value="FIONA Collection">
                                 <input type="hidden" name="price" value="2000">
							</div>
                                </form></div>
							<div class="col-lg-4 col-sm-6">
                                <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Dress_Materials/23.jpg"alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rs.1450</h6>
									<p>BELA Fashion</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="BELA Fashion">
                                 <input type="hidden" name="price" value="1450">
							</div>
                                </form></div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Category section end -->
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

	</body>
</html>

