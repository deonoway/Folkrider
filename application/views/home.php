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
			<h3>What's new Inside</h3>
		</div>
		<div id="radioLink">
			<p>for a sample of what's inside please enjoy our radio station</p>
		</div>
		<h3>To Enjoy Hours of Quality Folk Music</h3>
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