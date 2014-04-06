<?php 
include '../studioinit.php';
protect_page();
include 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
		<div id='album'>
			<table align='center'>
				<tr>
					<td colspan="2">
						<div class='contain'><div class='big'>In The Studio</div></div>
						<img src="../studio.jpg" height="250px" width="600px" />
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<div class='big' >Poems From The Waters Edge</div>
					</td>
				</tr>
				<tr>
					<td colspan='2' >
						<img src='image.jpg' width='300' height='300'>
					</td>
				</tr>
				<tr>
					<td colspan='2' > <a href='http://folkrider.com/Music/Artist/JohnCrafton/'>Artists Folkrider Page</a></td>
				</tr>
				<tr>
					<td colspan='2'> 
						<object id="dewplayer" height="200" width="240" name="dewplayer" data="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true" type="application/x-shockwave-flash">
							<param "="" ="="" value="transparent" name="wmode">
							<param "="" ="="" value="http://softwindproductions.com/NewFolkrider/Other_midea/Music/dewplayer-playlist.swf?autostart=true" name="movie">
							<param "="" ="="" value="showtime=true&xml=http://softwindproductions.com/NewFolkrider/Music/Artists/John_c/Poems_From_the_Waters_edge/poems.xml" name="flashvars">
						</object>
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>