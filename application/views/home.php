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
		<div id="newInside">
			<h3>What's new inside</h3>
		</div>
		<div id="radioLink">
			<p>for a sample of what's inside please enjoy our radio station</p>
		</div>
		<?
			$this->load->view('auth/login');
		?>
		<div id="artistsInside">

		</div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>