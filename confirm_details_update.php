<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");

if (isset($_POST['submit'])) {
	//getting post values
	// $user_id = $_POST['user_id'];
	$username = $_POST['username'];
	$contact_no = $_POST['contact_no'];
	$address = $_POST['address'];
	$order_no = mt_rand(100000000, 999999999);
	// $State = $_POST['State'];
	// $ProductType = $_POST['ProductType'];

	$query = "insert into user_order(username,contact_no,address,order_no) values('$username','$contact_no','$address','$order_no');";
	// $query .= "insert into tbltestrecord(MobileNumber,ProductType,OrderNumber) values('$MobileNumber','$ProductType','$OrderNumber');";
	$result = mysqli_multi_query($con, $query);
	if ($result) {
		echo '<script>alert("Your test request submitted successfully. Order number is "+"' . $order_no . '")</script>';
		echo "<script>window.location.href='COD.php'</script>";
	} else {
		echo "<script>alert('Something went wrong. Please try again.');</script>";
		echo "<script>window.location.href='confim_details'</script>";
	}
}
?>

<!-- Update Query Below -->
<?php
// extract($_POST);
// // print_r($_SESSION['id']);

// $uid = $_SESSION['user_id'];
// $username = mysqli_real_escape_string($con, $_POST['username']);
// $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
// $email = mysqli_real_escape_string($con, $_POST['email']);
// $address = mysqli_real_escape_string($con, $_POST['address']);
// $state = mysqli_real_escape_string($con, $_POST['state']);
// $city = mysqli_real_escape_string($con, $_POST['city']);
// $landmark = mysqli_real_escape_string($con, $_POST['landmark']);
// $pin_code = mysqli_real_escape_string($con, $_POST['pin_code']);

// $query = "UPDATE  users SET 
// 		 `username` ='$username',
// 		 `contact_no` ='$contact_no',
//          `email` ='$email',
// 		 `address` ='$address',
// 		 `state` ='$state',
// 		 `city` ='$city',
// 		 `landmark` ='$landmark',
// 		 `pin_code` ='$pin_code'
// 		  WHERE user_id= '$uid' ";

// if (!mysqli_query($con, $query)) {
//     echo ("Error description: " . mysqli_error($con));
// } else {
//     header('Location:confim_details.php');
// }
?>