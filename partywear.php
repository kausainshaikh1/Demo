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
                        $count = count($_SESSION["cart"]);
                    }
                    ?>
					<a href="mycart.php"class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
                    
					

					
					
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
	<div class="page-top-info">
		<div class="container">
			<h4>PARTY WEAR</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
                     <form action="manage_cart.php" method="POST">
					
					
					
					
					<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">FEPIC</a></li>
							<li><a href="#">NITYA</a></li>
							<li><a href="#">eba Lifestyle</a></li>
							<li><a href="#">FIONA</a></li>
							<li><a href="#">Deepsy</a></li>
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
									
									<img src="./Dresses/Party_Wear/1.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2900</h6>
									<p>Fepic Party Wear [D.No.61005]</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="Fepic Party Wear [D.No.61005]">
                                 <input type="hidden" name="price" value="2900">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/2.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2800</h6>
									<p>Fepic Party Wear [D.No.61002]</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="Fepic Party Wear [D.No.61002]">
                                 <input type="hidden" name="price" value="2800">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/3.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2700</h6>
									<p>Fepic Party Wear [D.No.61003]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Fepic Party Wear [D.No.61003]">
                                 <input type="hidden" name="price" value="2700">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/5.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 3600</h6>
									<p>NITYA Collection [D.No:15003]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="NITYA Collection [D.No:15003]">
                                 <input type="hidden" name="price" value="3600">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/6.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 3600</h6>
									<p>NITYA Collection [D.No:15008]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="NITYA Collection [D.No:15008]">
                                 <input type="hidden" name="price" value="3600">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/7.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 3200</h6>
									<p>FIONA Collection [D.No:22522]</p>
								</div>
                                    <input type="hidden" name="Item_Name" value="FIONA Collection [D.No:22522]">
                                 <input type="hidden" name="price" value="3200">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
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
									<h6>price 2850</h6>
									<p>eba Lifestyle [D.No:1158]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="eba Lifestyle [D.No:1158]">
                                 <input type="hidden" name="price" value="2850">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/11.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2850</h6>
									<p>eba Lifestyle [D.No:1157]</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="eba Lifestyle [D.No:1157]">
                                 <input type="hidden" name="price" value="2850">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/14.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2890</h6>
									<p>Deepsy Collection [D.No:451]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Deepsy Collection [D.No:451]">
                                 <input type="hidden" name="price" value="2890">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-new">new</div>
									<img src="./Dresses/Party_Wear/17.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2700</h6>
									<p>Fiona Collection [D.No:22432-A]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Fiona Collection [D.No:22432-A]">
                                 <input type="hidden" name="price" value="2700">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/18.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2700</h6>
									<p>Fiona Collection [D.No:22432-B]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Fiona Collection [D.No:22432-B]">
                                 <input type="hidden" name="price" value="2700">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/13.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2890</h6>
									<p>Deepsy Collection [D.No:453]</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="Deepsy Collection [D.No:453]">
                                 <input type="hidden" name="price" value="2890">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/8.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2800</h6>
									<p>AARAV Collection [D.No:235]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="AARAV Collection [D.No:235]">
                                 <input type="hidden" name="price" value="2800">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/22.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2700</h6>
									<p>Fepic Rosemeen Collection [D.No:71001]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Fepic Rosemeen Collection [D.No:71001]">
                                 <input type="hidden" name="price" value="2700">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                            <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Party_Wear/15.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 2600</h6>
									<p>Aashirwad Collection [D.No:7136]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="Aashirwad Collection [D.No:7136]">
                                 <input type="hidden" name="price" value="2600">
							</div>
                            </form></div>
						<!--<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button><br><br><br><br><br>
						</div>-->
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
						<a href="https://api.whatsapp.com/send?phone=917843012342" target="_blank">
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