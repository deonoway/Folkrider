<?php
	echo(doctype('html5'));
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
		?>

		<?
			echo(form_open('site/signup_validation'));

			echo(validation_errors());

			echo("<p>Email");
			echo(form_input('email', $this->input->post('email')));
			echo("</p>");

			echo("<p>Password");
			echo(form_password('password'));
			echo("</p>");

			echo("<p>Confirm Password");
			echo(form_password('cpassword'));
			echo("</p>");

			echo("<p>");
			echo(form_submit('signup_submit', 'signup'));
			echo("</p>");
			
			echo(form_close());
		?>
		
		<a href="<?echo(base_url()."site/signup_validation")?>">this</a>

		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>