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
						<div class='big' >Refugee Blues</div><div class='by' >by Chris Volpe</div>
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
							Shoes *<br/>
							Wait 'Til Tomorrow<br/>
							1849 Revisited<br/>
							The Bandwagon Farm<br/>
							Where the Rubber Meets the Road *<br/>
							Your Little Toy<br/>
							Lay Low<br/>
							Fishing<br/>
							The Good Life<br/>
							The Refugee Blues<br/>
							Ashtray Memories *<br/>
							Albuquerque<br/>
							Jersey Sun<br/>
							The Dark Horse<br/>
							Magical<br/>
						</div>
					</td>
					<td> 
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							VALUE="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=false" /="/">
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
							<param "="" ="="" value="showtime=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Chris_Volpe/Refugee_Blues/refugee_blues.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>