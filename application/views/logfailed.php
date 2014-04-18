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

			echo("<p>We're sorry, ".$error."</p>");
		
			$this->load->view('auth/login');

			$this->load->view('auth/reglink');

			$this->load->view('inc/footer');
		?>
	</body>
</html>