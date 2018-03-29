<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];

	$to = "vladyko.nikita@gmail.com";
	$subject = "Тема письма";
	$mes = "Имя: $name\nE-mail: $mail\nСообщение: $message\n";
	file_put_contents('apps.txt', "\n$mes\n", FILE_APPEND); 
	//($to,$subject,$mes,"Content-type:text/plain; charset = utf-8") or print "Can't send email !!!";
	echo 'Спасибо! Мы получили Ваше сообщение. Наш менеджер свяжется с Вами в ближайшее время.';
	//exit;
?>