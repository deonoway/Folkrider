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
		<div id="restricted">
		<?
			echo("<p>We're sorry, ".$error."</p>");
		
			$this->load->view('auth/login');
		?>
		</div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>