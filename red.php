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
	      <li id="li1"><a class="soulign" href="fonctionnalites.php">Interface</a></li>
	      <li id="li1"><a class="soulign" href="facettes.php">Catégories</a></li>
	    </ul>
	</aside>
	<div class="corps center" id="padding">
		<div class="flexBox1 row1">
			<div class="categories musique">
				<a href="musique.php">
					<img src="img/musique.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories categoriesActive numero2">
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
			<div class="categories numero7">
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
			<h3 class="foncFont">YouTube RED</h3>
			<p class="indent foncFont">Suite au succès grandissant des plateformes de <i>streaming</i> payante  tels que <a href="netflix.com">Netflix</a>, pour le prix de 9.99$/mois; YouTube a décidé de sortir en octobre 2015 sa propre plateforme de <i>streaming</i> payante: <a href="https://www.youtube.com/red">YouTube RED</a>. YouTube a décidé de se lancer sur les plate-forme de vidéos payante puisque en 2016, ces dernières aurais rapporté pas moins de 19 milliard de dollars dans le monde entiers, et 40 milliards sont attendu pour 2020. En plus de vidéos exclusives aux abonnés YouTube RED, cela permet aux utilisateurs d’avoir accès à toutes les vidéos du domaine sans aucune "pubs". Elle a pour but de proposer des séries de vidéos « originales » à ses utilisateurs. Mais comparé YouTube RED et NETFLIX, reste aujourd’hui impossible : en effet, rien qu’au niveau chiffre d’affaire, NETFLIX représente 8.8 milliard de dollars en 2016 avec 50 millions d’utilisateur contre 1.6 millions pour YouTube RED seulement</p>
			<!-- <p class="indent foncFont">.Or YouTube RED souhaite s’élargir en lançant une nouvelle série originale, « <a href="https://www.youtube.com/channel/UCkM3cLfmWBSFoEU-xVnQ-dw">Step Up</a> », avec un budget de plusieurs  millions de dollars par épisode, se plaçant ainsi directement en concurrence avec les grandes série Netflix tel que « <a href="https://www.netflix.com/fr/title/70178217">House Of Cards</a> » par exemple.
			</p> -->
		</div>
	</div>


	</div>

	<footer>
		<?php include('footer.php') ?>
	</footer>

</body>
</html>
