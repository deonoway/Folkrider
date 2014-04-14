<?php
	echo(doctype('html5'));
	
	$artLink=base_url("music/artist/"."$artID");
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
			$this->load->view('inc/footer');
		?>
	</body>
</html>