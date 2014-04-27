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
			<div id="thankyou">
				<h2>Step 3: Enjoy all that Folkrider has to offer</h2>
				<span class="minlight"><a href="<?echo(base_url('music'))?>">Visit our music page and enjoy our cataloge</a></span>
				<h3>Thank you for becoming a Folkrider</h3>
			</div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>