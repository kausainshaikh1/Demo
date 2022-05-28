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
            
/*=========== breadcrumb_area css =============*/
.breadcrumb_area {
  position: relative;
  padding: 172px 0px 84px;
  background: #04091e;
  z-index: 1;
  overflow: hidden;
}

.breadcrumb_area .bg-parallax {
  background: url("../image/about_banner.jpg") no-repeat scroll center 0/cover;
  opacity: 0.50;
  z-index: -1;
}
.roomCount{
    color:white !important;
}
        </style>
    </head>
    <body>


          <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container ">
                <div class="page-cover text-center">
                    <!-- <h2 class="page-cover-tittle "> User's Information</h2> -->
                    <div class="row justify-content-center">
                        <ol class="d-flex text-center" style="list-style: none; color: wheat; ">
                        <li class="pr-2"><a href="../admin_dashboard.php" style="color: white;">DASHBOARD</a></li><b class="" style="width: 10px; color: white;">/</b>
                        <li class="active pl-2"><h5>Single Rooms</h5></li>
                    </ol>
                    </div>
                 <div class="row justify-content-center">
                 <div class="col-sm-6  d-flex roomCount">
                        <div class="col-sm-6">
                             <h4>Total Rooms</h4>
                             <h4>16</h4>
                        </div>
                        <div class="col-sm-6">
                             <h4>Booked Room</h4>
                             <h4>05</h4>
                         </div>
                     </div>
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


        <script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"single_non_ac_fetch.php",
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
