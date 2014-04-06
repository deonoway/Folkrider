<?php 
require_once("./../artistinit.php");
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='artist' >
			<table align='center'  >
				<tr>
					<td colspan='2'><div class='bigger'>Brian Henke</div></td>
				</tr>
				<tr>
					<td colspan='2'><img src='artist.jpg' width='321' height='480'></td>
				</tr>
				<tr>
					<td colspan='2'>Download link</td>
				</tr>
				<tr>
					<td colspan='2'>Link to Artists Website</td>
				</tr>
				<tr>
					<td colspan='2' >
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
						<param "="" ="="" value="showtime=true&autoreplay=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Brian_Henke/The_Nature_of_Light/The_Nature_of_Light.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
				<tr>
					<td colspan='2'> 
						<table>
							<tr>
								<a href='TheNatureofLight'>The Nature of Light</a><br/>
							</tr>
							<tr>
								<a href='TheNatureofLight'><img src='TheNatureofLight/album.jpg' width='200' height='200'></a> 
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>