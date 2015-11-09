<?php

include '../../database.inc.php';

$conn = getDatabaseConnection();

	if (isset($_POST['loginPage']))
	{
		header("Location: ../log/login.php"); 
	}








?>