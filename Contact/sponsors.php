<?php 
require_once ("./init.php");
protect_page();
if (empty($_POST) === false)
{
	$errors = array();
	
	$email		= $_POST['email'];
	$subject	= $_POST['subject'];
	$message	= $_POST['message'];
	
	if(empty($email) === true || empty($subject) === true || empty($message) === true)
	{
		$errors[] = 'All fields are required';
	}
	else 
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		{
			$errors[] = 'That\'s not a valid email address';
		}
	}
	if (empty($errors) === true)
	{
		mail('john.folkrider@gmail.com', $subject, $message, 'From: ' . $email);
		header('Location: http://www.folkrider.com/Contact/Thankyou.php');
		exit();
	}
}


include 'http://folkrider.com/Includes/head.php';
?>

	<div id='main'>
	<?php
		if (empty($errors) === false)
		{
			echo output_errors($errors);
		}
	?>
		<div class='contact'>
			<form action='' method='post'>
				*Your e-mail address: <br/>
				<input type='text' name='email' size='35' id='email' 
				value=<?php 
					if (isset($_POST['email']) === true)
					{
						echo $email;
					}
					else
					{
						echo 'email';
					}
					?> /><br /><br/>
				*Business name: <br/>
				<input type='text' size='35' id='subject' name='subject' 
				value=<?php 
					if (isset($_POST['subject']) === true)
					{
						echo $subject; 
					}
					else
					{
						echo 'subject';
					}
					?> /> <br/> <br/>
				*Email body: <br/>
				<textarea name='message' id='message' cols='70' rows='20'> </textarea><br/>
				<input type='submit' value='Send'/>
			</form>
		</div>
	</div>
<?php
include 'http://folkrider.com/Includes/foot.php';
?>