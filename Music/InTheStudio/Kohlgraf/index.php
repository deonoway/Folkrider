<?php 
include '../studioinit.php';
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='album'>
			<table align='center'>
				<tr>
					<td colspan="2">
						<div class='contain'><div class='big'>In The Studio</div></div>
						<img src="../studio.jpg" height="250px" width="600px" />
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<div class='big' >Mike Kohlgraf</div>
					</td>
				</tr>
				<tr>
					<td colspan='2' >
						<img src='image.jpg' width='300' height='300'>
					</td>
				</tr>
				<tr>
					<td colspan='2'> 
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode">
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true" name="movie">
							<param "="" ="="" value="showtime=true&mp3=http://www.softwindproductions.com/NewFolkrider/Music/Artists/Mike_Kohlgraf/Having_Fun_.mp3" name="flashvars">
						</object>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>