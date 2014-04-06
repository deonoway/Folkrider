<?php 
session_start();

require_once ("./init.php");

if (empty($_POST) === false)
{
	$required_fields = array ('username', 'password', 'password_ver', 'name', 'email');
	foreach($_POST as $key=>$value)
	{
		if (empty($value) && in_array($key, $required_fields) === true)
		{
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}
	
	if (empty($errors) === true)	//check errors
	{
		//username errors
		if (user_exists($_POST['username']) === true)
		{
			$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken';
		}
		
		if (preg_match ("/\\s/", $_POST['username']) == true)
		{
			$errors[] = 'Your username must not contain any spaces.';
		}
		
		//password errors
		if (strlen($_POST['password']) < 6)
		{
			$errors[] = 'Your password must be at least 6 cheracters';
		}
		
		if ($_POST['password'] !== $_POST['password_ver'])
		{
			$errors[] = 'Your passwords do not match';
		}
		
		//email errors		
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
		{
			$errors[] = 'A valid email address is required';
		}
		
		if (email_exists($_POST['email']) === false)
		{
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' isn\'t in our database, have you purchesed a Folkrider membership?';
		}
	}
}

if (empty ($_POST) === false && empty($errors) === true)
{
	$register_data = array
	(
		'username' 		=> $_POST['username'],
		'password' 		=> $_POST['password'],
		'name'			=> $_POST['name'],
		'email' 		=> $_POST['email'],
	);
	register_usertest($register_data);
	die();
	header('Location: registered.php');
	exit(); 
}
else if (empty($errors) === false)
{
	echo output_errors($errors);
	echo "please return to <a href='http://folkrider.com/core/registerform.php'>register form</a>";
}

?>