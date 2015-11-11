<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mail_to = 'jesserock11@gmail.com, jesserock89@gmail.com, Evander08@hotmail.com';
	$subject = 'Message from Saratoga Awarness!';

	$final_message = 'Name: ' .$name."\n";
	$final_message .= 'E-Mail: '.$email."\n";
	$final_message .= 'Message: '.$message."\n";

	$mail_status = mail($mail_to, $subject, $final_message);

	if ($mail_status) {
?>
		<script type="text/javascript">
			alert('Thank you for sending me an email.:)');
			window.location = "talktome.php";
		</script>
<?php
	}else{
?>
	<script type="text/javascript">
		alert('Error: Unable to process your request please try again later. Or Email jesse@jrockweb.com');
		window.location = "talktome.php";
	</script>
	<?php
}
?>
