<?php
session_start();
include 'config.php';
if (isset($_POST['submit'])) {

    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $mobile_number = mysqli_real_escape_string($con, $_POST['mobile_number']);
    $aadhar_number = mysqli_real_escape_string($con, $_POST['aadhar_number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    $pwd = password_hash($password, PASSWORD_BCRYPT);
    $cpwd = password_hash($confirm_password, PASSWORD_BCRYPT);

    $emailquery = "select * from users where email ='$email' ";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) {
        echo "email already exists";
    } else {
        if ($password === $confirm_password) {

            $insertquery = "insert into users(full_name, mobile_number, aadhar_number,address, city, pincode, email, password, confirm_password) values('$full_name','$mobile_number','$aadhar_number','$address', '$city', '$pincode' ,'$email','$pwd','$cpwd')";
            $iquery = mysqli_query($con, $insertquery);
            if ($iquery) {
?>
                <script>
                    alert("Inserted Successfully");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Records Not Inserted");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("password's do not match");
            </script>
<?php
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Royal Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
        body {
            margin: 0;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            font-family: 'latto', sans-serif;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url("image/bgbg2.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-blend-mode: ;
    </style>
</head>

<body>

    <!-- ====================START SIGNUP PAGE ============================ -->



    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-sm-12 demo"></div>
            <div class="col-sm-5" id="signup-box">

                <div class="card text-center">
                    <div class="card-header">
                        <img src="image/favicon.png">
                        <h2>Hotel Royal</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" name="full_name" id="first_name" placeholder="Full Name " value="" class="form-control" required>
                                        <p>
                                            <?php #echo form_error('first_name');
                                            ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" name="mobile_number" id="phone" placeholder=" Mobile Number" value="" class="form-control">
                                        <p>
                                            <?php #echo form_error('phone');
                                            ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" name="aadhar_number" id="aadhar" placeholder=" Aadhar Number" value="" class="form-control" required>
                                        <p>
                                            <?php #echo form_error('phone');
                                            ?>
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" placeholder=" Address" value="" class="form-control" required>
                                        <p>
                                            <?php #echo form_error('phone');
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" name="city" id="city" placeholder=" City" value="" class="form-control" required>
                                        <p>
                                            <?php #echo form_error('password');
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" name="pincode" id="pincode" placeholder=" Pin Code" value="" class="form-control" required>
                                        <p>
                                            <?php #echo form_error('password');
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" placeholder=" Email" value="" class="form-control">
                                        <p>
                                            <?php #echo form_error('email');
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" placeholder=" Password" value="" class="form-control" required>
                                        <p>
                                            <?php #echo form_error('password');
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" id="confirm_password" placeholder=" Re-type Password" value="" class="form-control" required>
                                        <p>
                                            <?php #echo form_error('password');
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Register" style="width:80%">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="link text-center mt-3">
                            You Don't Have a Account or <a href="./login.php" style="text-decoration:underline;">SIGN IN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================END SIGNUP PAGE ============================ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>