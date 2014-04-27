<?php
	echo(doctype('html5'));

	$this->load->helper('form');

	$email = array(
		'id' => 'from'
		,'name' => 'from' );

	$subject = array(
		'id' => 'subject'
		,'name' => 'subject' );

	$name = array(
		'id' => 'name'
		,'name' => 'name' 
		);

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
		<div id="contact">
			<?
				echo(form_open('contact/thankyou')
				."<p>Email *"
				.form_input($email)
				."</p><p>Name *"
				.form_input($name)
				."</p><p>Subject *"
				.form_input($subject)
				."</p><br><br><p>Body</p>"
				.form_textarea($body)
				.br()
				.form_submit("Submit","submit")
				.form_close()); 
			?>
		</div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>