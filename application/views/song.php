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
			<div id='songs'>
			<?
				foreach ($entry as $base => $key) {
					$data['art'] 	= $key['name'];
					$data['artID']	= $key['artID'];
					$data['alb'] 	= $key['alb'];
					$data['albID'] 	= $key['albID'];
					$data['title'] 	= $key['song'];
					$data['mp3']	= $key['mp3'];
	
					$this->load->view('music/song', $data);
				}
			?>
			</div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>