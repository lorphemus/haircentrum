<?php 
ob_start();
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

$name    	= $_POST["name"];
$email		= $_POST["email"];
$phone   	= $_POST["phone"];
$service 	= $_POST["service"];
$message 	= $_POST["message"];
$page		= $_POST["page"];
$mailContent = '
<html>
<head>
<title>Fransızca Site İletişim Formu</title>
</head>
<body>
	<p style="font-weight: bold;">Aşağıda Belirtilen Bilgiler Site İletişim Formundan Gönderilmiştir! En Kısa Sürede Cevap Verin.</p>
	<table border="1" width="100%">
		<tr>
			<td align="right" width="150" style="font-weight: bold; color: #bc3a3a;">Adı : </td>
			<td style="font-weight: bold;">&nbsp;' . $name . '</td>
		</tr>
		<tr>
			<td align="right" width="150" style="font-weight: bold; color: #bc3a3a;">Telefon Numarası : </td>
			<td style="font-weight: bold;">&nbsp;' . $phone . '</td>
		</tr>
		<tr>
			<td align="right" style="font-weight: bold; color: #bc3a3a;">Email Adresi : </td>
			<td style="font-weight: bold;">&nbsp;' . $email . '</td>
		</tr>
		<tr>
			<td align="right" style="font-weight: bold; color: #bc3a3a;">Almak istediği hizmet : </td>
			<td style="font-weight: bold;">&nbsp;' . $service . '</td>
		</tr>
		<tr>
			<td align="right" style="font-weight: bold; color: #bc3a3a;">Mesaj : </td>
			<td style="font-weight: bold;">&nbsp;' . $message . '</td>
		</tr>
	</table>
</body>
</html>
';

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.haircentrum.com';
	$mail->Port = 587;
	$mail->Username = 'no-reply@haircentrum.com';
	$mail->Password = 'Uz9sdzyv';
	$mail->SetFrom($mail->Username, $name);
	$mail->AddAddress('info@haircentrum.com', $email);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'Fransızca Site İletişim Formu';
	$mail->MsgHTML($mailContent);
	
	if($mail->send()){
		$_SESSION['title'] = "Email envoyé";
		$_SESSION['status'] = "Les membres de notre équipe vous appelleront dans les plus brefs délais.";
		$_SESSION['icon'] = "success";
		header("Location:$page");
	}else{
		$_SESSION['title'] = "Erreur!";
		$_SESSION['status'] = "Un problème est survenu. Veuillez réessayer plus tard.";
		$_SESSION['icon'] = "error";
		header("Location:$page");
}

?>