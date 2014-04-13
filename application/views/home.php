<?php
	echo(doctype('html5'));
	$this->lang->load('auth');
	$this->lang->load('ion_auth');
	$CI =& get_instance();
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
			$CI->create_user();
		?>
		<br>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>