<?php
session_start();
if (!isset($_SESSION['full_name'])) {
    echo "<script>window.location.href='login.php'</script>";
  }

?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
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
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
     
       <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container ">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle ">ROOM BOOK NOW</h2>
                    <div class="row justify-content-center">
                        <ol class="d-flex text-center" style="list-style: none; color: wheat; ">
                        <li class="pr-2"><a href="index.php" style="color: white;">HOME</a></li><b class="" style="width: 10px; color: white;">/</b>
                        <li class="active pl-2">ROOMS</li>
                    </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--================Banner Area END =================-->
       <br><br>
       <p style="border:2px solid wheat;"></p>
       <center><h5>Room Type:-  <h3>SINGLE NON AC ROOMS</h3></h5></center><br>
       <p style="border:2px solid wheat;"></p>
        <div class="row " >
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel_royal");
                $query = "select * from single_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <!-- mx-5 my-3 -->
                        <div class="col-md-4 mb-4">
                        <div class="card bg-light" >
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body"  >          
                                  <div class=" ml-1 mt-3 ">
                                  <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                                  <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                                  </div>     
                            
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
            </div><br><br>
            <p style="border:2px solid wheat;"></p>
            <center><h5>Room Type:-  <h3>DOUBLE NON AC ROOMS</h3></h5></center><br>
            <p style="border:2px solid wheat;"></p>
            <div class="row">
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel_royal");
                $query = "select * from double_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-3" >
                        <div class="card bg-light" >
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=c";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
        </div><br><br>
        <p style="border:2px solid wheat;"></p>
        <center><h5>Room Type:- <h3>SINGLE AC ROOMS</h3></h5></center><br>
        <p style="border:2px solid wheat;"></p>
        <div class="row justify-content-end">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel_royal");
                $query = "select * from single_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-3" >
                        <div class="card bg-light" >
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=b";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
        </div><br><br>
        <p style="border:2px solid wheat;"></p>
        <center><h5 >Room Type:-  <h3>DOUBLE  AC ROOMS</h3></h5></center><br>
        <p style="border:2px solid wheat;"></p>
        <div class="row justify-content-start">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel_royal");
                $query = "select * from double_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-3" >
                        <div class="card bg-light">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=d";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                          
                        </div>
                    </div>
                    </div>
                    <?php
                }
            ?>
        </div>
        <br><br><br><br><br><br>
         <!--================ start footer Area  =================-->
         <footer class=" area-footer">
            <div class="container">
                <div class="row justify-content-end">
                    <!-- <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title" >About Agency</h6>
                            <p style="color: wheat;">The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div> -->
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title mt-3" style="color: rgb(238, 212, 212);">SUBSCRIBE</h6>
                            <p style="color: rgb(243, 217, 168);">
                                Discover the latest stories and inspirations from our world, right in your inbox.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text pl-5 " style="color: rgb(197, 173, 173);">         
                    © 2021 Royal Hotel & Resort
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social pr-5">
                       <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!--================ End footer Area  =================-->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
