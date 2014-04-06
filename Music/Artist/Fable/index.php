<?php 
require_once("./../artistinit.php");
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='artist' >
			<table align='center'  >
				<tr>
					<td colspan='2'><div class='bigger'>Fable</div></td>
				</tr>
				<tr>
					<td colspan='2'><img src='artist.jpg' width='275' height='275'></td>
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
							VALUE="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" /="/">
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
							<param "="" ="="" value="showtime=true&autoreplay=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Fable/fable.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
				<tr>
					<td> 
						<table>
							<tr>
								<a href='PipeThoughtsAndTea'>Pipe Thoughts And Tea</a><br/>
							</tr>
							<tr>
								<a href='PipeThoughtsAndTea'><img src='PipeThoughtsAndTea/album.jpg' width='200' height='200'></a>
							</tr>
						</table>
					</td>
					<td> 
						<table>
							<tr>
								<a href='Storybook'>Storybook</a><br/>
							</tr>
							<tr>
								<a href='Storybook'><img src='Storybook/album.jpg' width='200' height='200'></a>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan='2'> 
						<table>
							<tr>
								<a href='Weathered'>Weathered</a><br/>
							</tr>
							<tr>
								<a href='Weathered'><img src='Weathered/album.jpg' width='200' height='200'></a>
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