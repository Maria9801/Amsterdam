<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Tyre" content="title/php; charset=UTF-8">
	<meta http-equiv="Content-Tyre" content="services/php; charset=UTF-8">
    <meta http-equiv="Content-Tyre" content="about_us/php; charset=UTF-8">
    <meta http-equiv="Content-Tyre" content="Online_recording/php; charset=UTF-8">
	<title>Салон красоты АмстердамМ</title>
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="nav">
				<a href="index.php"><img class="logo" src="ico/logo.svg" alt="AmsterdamM"></a>
				
				<ul class="menu">
					<li> 
						<a href="#title" >Наши работы</a>
					</li>
					<li> 
						<a href="services.php#services" >Услуги</a>
					</li>
					<li> 
						<a href="about_us.php#about_us" >О нас</a>
					</li>
				</ul>
					<a class="tel" href="tel:+7 919-880-03-05" >+7 919-880-03-05</a>
				<a class="menu_open">
					<img src="ico/menu.svg" alt="Open menu">
				</a>
			</div>
		</div>
	</header>
<!------------------------------------------------------------------------>		
	<div  id="offer" class="offer">
		<div class="slog">
			<h1>Салон красоты AmsterdamM </h1>
			<h2>твои волосы - это твой стиль</h2>
		</div>
				<div class="flex_wrapper">
					<div class="slider_wrapper">
						<div class="slide active">
							<img src="img/slide_1.png" alt="">
						</div>
						<div class="slide">
							<img src="img/slide_2.png" alt="">
						</div>
						<div class="slide">
							<img src="img/slide_3.png" alt="">
						</div>
						<div id="btn_prev" class="btn_prev"></div>
						<div id="btn_next" class="btn_next"></div>
					</div>
				</div>
				<div class="bty">
					<p href="#">Не теряй времени! Запишись онлайн!</p>
					<div class="button">
						<a href="online_recording.php#Online_recording">Записаться</a>
					</div>
				</div> 
			</div>
	</div>
<!------------------------------------------------------------------------>		
	<section id="about" class="about">
		<div class="container_">
			<div id="title" class="title">
				<span>Наши работы</span>
			</div>
			<div class="gallery">
			<div class="img1">
				<a href="services.php#services">
					<img src="img/banner_1.jpg" width="565" height="400" alt="photo_1">
				</a>
			</div>
				<div class="img2">
					<a href="services.php#services">
						<img src="img/banner_2.jpg" width="565" height="400" alt="photo_2">
					</a>
				</div>
				<div class="img3">			
					<a href="services.php#services">
						<img src="img/banner_3.jpg" width="565" height="400" alt="photo_3">
					</a>
				</div>
				<div class="img4">
					<a href="services.php#services">
						<img src="img/banner_4.jpg" width="565" height="400" alt="photo_4">
					</a>
				</div>
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
<script src="js/main.js"></script>	
</body>
</html>
