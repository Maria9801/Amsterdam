<?php
 require_once("php/services.php"); 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
						<a href="services.php">Услуги</a>
					</li>
					<li> 
						<a href="about_us.php">О нас</a>
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
			<img src="img/fon_2.jpg" alt="fon">
				<div class="button_1">
					<button onclick="button_1()"> Маникюр | Педикюр</button>
				</div>
				<div class="button_2">
					<button  onclick="button_2()"> Стрижки</button>
				</div>
				<div class="button_3">
					<button  onclick="button_3()">Шугаринг</button>
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
					<table >
						<tr>
							<td>Комбинированный маникюр</td>
							<td  class="mani">500 руб.</td>
						</tr>
						<tr>
							<td>Комбинированный педикюр</td>
							<td class="mani" >800 руб.</td>
						</tr>
						<tr>
							<td>Комбинированный педикюр + покрытие гель-лаком</td>
							<td class="mani">1200 руб.</td>
						</tr>
						<tr>
							<td>Обработка пальчиков + гель-лак</td>
							<td class="mani">900 руб.</td>
						</tr>
						<tr>
							<td>Снятие гель-лака</td>
							<td class="mani">200 руб.</td>
						</tr>
						<tr>
							<td>Наращивание</td>
							<td class="mani">1400 руб.</td>
						</tr>
						<tr>
							<td>Коррекция</td>
							<td class="mani">900 руб.</td>
						</tr>
						<tr>
							<td>Французский дизайн</td>
							<td class="mani">100 руб.</td>
						</tr>
						<tr>
							<td>Стразы, наклейки, втирка</td>
							<td class="mani">50 руб.</td>
						</tr>
					</table>
			</div>
		
<!---------------------------------------------------------------------------------------------------------->		
			
			<div id="price2" class="price2" >
				<div id="title2" class="title">
					<span>Мастер <button  id="btn_s" class="btn_s" onclick="btn_s()" > Снежанна  </button>  <button  id="btn_k" class="btn_k" onclick="btn_k()"> Кристина</button> </span>
				</div>
				<table  >
					<tr>
						<td>Стрижка женская </td>
						<td  class="mani">400 руб.</td>
					</tr>
					<tr>
						<td>Стрижка мужская </td>
						<td class="mani" >250-350 руб.</td>
					</tr>
					<tr>
						<td>Стрижка чёлки</td>
						<td class="mani">100 руб.</td>
					</tr>
					<tr>
						<td>Стрижка бороды</td>
						<td class="mani">от 100 руб.</td>
					</tr>
					<tr>
						<td>Детская стрижка (любой возраст)</td>
						<td class="mani">250-350 руб.</td>
					</tr>
					<tr>
						<td>Окрашивание волос</td>
						<td class="mani">от 600 руб.</td>
					</tr>
					<tr>
						<td>Смывка</td>
						<td class="mani">600-1500 руб.</td>
					</tr>
					<tr>
						<td>Сложное окрашивание  </td>
						<td class="mani">1500-3000 руб.</td>
					</tr>
					<tr>
						<td>Мелирование</td>
						<td class="mani">от 1000 руб.</td>
					</tr>
					<tr>
						<td>Цены указаны без материалов. Вы можете прийти со своей краской </td>
						<td class="mani"></td>
					</tr>
					<tr>
						<td>Химическая завивка</td>
						<td class="mani">от 1000 руб.</td>
					</tr>
					<tr>
						<td>Выпрямление волос </td>
						<td class="mani">от 2000 руб.</td>
					</tr>
					<tr>
						<td>Выпрямление чёлки</td>
						<td class="mani">500 руб.</td>
					</tr>
					<tr>
						<td>Укладка</td>
						<td class="mani">500-800 руб.</td>
					</tr>
					<tr>
						<td>Чистка кожи головы </td>
						<td class="mani">150-400 руб.</td>
					</tr>
					<tr>
						<td>SPA процедуры</td>
						<td class="mani">800-1200 руб.</td>
					</tr>
				</table>
			</div>
<!---------------------------------------------------------------------------------------------------------->	 
			
			<div id="price3" class="price3" >
				<div id="title3" class="title">
					<span>Мастер <button  id="btn_kris" class="btn_kris" onclick="btn_k()"> Кристина</button> <button  id="btn_snej" class="btn_snej" onclick="btn_s()" > Снежанна  </button></span>
				</div>
				<table >
					<tr>
						<td>Стрижка женская </td>
						<td  class="mani">400 руб.</td>
					</tr>
					<tr>
						<td>Стрижка мужская </td>
						<td class="mani" >250-350 руб.</td>
					</tr>
					<tr>
						<td>Стрижка чёлки</td>
						<td class="mani">100 руб.</td>
					</tr>
					<tr>
						<td>Детская стрижка (любой возраст)</td>
						<td class="mani">250-350 руб.</td>
					</tr>
					<tr>
						<td>Окрашивание волос (работа)</td>
						<td class="mani">1500-3000 руб.</td>
					</tr>
					<tr>
						<td>Смывка</td>
						<td class="mani">600-1500 руб.</td>
					</tr>
					<tr>
						<td>Сложное окрашивание  </td>
						<td class="mani">1500-3000 руб.</td>
					</tr>
					<tr>
						<td>Мелирование</td>
						<td class="mani">от 1000 руб.</td>
					</tr>
					<tr>
						<td>Цены указаны без материалов. Вы можете прийти со своей краской </td>
						<td class="mani"></td>
					</tr>
					<tr>
						<td>Химическая завивка</td>
						<td class="mani">от 1000 руб.</td>
					</tr>
					<tr>
						<td>Выпрямление волос</td>
						<td class="mani">500 руб.</td>
					</tr>
					<tr>
						<td>Чистка кожи головы </td>
						<td class="mani">150-400 руб.</td>
					</tr>
					<tr>
						<td>SPA процедуры</td>
						<td class="mani">800-1200 руб.</td>
					</tr>
				</table>
			</div>
<!---------------------------------------------------------------------------------------------------------->	

			<div id="price4" class="price4" >
				<div id="title4" class="title">
					<span>Мастер <button  id="btn_sh" class="btn_sh">Кристина</button></span>
				</div>
				<table >
					<tr>
						<td>Ноги полностью </td>
						<td  class="mani">900 руб.</td>
					</tr>
					<tr>
						<td>Ноги до колена</td>
						<td class="mani" >450 руб.</td>
					</tr>
					<tr>
						<td>Глубокое бикини</td>
						<td class="mani">800 руб.</td>
					</tr>
					<tr>
						<td>Классическое бикини </td>
						<td class="mani">500 руб.</td>
					</tr>
					<tr>
						<td>Руки полностью </td>
						<td class="mani">500 руб.</td>
					</tr>
					<tr>
						<td>Руки до локтя</td>
						<td class="mani">350 руб.</td>
					</tr>
					<tr>
						<td>Подмышки</td>
						<td class="mani">300 руб.</td>
					</tr>
					<tr>
						<td>Верхняя губа</td>
						<td class="mani">100 руб.</td>
					</tr>
					<tr>
						<td>Щеки</td>
						<td class="mani">200 руб.</td>
					</tr>
					<tr>
						<td>Подбородок</td>
						<td class="mani">100 руб.</td>
					</tr>
					<tr>
						<td>Живот полностью</td>
						<td class="mani">300 руб.</td>
					</tr>
					<tr>
						<td>Поясница</td>
						<td class="mani">300 руб.</td>
					</tr>
					<tr>
						<td>Поясница</td>
						<td class="mani">250 руб.</td>
					</tr>
				</table>
			</div>
			<div class="button">
				<a href="online_recording.php">Записаться Online</a>
			</div>
		</div>
	</section>
<!------------------------------------------------------------------------>
	<footer id="footer" class="footer">
		<div class="container">
				<p>© 2021 Салон красоты  АмстердамМ <br> г. Новошахтинск  ул.Щербакова 2а/26а</p>	
		</div>
	</footer>
<!------------------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="js/menu_2.js"></script>
<script src="js/script.js"></script>
</body>
</html>