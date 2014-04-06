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

			foreach ($entry as $base => $key) {
				$data['name'] = $key['name'];
				$data['ID'] = $key['ID'];

				$this->load->view('music/artist', $data);
			}

			$this->load->view('inc/footer');
		?>
	</body>
</html>