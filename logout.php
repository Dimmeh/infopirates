<?php 

require 'connect.inc.php';

if (isset($_GET['logout'])) {
	session_destroy();
	header('location: register.php');
}

 ?>