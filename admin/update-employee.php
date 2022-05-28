<?php
session_start();
// include'../../includes/conn.php';
$con = mysqli_connect("localhost", "root", "", "project");
extract($_POST);

$pid = mysqli_real_escape_string($con, $_POST['EmpID']);
$FullName = $_POST['FullName'];
$MobileNumber = $_POST['MobileNumber'];

$query = "UPDATE employee SET 
		 `FullName` = '$FullName',
         `MobileNumber` = '$MobileNumber'                  
		  WHERE EmpID= '$pid' ";


if (!mysqli_query($con, $query)) {
    echo ("Error description: " . mysqli_error($con));
} else {
    echo '<script type="text/javascript">';
    echo 'window.history.back()';
    echo '</script>';
}
