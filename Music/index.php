<?php 
require_once ("./init.php");
logged_in();
include 'http://folkrider.com/Includes/head.php'; 
?>
	<div id='main'>
		<?php
			include ('http://folkrider.com/Includes/NewAddition.php');
		?>
		<div id='musicmain'>
			<table cellspacing="20">
				<?php
					include ('./Artist/TommyG509/entry.php');
					
					include ('./Artist/BrianHenke/entry.php');
					
					include ('./Artist/JackReid/entry.php');
					
					include ('./Artist/CharlieMosbrook/entry.php');
					
					include ('./Artist/ChrisVolpe/entry.php');
					
					include ('./Artist/ECLorik/entry.php');
					
					include ('./Artist/JPJones/entry.php');
					
					include ('./Artist/GaryBurris/entry.php');
					
					include ('./Artist/PaulSanner/entry.php');
					
					include ('./Artist/MikeKohlgraf/entry.php');
					
					include ('./Artist/Fable/entry.php');
					
					include ('./Artist/BellaireandDunn/entry.php');
					
					include ('./Artist/JohnCrafton/entry.php');
					
					include ('./Artist/RichardCrafton/entry.php');
					
					include ('./Artist/KiethB/entry.php');
				
				?>
			</table>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>