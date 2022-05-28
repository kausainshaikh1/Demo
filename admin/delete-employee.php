<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
// include'../../includes/conn.php';
//extract($_GET);
$id = $_GET['id'];

if ($_GET["id"]) {
    $query = "DELETE FROM employee WHERE id='$id'";
    $result = mysqli_query($con, $query);
    // print_r($query);
    // Check the result and post confirm message
    header('Location: manage_employee.php');
}
/*else {
	mysqli_errorno($result);
}*/
