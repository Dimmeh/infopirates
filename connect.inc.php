<?php

$host = 'localhost';
$user = 'root';
$pass = '1234';

$db = 'infopirates';

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
	printf('Kan geen connectie maken met Database');
}

?>