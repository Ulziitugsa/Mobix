<?php
//start the new session
session_start();
//Read the email and the password
$email = $_POST['email'];
$password=$_POST['password'];
if (($email=="") || ($password=="")) {
  	header("Location: login.html");
}
else
	{   
	//connect to server and select database
	require_once('conn_mobix.php');
   
	//Create a select query to select user details using the email and the password
	$query = "SELECT customerID, first_name, last_name, phone, email, password from customers WHERE (email = '$email') AND (password = '$password')";
	$result = mysqli_query($link, $query) or die( "Invalid Customer ID or Password");

	//get the number of rows in the result set; should be 1 if a match
	if (mysqli_num_rows($result) == 1) {
   		//if authorized, get the values of firstname lastname, phone and email
    	//print_r($row);
		$row = $result->fetch_row();
		$customerID = $row[0];
		$first_name=$row[1];
		$last_name=$row[2];
		$phone=$row[3];
		$email=$row[4];
		mysqli_close($link);
		//save the values in session variables
		$_SESSION['customerID'] = $customerID;
		$_SESSION['first_name'] = $first_name;
		$_SESSION['last_name'] = $last_name;
		$_SESSION['phone'] = $phone;
		$_SESSION['email'] = $email;
		header("Location: member_page.php"); 
		exit;
	}
	else
		{
			header("Location: login.html");
   exit;
		}
}
?>
