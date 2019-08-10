<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['first_name']))
{
	unset($_SESSION['id']);
	unset($_SESSION['first_name']);
	unset($_SESSION['email']);

	header('Location: signin.html');
}
?>