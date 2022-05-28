<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
// include'../../includes/conn.php';
//extract($_GET);
$id = $_GET['product_ID'];

if ($_GET["product_ID"]) {
    $query = "DELETE FROM product WHERE product_ID='$id'";
    $result = mysqli_query($con, $query);
    print_r($query);
    // Check the result and post confirm message
    header('Location: manage-product.php');
}
/*else {
	mysqli_errorno($result);
}*/
