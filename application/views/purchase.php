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
		<div id="paypage">
			<h3>Step 2: <br><span>Purchase a membership for $12, to activate your account</span></h3>
			<?
				$this->load->view('auth/paypal');
			?>

		</div>

		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>