<?php
session_start();

if (!isset($_SESSION['kode_login'])) 
	{
		header('Location: http://localhost:8080/auth/form_login.php');
		die;
	}

?>