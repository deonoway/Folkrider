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

			foreach ($entry as $base => $key) {
				$data['name'] = $key['name'];
				$data['artID'] = $key['artID'];
				$data['alb'] = $key['alb'];
				$data['albID'] = $key['albID'];

				$this->load->view('music/album', $data);
			}

			$this->load->view('inc/footer');
		?>
	</body>
</html>