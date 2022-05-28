<?php
session_start();
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
    }
      #signup-box{
      }
      #login-icon .fab{
        margin-left: 0.8rem;
        font-size:1.3rem;
        color:black;
      }
  </style>
</head>

<body>
  
  <!-- ====================START SIGNIN PAGE ============================ -->

  <div class="container-fluid">
    <div class="row justify-content-end">

      <div class="col-sm-3" id="signup-box">

        <div class="card text-center">
          <div class="card-header">
            <img src="image/favicon.png">
            <h2>Hotel Royal</h2>
          </div>
          <div class="card-body">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <?php
              include 'config.php';
              if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $email_search = "select * from users where email='$email' ";
                $query = mysqli_query($con, $email_search);

                $email_count = mysqli_num_rows($query);

                if ($email_count) {
                  $email_pass = mysqli_fetch_assoc($query);

                  $db_pass = $email_pass['password'];

                  $_SESSION['full_name'] = $email_pass['full_name'];
                  $_SESSION['email'] = $email_pass['email'];
                  $pass_decode = password_verify($password, $db_pass);

                  if ($pass_decode) {
                    echo "login successful";
                    header('location:index.php');
                  } else {
                    echo '<div class="alert alert-danger">Password is incorrect.</div>';
                  }
                } else {
                  echo '<div class="alert alert-danger">Invalid Email.</div>';
                }
              }
              ?>


              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-envelope-square"></i></span>
                <input type="text" class="form-control" name="email" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" placeholder="gmail" required>
              </div>

              <div class="input-group mt-3">
                <span class="input-group-addon"><i class="fas fa-lock-alt"></i></span>
                <input type="password" class="form-control" name="password" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" placeholder="Password" required>

              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Login" style="width:60%" class="btn btn-primary mt-3" >
              </div>

             
            </form>
          </div>
          <div class="card-footer text-muted">
          <div class="row justify-content-center">
                                
         
            <div class="col-sm-12 link text-center mt-3">
              Don't Have an Account ? <a href="./register.php" >SIGN UP</a> Here
            </div>
            <div class="col-sm-12">
               <h5>  Sign In With</h5>
               </div>
               <div class="col-sm-12" id="login-icon">
                 <a href=""> <i class="fab fa-google"></i> </a>
                 <a href=""> <i class="fab fa-facebook"></i> </a>
                 <a href=""> <i class="fab fa-twitter"></i> </a>
                 <a href=""> <i class="fab fa-linkedin-in"></i> </a>
               </div>
          </div>
        </div>

      </div>
     
    </div>
  </div>

  <!-- ====================END SIGNIN PAGE ============================ -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>