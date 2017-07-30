<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['mobile'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$formcontent="From: $name \n Message: $message \n Contact Number: $number";
		$recipient="nabugaming@gmail.com";
		$subject="Lumelec Services Enquiry - $subject";
		$mailheader="From: $email \r\n";

		$success = mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		if($success) {
			header('Location: http://www.lumelec-services.co.uk');
		} else {	
			header('Location: http://www.flowergirlflorist.co.uk/sorry.php');		
		}
?>