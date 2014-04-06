<div class="albumEntry">
	<?
		$artistLink=base_url("music/artist/"."$artID");
		$albumLink=base_url("music/album/"."$albID");
		$sizing = artLoc(pathify($name), 5);
	?>
	<h2><a href="<?echo($albumLink);?>"><?echo($alb);?></a></h2>
	<div>
		<a href="<?echo($albumLink);?>"><?echo($this->resource->albumImage($albID, 150))?></a>
		<p><a href="<?echo($artistLink);?>">by <?echo($name);?></a></p>
	</div>
 
</div>