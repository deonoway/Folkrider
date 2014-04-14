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
			echo(form_open('site/login_validation'));

			echo(validation_errors());

			echo("<p>Email");
			echo(form_input('email'));
			echo("</p>");

			echo("<p>Password");
			echo(form_password('password'));
			echo("</p>");

			echo("<p>");
			echo(form_submit('login_submit', 'Login'));
			echo("</p>");
			
			echo(form_close());
		?>
		
		<a href="<?echo(base_url()."site/signup")?>"></a>

		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>