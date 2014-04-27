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
		
		echo(
			"<div id='temp'>"
				.$content
			."</div>"
		);

			$this->load->view('inc/footer');
		?>
	</body>
</html>