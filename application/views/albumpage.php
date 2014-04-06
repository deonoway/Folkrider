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
		?>
		<article id='album'>
			<?
				echo("<h1>".$title."</h1>"
				.$this->resource->albumImage($ID, 400)
				."<h3><a href=".$artLink.">By ".$artist."</a></h3>");
				echo("<div id='songList'>");
				for($i=0; $i < sizeof($songList); $i++){
					echo("<p class='".$songList[$i]['active']."'>".$songList[$i]['title']."</p>");
					
					//if($songList[$i]['active']){
					//	echo('true');
					//}else{
					//	echo('false');
					//
				}
				echo("</div>");
				echo("<div>".$this->resource->multiMp3($mp3['ID'], $mp3['name'])."</div>");

				$this->load->view('inc/footer');
			?>
		</article>
	</body>
</html>