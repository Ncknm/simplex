<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];
	$REMOTE_ADDR = $_POST['REMOTE_ADDR'];

	$to = "vladyko.nikita@gmail.com";
	$subject = "Тема письма";
	$mes = "Имя: $name\nE-mail: $mail\nСообщение: $message\nIP-адрес: $_SERVER[REMOTE_ADDR]";
	file_put_contents('apps.txt', $mes); 
	//($to,$subject,$mes,"Content-type:text/plain; charset = utf-8") or print "Can't send email !!!";
	echo 'Спасибо! Мы получили Ваше сообщение. Наш менеджер свяжется с Вами в ближайшее время.';
	//exit;
?>