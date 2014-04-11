<?php
	echo(doctype('html5'));
	$this->lang->load('auth');
	$this->lang->load('ion_auth');
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
		?>
		<br>
		<?
			$this->load->view('auth/login', $form);
			$this->load->view('inc/footer');
		?>
	</body>
</html>