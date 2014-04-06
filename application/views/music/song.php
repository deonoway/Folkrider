<div class="songEntry">
	<?
		$artistLink=base_url("music/artist/"."$artID");
		$albumLink=base_url("music/album/"."$albID");
	?>

	<h2><?echo($title);?></h2>
	<p>By <a href="<?echo($artistLink);?>"><?echo($art);?></a></p>
	<?echo($this->resource->singleMp3($mp3, 150))?>
	<p>From <a href="<?echo($albumLink);?>"><?echo($alb);?></a></p>
</div>