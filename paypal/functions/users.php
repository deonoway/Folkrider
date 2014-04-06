<?php
/*
You're on the right track here, but you should probably investigate using a "user data class."  I looked at one the other day
that seemed pretty legit; if you Google up "user data class PHP," you'll probably find the same one.  Was just a .ZIP with the
appropriate files and such.  Good learning if nothing else.

The other thing you may want to investigate is a "MySQL data class."  I know there are some out there which are pretty easy to
learn and deploy.  It simplifies calls to data services so you don't need to do the mysql_whatever(mysql_something()) chains
all over the place.  Usually, with a data class - especially one that's as simple as user stuff - you'll wind up with calls that
look more like:
 
	$result = GetData($query);

If you're feeling enterprising, you could even write functions here that do that (so long as your DB is always initialized, which
is sort of against "best practices").

My understanding of the best practices - in as plainspeak as I can manage - is this:

	1.  collect DB variables (connection name, database names, tables as JSON or other format, etc.)
	2.  post DB variables in a global file that's included before any data calls.
	3.  use a class or function that opens the database once, queries, then closes the connection.
		3a.  in high-concurrency (read:  many users at once) sites, connections *should* be reused wherever possible.
	4.  call the class/function with your query and return results; handle all exceptions in the class/function.
		4a.  settle on a "logging scheme" for database failures (always return "0" or NULL, fail-stop, fail-silent...).
	5.  clean up after yourself!  don't leave orphaned connections open forever (eats up resources).

Still - getting there, for sure.  Especially considering the fact you've only worked on it for a short while. ^_^
*/

function register_usertest($register_data)
{
	array_walk($register_data, 'array_sanitize'); 
	$email 		= $register_data['email'];
	$username 	= $register_data['username'];
	$password 	= md5($register_data['password']);
	$name		= $register_data['name'];
		
	mysql_query("UPDATE `users` SET `username` = '$username' WHERE `email` = '$email'"); 
	mysql_query("UPDATE `users` SET `password` = '$password' WHERE `email` = '$email'"); 
	mysql_query("UPDATE `users` SET `name` = 'name' WHERE `email` = '$email'"); 
}

function register_user($register_data)
{
	array_walk($register_data, 'array_sanitize'); 
	$register_data['password'] = md5($register_data['password']);
	
	$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	
	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
}

function user_data($id)
{
	$data = array();
	$id = (int)$id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if ($func_num_args > 1)
	{
		unset($func_get_args[0]);
		
		$fields = '`' . implode('`, `', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `id` = $id"));
		
		return $data;
	}
}


function logged_in()
{
	return (isset($_SESSION['id'])) ? true : false;
}


function user_exists($username)
{
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username'"), 0) == 1) ? true : false;
}

function email_exists($email)
{
	$email = sanitize($email);
	return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `email` = '$email'"), 0) == 1) ? true : false;
}


function id_from_username($username)
{
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `id` FROM `users` WHERE `username` = '$username'"), 0, 'id');
}


function  login($username, $password)
{
	$id = id_from_username($username);
	
	$username = sanitize($username);
	$password = md5($password);
	
	// Avoid doing this kind of thing.  It's fancy with the ternary, but it's confusing.  The rule of thumb for this sort of stuff is
	// that if the line wraps, you're probably doing something wrong, or - at the least - unclear to anyone coming behind you.	
	return (mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $id : false;
	
	// Instead, try this:
	/*
	$result = "0";					// initialize $result so you can return it, regardless (returns "0" on failure);
	$query = mysql_query("query query query");	// build your query here and use a variable (clearer);
	try {						// The try/catch block is invaluable; look it up and learn it well.
		$result = mysql_result($query, 0);	// Do your operation within the try.  If it fails...
	}
	catch (Exception $exception) {
		// TODO:  Log/handle exception somehow;	// ...you'll see why here.
	}
	
	return $result;					// Probably best to return "0," assuming your "ID" is numeric.
	*/
}
?>