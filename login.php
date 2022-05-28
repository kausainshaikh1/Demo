<?php
session_start();
?>
<html>

<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<?php
	if (isset($_SESSION['msg']))
		echo $_SESSION['msg'];
	unset($_SESSION['msg']);
	?>

	<?php
	if (isset($_POST['submit'])) {
		$con = mysqli_connect("localhost", "root", "", "project");

		// $d=mysqli_select_db($con,"project");

		$email = $_POST['email'];
		$password = $_POST['password'];

		$email_search = "select * from users where email='$email' and status='active' ";
		$query = mysqli_query($con, $email_search);

		$email_count = mysqli_num_rows($query);

		if ($email_count) {
			$email_pass = mysqli_fetch_assoc($query);

			$db_pass = $email_pass['password'];


			$_SESSION['username'] = $email_pass['username'];
			$_SESSION['email'] = $email_pass['email'];
			$_SESSION['token'] = $email_pass['token'];
			$_SESSION['user_id'] = $email_pass['user_id'];
			// $_SESSION['msg'] = $email_pass['msg'];


			$pass_decode = password_verify($password, $db_pass);

			if ($pass_decode) {

				if (isset($_POST['rememberme'])) {

					setcookie('emailcookie', $email, time() + 86400);
					setcookie('passwordcookie', $password, time() + 86400);
					header('location: index1.php');
				} else {
					header('location: index1.php');
				}
			} else {
				echo '<div class="alert alert-danger">Password is incorrect.</div>';
			}
		} else {
			echo '<div class="alert alert-danger">Invalid Email.</div>';
		}
	}
	// mysqli_close($con);

	?>

<body>
	<div class="loginbox">
		<img src="images/icon.png" class="avatar"><br>
		<h1>LOGIN</h1><br><br>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			<p>Username</p>
			<input type="text" name="email" placeholder="Enter Username"><br><br>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password"><br><br>
			<input type="submit" name="submit" value="Login"><br><br><br>

			<b><a href="./forgot_password.html">Forgot Password?</a></b><br><br>
			<b><a href="./sign_up.php">Don't have an account? Sign Up</a></b>
		</form>
	</div>

</body>
</head>

</html>