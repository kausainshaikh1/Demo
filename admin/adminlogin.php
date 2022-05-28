<?php
session_start();
?>

<!doctype html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<body>
<div id="container">
<div class="sign-up-form">
<fieldset><br>
<h2>ADMIN LOGIN</h2><hr><br><br>
<form action="adminlogin.php" method="get">
<p>Username</p>
<input type="text" class="input-box" name="username" placeholder="Enter Username"><br><br>
<p>Password</p>
<input type="password" class="input-box" name="password" placeholder="Enter Password"><br><br>
<input type="submit" class="input-box" name="submit" value="Login"><br><br>
<b><a href="#">Don't have an account? Register</a></b>
</form>
</fieldset>
</div>

</body>
</head>
</html>

<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT name,password FROM admin WHERE name=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

  echo "<script>alert('Invalid Details');</script>";
}
}
?>
