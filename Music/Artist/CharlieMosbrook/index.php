<?php 
require_once("./../artistinit.php");
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='artist' >
			<table align='center'  >
				<tr>
					<td colspan='2'><div class='bigger'>Charlie Mosbrook</div></td>
				</tr>
				<tr>
					<td colspan='2'><img src='artist.jpg' width='238' height='353'></td>
				</tr>
				<tr>
					<td colspan='2' ><a href='artist.zip'>Download artist tracks</a></td>
				</tr>
				<tr>
					<td colspan='2'>Link to Artists page</td>
				</tr>
				<tr>
					<td colspan='2'>
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
							<param "="" ="="" value="showtime=true&autoreplay=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Charlie_Mosbrook/CM.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
				<tr>
					<td> 
						<table>
							<tr>
								<a href='Coverage'>Coverage</a><br/>
							</tr>
							<tr>
								<a href='Coverage'><img src='Coverage/album.jpg' width='200' height='200'></a>
							</tr>
						</table>
					</td>
					<td> 
						<table>
							<tr>
								<a href='LittleByLittle'>Little By Little</a><br/>
							</tr>
							<tr>
								<a href='LittleByLittle'><img src='LittleByLittle/album.jpg' width='200' height='200'></a>
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