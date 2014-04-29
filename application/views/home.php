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
			<div id="featured">
					<img src="<?echo(asset('image/slide/HenkeSlide.png'))?>" width="500" height="200" alt="" title="" />
					<img src="<?echo(asset('image/slide/JohnSlide.png'))?>" width="500" height="200" alt="" title="" />
					<img src="<?echo(asset('image/slide/TommySlide.png'))?>" width="500" height="200" alt="" title="" />
			</div>
			<script type="text/javascript">
			     $(window).load(function() {
			         $('#featured').orbit();
			     });
			</script>
		</div>
		<a href="<?echo(base_url('music/radio'))?>">
			<div id="radioLink">
				<img src="<?echo(asset('image/radio.png'))?>" width="75px" height="100px" >
				<p>For a sample of what's inside, please click here to enjoy <br/><br/><span class="minlight">Folkrider Radio</span></p>
			</div>
		</a>
		<h3 class="tag">To Enjoy Hours of Quality Folk Music</h3>
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
