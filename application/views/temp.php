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
		
		echo("<p>");
		echo("$content");
		echo("</p>");

			$this->load->view('inc/footer');
		?>
	</body>
</html>