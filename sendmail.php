<?php
require('functions.php');

    $email=get_safe_value($_POST['email']);
    $subject=get_safe_value($_POST['subject']);
    $name=get_safe_value($_POST['name']);
    $compose=get_safe_value($_POST['compose']);


	$html="From : $name , Email : $email <br> $compose;

    include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="mail";
	$mail->Password="password";
	$mail->SetFrom("$email");
	$mail->addAddress("$email");
	$mail->IsHTML(true);
	$mail->Subject="$subject";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "done";
	}else{
		//echo "Error occur";
	}
	// echo $msg;



?>