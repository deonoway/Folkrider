<?php 
require_once("./../artistinit.php");
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='artist' >
			<table align='center'  >
				<tr>
					<td colspan='2'><div class='bigger'>Tommy Gantt</div></td>
				</tr>
				<tr>
					<td colspan='2'><img src='artist.jpg' width='427' height='331'></td>
				</tr>
				<tr>
					<td colspan='2'>Link to Artists Website</td>
				</tr>
				<tr>
					<td colspan='2'>
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=false" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							VALUE="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=false" /="/">
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
							<param "="" ="="" value="showtime=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Bellaire_and_Dunn/From_Now_On/FromNowOn.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
				<tr>
					<td colspan='2'> 
						<table>
							<tr>
								<a href='FromNowOn'>From Now On</a><br/>
							</tr>
							<tr>
								<a href='FromNowOn'><img src='FromNowOn/album.jpg' width='200' height='200'></a>
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