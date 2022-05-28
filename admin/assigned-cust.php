<?php session_start();

$con = mysqli_connect("localhost", "root", "", "project");
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} 
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>World Of Dresses | Manage Employee</title>

    </head>
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

    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Select Employee</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Employee Select</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Emp Id</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>                                  
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tfoot>
                                    <!-- <tr>
                                            <th>Sno.</th>
                                            <th>Emp Id</th>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                             
                                            <th>Action</th>
                                        </tr> -->
                                </tfoot>
                                <tbody>
                                    <?php $query = mysqli_query($con, "select * from employee where Action = 1");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>

                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo $row['EmpID']; ?></td>
                                            <td><?php echo $row['FullName']; ?></td>
                                            <td><?php echo $row['MobileNumber']; ?></td>
                                            
                                            <td>

                                            <div class="form-group text-center">
                                                 <!-- <a href="AvailableEmployee.php?EmpID=<?php echo $row['EmpID']?>" class="btn btn-primary <?php if($row["Action"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['Action']==0){echo "false";}else{echo "true";}?>">Available</a> -->
                                                <!-- <a href="UnavailableEmployee.php?EmpID=<?php echo $row['EmpID']?>" class="btn btn-danger <?php if($row["Action"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['Action']==0){echo "true";}else{echo "false";}?>">Unavailable</a> -->
                                                  
                                            </td>
                                            </div>
                                            
                                        </tr>
                                    <?php $cnt = $cnt + 1; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    <!--    </div>-->
    <!-- End of Page Wrapper -->
    <!-- Loading Scripts -->
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
