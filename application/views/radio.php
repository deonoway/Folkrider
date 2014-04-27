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
		<div id="radio">
			<h3>Get Music That Doesn't Fit into Anyones Box</h3>
			<div id="player">
				<img src="<?echo(asset('image/radio.png'))?>" width="75px" height="100px" >
				<p>Listen to and enjoy the artists of Radio Free Folkrider 24/7 while you work or play.</p>
				<br>
				<!--VosCast.com Flash Player-->
				
				<script type="text/javascript" src="http://cdn.voscast.com/player/?key=9d5f2137769dbf58ef5bd3e27e68a7f4"></script>
				
				<!--End Player-->
			</div>
			<div id="container">
				<p>Please Help Us Support Indy Music</p>
				<?
					$this->load->view('auth/reglink');
				?>
			</div>
			<h3>Some of the Albums You're Listening to Now</h3>
		</div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>