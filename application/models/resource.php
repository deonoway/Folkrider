<?php

class Resource extends CI_Model{
	
	public function artistImage($ID, $desiredSize, $type=0){
		$location = artLoc($ID, 5);
		$size = $this->image_lib->box($location, $desiredSize, $type);
		
		$image = ("<img src='".artLoc($ID)."' height='".$size[0]."px' width='".$size[1]."px'>");
		
		return $image;
	}

	public function albumImage($ID, $size){

		$image = ("<img src='".albLoc($ID)."' height='".$size."px' width='".$size."px'>");
		return $image;
	}

	public function singleMp3($mp3, $width=200){

		$player = "<object type='application/x-shockwave-flash' data='".asset('mp3/skin/single_player.swf')."' width='".$width."' height='20'>
		    <param name='movie' value='".asset('mp3/skin/single_player.swf')."' />
		    <param name='FlashVars' value='mp3=".mp3Loc($mp3)."' />
		</object>";

		return $player;
	}

	public function multiMp3($songs, $title){

			$path = mp3Loc($songs[0]);
			$titles = str_replace('\'', '&#39', $title[0]);
			
			for ($i=1; $i < count($songs); $i++) {
				$path .= "|".mp3Loc($songs[$i]);
				$titles .= "|".str_replace('\'', '&#39', $title[$i]);
			}

		$player = "<object type='application/x-shockwave-flash' data='".asset('mp3/skin/multi_player.swf')."' width='200px' height='100px'>
				<param name='movie' value='".asset('mp3/skin/multi_player.swf')."' />
				<param name='bgcolor' value='#ffffff' />
				<param name='FlashVars' value='mp3=".$path."&amp;title=".$titles."&amp;autoplay=0&amp;shuffle=1' />
			</object>";

		return $player;
	}
}