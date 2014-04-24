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
			<a href="<?echo(base_url('music/radio'))?>"><img src="<?echo(asset('image/radio.png'))?>" width="75px" height="100px" ></a>
			<p>For a sample of what's inside, please enjoy <br/><br/><span class="minlight"><a href="<?echo(base_url('music/radio'))?>">Folkrider Radio</a></span></p>
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