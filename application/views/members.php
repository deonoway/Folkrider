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

		<h1>welcome to the members page</h1>
		
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>