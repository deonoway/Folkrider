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
			<h3>Step 1: Register your user information</h3>
		<?
			$this->load->view('auth/register');
		?>
		
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>