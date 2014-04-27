<div class="songEntry">
	<?
		$artistLink=base_url("music/artist/"."$artID");
		$albumLink=base_url("music/album/"."$albID");
	?>

	<h2><?echo($title);?></h2>
	<p class="by">By <a href="<?echo($artistLink);?>"><?echo($art);?></a></p>
	<?echo($this->resource->singleMp3($mp3, 150))?>
	<p class="from">From <a href="<?echo($albumLink);?>"><?echo($alb);?></a></p>
</div>