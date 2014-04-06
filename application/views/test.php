<?php
	echo(doctype('html5'));

	$this->load->helper('form');
	
	$artLink=base_url("music/artist/"."$artID");
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
			$path=mp3Loc($mp3['ID'][0]);
			$titles=$mp3['name'][0];
			for ($i=1; $i < count($mp3); $i++) {
				$path .= "|".mp3Loc($mp3['ID'][$i]);
				$titles .= "|".$mp3['name'][$i];
			}
		?>
		<h1><?echo($title);?></h1>
		<?echo($this->resource->albumImage($ID, 400))?>
		<p><a href="<?echo($artLink);?>">By <?echo($artist);?></a></p>
		<?
			echo($this->resource->multiMp3($mp3['ID'], $mp3['name']));

			$this->load->view('inc/footer');
		?>
	</body>
</html>