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
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
         <style type="text/css">
           
            th{
                color: aqua;
                background-color: black;
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>


          <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container ">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle "> User's Information</h2>
                    <div class="row justify-content-center">
                        <ol class="d-flex text-center" style="list-style: none; color: wheat; ">
                        <li class="pr-2"><a href="dashboard.php" style="color: white;">DASHBOARD</a></li><b class="" style="width: 10px; color: white;">/</b>
                        <li class="active pl-2">UserList</li>
                    </ol>
                    </div>
                 <div class="row justify-content-center">
                 <div class="col-sm-7">
                    
                 <input type="text" name="search_text" id="search_text" placeholder="Search " class="form-control" />
				</div>
   
                    </div>
                 </div>
                </div>
            </div>
        </section>
        <!--================Banner Area END =================-->



        <div class="container-fluid">
			<br>
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<!-- <br />
<div class="row">
       
       </div><br><br>
        <div class="row">
            <div class="col-md-12">
           
                <table class="table  table-borderless" id="userList" >
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Full Name</th>
                            <th>Aadhar Number</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Pin Code</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                <?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel_royal");
                    $query = "select * from users";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td id="userName"><?php echo $row['full_name'];?></td>
                                <td><?php echo $row['aadhar_number'];?></td>
                                <td><?php echo $row['mobile_number'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td><?php echo $row['pincode'];?></td>
                                <td><?php echo $row['email'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
            </div>
        </div>
 -->

        <script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




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
