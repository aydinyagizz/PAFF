<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?php BASE_URL ?>views/admin/">
	<meta charset="UTF-8">
	<title>MENU</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="app">

		<div class="cardList">
			<button class="cardList__btn btn btn--left">
				<div class="icon">
					<svg>
						<use xlink:href="#arrow-left"></use>
					</svg>
				</div>
			</button>

			<div class="cards__wrapper">

				<div class="card current--card ">
					<div class="card__image " id="page_video">
						<a class="cardimage" href="/PAFF/oyuncu-kartlari">
							<img class="cardimage" src="1.jpg" alt="" />
						</a>
					</div>
				</div>

				<div class="card next--card">
					<div class="card__image">
						<a class="cardimage" href="/PAFF/duyurular">
							<img class="cardimage" src="2.jpg" alt="" />
						</a>
					</div>

				</div>

				<div class="card previous--card">
					<div class="card__image">
						<a class="cardimage" href="https://www.dgharge.com/">
							<img class="cardimage" src="3.jpg" alt="" />
						</a>
					</div>
				</div>
			</div>

			<button class="cardList__btn btn btn--right">
				<div class="icon">
					<svg>
						<use xlink:href="#arrow-right"></use>
					</svg>
				</div>
			</button>
		</div>

		<div class="infoList">
			<div class="info__wrapper"">
				<div class=" info current--info">

				<h1 class="text name">OYUNCU VİDEOLARI</h1>
				<!--	<h4 class="text location">VİDEO İZLEME VE DEĞERLENDİRME</h4>-->
				<p class="text description">VİDEO İZLEME VE DEĞERLENDİRME</p>
			</div>

			<div class="info next--info">
				<h1 class="text name">DUYURULAR</h1>
				<!--	<h4 class="text location">VİDEO İZLEME VE DEĞERLENDİRME</h4>-->
				<p class="text  description">DUYURU EKLEME</p>
			</div>

			<div class="info previous--info">
				<h1 class="text name ">ÇIKIŞ</h1>
			
			
			</div>
		</div>
	</div>


	<div class="app__bg">
		<div class="app__bg__image current--image">

			<img src="1.jpg" alt="" />
		</div>
		<div class="app__bg__image next--image">
			<img src="2.jpg" alt="" />
		</div>
		<div class="app__bg__image previous--image">
			<img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="" />
		</div>
	</div>
	</div>

	<div class="loading__wrapper">
		<div class="loader--text">Loading...</div>
		<div class="loader">
			<span></span>
		</div>
	</div>


	<svg class="icons" style="display: none;">
		<symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
			<polyline points='328 112 184 256 328 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
		</symbol>
		<symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
			<polyline points='184 112 328 256 184 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
		</symbol>
		<symbol id="arrow-but" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
			<use xlink:href="http://www.w3.org/2000/svg" />
		</symbol>
	</svg>











	<div class="support">
		<a href="/PAFF/page" target="_blank"><i class="fab fa-twitter-square"></i></a>
		<a href="https://dribbble.com/devloop01" target="_blank"><i class="fab fa-dribbble"></i></a>
	</div>
	<!-- partial -->
	<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
	<script src="./script.js"></script>

</body>

</html>