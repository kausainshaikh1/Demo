
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dash_styles.css" rel="stylesheet">
	
         <!-- FontAwesome CSS-->
		 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
</head>
<body>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
       <div class="row">
       	 <div class="navbar-header">

           <div class="col-sm-3"></div>

           <div class="col-sm-3	">
            <a class="navbar-brand" href="index.php?dashboard"><span>Hotel </span>Royal</a>
           </div>

           <div class="col-sm-4"></div>

           <div class="col-sm-1">
           	 <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-user"></em>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="logout.php"><i class="fa fa-power-off" style="color:red;"></i>
                                Logout
                            </a></li>
                    </ul>
                </li>
            </ul>
           </div>
            <div class="col-sm-1"></div>
        </div>   
       </div>
    </div>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Manager</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">

            <li class="active">
                <a href="">
                    Dashboard
                </a>
            </li>


            

            <li>
            <a href="rooms.php">
                    Manage Rooms
                </a>
            </li>
 
			<li>
            <a href="rooms/single.php">
                     Single AC 
                </a>
            </li>

			<li>
            <a href="rooms/double.php">
                     Double AC
                </a>
            </li>

			<li>
            <a href="rooms/single_non_ac.php">
                     Single Non-AC
                </a>
            </li>

			<li>
            <a href="rooms/double_non_ac.php">
                     Double Non-AC
                </a>
            </li>
			<li class="">
                <a href="">
				Recently Check Out
                </a>
            </li>

            <li>
                <a href="userList.php">
				View Users Detail
                </a>
            </li>
        
            <li class="">
                <a href="">
                    Manage Complaints
                </a>
            </li>
           
        
    </ul>
</div><!--/.sidebar-->

<!-- <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage Rooms</li>
        </ol>
    </div>
 -->
    <!--/.row-->

    <br>

  

    <div class="row">
      
    </nav>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<!-- <em class="fa fa-home"></em> -->
				</a></li>
			<!-- 	<li class="active">Dashboard</li> -->
			</ol>
		</div>

		<!--/.row-->
		
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>/.row -->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bed color-blue"></em>
							<div class="large">15</div>
							<div class="text-muted ">Total Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bookmark color-orange"></em>
							<div class="large">20</div>
							<div class="text-muted">Reservations</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">10</div>
							<div class="text-muted">Staffs</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-red"></em>
							<div class="large">10</div>
							<div class="text-muted">Complaints</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->

			<hr>

			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-reorder color-red"></em>
							<div class="large">10</div>
							<div class="text-muted">Booked Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
							<div class="large">23</div>
							<div class="text-muted">Available Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-square-o color-magg"></em>
							<div class="large">20</div>
							<div class="text-muted">Checked In</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-spinner color-blue"></em>
							<div class="large">15</div>
							<div class="text-muted">Total Pending Payments</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->

			<hr>

			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>

				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-red panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-money color-red"></em>
							<div class="large">23564/-</div>
							<div class="text-muted">Total Earnings</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-credit-card color-purp"></em>
							<div class="large">65894/-</div>
							<div class="text-muted">Pending Payment</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>
			</div><!--/.row-->
		</div>
		
	</div>	<!--/.main-->
	

		


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/foundation-datepicker.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/custom.js"></script>
<script src="ajax.js"></script>


</body>
</html>