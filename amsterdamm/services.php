<?php
 require_once("php/services.php"); 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Tyre" content="title/php; charset=UTF-8">
    <meta http-equiv="Content-Tyre" content="services/php; charset=UTF-8">
    <meta http-equiv="Content-Tyre" content="about_us/php; charset=UTF-8">
    <meta http-equiv="Content-Tyre" content="online_recording/php; charset=UTF-8">
	<title>Салон красоты Амстердам</title>
    <link rel="stylesheet"  href="css/servises_style.css">
</head>
<body>
    <header id="header" class="header">
		<div class="container">
			<div class="nav">
				<a href="index.php" ><img class="logo" src="ico/logo.svg" alt="Amsterdam"></a>
				<ul class="menu">
					<li> 
						<a href="index.php#title">Наши работы</a>
					</li>
					<li> 
						<a href="#services.php">Услуги</a>
					</li>
					<li> 
						<a href="about_us.php#about_us">О нас</a>
					</li>
				</ul >
				<a class="tel" href="tel:+7 919-880-03-05" >
					+7 919-880-03-05
				</a>
				<a class="open_meenu">
					<img src="ico/menu.svg" alt="Open menu">
				</a>
			</div>
		</div>
	</header>
<!------------------------------------------------------------------------>		
	<div  id="offer" class="offer">
		<div class="containerr">
			<img src="img/fon_2.jpg">
				<div class="button_1">
					<button onclick="button_1()"><a href="#title1"> Маникюр | Педикюр</a></button>
				</div>
				<div class="button_2">
					<button  onclick="button_2()"><a href="#title2"> Стрижки</a></button>
				</div>
				<div class="button_3">
					<button  onclick="button_3()"><a href="#title4"> Шугаринг </a></button>
				</div>
		</div>
	</div>
<!---------------------------------------------------------------------------------------------------------->	
	<section id="about" class="about">
		<div class="container">
			<div id="price1" class="price1" >
			<div id="title1" class="title">
				<span>Мастер <button  id="btn" class="btn">Анна</button></span>
			</div>
				<table border="1"  cellpadding="0" cellspacing="0"   width="100%" height="30%">
					<tr>
						<td width="80%">Комбинированный маникюр</td>
						<td  class="mani" width="50%" bgcolor="#F3F9FF" text-align="center">500 руб.</td>
					</tr>
					<tr>
						<td width="80%">Комбинированный педикюр</td>
						<td class="mani"  width="50%" bgcolor="#F3F9FF">800 руб.</td>
					</tr>
					<tr>
						<td width="80%">Комбинированный педикюр + покрытие гель-лаком</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">1200 руб.</td>
					</tr>
					<tr>
						<td width="80%">Обработка пальчиков + гель-лак</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">900 руб.</td>
					</tr>
					<tr>
						<td width="80%">Снятие гель-лака</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">200 руб.</td>
					</tr>
					<tr>
						<td width="80%">Наращивание</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">1400 руб.</td>
					</tr>
					<tr>
						<td width="80%">Коррекция</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">900 руб.</td>
					</tr>
					<tr>
						<td width="80%">Французский дизайн</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">100 руб.</td>
					</tr>
					<tr>
						<td width="80%">Стразы, наклейки, втирка</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">50 руб.</td>
					</tr>
				</table>
			</div>
		
<!---------------------------------------------------------------------------------------------------------->		
			
			<div id="price2" class="price2" >
				<div id="title2" class="title">
					<span>Мастер <button  id="btn_s" class="btn_s" onclick="btn_s()" > Снежанна  </button>  <button  id="btn_k" class="btn_k" onclick="btn_k()"> Кристина</button> </span>
				</div>
				<table  border="1"  cellpadding="0" cellspacing="0"   width="100%" height="30%">
					<tr>
						<td width="80%">Стрижка женская </td>
						<td  class="mani" width="50%" bgcolor="#F3F9FF" text-align="center">400 руб.</td>
					</tr>
					<tr>
						<td width="80%">Стрижка мужская </td>
						<td class="mani"  width="50%" bgcolor="#F3F9FF">250-350 руб.</td>
					</tr>
					<tr>
						<td width="80%">Стрижка чёлки</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">100 руб.</td>
					</tr>
					<tr>
						<td width="80%">Стрижка бороды</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">от 100 руб.</td>
					</tr>
					<tr>
						<td width="80%">Детская стрижка (любой возраст)</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">250-350 руб.</td>
					</tr>
					<tr>
						<td width="80%">Окрашивание волос</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">от 600 руб.</td>
					</tr>
					<tr>
						<td width="80%">Смывка</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">600-1500 руб.</td>
					</tr>
					<tr>
						<td width="80%">Сложное окрашивание  </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">1500-3000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Мелирование</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">от 1000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Цены указаны без материалов. Вы можете прийти со своей краской </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF"></td>
					</tr>
					<tr>
						<td width="80%">Химическая завивка</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">от 1000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Выпрямление волос </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">от 2000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Выпрямление чёлки</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">500 руб.</td>
					</tr>
					<tr>
						<td width="80%">Укладка</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">500-800 руб.</td>
					</tr>
					<tr>
						<td width="80%">Чистка кожи головы </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">150-400 руб.</td>
					</tr>
					<tr>
						<td width="80%">SPA процедуры</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">800-1200 руб.</td>
					</tr>
				</table>
			</div>
<!---------------------------------------------------------------------------------------------------------->	 
			
			<div id="price3" class="price3" >
				<div id="title3" class="title">
					<span>Мастер <button  id="btn_k" class="btn_k" onclick="btn_k()"> Кристина</button> <button  id="btn_s" class="btn_s" onclick="btn_s()" > Снежанна  </button></span>
				</div>
				<table border="1"  cellpadding="0" cellspacing="0"   width="100%" height="30%">
					<tr>
						<td width="80%">Стрижка женская </td>
						<td  class="mani" width="50%" bgcolor="#F3F9FF" text-align="center">400 руб.</td>
					</tr>
					<tr>
						<td width="80%">Стрижка мужская </td>
						<td class="mani"  width="50%" bgcolor="#F3F9FF">250-350 руб.</td>
					</tr>
					<tr>
						<td width="80%">Стрижка чёлки</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">100 руб.</td>
					</tr>
					<tr>
						<td width="80%">Детская стрижка (любой возраст)</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">250-350 руб.</td>
					</tr>
					<tr>
						<td width="80%">Окрашивание волос (работа)</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">1500-3000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Смывка</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">600-1500 руб.</td>
					</tr>
					<tr>
						<td width="80%">Сложное окрашивание  </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">1500-3000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Мелирование</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">от 1000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Цены указаны без материалов. Вы можете прийти со своей краской </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF"></td>
					</tr>
					<tr>
						<td width="80%">Химическая завивка</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">от 1000 руб.</td>
					</tr>
					<tr>
						<td width="80%">Выпрямление волос</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">500 руб.</td>
					</tr>
						<td width="80%">Чистка кожи головы </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">150-400 руб.</td>
					</tr>
					<tr>
						<td width="80%">SPA процедуры</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">800-1200 руб.</td>
					</tr>
				</table>
			</div>
<!---------------------------------------------------------------------------------------------------------->	

			<div id="price4" class="price4" >
				<div id="title4" class="title">
					<span>Мастер <button  id="btn" class="btn">Кристина</button></span>
				</div>
				<table border="1"  cellpadding="0" cellspacing="0"   width="100%" height="30%">
					<tr>
						<td width="80%">Ноги полностью </td>
						<td  class="mani" width="50%" bgcolor="#F3F9FF" text-align="center">900 руб.</td>
					</tr>
					<tr>
						<td width="80%">Ноги до колена</td>
						<td class="mani"  width="50%" bgcolor="#F3F9FF">450 руб.</td>
					</tr>
					<tr>
						<td width="80%">Глубокое бикини</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">800 руб.</td>
					</tr>
					<tr>
						<td width="80%">Классическое бикини </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">500 руб.</td>
					</tr>
					<tr>
						<td width="80%">Руки полностью </td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">500 руб.</td>
					</tr>
					<tr>
						<td width="80%">Руки до локтя</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">350 руб.</td>
					</tr>
					<tr>
						<td width="80%">Подмышки</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">300 руб.</td>
					</tr>
					<tr>
						<td width="80%">Верхняя губа</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">100 руб.</td>
					</tr>
					<tr>
						<td width="80%">Щеки</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">200 руб.</td>
					</tr>
					<tr>
						<td width="80%">Подбородок</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">100 руб.</td>
					</tr>
					<tr>
						<td width="80%">Живот полностью</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">300 руб.</td>
					</tr>
					<tr>
						<td width="80%">Поясница</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">300 руб.</td>
					</tr>
					<tr>
						<td width="80%">Поясница</td>
						<td class="mani" width="50%" bgcolor="#F3F9FF">250 руб.</td>
					</tr>
				</table>
			</div>
			<div class="button">
				<a href="online_recording.php#online_recording">Записаться Online</a>
			</div>
		</div>
	</section>
<!------------------------------------------------------------------------>
	<footer id="footer" class="footer">
		<div class="container">
				<p>© 2021 Салон красоты  АмстердамМ </br> г. Новошахтинск  ул.Щербакова 2а/26а</p>	
		</div>
	</footer>
<!------------------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="js/menu_2.js"></script>
<script src="js/script.js"></script>
</body>
</html>