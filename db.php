<?php
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "cyborg_ra";

	$con = mysqli_connect($host, $user, $pwd, $db);

	if(!$con)
		echo "You are not connected to the database";
?>