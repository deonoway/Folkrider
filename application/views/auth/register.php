<div id='register'>
<?
	echo(
		form_open('auth/signup_validation')
			."<div class='errors'>"
				.validation_errors()
			."</div>
			<p>
				*Email <br><span class='min'>(Please use the same email as your payment method)</span><br>"
				.form_input('email', $this->input->post('email'))
			."</p>
			
			<p>
				*Password<br>"
				.form_password('password')
			."</p> 
			
			<p>
				*Confirm Password<br>"
				.form_password('cpassword')
			."</p>
			
			<p>
				Display Name<br>"
				.form_input('displayName', $this->input->post('displayName'))
			."</p>

			<p>
				First Name<br>"
				.form_input('firstName', $this->input->post('firstName'))
			."</p>
			<p>"
				.form_submit('signup_submit', 'Signup')
			."</p>"
		.form_close()
	);
?>
</div>