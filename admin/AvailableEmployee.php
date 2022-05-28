<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
$Eid = $_GET['EmpID'];

    $query = mysqli_query($con, "select * from employee where EmpID = '$Eid'");
    while ($row = mysqli_fetch_array($query)) {
    
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

<div class="col-md-4">

                        <form autocomplete="off" action="actions/AssignEmployee-code.php" method="post">
                            <div class="row container-fluid">
                                <div class="col-md-8"> <input type="hidden" name="EmpID" value="<?php echo ($row['EmpID']) ?>">
                                    <!-- <select class="form-control" name="Status"> -->
                                        <!-- <option class="text-danger" value="<?php echo ($row['status']) ?>"><?php echo ($row['status']) ?></option> -->
                                        <option value="Assign">Assign</option>
                                        <!-- <option value="Approved">Unassign</option> -->
                                        <!-- <option value="Featured">Featured</option> -->
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Update Status">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="card-body">
                            <!-- <form autocomplete="off" action="actions/AssignEmployee-code.php" method="post"> -->
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="Id">Id</label>
                                        <input type="text" class="form-control" placeholder="Id" autocomplete="off" name="id" value="<?php echo ($row['EmpID']) ?>"> 
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="Employee Name">Name</label>
                                        <input type="text" class="form-control"  name="FullName" placeholder="Name" autocomplete="off" required="required" value="<?php echo ($row['FullName']) ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="Employee Number">Number</label>
                                        <input type="text" class="form-control"  name="MobileNumber" placeholder="Contact Number" autocomplete="off" required="required" value="<?php echo ($row['MobileNumber']) ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="Registration Date">Registration Date</label>
                                        <input type="text" class="form-control"  name="RegDate" placeholder="Registration Date" autocomplete="off" required="required" value="<?php echo ($row['RegDate']) ?>" readonly>
                                    </div>
                                        <!-- end card-->
                                    </div>
                            </form>
                        </div>
                        <?php } ?>
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


