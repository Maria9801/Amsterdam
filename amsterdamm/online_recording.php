<?php
 require_once("php/services.php");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Tyre" content="title/php; charset=UTF-8">
	<meta http-equiv="Content-Tyre" content="services/php; charset=UTF-8">
    <meta http-equiv="Content-Tyre" content="about_us/php; charset=UTF-8">
    <meta http-equiv="Content-Tyre" content="personal_Information/php; charset=UTF-8">
	<title>Салон красоты Амстердам</title>
	<link rel="stylesheet"  href="css/online_reg_style.css">

</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="nav">
				<ul class="menu">
					<li> 
						<a onclick="javascript:history.back(); return false;">Назад</a>
					</li>
					<li> 
						<a href="#form">Онлайн - запись</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
<div class="wrapper">
	<div class="form">
		<form action="#" id="form">
			<div class="form_item_u">
				<div class="form_label">Выберите  услугу и мастера:</div>
					<!-- <select id='select_usluga' class="select" mame="master" onchange="selectedUsluga(this.value)"> -->
					<select id='select_usluga' class="select_usluga" name="usluga" onchange="selectedUsluga(this.value)" >
						<option>Выберите услугу </option>
						<option value="Anna">Комбинированный маникюр </option>
						<option value="Anna">Комбинированный педикюр </option>
						<option value="Anna">Комбинированный педикюр + покрытие гель-лаком </option>
						<option value="Anna">Обработка пальчиков + гель-лак </option>
						<option value="Anna">Снятие гель-лака </option>
						<option value="Anna">Наращивание </option>
						<option value="Anna">Коррекция </option>
						<option value="Anna">Французкий дизайн </option>


						<option value="haircuts">Стрижка мужская</option>
						<option value="haircuts">Стрижка женская</option>
						<option value="haircuts">Стрижка чёлки</option>
						<option value="haircuts">Детская стрижка (любой возрост)</option>
						<option value="haircuts_s">Стрижка бороды</option>
						<option value="haircuts">Окрашивание волос</option>
						<option value="haircuts">Сложное окрашивание</option>
						<option value="haircuts">Мелирование</option>
						<option value="haircuts">Химическая завивка</option>
						<option value="haircuts">Выпримление волос</option>
						<option value="haircuts_s">Выпримление чёлки</option>
						<option value="haircuts_s">Укладка</option>
						<option value="haircuts">Чистка кожи головы</option>
						<option value="haircuts">SPA процедуры</option>

						<option value="sugaring">Ноги полностью</option>
						<option value="sugaring">Ноги до колена</option>
						<option value="sugaring">Глубокое бикини</option>
						<option value="sugaring">Классическое бикини</option>
						<option value="sugaring">Руки полностю</option>
						<option value="sugaring">Руки до локтя</option>
						<option value="sugaring">Подмышки</option>
						<option value="sugaring">Верхняя губа</option>
						<option value="sugaring">Щеки</option>
						<option value="sugaring">Подбородок</option>
						<option value="sugaring">Живот полностью</option>
						<option value="sugaring">Поясница</option>
						<option value="sugaring">Живот полностью</option>
					</select>
					<br>
					<select id='select_master' class="select_master"  name="master">
						<div class="select_master"></div>
					</select>
				</div>
				<div class="form_item">
					<label for="form_date" class="form_label">Введите желаемую дату*:</label>
					<input id="form_date" type="date" name="date"   class="form_input _req">
				</div>
				<div class="form_item">
					<label for="form_phone" class="form_label">Введите Ваш номер телефона*:</label>
					<input id="form_phone" type="tel"   placeholder="Пример: 8__________" name="tel" pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" class="form_input _req ">
				</div>
				<div class="form_item">
					<label for="form_name" class="form_label">Введите Ваше имя*:</label>
					<input id="form_name" type="name" placeholder="Пример: Мария" name="name"  class="form_input _req">
				</div>
				<div class="form_item">
					<label for="form_comment" class="form_label">Комментарии:</label>
					<textarea id="form_comment" name="comment" class="form_input"></textarea>
				</div>
				<div class="form_item">
					<div class="checkbox">
						<input id="form_agreement" checked type="checkbox" name="agreement" class="checkbox_input _req">
						<label for="form_agreement" class="checkbox_label">
							<span>Я соглашаюсь с тем, как будут обрабатываться мои <a href="personal_Information.html#personal_Information">персональные данные</a>*</span>
						</label>
					</div>
				</div>
				<button type="submit" class="form_button">Записаться</button>
		</form>
	</div>		
</div>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="js/form.js"> </script>

</body>
</html>