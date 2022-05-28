<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        
        <link rel="stylesheet" href="../css/font_awesome.css">
       <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css"> 
         <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
            th{
                color: wheat;
                background-color: black;
                font-size: 1.2rem;
            }
            #dash_card{
                background-color:wheat;
                height: 20rem ;
                padding:2rem;
                width: 100%;
            }
            #dash_card img{
                width:100%;
                height:80%;
            }
            #imag{
                height:20%;
            }
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.wrapper{
  height: 100%;
  width: 300px;
  position: relative;
}
.wrapper .menu-btn{
  position: absolute;
  left: 20px;
  top: 10px;
  background: #4a4a4a;
  color: #fff;
  height: 45px;
  width: 45px;
  z-index: 9999;
  border: 1px solid #333;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}
#btn:checked ~ .menu-btn{
  left: 150px;
}
.wrapper .menu-btn i{
  position: absolute;
  transform: ;
  font-size: 23px;
  transition: all 0.3s ease;
}
.wrapper .menu-btn i.fa-times{
  opacity: 0;
}
#btn:checked ~ .menu-btn i.fa-times{
  opacity: 1;
  transform: rotate(-180deg);
}
#btn:checked ~ .menu-btn i.fa-bars{
  opacity: 0;
  transform: rotate(180deg);
}
#sidebar{
  position: fixed;
  background: #404040;
  height: 100%;
  width: 270px;
  overflow: hidden;
  left: -270px;
  transition: all 0.3s ease;
}
#btn:checked ~ #sidebar{
  left: 0;
}
#sidebar .title{
  line-height: 65px;
  text-align: center;
  background: #333;
  font-size: 25px;
  font-weight: 600;
  color: #f2f2f2;
  border-bottom: 1px solid #222;
}
#sidebar .list-items{
  position: relative;
  background: #404040;
  width: 100%;
  height: 100%;
  list-style: none;
}
#sidebar .list-items li{
  padding-left: 40px;
  line-height: 50px;
  border-top: 1px solid rgba(255,255,255,0.1);
  border-bottom: 1px solid #333;
  transition: all 0.3s ease;
}
#sidebar .list-items li:hover{
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0px 10px 3px #222;
}
#sidebar .list-items li:first-child{
  border-top: none;
}
#sidebar .list-items li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  height: 100%;
  width: 100%;
  display: block;
}
#sidebar .list-items li a i{
  margin-right: 20px;
}
#sidebar .list-items .icons{
  width: 100%;
  height: 40px;
  text-align: center;
  position: absolute;
  /* bottom: 100px; */
  line-height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#sidebar .list-items .icons a{
  height: 100%;
  width: 100%;
  display: block;
  margin: 0 5px;
  font-size: 18px;
  color: #f2f2f2;
  background: #4a4a4a;
  border-radius: 5px;
  border: 1px solid #383838;
  transition: all 0.3s ease;
}
#sidebar .list-items .icons a:hover{
  background: #404040;
}
.list-items .icons a:first-child{
  margin-left: 0px;
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  width: 100%;
  text-align: center;
}
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
        
       <div class="container">
           <div class="row">
               <div class="col-sm-5"></div>
               <div class="col-sm-6 text-center d-flex"> <img src="../image/favicon.png" class="mr-4 mt-3" alt=""><h2 class="mt-4">Hotel Royal</h2></div>
          <div class="col-sm-1">
          <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
        
                    
                   
                    
                    
                  
       
         <nav id="sidebar" style="overflow:scroll;">
            <div class="title">
              Admin Name
            </div>
            <ul class="list-items" >
            <form action="" method="post">
               <li><a href="#">DASHBOARD</a></li>
               <li><a class=""  href="rooms.php">Book Room</a></li>
               <li> <a class="" href="rooms.php">Check Room Status</a></li>
               <li><a class="" href="userList.php">View Users Detail</a></li>
               <li><a class="" href="#">Recently Check Outs</a></li>
               <li><a href="#">Single Rooms</a></li>
               <li><a href="#">Double Rooms</a></li>
               <li><a href="#">Tripple Rooms</a></li>
               <li><a href="#">Quad Rooms</a></li>
               <li><a href="#">Queen Rooms</a></li>
               <li><a href="#">King Rooms</a></li>
               <li><a href="#">Suite Rooms</a></li>
               <li><a href="#">Twin Rooms</a></li>
               </form>
               <div class="icons">
               <a class="btn btn-danger" href="logout.php">Logout</a>
               </div>
            </ul>
         </nav>
      </div>
          </div>
      </div>
    
    <div class="container " style="margin-left:100px; margin-top:100px;">
   
    
    <div class="row mt-4" >
            <div class="col-sm-4" id="dash_card">
           <a href="rooms/single.php">
           <div class="col-sm-12 text-center" >
            <img src="../image/rooms/Single-Room.webp" id="imag" alt="" >
              <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">Single Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
            </div>
           </a>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4" id="dash_card">
           <a href="rooms/double.php">
           <div class="col text-center" >
            <img src="../image/rooms/Double-Room.webp" alt="">
              <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">Double Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
            </div>
           </a>
            </div>
        </div>

        <div class="row  mt-4">
        <div class="col-sm-2"></div>
        <div class="col-sm-4" id="dash_card">
           <a href="rooms/tripple.php">
           <div class="col text-center" >
            <img src="../image/rooms/Triple-Room.webp" alt="">
              <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">Tripple Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
            </div>
           </a>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4" id="dash_card">
           <a href="rooms/quad.php">
           <div class="col text-center" >
            <img src="../image/rooms/quad-Room.webp" alt="">
              <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">Quad Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
            </div>
           </a>
            </div>
        </div>

        <div class="row mt-4">
        <div class="col-sm-4" id="dash_card">
           <a href="rooms/queen.php">
           <div class="col text-center" >
            <img src="../image/rooms/Queen-Room.webp" alt="">
              <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">Queen Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
            </div>
           </a>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4" id="dash_card">
           <a href="rooms/king.php">
           <div class="col text-center" >
            <img src="../image/rooms/King-Room.webp" alt="">
              <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">King Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
            </div>
           </a>
            </div>
        </div>

        <div class="row  mt-4">
        <div class="col-sm-2"></div>
        <div class="col-sm-4" id="dash_card">
           <a href="rooms/suite.php">
           <div class="col text-center" >
            <img src="../image/rooms/suite-Room.webp" alt="">
            <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">Suite Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
              <h3></h3>
            </div>
           </a>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4 mb-5   " id="dash_card">
           <a href="">
           <div class="col text-center" >
            <img src="../image/rooms/Twin-Room.webp" alt="">
              <div class="row d-flex">
                  <div class="col-sm-8">
                  <h3 class="text-left">Twin Rooms</h3>
                  </div>
                  <div class="col-sm-4">
                      <h3>15/6</h3>
                  </div>
                </div>
            </div>
           </a>
            </div>
        </div>
    </div>
      
        </div>




<!--        
            <div class="col-sm-12">
                <form action="" method="post">
                    <a class="btn btn-primary"  href="rooms.php">Book Room</a>
                    <a class="btn btn-success" href="rooms.php">Check Room Status</a>
                    <a class="btn btn-warning active" href="userList.php">View Users Detail</a>
                    <a class="btn btn-info" href="#">Recently Check Outs</a>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </form>
            </div> -->
      

   
      



        <!--================Banner Area END =================-->
       <!-- <div class="row">
       	<div class="col-md-12">
       		<center><h3>Checked In Customer Details</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
            <center> <h2 class="my-5 py-3" style="border:2px solid maroon;">Single Non Ac Rooms Details</h2> </center>
                <table class="table  table-borderless">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>Aadhar Number</th>
                            <th>Mobile Number</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr>
                    </thead>
        		<?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel_royal");
                    $query = "select * from single_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-12">
            <center> <h2 class="my-5 py-3" style="border:2px solid maroon;">Single  Ac Rooms Details</h2> </center>
                <table class="table   table-striped ">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>Aadhar Number</th>
                            <th>Mobile Number</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr>
                    </thead>
        		<?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel_royal");
                    $query = "select * from single_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-12">
            <center> <h2 class="my-5 py-3"class="my-5" style="border:2px solid maroon;">Double Non Ac Rooms Details</h2> </center>
                <table class="table  table-borderless">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>Aadhar Number</th>
                            <th>Mobile Number</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr>
                    </thead>
        		<?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel_royal");
                    $query = "select * from double_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-12">
            <center> <h2 class="my-5 py-3" style="border:2px solid maroon;">Double   Ac Rooms Details</h2> </center>
                <table class="table  table-striped">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>Aadhar Number</th>
                            <th>Mobile Number</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr>
                    </thead>
        		<?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel_royal");
                    $query = "select * from double_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
        <br><br><br><br><br><br> -->
        <!--================ start footer Area  =================-->
   <!--================ Footer Area  =================-->


        <!--================ Footer Area  =================-->  
