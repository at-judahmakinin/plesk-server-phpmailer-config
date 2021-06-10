<?php  
		$dir = getcwd ();
	  	require $dir.'/vendor/autoload.php';

    	use PHPMailer\PHPMailer\PHPMailer;
      
    	$mail = new PHPMailer();

		$mail->isSMTP();
	  	$mail->SMTPOptions = array(
		  'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		  )
		);
		$mail->Host = 'makinin.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'test@makinin.com';
		$mail->Password = 'wysM243&';
		$mail->SMTPSecure = 'none';
		$mail->Port = 587;

		$mail->setFrom('no-reply@makinin.com', 'MDEnterprise');
		$mail->addReplyTo('services@makinin.com', 'services');
		$mail->addAddress('services@makinin.com', 'The Director');
		$mail->addCC('mckeny39@gmail.com', 'Personal');


		$mail->Subject = 'Test SMTP Mail with PHPMailer';
		$mail->isHTML(false);
		$mailContent = 'the content of the test email';
		$mail->Body = $mailContent;
	  
		if($mail->send()){
		  echo 'Message has been sent';
		}else{
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	  
	 ?>