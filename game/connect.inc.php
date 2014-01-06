<?php

$host = 'localhost';
$user = 'pirate_main';
$pass = 'SN12pOM6';

$db = 'pirate_main';

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
	printf('Kan geen connectie maken met Database');
}

?>