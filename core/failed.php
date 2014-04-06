<?php 
include 'http://folkrider.com/core/init.php';
include 'http://folkrider.com/Includes/head.php';
?>

<div class='big'>Login failed, please try again</div><br/>
<div style='width: 300px; align: center;'>
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