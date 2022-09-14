<?php

	header('Content-Type: text/html; charset=utf-8');
	
	$name = htmlentities($_POST['Nome']);
	$email = $_POST['Email'];
    $phone = $_POST['Telefone'];  
	$time = $_POST['Horario'];
	$message = nl2br(htmlentities($_POST['Mensagem']));
	
    $site_owners_email = 'hello@senzdsn.com';
	$site_owners_name = 'Fatto';
		
	try {
		require_once('PHPMailer/class.phpmailer.php');
		$mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->From = $email;
		$mail->setFrom($email);
		$mail->Subject = 'Contato | Fatto';
		$mail->AddAddress($site_owners_email, $site_owners_name);
		$mail->Body = "
			<body bgcolor='#eee'>
				<table width='600' cellpadding='0' cellspacing='0' border='0' align='center' bgcolor='#ffffff'>
					<tr>
						<td>

							<img style='display: block; max-width: 100%; width: 100%;' src='https://drive.google.com/uc?id=1bLtldkT-ncvN78kpfoJuOZDdnBYKvvhK' width='600' height='150' alt='Fatto'>

							<br><br><br>

							<tr>
								<td style='padding: 0 50px;'

									<p style='font-size: 16px; color: #000; font-family: 'Arial', sans-serif; line-height: 1.6; padding: 0; margin: 0; text-align: left;'>
										<b>Nome:</b><br>
										<span style='color: #666;'>".$name."</span>
									</p>

									<br><hr><br>

									<p style='font-size: 16px; color: #000; font-family: 'Arial', sans-serif; line-height: 1.6; padding: 0; margin: 0; text-align: left;'>
										<b>Email:</b><br>
										<span style='color: #666;'>".$email."</span>
									</p>

									<br><hr><br>

									<p style='font-size: 16px; color: #000; font-family: 'Arial', sans-serif; line-height: 1.6; padding: 0; margin: 0; text-align: left;'>
										<b>Telefone:</b><br>
										<span style='color: #666;'>".$phone."</span>
									</p>

									<br><hr><br>

									<p style='font-size: 16px; color: #000; font-family: 'Arial', sans-serif; line-height: 1.6; padding: 0; margin: 0; text-align: left;'>
										<b>Melhor Horario:</b><br>
										<span style='color: #666;'>".$time."</span>
									</p>

									<br><hr><br>

									<p style='font-size: 16px; color: #000; font-family: 'Arial', sans-serif; line-height: 1.6; padding: 0; margin: 0; text-align: left;'>
										<b>Mensagem:</b><br>
										<span style='color: #666;'>".$message."</span>
									</p>

									<br><br><br><br><br>

								</td>
							</tr>

						</td>
					</tr>
				</table>
			</body>
		";
		$mail->ContentType = 'text/html';
		$mail->CharSet= 'utf-8';
		$mail->Encoding = 'quoted-printable';
		$mail->Mailer = "smtp";
		$mail->Host = "mail.senzdsn.com";
		$mail->Port = 587;
		//$mail->SMTPSecure = "tls"; 
        		
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
		echo 'Message could not be sent.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
	}

?>