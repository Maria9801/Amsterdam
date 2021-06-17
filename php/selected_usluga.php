<?php
	$usluga = $_POST['usluga'];
	$master = $_POST['master'];
	$date = $_POST['date'];
	$phone = $_POST['tel'];
	$name = $_POST['name'];
	$comment = $_POST['comment'];

	$message .= "Услуга: " . $usluga . "\n";
	$message .= "Мастер: " . $master . "\n";
	$message .= "Дата: " . $date . "\n";
	$message .= "Номер клиента: " . $phone . "\n";
	$message .= "Имя: " . $name . "\n";
	$message .= "Комментарий: " . $comment . "\n";

	$response = ['msg' => $msg];
	header('Content-type: application/json');
	echo json_encode($response);

	//отправляем mail
	
	mail('form_zayavka@amsterdamm.ru', 'Заявка', $message);

?>