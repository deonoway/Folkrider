<?php 
include 'http://folkrider.com/core/init.php';
include 'http://folkrider.com/Includes/head.php';
?>
	<div class='big'>You must be logged in to access this page</div><br/>
	
		<table cellspacing='20' align='center'>
			<td>
				<div id='home1'>
					<?php
						include ('http://folkrider.com/core/loginform.php');
					?>
				</div>
			</td>
			<td>
				<div id='home2' class='bigger'>
					Or
				</div>
			</td>
			<td>
				<div id='home3'>
					<div class='reg'>
						<div><a href='http://folkrider.com/signup.php'>JOIN HERE NOW</a></div>
					</div>
				</div>
			</td>
		</table>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>