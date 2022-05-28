<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<style type="text/css">
		.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}



.div2 {
	position: 
	color: #ffff;
	background: black;
  width: 150px;
  height: 50px;  
  padding: 0px;
  border: 1px solid black;
  box-sizing: border-box;
}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
	</style>
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
					<li><a href="./about.html">About Us</a></li>
					
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
			<h4>ABOUT US</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">About Us</a>
			</div>
		</div>
	</div><br>
	<!-- Page info end -->
<div class="container">
	<hr><center><i><b>Style is not a display of wealth , but an expression of imagination!</b></i></center><hr>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Welcome to WORLD OF DRESSES, your number one source for Women's Exclusive Clothing ! It encompasses of a wide range and variety of Products ranging from casual daily wear to Party wear & Designer Wear such as Kurtis, Dress Materials (inclusive of Catalogue and Non-Catalogue pieces),Sarees,Gowns,Lehangas & much more.We are Dedicated to giving you the very best of Products with a focus on 3 Characteristics i.e Dependability,Customer Service and Uniqueness.</p><br>
<p>Founded in May,2016 -- World Of Dresses has come a long way from its beginnings.We assure you 100% guaranteed quality of Products.
When we first started out,our passion was to provide guaranteed quality Women's Clothing to our acquaintances,sitting in the comfort of their homes at very reasonable prices.The general complain and helplessness that online shopping cannot be trusted drove us into action to do intense research in finding trusted Dealers and Manufacturers.It gave us an impetus to turn hardwork and inspiration into a booming Online Store.</p><br>
<p>We now serve customers all over India and are thrilled to be a part of the Women's Fashion Industry and have won a number of hearts and can proudly list happy customers who look forward to us for the latest variety of Collections.We cater to Individual Requirements to help you with your Festival Shoppings,Weddings etc.
Our Collection includes the best showroom brands and Catalogue pieces at unbelievable,reasonable prices.
We work flexibly with clients to fulfill their design needs.</p><BR>

<p>WHY YOU SHOULD BUY FROM US?<br>
	Our Collections are elegant and consist of Exquisite designs and are of Premium Quality. We provide Unlimited variety at reasonable prices to give you the gorgeous ethnic look.Our collections are inclusive of Traditional patterns to Contemporary Designs,Casual Wear to Designer Wear,Bridal Wear and Ready to wear Designer Outfits available in different Sizes.
	There are no middlemen,so our products are direct from wholesale dealers and so a lot of Savings.
	We are Confident that you will be pleased with the products as much as we enjoy offering them to you.</p><br>
		<p>If you have any questions or comments, please do not hesitate to contact us.</p><br>
<hr><center><i><b>Experience the ethnicity and magnificence in our breathtaking designs.</b></i></center><hr><br><br><br>


</div>




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
							<p>khradhi gao chandan nager </p>
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
				<div class="whatsapp">
					<a href="https://api.whatsapp.com/send?phone=918329071960" target="_blank">
					<h5><i class="fa fa-whatsapp fa-3x fa" aria-hidden="true"></i></h5></a>
				</div>

 



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