<?php

function protect_page()
{
	if (logged_in() === false)
	{
	header('Location: http://folkrider.com/core/mustlogin.php');
	exit();
	}
}

function array_sanitize (&$item)
{
	$item = mysql_real_escape_string($item);
}


function sanitize($data)
{
	return mysql_real_escape_string($data);
}


function output_errors($errors)
{
	$output = array();
	foreach($errors as $error)
	{
		$output[] = '<li>' . $error . '</li>';
	}
	return '<ul>' . implode('', $output) . '</ul>';
}
?>