<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
</head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="accomodation.php">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                           <!--  <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                           <!--  <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li> -->
                            <li class="nav-item"><a class="nav-link mr-4" href="contact.php">Contact</a></li>
                              <div class="nav-item dropdown navbar-nav">
                    <?php
                    if (isset($_SESSION["full_name"])) {

                    ?>

                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #e84118;font-size: 1.0rem;"> <?php echo $_SESSION["full_name"]; ?><i class="fas fa-user"></i></a>
                        <div class="dropdown-menu"> <a href="userLogout.php" class="dropdown-item">Log Out</a>

                        </div> <?php } else {


                                ?>

                            <li><a href="login.php" class="nav-link mr-4" style="font-size: 1.3rem;"><i class="far fa-user"></i></a></li>
                    <?php } ?>

                </div>

                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Away from monotonous life</h6>
						<h2>Relax Your Mind</h2>
						<p style="font-size:0.9rem;">After a Busy and hectic work life, if you want to have a break, Royal is the Best place. The Hot water pools are really mind relaxing. We provide facilities like Bonefire, Spa and many more. We always want to serve you the Best. Give personal touch to make sure you have an amazing time. </p>
						<!-- <a href="#" class="btn theme_btn button_hover">Get Started</a> -->
					</div>
				</div>
            </div>
            <div class="hotel_booking_area position">
                <div class="container">
                    <div class="hotel_booking_table">
                        <div class="col-md-3">
                            <h2>Book<br> Your Room</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <a class="book_now_btn button_hover" href="rooms.php">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Banner Area =================-->

       <!--================ Testimonial Area  =================-->
       <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item " style="height: 435px; display: list-item;">
                    <img src="image/rooms/Single-Room.webp" class="d-block w-100" alt="" style="height: 260px;">
                    <h3>Single Room</h3>
                    <p> A room assigned to one person. May have one or more beds.The room size or area of Single Rooms are generally between 37 m² to 45 m².</p>
                </div>
                <div class="media testimonial_item" style="height: 435px;  display: list-item;">
                    <img src="image/rooms/Double-Room.webp" class="d-block w-100" alt="..." style="height: 260px; ">
                     <h3>Double Room</h3>
                     <p> A room assigned to two people. May have one or more beds.The room size or area of Double Rooms are generally between 40 m² to 45 m².</p>
                </div>
                <div class="media testimonial_item" style="height: 435px;  display: list-item;">
                    <img src="image/rooms/Triple-Room.webp" class="d-block w-100" alt="..." style="height: 260px; ">
                     <h3>Tripple Room</h3>
                     <p> A room that can accommodate three persons and has been fitted with three twin beds, one double bed and one twin bed or two double beds.The room size or area of Triple Rooms are generally between 45 m² to 65 m².</p>
                </div>
                <div class="media testimonial_item" style="height: 435px;  display: list-item;">
                    <img src="image/rooms/quad-Room.webp" class="d-block w-100" alt="..." style="height: 260px; ">
                     <h3>Quad Room</h3>
                     <p> A room assigned to four people. May have two or more beds.The room size or area of Quad Rooms are generally between 70 m² to 85 m².</p>
                </div>
                <div class="media testimonial_item" style="height: 435px;  display: list-item;">
                    <img src="image/rooms/Queen-Room.webp" class="d-block w-100" alt="..." style="height: 260px; ">
                     <h3>Queen Room</h3>
                     <p> A room with a queen-sized bed. May be occupied by one or more people.The room size or area of Queen Rooms are generally between 32 m² to 50 m².</p>
                </div>
                <div class="media testimonial_item" style="height: 435px;  display: list-item;">
                    <img src="image/rooms/King-Room.webp" class="d-block w-100" alt="..." style="height: 260px; ">
                     <h3>King Room</h3>
                     <p> A room with a king-sized bed. May be occupied by one or more people.The room size or area of King Rooms are generally between 32 m² to 50 m².</p>
                </div>
                <div class="media testimonial_item" style="height: 435px;  display: list-item;">
                    <img src="image/rooms/Twin-Room.webp" class="d-block w-100" alt="..." style="height: 260px; ">
                     <h3>Twin Room</h3>
                     <p> A room with two twin beds. May be occupied by one or more people.The room size or area of Twin Rooms are generally between 32 m² to 40 m².</p>
                </div>
                <div class="media testimonial_item" style="height: 435px;  display: list-item;">
                    <img src="image/rooms/suite-Rooms.webp" class="d-block w-100" alt="..." style="height: 260px; ">
                     <h3>Suite Room</h3>
                     <p> A single room with a bed and sitting area. Sometimes the sleeping area is in a bedroom separate from the parlour or living room.The room size or area of Junior Suites are generally between 60 m² to 80 m².</p>
                </div>
            </div>
        </div>
    </section> 
    <!--================ Testimonial Area  =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Hotel Accomodation</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room5.webp" alt="">
                                <a href="rooms.php" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href=""><h4 class="sec_h4">Double AC Room</h4></a>
                            <h5>2200/<small>Night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room6.jpg" alt="">
                                <a href="rooms.php" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Single AC Room</h4></a>
                            <h5>1500/<small>Night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room7.jpg" alt="">
                                <a href="rooms.php" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Single Non AC</h4></a>
                            <h5>900/<small>night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room8.jpg" alt="">
                                <a href="rooms.php" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Non AC</h4></a>
                            <h5>1200/<small>night</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->

        

        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Royal Facilities</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">Mission & Vision</h2>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                            <a href="#" class="button_hover theme_btn_two">Reed More About Me</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <img class="img-fluid" src="image/banner/ud.jpg" alt="img"> -->
                        <video  width="600px" height="600px" controls src="image/video/The_Oberoi.mp4"></video>
                    
                        
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->

        <!--================ Testimonial Area  =================-->
                  <!-- testimonal set in banner side -->
        <!--================ Testimonial Area  =================-->


        <!--================ Footer Area  =================-->

        <?php include 'includes/footer.php'; ?>

        <!--================ Footer Area  =================-->
