<?php 
require_once ("./init.php");
require 'http://folkrider.com/Includes/head.php';
?>
	<div id='main'>
	
	<?php
		include ('./video.php');
	?>
	
		<table cellspacing='20' align='center'>
			<td>
				<div id='home3'>
					<?php
						include ('http://folkrider.com/core/loginform.php');
					?>
				</div>
			</td>
			<td>
				<div id='home2'>
					<a href='radio.php'><img src='./Images/Logos/RadioMic.jpg' height='182px' width='69px' /></a>
				</div>
			</td>
			<td>
				<div id='home1' class='reg'>
					<div>
						<a href='http://folkrider.com/signup.php'>JOIN HERE NOW</a>
					</div>
				</div>
			</td>
		</table>
	</div>
	<div id='under'>
		<table align='center'  cellspacing="10">
			<tr>
				<th colspan='3'><div class='bigger'> Some of the artists inside </div></th>
			</tr>
			<tr>
				<td>
					<img src='Music/Artist/JPJones/artist.jpg' height='200' width='200'/>
				</td>
				<td>
					<img src='Music/Artist/Fable/artist.jpg' height='243' width='243'/>
				</td>
				<td>
					<img src='Music/Artist/BellaireandDunn/artist.jpg' height='165px' width='213px'/>
				</td>
			</tr>
			<tr>
				<td>
					<img src='Music/Artist/RichardCrafton/artist.jpg' height='160' width='210'/>
				</td>
				<td>
					<img src='Music/Artist/GaryBurris/artist.jpg' height='273' width='182'/>
				</td>
				<td>
					<img src='Music/Artist/BrianHenke/artist.jpg' height='288px' width='192px'/>
				</td>
			</tr>
			<tr>
				<td>
					<img src='Music/Artist/ChrisVolpe/artist.jpg' height='239' width='169'/>
				</td>
				<td>
					<img src='Music/Artist/CharlieMosbrook/artist.jpg' height='282px' width='190px'/>
				</td>
				<td>
					<img src='Music/Artist/JackReid/artist.jpg' height='135' width='180'/>
				</td>
			</tr>
		</table>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>