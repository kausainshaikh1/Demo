<?php session_start();
$con = mysqli_connect("localhost", "root", "", "project");
if (isset($_POST['submit']))
	$Eid = mysqli_real_escape_string($con, $_POST['EmpID']);
// $status = mysqli_real_escape_string($con, $_POST['Status']);

$query = "UPDATE  employee SET 
		 `Action` = 1	
		  WHERE EmpID= '$Eid' ";

if (mysqli_query($con, $query)) {
	$_SESSION['stat'] = "Employee Assigned Successfully";
	$_SESSION['status_code'] = "success";
	header('Location:../assigned-cust.php');
} else {
	$_SESSION['stat'] = "Something went wrong";
	$_SESSION['status_code'] = "error";
	header('Location:../assigned-cust.php');
}
?>
   
