<?php
	echo(doctype('html5'));

	$this->load->helper('form');

	$email = array(
		'id' => 'from'
		,'name' => 'from'
		,'value' => $from
		);

	$subject = array(
		'id' => 'subject'
		,'name' => 'subject'
		,'value' => $subject
		);

	$name = array(
		'id' => 'name'
		,'name' => 'name'
		,'value' => $name
		);

	$body = array(
		'id' => 'body'
		,'name' => 'body'
		,'value' => $body
		);
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
				echo(form_open('contact/form_validate')
				."<div class='errors'>"
					.validation_errors()
				."</div>
				<p>Email *"
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