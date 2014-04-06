<?php
	echo(doctype('html5'));

	$this->load->helper('form');
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
			echo($content);
			$this->load->view('inc/footer');
		?>
	</body>
</html>