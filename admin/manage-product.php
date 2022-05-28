<?php
session_start();
error_reporting(0);
// include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {

	// 	if (isset($_REQUEST['del'])) {
	// 		$delid = intval($_GET['del']);
	// 		$sql = "delete from product SET product_ID=:status WHERE product_ID=:delid";
	// 		$query = $dbh->prepare($sql);
	// 		$query->bindParam(':delid', $delid, PDO::PARAM_STR);
	// 		$query->execute();
	// 		$msg = "Product Record Deleted Successfully";
	// 	}
	// 
?>

	<!doctype html>
	<html lang="en" class="no-js">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">

		<title>World Of Dresses|Admin Manage Products </title>

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

	</head>

	<body>
		<?php include('includes/header.php'); ?>

		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title">Manage Products</h2>

							<!-- Zero Configuration Table -->
							<div class="panel panel-default">
								<div class="panel-heading">Products Details</div>
								<div class="panel-body">
									<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
									<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>SR. NO.</th>
												<th>Name</th>
												<th>Collection</th>
												<th>category</th>
												<th>company_Name</th>
												<th>Brand</th>
												<th>Price</th>
												<th>Description</th>
												<th>Pattern</th>
												<th>Quantity</th>
												<th>Colors</th>
												<th>Size</th>
												<th>Stiched</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>

											<?php
											$con = mysqli_connect("localhost", "root", "", "project");
											$query = mysqli_query($con, "select * from product ");
											$cnt = 1;
											while ($row = mysqli_fetch_array($query)) {
												#Profile Completed
												$row_id = $row['product_ID'];
												$nul_check = mysqli_query($con, "select $row_id from product");
												$null_row = mysqli_fetch_array($nul_check);
											?>
												<tr>
													<td><?php echo htmlentities($cnt); ?></td>
													<td><?php echo htmlentities($row['product_name']); ?></td>
													<td><?php echo htmlentities($row['collections']); ?></td>
													<td><?php echo htmlentities($row['product_category']); ?></td>
													<td><?php echo htmlentities($row['company_name']); ?></td>
													<td><?php echo htmlentities($row['brand']); ?></td>
													<td><?php echo htmlentities($row['price']); ?></td>
													<td><?php echo htmlentities($row['description']); ?></td>
													<td><?php echo htmlentities($row['product_pattern']); ?></td>
													<td><?php echo htmlentities($row['quantity']); ?></td>
													<td><?php echo htmlentities($row['product_color']); ?></td>
													<td><?php echo htmlentities($row['size']); ?></td>
													<td><?php echo htmlentities($row['product_stiched']); ?></td>

													<td><a href="edit-product.php?product_ID=<?php echo $row['product_ID']; ?>" onclick="return confirm('Do you want to Edit?');"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
														<a href="delete-product.php?product_ID=<?php echo $row['product_ID']; ?>" onclick="return confirm('Do you want to Delete?');"><i class="fa fa-close"></i></a>
													</td>
												</tr>
										<?php $cnt = $cnt + 1;
											}
										} ?>

										</tbody>
									</table>
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

	</html>