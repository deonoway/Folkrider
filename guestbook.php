<?php 

if (@mysql_connect('localhost', 'deonoway', 'tle20125') && @mysql_select_db('deonoway_guestbook')){

	$time = time();
	$errors = array();
	
	if (isset($_POST['guestbook_name'], $_POST['guestbook_email'], $_POST['guestbook_message'])) {
		
		$name = mysql_real_escape_string(htmlentities($_POST['guestbook_name']));
		$email = mysql_real_escape_string(htmlentities($_POST['guestbook_email']));
		$message = mysql_real_escape_string(htmlentities($_POST['guestbook_message']));
		
		if(empty($name) || empty($email) || empty($message)){
			$errors[] = 'All fields are required.';
		}
		
		if (strlen($name) > 25 || strlen($email) > 255 || strlen($message) > 255) {
			$errors[] = 'One or more fields exceeded the character limit';
		}
		
		if (empty($errors)){
		
			$insert = "INSERT INTO `entries` VALUES ('', '$time', '$name', '$email', '$message')";
			
			if (mysql_query($insert)) {
				header('Location: '.$_SERVER['PHP_SELF']);
			} else {
				$errors [] = 'Something went wrong. Please try again soon.';
			}
			
		} else {
			foreach($errors as $error){
				echo '<p><strong>'.$error.'</p></strong>';
			}
		}
	}
	
	include ('http://folkrider.com/Includes/head.php');
	
	
	?>
		<style type="text/css">
			form {text-align: left;}
			p {background: #116C46;	color: #F9F4C4;	border: 6px double #F9F4C4; font-size:20px;}
		</style>
	<?php
	
	$entries = mysql_query("SELECT `timestamp`, `name`, `message` FROM `entries` ORDER BY `timestamp` DESC");
	
	while($entries_row = mysql_fetch_assoc($entries)) {
		$entries_timestamp = date('D M Y @ h:i',  $entries_row['timestamp']);
		$entries_name = $entries_row['name'];
		$entries_message = $entries_row['message'];
		
		echo '</br><p><strong>Posted by '.$entries_name.' on '.$entries_timestamp.'</strong>: </br>'.$entries_message.'</p> </br></br>';
						
	}
	
	?>
		<div class=main>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<strong> Leave your feedback</strong></br></br>
				Name:</br><input type="text" name="guestbook_name" maxlenth="25"></br></br>
				Email:</br><input type="text" name="guestbook_email" maxlenth="255"></br></br>
				Message:</br><textarea name="guestbook_message" rows="4" cols="40" maxlenth="255"></textarea></br></br>
				<input type="submit" value="Post">
			</form>
		</div>
	<?php
	
} else {

	include ('http://folkrider.com/Includes/head.php');
	
	echo 'Could not connect at this time';
}

include ('http://folkrider.com/Includes/foot.php');
?>