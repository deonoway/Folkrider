<div id="loginForm">
<?
	echo(
		form_open('auth/login_validation')
			.validation_errors()
			."<div>
				<h4>Log In</h4>
				<p>
					Email<br/>"
					.form_input('email')
				."</p>
				<p>
					Password<br/>"
					.form_password('password')
				."</p>
				<p>"
					.form_submit('login_submit', 'Login').
				"</p>
			</div>"
		.form_close()
	);
?>
</div>