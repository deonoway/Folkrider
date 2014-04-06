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
				$data['artID'] = $key['artID'];
				$data['alb'] = $key['alb'];
				$data['mp3'] = $key['mp3'];

				$this->load->view('music/main', $data);
			}

			$this->load->view('inc/footer');
		?>
	</body>
</html>