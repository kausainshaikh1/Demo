<?php
session_start();
// include'../../includes/conn.php';
$con = mysqli_connect("localhost", "root", "", "project");
extract($_POST);

$id = mysqli_real_escape_string($con, $_POST['product_ID']);
$product_name = $_POST['product_name'];
$collections = $_POST['collections'];
$product_category = $_POST['product_category'];
$company_name = $_POST['company_name'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$description = $_POST['description'];
$product_pattern = $_POST["product_pattern"];
$quantity = $_POST['quantity'];
$product_color = $_POST['product_color'];
$size = $_POST['size'];
$product_stiched = $_POST['product_stiched'];

$query = "UPDATE product SET 
		 `product_name` = '$product_name',
         `collections` = '$collections',
         `product_category` = '$product_category',
         `company_name` = '$company_name',
         `brand` = '$brand',
         `price` = '$price',
         `description` = '$description',
         `product_pattern` = '$product_pattern',
         `quantity` = '$quantity',
         `product_color` = '$product_color',
         `size` = '$size',
         `product_stiched` = '$product_stiched'
		  WHERE product_ID= '$id' ";


if (!mysqli_query($con, $query)) {
    echo ("Error description: " . mysqli_error($con));
} else {
    echo '<script type="text/javascript">';
    echo 'window.history.back()';
    echo '</script>';
}
