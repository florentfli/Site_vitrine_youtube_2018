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
	<div class="corps" id="padding">
		<div class="textFonction">
			<h3 class="foncFont">Section des commentaires</h3>
			<p class="indent foncFont">La section des commentaires est l'endroit où n'importe quels utilisateurs connecté à un compte peut échanger avec les autres utilisateurs mais également avec les auteurs des vidéos.</p>
		</div>
		<div id="lien">
			<img id="layout" src="img/layout.PNG" alt="layout">
			<a href="recherche.php">	<div class="pointeur" id="recherche"> 	</div></a>
			<a href="fonctions.php">		<div class="pointeur" id="fonctions">	</div></a>
			<a href="sugestion.php">		<div class="pointeur" id="sugestion">	</div></a>
			<a href="jaime.php">			<div class="pointeur" id="jaime">		</div></a>
			<a href="video.php">			<div class="pointeur" id="video">		</div></a>
			<a href="partage.php">			<div class="pointeur" id="partage">		</div></a>
			<a href="abonnement.php">		<div class="pointeur" id="abonnement">	</div></a>
			<a href="chaine.php">			<div class="pointeur" id="chaine">		</div></a>
			<a href="titre.php">			<div class="pointeur" id="titre">		</div></a>			
			<a href="description.php">		<div class="pointeur" id="description">	</div></a>
			<a href="upload.php">			<div class="pointeur" id="upload">		</div></a>
			<a href="avancement.php">		<div class="pointeur" id="avancement">	</div></a>
			<a href="bouton.php">			<div class="pointeur" id="bouton">		</div></a>
			<a href="parametre.php">		<div class="pointeur" id="parametre">	</div></a>
			<a href="commentaire.php">		<div class="pointeur" id="commentaire">	</div></a>
		</div>

	</div>

	<footer>
		<?php include('footer.php') ?>
	</footer>

</body>
</html>
