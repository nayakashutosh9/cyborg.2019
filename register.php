<?php
	include 'db.php';

	if (isset($_POST['first_name'])&& isset($_POST['password'])) 
	{
		$first_name = $_POST['first_name'];
		$password = $_POST['password'];
		$rpassword = $_POST['r_password'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];

		if($password==$rpassword)
		{
			$query = "INSERT INTO users (first_name,password,last_name,email) VALUES('$first_name','$password','$last_name','$email')";

			$res = mysqli_query($con, $query);

			if ($res) 
			{
				echo "";
				header('Location: signin.html');
			}
		}
		else
		{
			echo "Your password and re-entered password are not matching";
		}
	}
?>