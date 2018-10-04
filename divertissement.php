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
			<div class="categoriesActive categories numero3">
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
			<h3 class="foncFont">Divertissement</h3>
			<p class="indent foncFont">Cette catégories de vidéos fait partie des 2 catégories les plus regardées avec la catégorie "<a href="musique.php">Musique</a>" celon notre sondage. C'est également à cette catégorie que le plus de vidéos appartiennent, car beaucoup de personnes (notamment des jeunes) regardent des <i>youtubers</i> tendances comme par exemple : <a href="https://www.youtube.com/channel/UCyWqModMQlbIo8274Wh_ZsQ">Cyprien</a>, <a href="https://www.youtube.com/user/FPSCoopGameplays">Amixem</a> ou encore <a href="https://www.youtube.com/user/DrNozman">Dr. Nozman</a>. Or, tous ces <i>youtubers</i> font du contenu de divertissement. Ils ont tous plus de 3 millions d'abonnés et sont dans le <i>top 30 youtubers français</i>.</p>
			<p class="indent foncFont">Les résultats de notre sondages le prouve égalemment : plus de 85% des personnes se rendent sur YouTube afin de se divertir. Il y a donc tout un nouveau marché qui c'est ouvert, avec notamment des placements de produits proposé par des marques dans des vidéos </p>
		</div>
	</div>


	</div>

	<footer>
		<?php include('footer.php') ?>
	</footer>

</body>
</html>
