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
		<p>This is the music page</p>
		<P>This is where the cat will be displayed</P>
		<?php
			print_r($results);
		?>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>