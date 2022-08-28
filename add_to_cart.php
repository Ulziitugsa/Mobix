
<?php
	session_start();
	if(isset ($_SESSION['email']))
	{
		$customerID = $_SESSION['customerID'];	

$productID=$_GET['productID'];
 require_once('conn_mobix.php');
$query = "SELECT customerID, productID, qty, status from cart
WHERE (customerID = '$customerID') AND (productID = '$productID') and (status='inCart')";
$result= mysqli_query($link, $query) or die("Database Error");

 if ((mysqli_num_rows($result) == 1))
 {
	 $query="UPDATE cart SET qty = qty + 1 WHERE CustomerID = $customerID";
 }
 else
 {

	$query = "INSERT INTO cart VALUES('$customerID', '$productID', 1, 'inCart')";
 }

 $result= mysqli_query($link, $query) or die("Database Error");

header("Location: view_cart.php");
mysqli_close($link);
 }
 else
	header("Location: login.html");
?>
-------