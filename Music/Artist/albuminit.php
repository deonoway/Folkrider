<?php
session_start();

require_once("./../../../../database/connect.php");
require_once("./../../../../functions/users.php");
require_once("./../../../../functions/general.php");

if (logged_in() === true)
{
	// Why are you checking equality here and then re-setting the session bit?
	$session_id = $_SESSION['id'];
	$user_data = user_data($session_id, 'id', 'username', 'password', 'name', 'email');
}

?>