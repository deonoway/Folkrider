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
						<div class='big' >All The Best Words</div><div class='by' >by Paul Douglas Sanner</div>
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
							Crossing Over The Border<br/>
							My Daddy's Letters *<br/>
							The Light Of The World<br/>
							Me And My Old Hound Dog<br/>
							I'm A Mess<br/>
							Safely In Your Arms *<br/>
							All The Best Words<br/>
							The Lord Will Guide<br/>
							Come Thou Fount<br/>
							Long Gone *<br/>
						</div>
					</td>
					<td> 
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode"/>
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true&randomplay=false" name="movie"/>
							<param "="" ="="" value="showtime=true&autoreplay=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/Paul_Sanner/all_the_best_words.xml" name="flashvars"/>
						</object>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>