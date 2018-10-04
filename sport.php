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
			<div class="categories numero7">
				<a href="livre.php">
					<img src="img/livre.jpg" class="roundedImage">
				</a>
			</div>
			<div class="categories categoriesActive numero8">
				<a href="sport.php">
					<img src="img/sport.jpg" class="roundedImage">
				</a>
			</div>
		</div>

		<div class="textCategorie">
			<h3 class="foncFont">Sport</h3>
			<p class="indent foncFont">D'après notre sondage, le sport est présent dans plus de 28% des vidéos visionnés. Le sport fait aujourd'hui partie entière de la société; et YouTube l'a bien remarqué: beaucoup de <i>youtubers</i> sportifs font des placements de produits pour diverses marques.</p>
		</div>
	</div>

	<footer>
		<?php include('footer.php') ?>
	</footer>

</body>
</html>
