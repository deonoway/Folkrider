<?php
require_once ("./init.php");


if (empty($_POST) === false)
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (empty($username) === true || empty($password) === true)
	{
		$errors[] = 'You need to enter a username and password';
	}
	else if (user_exists($username) === false)
	{
		$errors[] = 'We can\'t find that username. Have you become a folkrider?';
	}
	else
	{
		$login = login($username, $password);
		if ($login === false)
		{
			$errors[] = 'Incorrect username/password combination';
		}
		else
		{
			$_SESSION['id'] = $login;
			header('Location: http://folkrider.com/Music');
			exit();
		}
	}
}
require 'http://folkrider.com/Includes/head.php';

echo output_errors($errors);

include ('http://folkrider.com/core/loginform.php');

include 'http://folkrider.com/Includes/foot.php';
?>