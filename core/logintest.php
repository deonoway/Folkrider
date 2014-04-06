<?php 
include "./init.php";
include 'http://folkrider.com/Includes/head.php';
?>

	<h2>
	<?php
		print_r($errors);
	?>
	</h2>
	<form action='http://folkrider.com/core/login.php' method='post' >
		<ul>
			<li>
				Username:<br />
				<input type='text' name='username'>
			</li>
			<li>
				Password:<br />
				<input type='password' name='password'>
			</li>
			<li>
				<input type='submit' value='Log In'>
			</li>
		</ul>
	</form>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>