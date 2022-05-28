<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{
	header('location:index.php');
}
else{
	// Code for change password
	if(isset($_POST['submit']))
{

$order_time=$_POST['order_time'];
$id=$_GET['id'];
$sql="update users_items set order_time=:order_time where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':order_time',$order_time,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
$msg="Time updated successfully";
}}
?>
           