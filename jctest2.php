<?php require_once("./code/master_include.php"); ?>
<!DOCTYPE html>
<html>

<head>

<?php

	// Here's where I usually dump other page-level PHP stuff.
	if (!empty($_POST)) {
	
		if (empty($_SESSION["login_id"])) {
		
			$_SESSION["login_id"] = $_POST["username"];
		
		}
	
	}

?>

	<title>Test page</title>

</head>

<body>

	<?php if (!empty($_SESSION["login_id"])) { $user = $_SESSION["login_id"]; echo "<h1>Hi there $user!</h1>"; } ?>

	<?php echo DoStuff(); ?>

	<?php echo $GLOBAL_TEST; ?>
	
<?php

	if (!empty($_SESSION["the_test_var"])) { $var = $_SESSION["the_test_var"]; echo "<p>$var</p>" . PHP_EOL; }
	if (!empty($_SESSION["the_test_var"])) { $var2 = $_SESSION["another_var"]; echo "<p>$var2</p>" . PHP_EOL; }

?>

<?php
if (empty($_SESSION["login_id"])) {
?>
	<aside id="login_form">
	<form id="login" name="login" method="POST">
	
		<fieldset id="required">
		
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" title="Enter your username here." />
		
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" title="Enter your password here." />
		
		</fieldset>
		
		<fieldset id="submission">
		
			<input type="submit" id="login" name="login" text="Login" />
		
		</fieldset>
	
	</form>
	</aside>
<?php
}	// End "if session login"
?>
</body>

</html>