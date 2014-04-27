<div class="artistEntry">
	<?
		$link=base_url("music/artist/"."$ID");
	?>
	<h2><a href="<?echo($link);?>"><?echo($name);?></a></h2>
	<div class='artImage'><div><a href="<?echo($link);?>"><?echo($this->resource->artistImage($ID, 180))?></a></div></div>
</div>