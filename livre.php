<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" href="projet.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Projet tuteuré : YouTube</title>
	<meta charset="utf-8"/>
	<link rel="icon" href="favicon.ico" />
</head>
<body>

	<header>
		<?php include('header.php') ?>
	</header>
	<aside>
	    <p class="Sommaire">Sommaire "Fonctionnalites"</p>
	    <ul style="list-style-type:none">
	      <li id="li1"><a class="soulign" href="fonctionnalites.php">PARTIE 1</a></li>
	      <li id="li1"><a class="soulign" href="facettes.php">PARTIE 2</a></li>
	    </ul>
	</aside>
	<div class="corps center" id="padding">
		<div class="flexBox1 row1">
			<div class="categories musique">
				<a href="musique.php">
					<img src="img/musique.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories numero2">
				<a href="red.php">
					<img src="img/diverti.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories numero3">
				<a href="divertissement.php">
					<img src="img/gaming.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories numero4">
				<a href="spotlight.php">
					<img src="img/spotlight.jpg" class="roundedImage">
				</a>
			</div>
		</div>
		<div class="flexBox2 row1">
			<div class="categories numero5">
				<a href="tendance.php">
					<img src="img/tendance.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories numero6">
				<a href="actu.php">
					<img src="img/actu.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories categoriesActive numero7">
				<a href="livre.php">
					<img src="img/livre.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories numero8">
				<a href="sport.php">
					<img src="img/sport.jpg" class="roundedImage">
				</a>
			</div>
		</div>

		<div class="textCategorie">
			<h3 class="foncFont">Education</h3>
			<p class="indent foncFont">D'après notre sondage, plus de 45% des utilisateurs de YouTube consultent des tutoriels: preuve que YouTube est une réel sources de connaissances et de partages. On y trouve de tout: des <a href="https://www.youtube.com/user/FastGoodCuisine/videos">recettes de cuisine</a> jusqu'à des conferences sur <a href="https://www.youtube.com/watch?v=wiNnhJZf6Ys"><i>la théorie du Big Bang</i></a>.</p>
			<p class="indent foncFont">Tout ce savoir est partagé publiquement, ouvertement et accessible à tous. Des personnes ont également lancé des cours vidéos permettant une autoformation, accessible dans divers domaines.</p>
		</div>
	</div>

	<footer>
		<?php include('footer.php') ?>
	</footer>

</body>
</html>
