<?php


require './mail/PHPMailerAutoload.php';

function sendmail($address, $message)
{

	if ($guest_respond['attend'] == 0)
	{
    
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.mail.ru';  						  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'axiomailer@mail.ru';  		      // SMTP username
		$mail->Password = 'NBZnbz123';                   	  // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		$mail->setFrom('axiomailer@mail.ru', 'Axio Mailer');
		$mail->addAddress($address, '');     // Add a recipient
		//$mail->addReplyTo('', '');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Рассылка Axio';
		
		$emailbody = $message;
		
		$mail->CharSet = 'utf-8';
		
		$mail->Body    = $emailbody;
		$mail->AltBody = $emailbody;;

		//$mail->send();
		
		if(!$mail->send())
		{
    		//echo 'Message could not be sent.';
    		//echo 'Mailer Error: ' . $mail->ErrorInfo;

		} else {
    		//echo 'Message has been sent';
		}
		
	}
	
}


?>