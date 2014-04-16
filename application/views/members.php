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

		<h1>welcome to the members page</h1>

		<?
			echo("<pre>");
			print_r($this->session->all_userdata());
			echo("</pre>");
		?>

		<a href="<?echo(base_url()."site/logout")?>">logout</a>
		
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>