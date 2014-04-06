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
						<div class='big' >From Now On</div><div class='by' >by Bellaire & Dunn</div>
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
							From Now on <br/>
							Home Town Afternoon *<br/>
							Can't You Feel My Love<br/>
							Twenty Million Things<br/>
							I Wish<br/>
							The Sound of Goodbye<br/>
							From a Father to a Son *<br/>
							I Look For You<br/>
							I Wouldn't Change a Thing<br/>
							Parcels<br/>
							Full Circle<br/>
							If This Old Guitar Could Talk *<br/>
						</div>
					</td>
					<td> 
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=false" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							VALUE="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=false" /="/">
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" name="movie"/>
							<param "="" ="="" value="showtime=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Bellaire_and_Dunn/From_Now_On/FromNowOn.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>