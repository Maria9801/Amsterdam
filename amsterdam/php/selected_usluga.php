<?php
	$usluga = $_POST['usluga'];
	$master = $_POST['master'];
	$dataZapis = $_POST['dataZapis'];
	$phoneClient = $_POST['phoneClient'];
	$nameClient = $_POST['nameClient'];
	$comment = $_POST['comment'];


	//отправляем mail
	
	mail('deadlylollipop14@gmail.com', 'Тема письма', 'Тело письма');

?>