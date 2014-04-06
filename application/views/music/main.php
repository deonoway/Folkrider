<article class="musicEntry">
	<?
		$artistLink=base_url("music/artist/"."$artID");
		$albumLink=base_url("music/album/"."$alb");
	?>

	<div class=artImg><a href="<?echo($artistLink);?>"><?echo($this->resource->artistImage($artID, 200, 1))?></a></div>
	<aside>
		<h2 class=title><a href="<?echo($artistLink);?>"><?echo($name);?></a></h2>
		<div class="albImg"><a href="<?echo($albumLink);?>"><?echo($this->resource->albumImage($alb, 150))?></a></div>
		<div class=mp3><?echo($this->resource->singleMp3($mp3))?></div>
	</aside>
</article>