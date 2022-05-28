<?php
session_start();
?>

<html>

<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	if (isset($_POST['submit'])) {
		$con = mysqli_connect("localhost", "root", "", "project");
		// $d = mysqli_select_db($con, "project");

		$username = mysqli_real_escape_string($con, $_POST['username']);
		$contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

		$token = bin2hex(random_bytes(15));
		$emailquery = "select * from users where email ='$email' ";
		$query = mysqli_query($con, $emailquery);

		$emailcount = mysqli_num_rows($query);

		if ($emailcount > 0) {
			echo '<div class="alert alert-danger">Email Address Already Exists.</div>';
		} else {
			if ($password === $cpassword) {

				$insertquery = "insert into users(username, contact_no, email, password, cpassword,token, status) values('$username','$contact_no','$email','$pass','$cpass','$token','inactive')";

				$iquery = mysqli_query($con, $insertquery);
				if ($iquery) {

					$subject = "Email Activation";
					$body = "Hi, $username. Click here to activate your account 
http://localhost/project/activate.php?token=$token";
					$sender_email = "From: chopdaraaliya1999@gmail.com";

					if (mail($email, $subject, $body, $sender_email)) {
						$_SESSION['msg'] = "check your mail to activate your account $email";
						header('location: login.php');
					} else {
						echo '<div class="alert alert-danger">Email sending failed.</div>';
					}
				} else {
	?>
					<script>
						alert("Records Not Inserted");
					</script>
	<?php
				}
			} else {
				echo '<div class="alert alert-danger">Passwords do not match</div>';
			}
		}
	}
	?>
	<div class="loginbox">
		<h1> SIGN UP </h1><br>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" name="username" placeholder="Username" required>
			<input type="text" name="contact_no" placeholder="Contact Number" required>
			<input type="text" name="email" placeholder="Email Id" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>
			<input type="submit" name="submit" value="Submit"></a><br>
			<b><a href="./login.php">Already have an account? Log In</a></b>
		</form>
	</div>
</body>

</html>