<?php 
require_once("./../artistinit.php");
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='artist' >
			<table align='center'  >
				<tr>
					<td colspan='2'><div class='bigger'>John Crafton</div></td>
				</tr>
				<tr>
					<td colspan='2'><img src='artist.jpg' width='275' height='341'></td>
				</tr>
				<tr>
					<td colspan='2'>
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
							<param "="" ="="" value="showtime=true&autoreplay=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/John_c/John.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
				<tr>
					<td> 
						<table>
							<tr>
								<a href='../../InTheStudio/GoBackInTime'>Go Back In Time</a><br/>
							</tr>
							<tr>
								<a href='GoBackInTime'><img src='GoBackInTime/album.jpg' width='200' height='200'></a>
							</tr>
						</table>
					</td>
					<td> 
						<table>
							<tr>
								<a href='../../InTheStudio/PoemsFromTheWatersEdge'>Poems From The Waters Edge</a><br/>
							</tr>
							<tr>
								<a href='Poems From The Waters Edge'><img src='PoemsFromTheWatersEdge/album.jpg' width='200' height='200'></a>
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