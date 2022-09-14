<?php
	
	$name = trim($_POST['Nome']);
	$email = $_POST['Email'];
    $phone = $_POST['Telefone'];  
	$time = $_POST['Horário'];
	$message = $_POST['Mensagem'];
	
    $site_owners_email = 'hello@senzdsn.com';
	$site_owners_name = 'Contato | Fatto';
		
	try {
		require_once('PHPMailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
		
        $mail->isSMTP();
    
		//$mail->From = $email;
        $mail->From = "hello@senzdsn.com";
		$mail->FromName = $name;
		$mail->Subject = "Contato através do site";
		$mail->AddAddress($site_owners_email);
		$mail->Body = "Email:".$email. "<br/>Mensagem:".$message;
		$mail->ContentType = 'text/html';
		$mail->Mailer = "smtp";
		$mail->Host = "mail.senzdsn.com";
		$mail->Port = 465;
		$mail->SMTPSecure = "tls"; 
        		
		$mail->SMTPAuth = true;
		$mail->Username = "hello@senzdsn.com";
		$mail->Password = "2766726Abc!";
		
		//echo "true";
		if($mail->Send()) {
			echo "true";
		} else {
			echo "Error sending: " . $mail->ErrorInfo;
		}
		
	} catch (Exception $e) {
		echo $e;
	}

?>