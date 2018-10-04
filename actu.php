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
			<div class="categories categoriesActive numero6">
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
			<h3 class="foncFont">Actualités</h3>
			<p class="indent foncFont">YouTube est aujourd'hui le leader dans l'hebergement de vidéo; et demain, pourquoi pas le leader en matière d'actualités ? En effet, vue la montée en puissance du site ces dernières années et la baisse d'audience de la télée; pourquoi YouTube ne serais pas "la nouvelle télée" de demain ? La plateforme possede déjà tous les atouts et meme des groupes, comme par exemple <a href="https://www.youtube.com/watch?v=hL0sEdVJs3U">France 24</a> qui diffuse leur chaîne en direct sur YouTube.</p>
		</div>
		
	</div>

	<footer>
		<?php include('footer.php') ?>
	</footer>

</body>
</html>
