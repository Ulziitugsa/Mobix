<?php
session_start();
if(isset ($_SESSION['email']))
	{
		$productID = $_GET['productID'];	
		require_once('conn_mobix.php');
		$query = "DELETE FROM cart WHERE productID = '$productID' and status='inCart'";
		$result= mysqli_query($link, $query) or die("Database Error");
		header("Location:view_cart.php");

	}
 else
 {
	header("Location: login.html");
 }	
?>