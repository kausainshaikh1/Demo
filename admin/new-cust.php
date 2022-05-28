<?php session_start();

$con = mysqli_connect("localhost", "root", "", "project");

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

    <?php include('includes/header.php');
    ?>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">New Customer Requests</h1>


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">New Customer Requests</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form name="assignto" method="post">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Sno.</th>
                                                    <th>Username</th>
                                                    <th>Contact No</th>
                                                    <th>Address</th>
                                                    <th>Order No</th>
                                                    <!-- <th>Price</th> -->
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $query = mysqli_query($con, "select user_order.username,user_order.contact_no,user_order.address,user_order.order_no,user_order.id as testid from user_order");
                                                $cnt = 1;
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php echo $row['username']; ?></td>
                                                        <td><?php echo $row['contact_no']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['order_no']; ?></td>
                                                        <!-- <td><?php echo $row['price']; ?></td> -->

                                                        <td>

                                                            <a href="new_order_details.php?tid=<?php echo $row['testid']; ?>&&oid=<?php echo $row['order_no']; ?>" class="btn btn-info btn-sm">View Details</a>

                                                        </td>
                                                    </tr>
                                                <?php $cnt++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->


                <!-- Footer -->
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