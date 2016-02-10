<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'business@benka.dk';
	$subject = 'Site Contact Form - Benka.dk';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Beskeden blev sendt';
    }
	else{
		$res['message'] = 'Besked kunne ikke sendes. Send en mail til Business@benka.dk';
	}
	
	
	echo json_encode($res);
}

?>