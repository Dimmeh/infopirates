<?php 

session_start();

require 'connect.inc.php';


if ($_POST['name'] != '' && $_POST['email'] != '') 
{


	$name =  mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	
	$_SESSION['name'] = $name;



	




	$query = mysqli_query($con, "INSERT INTO tbl_users (username, email) VALUES ('$name', '$email')") or die (mysqli_errno($con));

	header('location: index.php');

} 

 ?>