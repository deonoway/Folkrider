<?php
	echo(doctype('html5'));

	$this->load->helper('form');

	$email = array(
		'id' => 'from'
		,'name' => 'from' );

	$subject = array(
		'id' => 'subject'
		,'name' => 'subject' );

	$body = array(
		'id' => 'body'
		,'name' => 'body' );
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
		?>
		<?
			echo(form_open('contact/thankyou'));
			echo "<p>Email</p>";
			echo(form_input($email));
			echo "<p>Subject</p>";
			echo(form_input($subject));
			echo "<p>Body</p>";
			echo(form_textarea($body));
			echo(br());
			echo(form_submit("Submit","submit"));
			echo(form_close()); 
		?>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>