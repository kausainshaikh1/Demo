<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {

	if (isset($_POST['submit'])) {
		$product_name = $_POST['product_name'];
		$collections = $_POST['collections'];
		$product_category = $_POST['product_category'];
		$company_name = $_POST['company_name'];
		$brand = $_POST['brand'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$product_pattern = $_POST["product_pattern"];
		$quantity = $_POST['quantity'];
		$product_color = $_POST['product_color'];
		$size = $_POST['size'];
		$product_stiched = $_POST['product_stiched'];
		$image1 = $_FILES["image1"]["name"];
		move_uploaded_file($_FILES["image1"]["tmp_name"], "Dresses/" . $_FILES["image1"]["name"]);

		$sql = "INSERT INTO product(product_name,collections,product_category,company_name,brand,price,description,product_pattern,quantity,product_color,size,product_stiched,product_image) VALUES(:product_name,:collections,:product_category,:company_name,:brand,:price,:description,:product_pattern,:quantity,:product_color,:size,:product_stiched,:image1)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':product_name', $product_name, PDO::PARAM_STR);
		$query->bindParam(':collections', $collections, PDO::PARAM_STR);
		$query->bindParam(':product_category', $product_category, PDO::PARAM_STR);
		$query->bindParam(':company_name', $company_name, PDO::PARAM_STR);
		$query->bindParam(':brand', $brand, PDO::PARAM_STR);
		$query->bindParam(':price', $price, PDO::PARAM_STR);
		$query->bindParam(':description', $description, PDO::PARAM_STR);
		$query->bindParam(':product_pattern', $product_pattern, PDO::PARAM_STR);
		$query->bindParam(':quantity', $quantity, PDO::PARAM_STR);
		$query->bindParam(':product_color', $product_color, PDO::PARAM_STR);
		$query->bindParam(':size', $size, PDO::PARAM_STR);
		$query->bindParam(':product_stiched', $product_stiched, PDO::PARAM_STR);
		$query->bindParam(':image1', $image1, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
		if ($lastInsertId) {
			$msg = "Product added successfully";
		} else {
			$error = "Something went wrong. Please try again";
		}
	}

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

		<title>World Of Dresses | Add Product</title>

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

							<h2 class="page-title">Add a Product</h2>

							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">Basic Info</div>
										<br><br>
										<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php } ?>

										<div class="panel-body">
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
												<div class="form-group">
													
													
													<div class="col-sm-3">
														<label class=" control-label">Product Name<span style="color:red">*</span></label>
														<input type="text" name="product_name" class="form-control" required>
													</div>
												</div> 
												<br>

												<div class="form-group col-md-2">
													<!-- <label for="colFormLabel" class="col-sm-2 col-form-label">Product Collections <span style="color:red">*</span></label> -->
													<!-- <div class="btn-group dropend"><button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="True"> -->
													<label for="Collections">Collections</label>
													<select class="form-control" name="collections">
														<option value="Casual Wear">Casual Wear</option>
														<option value="Party Wear">Party Wear</option>
														<option value="Designer Wear">Designer Wear</option>
													</select>
												</div>
												<br>
										</div>
										<br>
										<div class="form-group col-md-3">
											<label for="colFormLabel" class=" col-form-label">Product Category</label>
											<!-- <div class="btn-group dropend"><button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> -->
											<!-- My Categories -->
											<select class="form-control" name="product_category">
												<option value="Dress Material">Dress Material</option>
												<option value="Kurties">Kurties</option>
												<option value="Gowns">Gowns</option>
												<option value="Sarees">Sarees</option>
												<option value="Lehngas">Lehngas</option>
											</select>
										</div>

									</div>
									<br>
									<div class="form-group">
										<div class="col-sm-5">
										<label class=" control-label">Product Company Name<span style="color:red">*</span></label>
											<input type="text" name="company_name" class="form-control" required>
										</div>

									</div>

									<div class="form-group">
										<div class="col-sm-5">
										<label class=" control-label">Product Brand Name<span style="color:red">*</span></label>
											<input type="text" name="brand" class="form-control" required>
										</div>

									</div>
									<br>
									<div class="form-group">
										<div class="col-sm-5">
										<label class=" control-label">Product Price<span style="color:red">*</span></label>
											<input type="text" name="price" class="form-control" required>
										</div>

									</div>
									<br>
									<div class="form-group">
										<div class="col-sm-5">
										<label class=" control-label">Product Description<span style="color:red">*</span></label>
											<input type="text" name="description" class="form-control" required>
										</div>
									</div>
									<br>

									<div class="form-group">
										<div class="col-sm-5">
										<label class=" control-label">Product Pattern <span style="color:red">*</span></label>
											<input type="text" name="product_pattern" class="form-control" required>
										</div>
									</div>

									<br>
									<div class="form-group">
										<div class="col-sm-5">
										<label class=" control-label">Product Quantity<span style="color:red">*</span></label>
											<input type="text" name="quantity" class="form-control" required>
										</div>
									</div>
									<div class="form-group">
									<div class="col-md-5">
									<div class=" dropend">
									<label for="colFormLabel" class=" col-form-label">Product Colors</label>
										<select class="form-control" name="product_color">
											<option value="Red">Red</option>
											<option value="Pink">Pink</option>
											<option value="Green">Green</option>
										</select>
									</div>
								</div>
									</div>
									<div class="form-group">
										<div class="col-sm-5">
										<label for="colFormLabel" class=" col-form-label">Product Size</label>
									<!-- <div class="btn-group dropend"><button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> -->
									<!-- My Categories -->
									<select class="form-control" name="size">
										<option value="XL">XL</option>
										<option value="XS">XS</option>
										<option value="XXL">XXL</option>
										<option value="XXS">XXS</option>

									</select>
								
										</div>
									</div>


									

									<div class="form-group col-md-5">
								<div class=" dropend">
									<label for="colFormLabel" class=" col-form-label">Product Stiched <span style="color:red">*</span></label>
										<!-- <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											Stiched selsection
										</button> -->
										<select class="form-control" name="product_stiched">
											<option value="Full Stiched">Full Stiched</option>
											<option value="Semi Stiched">Semi Stiched</option>
											<option value="UnStiched">UnStiched</option>
										</select>
										<!-- <ul class="dropdown-menu">
											<li><a class="dropdown-item">Full Stiched</a></li>
											<li><a class="dropdown-item">Semi Stiched</a></li>
											<li><a class="dropdown-item">UnStiched</a></li>
										</ul> -->
									</div>
								</div>
								
								 <div class="form-group mt-3">
										<div class="col-sm-5">
										<label for="formFile" class="form-label">Product image</label>
										  <input class="form-control" type="file" name="image1" id="formFile">
										</div>
									</div> 

								</div>
								<br>
								
								<div class="form-group">
									<div class="col-sm-12 col-sm-offset-4">
										<button class="btn btn-default" type="reset">Cancel</button>
										<input type="submit" name="submit" class="btn btn-primary">
										<br><br>
									</div>
									<!-- <br> -->
									</form>
								</div>

								<!-- <div class="form-group">
									<div class="col-sm-12 col-sm-offset-4">
										<button class="btn btn-default" type="reset">Cancel</button>
										<input type="submit" name="submit">
										<br><br>
									</div> -->
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

	</body>

	</html>
<?php } ?>