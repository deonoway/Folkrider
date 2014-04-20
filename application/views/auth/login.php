<div id="login">
<?
	echo(
		"<h3>Log In</h3>"
		.form_open('auth/login_validation')
			.validation_errors()
			."<p>
				Email<br/>"
				.form_input('email')
			."</p>
			<p>
				Password<br/>"
				.form_password('password')
			."</p>
			<p>"
				.form_submit('login_submit', 'Login').
			"</p>"
		.form_close()
	);
?>
</div>