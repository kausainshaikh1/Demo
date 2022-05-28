<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
// error_reporting(0); 
// include('includes/config.php');
// if (isset($_POST['update'])) {
	// $pid = intval($_GET['pid']);
	$pid = $_GET['id'];
?>
<?php
$query = mysqli_query($con, "select * from employee where id = '$pid'");
while ($row = mysqli_fetch_array($query)) {
?>
	<doctype html>
		<html lang="en" class="no-js">

		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			<meta name="theme-color" content="#3e454c">

			<title>World Of Dresses | Edit Employee Info</title>

			<!-- Font awesome -->
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<!-- Sandstone Bootstrap CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<!-- Bootstrap Datatables -->
			<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
			<!-- Bootstrap social button library -->
			<link rel="stylesheet" href="css/bootstrap-social.css">
			<!-- Bootstrap select -->
			<link rel="stylesheet" href="css/bootstrap-select.css">
			<!-- Bootstrap file input -->
			<link rel="stylesheet" href="css/fileinput.min.css">
			<!-- Awesome Bootstrap checkbox -->
			<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
			<!-- Admin Stye -->
			<link rel="stylesheet" href="css/style.css">
			<style>
				.errorWrap {
					padding: 10px;
					margin: 0 0 20px 0;
					background: #fff;
					border-left: 4px solid #dd3d36;
					-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
					box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				}

				.succWrap {
					padding: 10px;
					margin: 0 0 20px 0;
					background: #fff;
					border-left: 4px solid #5cb85c;
					-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
					box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				}
			</style>

		<body>
			<?php include('includes/header.php'); ?>
			<div class="ts-main-content">
				<?php include('includes/leftbar.php'); ?>
				<div class="content-wrapper">
					<div class="container-fluid">

						<div class="row">
							<div class="col-md-12">

								<h2 class="page-title">Edit Employee</h2>

								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">Basic Info</div>
											<div class="panel-body">

												<div class="card shadow mb-4">
													<div class="card-header py-3">
														<h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
													</div>
													<div class="card-body">
													<form method="post" action="update-employee.php" class="form-horizontal">
														<div class="form-group">
															<label>Employee Id</label>
															<input type="text" class="form-control" id="EmpID" name="EmpID" value="<?php echo $row['EmpID']; ?>" readonly="true">
														</div>

														<div class="form-group">
															<label>Full Name</label>
															<input type="text" class="form-control" id="FullName" name="FullName" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" value="<?php echo $row['FullName']; ?>" required="true">
														</div>
														<div class="form-group">
															<label>Mobile Number</label>
															<input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Please enter your mobile number"  title="10 numeric characters only" value="<?php echo $row['MobileNumber']; ?>"  required="true">
														</div>
														<!-- <div class="form-group">
															<label>Registration Date: </label>
															<?php echo $row['RegDate']; ?>
														</div> -->

														<div class="form-group">
															<input type="submit" class="btn btn-primary btn-user btn-block" value="Update">
														</div>

													</div>
												</div>

											</div>
										</div>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>

			<!-- Loading Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap-select.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.dataTables.min.js"></script>
			<script src="js/dataTables.bootstrap.min.js"></script>
			<script src="js/Chart.min.js"></script>
			<script src="js/fileinput.js"></script>
			<script src="js/chartData.js"></script>
			<script src="js/main.js"></script>

		</body>
		</head>
	<?php } ?>

		</html>