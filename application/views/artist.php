<?php
	echo(doctype('html5'));

	$this->load->helper('form');
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
		?>
		<div id="artists">
			<?

				foreach ($entry as $base => $key) {
					$data['name'] = $key['name'];
					$data['ID'] = $key['ID'];

					$this->load->view('music/artist', $data);
				}
			?>
		</div>
		<div class="clear"></div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>