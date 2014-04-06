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
						<div class='big' >The Cool Beyond</div><div class='by' >by Gary Burris</div>
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
							Route 18<br/>
							Through The Haze<br/>
							The Cool Beyond<br/>
							On Halo's Wings<br/>
							Not Forsaken<br/>
							Appaloosa Rain<br/>
							Changing Paradigms<br/>
							Fallen Heros<br/>
							Now And Forever<br/>
							For The Kidd<br/>
						</div>
					</td>
					<td> 
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=false" name="movie"/>
							<param "="" ="="" value="showtime=true&autoreplay=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Gary_Burris/The_Cool_Beyond/the_cool_beyond.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>