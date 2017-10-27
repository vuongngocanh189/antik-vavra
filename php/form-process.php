<?php
    require('../vendor/autoload.php');
	$offer = trim($_POST['offer']);
    	$region = trim($_POST['region']);
    	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
    	$phone = trim($_POST['phone']);
	$message = trim($_POST['message']);	

    if($offer != null && $region != null && $name != null && $email != null && $phone != null && $message != null){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$signal = 'bad';
            		$msg = 'Zlý formát e-mailu. Zkontrolujte ho, prosím.';
        }
        else{
            $mail = new PHPMailer;
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = '';                 // SMTP username
            $mail->Password = '';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            $mail->setFrom('danko.v@atlas.sk', 'Meno');
            $mail->addAddress('danko.vktr@gmail.com', 'gmail');     // Add a recipient
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'From contact form Cloud9';
            $mail->Body    = 'Name: '.$name.' <br />Message: '.$message;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $signal = 'ok';
                $msg = 'Form submitted';
            }
        }
    }
    else{
        $signal = 'bad';
        $msg = 'Vyplňte, prosím, všechna pole.';
    }
    $data = array(
        'signal' => $signal,
        'msg' => $msg
    );
    echo json_encode($data);
?>
