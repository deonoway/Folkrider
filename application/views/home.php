<?php
	echo(doctype('html5'));
	$this->lang->load('auth');
	$this->lang->load('ion_auth');
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$CI =& get_instance();
			$this->load->view('inc/header');
			$CI->login();
		?>
		<br>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>