<?php session_start();
$con = mysqli_connect("localhost", "root", "", "project");
if (isset($_POST['submit']))
	$Eid = mysqli_real_escape_string($con, $_POST['EmpID']);
// $status = mysqli_real_escape_string($con, $_POST['Status']);

$query = "UPDATE  employee SET 
		 `Action` = 0	
		  WHERE EmpID= '$Eid' ";

if (mysqli_query($con, $query)) {
	$_SESSION['stat'] = "Employee Unassigned Successfully";
	$_SESSION['status_code'] = "success";
	header('Location:../AssignEmployee.php');
} else {
	$_SESSION['stat'] = "Something went wrong";
	$_SESSION['status_code'] = "error";
	header('Location:../AssignEmployee.php');
}
?>
   
