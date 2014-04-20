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

		<h1>you do not have access to this page</h1>

		<a href="<?echo(base_url()."site/login")?>">to login</a>
		
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>