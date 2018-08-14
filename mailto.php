<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$recipient= "onaolapo.ayo@gmail.com";
		$formcontent= "FROM: $name \n TEL: $phone \n EMAIL: $email \n SUBJECT: $subject \n MESSAGE: $message" ;

			
		mail($formcontent);
?>
