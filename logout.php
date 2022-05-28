<?php
//session_start();
//session_destroy();

//header('location:login.html');
session_start();

if (isset($_SESSION["username"]))
 {
	session_destroy();
	header("location:login.php");
}
else
{
	header("location:index.php");
}

?>
