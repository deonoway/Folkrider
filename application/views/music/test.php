<div>
	<?
		$artistLink=base_url("music/artist/"."$artID");
		$albumLink=base_url("music/album/"."$alb");
	?>
	
	<h2><a href="<?echo($artistLink);?>"><?echo($name);?></a></h2>
	<a href="<?echo($artistLink);?>"><?echo($this->resource->artistImage($artID, 250))?></a>
	<a href="<?echo($albumLink);?>"><?echo($this->resource->albumImage($alb, 200))?></a>
	<?echo($this->resource->singleMp3($mp3))?>

</div>