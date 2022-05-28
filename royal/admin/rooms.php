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
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
        .btn {
            margin-right: 15px;
        }
    </style>
</head>

<body>


    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container ">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle ">ROOM BOOKING</h2>
                <div class="row justify-content-center">
                    <ol class="d-flex text-center" style="list-style: none; color: wheat; ">
                        <li class="pr-2"><a href="dashboard.php" style="color: white;">DASHBOARD</a></li><b class="" style="width: 10px; color: white;">/</b>
                        <li class="active pl-2">ROOMS</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area END =================-->
    <div class="row">

    </div><br><br>
    <center>
        <h5>Room Type:- SINGLE NON AC ROOMS </h5>
    </center><br>
    <div class="row ">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "hotel_royal");
        $query = "select * from single_non_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-header">Room No: <?php echo $row["room_no"] ?></div>
                    <div class="card-body">
                        <p class="card-text">Room Status: <?php if ($row["status"] == 0) {
                                                                echo "<b>Available</b>";
                                                            } else {
                                                                echo "<b>Already Booked</b>";
                                                            } ?></p>
                        <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=a"; ?>" class="btn btn-primary <?php if ($row["status"] == 0) {
                                                                                                                        echo "active";
                                                                                                                    } else {
                                                                                                                        echo "disabled";
                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                        echo "false";
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "true";
                                                                                                                                                                                                                    } ?>">Book</a>
                        <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=a"; ?>" class="btn btn-danger <?php if ($row["status"] == 0) {
                                                                                                                    echo "disabled";
                                                                                                                } else {
                                                                                                                    echo "active";
                                                                                                                } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                    echo "true";
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo "false";
                                                                                                                                                                                                                } ?>">Unbook</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div><br><br>
    <center>
        <h5>Room Type:- SINGLE AC ROOMS </h5>
    </center><br>
    <div class="row">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "hotel_royal");
        $query = "select * from single_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-header">Room No: <?php echo $row["room_no"] ?></div>
                    <div class="card-body">
                        <p class="card-text">Room Status: <?php if ($row["status"] == 0) {
                                                                echo "<b>Available</b>";
                                                            } else {
                                                                echo "<b>Already Booked</b>";
                                                            } ?></p>
                        <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=b"; ?>" class="btn btn-primary <?php if ($row["status"] == 0) {
                                                                                                                        echo "active";
                                                                                                                    } else {
                                                                                                                        echo "disabled";
                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                        echo "false";
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "true";
                                                                                                                                                                                                                    } ?>">Book</a>
                        <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=b"; ?>" class="btn btn-danger <?php if ($row["status"] == 0) {
                                                                                                                    echo "disabled";
                                                                                                                } else {
                                                                                                                    echo "active";
                                                                                                                } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                    echo "true";
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo "false";
                                                                                                                                                                                                                } ?>">Unbook</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div><br><br>
    <center>
        <h5>Room Type:- DOUBLE AC NON ROOMS </h5>
    </center><br>
    <div class="row">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "hotel_royal");
        $query = "select * from double_non_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-header">Room No: <?php echo $row["room_no"] ?></div>
                    <div class="card-body">
                        <p class="card-text">Room Status: <?php if ($row["status"] == 0) {
                                                                echo "<b>Available</b>";
                                                            } else {
                                                                echo "<b>Already Booked</b>";
                                                            } ?></p>
                        <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=c"; ?>" class="btn btn-primary <?php if ($row["status"] == 0) {
                                                                                                                        echo "active";
                                                                                                                    } else {
                                                                                                                        echo "disabled";
                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                        echo "false";
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "true";
                                                                                                                                                                                                                    } ?>">Book</a>
                        <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=c"; ?>" class="btn btn-danger <?php if ($row["status"] == 0) {
                                                                                                                    echo "disabled";
                                                                                                                } else {
                                                                                                                    echo "active";
                                                                                                                } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                    echo "true";
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo "false";
                                                                                                                                                                                                                } ?>">Unbook</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div><br><br>
    <center>
        <h5>Room Type:- DOUBLE AC ROOMS</h5>
    </center><br>
    <div class="row">
        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "hotel_royal");
        $query = "select * from double_ac";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-header">Room No: <?php echo $row["room_no"] ?></div>
                    <div class="card-body">
                        <p class="card-text">Room Status: <?php if ($row["status"] == 0) {
                                                                echo "<b>Available</b>";
                                                            } else {
                                                                echo "<b>Already Booked</b>";
                                                            } ?></p>
                        <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=d"; ?>" class="btn btn-primary <?php if ($row["status"] == 0) {
                                                                                                                        echo "active";
                                                                                                                    } else {
                                                                                                                        echo "disabled";
                                                                                                                    } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                        echo "false";
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "true";
                                                                                                                                                                                                                    } ?>">Book</a>
                        <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=d"; ?>" class="btn btn-danger <?php if ($row["status"] == 0) {
                                                                                                                    echo "disabled";
                                                                                                                } else {
                                                                                                                    echo "active";
                                                                                                                } ?>" role="button" aria-disabled="<?php if ($row['status'] == 0) {
                                                                                                                                                                                                                    echo "true";
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo "false";
                                                                                                                                                                                                                } ?>">Unbook</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <br><br><br><br><br><br>

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