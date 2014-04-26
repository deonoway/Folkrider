<?php
	echo(doctype('html5'));
?>

<html>
	<?
		$this->load->view('inc/head');
	?>
	<body>
		<?
			$this->load->view('inc/header');
		?>
		<div id="faq">
			<table>
				<tr class="question">
					<th>Q:</th>
					<td>This will be a question</td>
				</tr>
				<tr class="answer">
					<th>A:</th>
					<td>This <br>will<br> be<br>an answer</td>
				</tr>
			</table>
		</div>
		<?
			$this->load->view('inc/footer');
		?>
	</body>
</html>