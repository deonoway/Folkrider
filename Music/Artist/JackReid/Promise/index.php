<?php 
require_once ("./../../albuminit.php");
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='album'>
			<table align='center'>
				<tr>
					<td colspan='2'>
						<div class='big' >Promise</div><div class='by' >by Jack Reid</div>
					</td>
				</tr>
				<tr>
					<td colspan='2' >
						<img src='album.jpg' width='300' height='300'>
					</td>
				</tr>
				<tr>
					<td colspan='2' ><a href='album.zip'>Download album tracks</a></td>
				</tr>
				<tr>
					<td colspan='2' >to artists website</td>
				</tr>
				<tr>
					<td colspan='2' > <a href='../'>Artists Folkrider Page</a></td>
				</tr>
				<tr>
					<td cellpadding="10"> 
						<div id='songs'>
							Colors of the Canyon<br/>
							* Big Dipper<br/>
							* Winds of Wyoming<br/>
							House of Luck<br/>
							Tendin' Bar and Dreamin' Cowboy<br/>
							Promise<br/>
							Katie's Smile<br/>
							Old Doors and Rainbows<br/>
							The Nightguards Lament<br/>
							* Dreams of East Montana<br/>
							It's Texas Cookin' for Me<br/>
						</div>
					</td>
					<td> 
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
							<param "="" ="="" value="showtime=true&autoreplay=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Jack_Reid/Promise.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>