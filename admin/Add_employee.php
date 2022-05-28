<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>



	<html lang="en" class="no-js">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">

		<title>World Of Dresses | Add Employee</title>

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

		<!-- <script>
function empidAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'employeeid='+$("#EmpID").val(),
type: "POST",
success:function(data){
$("#empid-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>        -->
	</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Topbar -->
		<?php include('includes/header.php'); ?>
		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container">
					<h1 class="h3 mb-4 text-gray-800">Add Employee</h1>
					<form name="Employee" action="actions/add-employee-code.php" method="post">
						<div class="row">

							<div class="row">
								<div class="col-md-8">



									<!-- Basic Card Example -->
									<div class="card shadow mb-4">
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label>Employee Id</label>
												<input type="text" class="form-control" id="empid" name="EmpID" placeholder="Enter Emp Id..." required="true" onBlur="empidAvailability()">
												<span id="empid-availability-status" style="font-size:12px;"></span>
											</div>

											<div class="form-group">
												<label>Full Name</label>
												<input type="text" class="form-control" id="fullname" name="FullName" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
											</div>
											<div class="form-group">
												<label>Mobile Number</label>
												<input type="text" class="form-control" id="MoblieNumber" name="MoblieNumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true">

											</div>
											<!-- <div class="form-group">
													<label>Register Date</label>
													<input type="text" class="form-control" id="" name="RegDate" placeholder="please enter Register Date" required="true">
												</div> -->
											<div class="form-group text-center">
												<input type="submit" class="btn btn-primary btn-user " name="submit" id="submit" style="width:60%;">
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->



		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button
       



     Bootstrap core JavaScript-->
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
	<script src="js/sweetalert.min.js"></script>
	<?php
	if (isset($_SESSION['stat']) && $_SESSION['stat'] != '') {
	?>
		<script>
			swal({
				title: "<?php echo $_SESSION['stat']; ?>",
				// text: "You clicked the button!",
				icon: "success",
				button: "Ok",
			});
		</script>
	<?php
		unset($_SESSION['stat']);
	}
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>

<?php  ?>