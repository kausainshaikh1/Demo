<?php session_start();
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "project");
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {

    //Code for record deletion
    // if ($_GET['action'] == 'delete') {
    //     $pid = intval($_GET['pid']);
    //     $query = mysqli_query($con, "delete from employee where id='$pid'");
    //     echo '<script>alert("Record deleted")</script>';
    //     echo "<script>window.location.href='manage_employee.php'</script>";
    // }
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
                <h1 class="h3 mb-2 text-gray-800">Manage Employee</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Employee Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Emp Id</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>
                                        <th>Reg. Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <!-- <tr>
                                            <th>Sno.</th>
                                            <th>Emp Id</th>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                             <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr> -->
                                </tfoot>
                                <tbody>
                                <?php
                                $query = mysqli_query($con, "select * from employee ");
											$cnt = 1;
											while ($row = mysqli_fetch_array($query)) {
												#Profile Completed
												$pid = $row['id'];
												$nul_check = mysqli_query($con, "select $pid from employee");
												$null_row = mysqli_fetch_array($nul_check);
                                    ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo $row['EmpID']; ?></td>
                                            <td><?php echo $row['FullName']; ?></td>
                                            <td><?php echo $row['MobileNumber']; ?></td>
                                            <td><?php echo $row['RegDate']; ?></td>
                                            <td>

                                                <a href="edit_employee.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit" style="color:blue"></i></a> |
                                                <a href="delete-employee.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to Delete?');"><i class="fa fa-close"></i></a>
                                            </td>
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