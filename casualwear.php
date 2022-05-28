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
			<h4>CASUAL WEAR</h4>
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
							<li><a href="#">GULKAND</a></li>
							<li><a href="#">eba Lifestyle</a></li>
							<li><a href="#">VINK</a></li>
							<li><a href="#">NITYA</a></li>
							<li><a href="#">BELA Fashion</a></li>
						</ul>
					</div>
                    </form></div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
                             <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
								
									<img src="./Dresses/Casual_Wear/9.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
								   <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>	
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1300</h6>
									<p>eba Lifestyle [D.No.18004]</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="eba Lifestyle [D.No.18004]">
                                 <input type="hidden" name="price" value="1300">
							</div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                             <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/10.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1300</h6>
									<p>eba Lifestyle [D.No.18005]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="eba Lifestyle [D.No.18005]">
                                 <input type="hidden" name="price" value="1300">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                             <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/5.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1100</h6>
									<p>NITYA Collection [D.No:110]</p>
								</div>
                                 <input type="hidden" name="Item_Name" value="NITYA Collection [D.No:110]">
                                 <input type="hidden" name="price" value="1100">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                        <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/17.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1400</h6>
									<p>GULKAND Collection [D.No.87]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="GULKAND Collection [D.No.87]">
                                 <input type="hidden" name="price" value="1400">
							</div>
                            </form></div>
						<div class="col-lg-4 col-sm-6">
                        <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/18.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1400</h6>
									<p>GULKAND Collection [D.No.90]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="GULKAND Collection [D.No.87]">
                                 <input type="hidden" name="price" value="1400">
							</div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                        <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/11.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1400</h6>
									<p>Ishaant Collection [D.No:1404] </p>
								</div>
                               <input type="hidden" name="Item_Name" value="Ishaant Collection [D.No:1404]">
                                 <input type="hidden" name="price" value="1400">
							</div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                        <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/16.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1400</h6>
									<p>GULKAND Collection [D.No.88]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="GULKAND Collection [D.No.88]">
                                 <input type="hidden" name="price" value="1400">
							</div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                        <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/19.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1400</h6>
									<p>GULKAND Collection [D.No.83]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="GULKAND Collection [D.No.83]">
                                 <input type="hidden" name="price" value="1400">
                            </div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                             <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/20.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1000</h6>
									<p>VINK Collection [D.No:726]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="VINK Collection [D.No:726]">
                                 <input type="hidden" name="price" value="1000">
							</div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                        <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-new">new</div>
									<img src="./Dresses/Casual_Wear/2.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1100</h6>
									<p>VINK Collection [D.No:3002]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="VINK Collection [D.No:3002]">
                                 <input type="hidden" name="price" value="1100">
							</div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                             <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/21.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1550</h6>
									<p>VINK Collection [D.No:727]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="VINK Collection [D.No:727]">
                                 <input type="hidden" name="price" value="1550">
							</div>
                            </form>
						</div>
						<div class="col-lg-4 col-sm-6">
                             <form action="manage_cart.php" method="POST">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./Dresses/Casual_Wear/23.jpg" alt="">
									<div class="pi-links">
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>price 1600</h6>
									<p>BELA Fashion [D.No:912]</p>
								</div>
                                <input type="hidden" name="Item_Name" value="BELA Fashion [D.No:912]">
                                 <input type="hidden" name="price" value="1600">
							</div>
                            </form>
						</div>
						<!--<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button><br><br><br><br><br>
						</div>-->
					</div>
                    </div></div>
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
