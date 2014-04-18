<div id='register'>
<?
	echo(
		form_open('site/signup_validation')
			.validation_errors()
			."<p>
				Email<br>"
				.form_input('email', $this->input->post('email'))
			."</p>
			
			<p>
				Password<br>"
				.form_password('password')
			."</p> 
			
			<p>
				Confirm Password<br>"
				.form_password('cpassword')
			."</p>

			<p>"
				.form_submit('signup_submit', 'Signup')
			."</p>"
		.form_close()
	);
?>
</div>