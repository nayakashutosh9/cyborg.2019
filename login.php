<?php
session_start();
include 'db.php';

	if (isset($_POST['email']) && isset($_POST['password'])) 
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE email = '$email'";
		$res = mysqli_query($con, $query);
		if($res)
		{
			$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
			$db_password = $row['password'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['first_name']=$row['first_name'];

			if ($password==$db_password)
			{
				$_SESSION['password']=$password;
				header('Location: after_login.php');
			}
			else
			{
				echo "invalid Credentials";
			}
		}
	}
	else
	{
		echo "Enter valid credentials";
	}
?>