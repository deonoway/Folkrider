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
			<article id='artist'>
				<div class='art'>
		<?			
					echo("<h1>".$artist."</h1>");
					echo($this->resource->artistImage($ID, 300));
		?>
				</div>
		<?
				for ($i=0; $i < sizeof($album); $i++) { 
					$albLink=base_url("music/album/"."$albID[$i]");
					
					echo("<div class='album'>");
					echo("<h2><a href=".$albLink.">".$album[$i]."</a></h2>");
					echo("<a href='".$albLink."'>".$this->resource->albumImage($albID[$i], 200)."</a><br>");
					echo("</div>");
				}

				echo($this->resource->multiMp3($mp3['ID'], $mp3['name']));
			
		?>
			</article>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>