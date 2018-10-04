<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" href="projet.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Projet tuteuré : YouTube</title>
	<meta charset="utf-8"/>
	<link rel="icon" href="favicon.ico" />




	<!-- A PRENDRE  -->

	<style>

		.quatre,.cinq,.six,.sept,.huit,.neuf,.dix,.onze,.douze
		{
			margin-top:0px;
			margin:bottom:0px;
		}

		.un,.deux,.trois,.treize
		{
			margin-top:35px!important;
			margin-bottom:35px!important;
		}

		.douze,.neuf,.six
		{
			margin-bottom:35px!important;
		}

		.dix,.sept,.quatre
		{
			margin-top:35px!important;
		}
		.image
		{
			/*rajouter top/left ou autre pour déplacer image*/
			display:flex;
			position:relative;
			width:min-content;
			height:min-content;
			margin:auto;
		}

		.image::after         /*pour toute image de même classe*/
		{
			width:100%;
			position:absolute;
			font-family:sans-serif;
			font-style:italic;
			line-height:80px;        /*hauteur légende */
			text-align:justify;
			color:white;            /*couleur texte*/
			bottom:0;
			height:auto;             /*hauteur à partir du bottom*/
			background:rgba(55,55,55,0.8); /*couleur rgb + transparence*/
			opacity:0;                      /*ne pas modif*/
			transition:all 0.3s linear;
			text-align:center;
			font-size:18px;
		}


		.un::after   /*texte legende image premiere image*/
		{
			content:"QG aux débuts de Youtube";
		}

		.deux::after
		{
			content:"Quartier général de Youtube à San Bruno en Californie";
		}

		.trois::after   /*texte legende image premiere image*/
		{
			content:"Youtube Space de Mumbai";
		}

		.quatre::after
		{
			content:"Des employés jouant au minigolf";
		}

		.cinq::after   /*texte legende image premiere image*/
		{
			content:"Espace piscine au QG de Youtube à San Bruno";
		}

		.six::after
		{
			content:"Hall lumineux et espacé du QG de Youtube à San Bruno";
		}

		.sept::after   /*texte legende image premiere image*/
		{
			content:"Extérieur du DATA center de google en Oregon avec son système de distribution électrique.";
		}

		.huit::after
		{
			content:"Vue aérienne de l’intérieur d’un DATA center";
		}

		.neuf::after   /*texte legende image premiere image*/
		{
			content:"Intérieur d'un DATA center, parc de serveurs";
		}

		.dix::after
		{
			content:"DATA centers en Europe (2012)";
		}

		.onze::after
		{
			content:"DATA centers aux USA (2012)";
		}

		.douze::after
		{
			content:"DATA centers dans le monde (2012)";
		}

		.treize::after
		{
			content:"Système colossal de refroidissement par tuyaux d'un DATA center de Google dans l'Oregon";
			font-size:11;
		}

		.image:hover:after
		{
			opacity:1.2;                    /*en adéquation avec rgba*/
		}

	</style>

<!-- A PRENDRE -->




	</head>
	<body>




		<!-- A PRENDRE -->


		<aside>
				<p class="Sommaire">L'Entreprise</p>
				<ul style="list-style-type:none">
					<li id="li1"><a class="soulign" href="#partie1">Une popularité grandissante</a>
							<ul style="list-style-type:none">
								<li id="li2"><a href="#partie1_sous_partie1">Entreprise en expansion</a></li>
								<li id="li2"><a href="#partie1_sous_partie2">A proximité de la communauté</a></li>
								<li id="li2"><a href="#partie1_sous_partie3">De nos jours</a></li>
							</ul>
						</li>
					<li id="li1"><a class="soulign" href="#partie2">Data Center : au coeur de la donnée</a>
							<ul style="list-style-type:none">
								<li id="li2"><a href="#partie2_sous_partie1">Définition</a></li>
								<li id="li2"><a href="#partie2_sous_partie2">Localisation</a></li>
								<li id="li2"><a href="#partie2_sous_partie3">Consommation</a></li>
							</ul>
					</li>
			</aside>





		<header>
			<?php include('header.php') ?>
		</header>



<!-- A PRENDRE -->


		<div class="corps center" id="padding">
			<h1 id="partie1">Une expansion à travers une popularité en forte croissance</h1>
				<h2 id="partie1_sous_partie1">Une entreprise grandissante</h2>
					<p>A ses débuts, la société est une petite entreprise créée par trois employés de Paypal : Chad Hurley, Steve Chen et Jawed Karim. Si petite qu’elle tient dans un appartement au dessus d’un restaurant !</p>

					<div class="image un">
						<img src="images/ytbqg.jpg" alt="">
					</div>

					<p>Dès son lancement en février 2005, Youtube connaît une popularité très forte. En 1 an, le site revendique déjà plus de 35 millions de vidéos visionnées par jour. Sa popularité la conduit vers un développement très rapide; racheté par le géant Google le 9 octobre 2006,
					cela ne veut dire qu'une chose : Youtube a l’intention de devenir une plaque tournante dans l’hébergement de vidéos. L'entreprise qui continue de fortement grandir a alors besoin de meilleurs équipements : Elle en change son quartier général pour un espace beaucoup plus grand avec de bien meilleurs équipements à San Bruno en Californie.
					De 2006 à 2010, le nombre de vidéos visionnées sur Youtube par jour a été multiplié par quasiment 30, soit 1 milliard de vues par jour : pari réussi.</p>
					<div class="image deux">
						<img src="images/ytbqgafter.jpg" alt="">
					</div>

					<p>Youtube se lance internationalement dès 2007 en Europe et dans le monde entier, et particulièrement le 19 juin en France. Elle entre alors en concurrence avec les hébergeurs du moments comme Dailymotion qui seront rapidement englouti. Son influence
						ne se limite pas qu'à un simple hébergeur de vidéos : l'entreprise développe également de nombreuses choses tel que des ambassades afin de promouvoir leurs "produits", les youtubers etc dans différentes métropoles telles que Paris et Londres</p>

				<h3 id="partie1_sous_partie2">Un accroissement par une proximité envers sa communauté</h3>

					<p>Les ambassades de Youtube, également appelées Youtube Spaces, sont des lieux qui mettent à dispositions des lieux/studios ayant pour but de donner la possibilité aux Youtubers de diffuser du contenu de qualité grâce à du matériel de professionnel et ainsi promouvoir les intérêts de l’entreprise, de la communauté et des créateurs.
						Ils se trouvent dans les plus grandes métropoles : Londres, New York, Los Angeles, Mumbai, Tokyo Sao Paulo, Berlis, Paris et Toronto à ce jour.</p>

					<div class="image trois">
				     <img src="images/ytbspacemumbai.jpg" alt="">
			    </div>
					<p>Côté créateur, cela permet de créer et partager dans les meilleures conditions. Ils peuvent ainsi apprendre des stratégies créatives, sur le développement d’audience et de production, partager leurs créations et agrandir leur communauté. Pour cela, il ont également la possibilité de le faire à travers des événements tels que les « happy hours » sur des jeux par exemple, ou encore faire des rencontres avec d’autres Youtubers.
						Les spectateurs sont alors plus facilement fidélisés et l'entreprise de ce fait en tire une plus grande utilisation et des bénéfices potentiels.</p>

				<h4 id="partie1_sous_partie3">L'entreprise de nos jours</h4>

					<p>Afin de permettre une efficacité optimale, les employés de Google se voient offerts d’innombrables avantages. Le siège social de Youtube à San Bruno en Californie offre de nombreux loisirs : sports, détente, divertissement, confort. Les espaces sont lumineux et très larges ce qui permet aux employés de se ressourcer facilement et de travailler efficacement.</p>

					<div class="image quatre">
						<img src="images/ytbgolf.jpg" alt="">
					</div>

					<div class="image cinq">
				     <img src="ytbpiscine.jpg" alt="">
				  </div>

					<div class="image six">
					 	<img src="images/ytbhall.jpg" alt="">
					</div>

					<p>Youtube est présent dans 79 pays (6 avril 2015) et disponible dans 76 langues. Elle recueille 95 % de la population Internet mondiale : son pari est rempli, le géant Google a fait de Youtube de très loin la première plateforme d’hébergement de vidéos au monde.</p>

			<h5 id="partie2">Le DATA Center : au coeur de la gestion des données</h5>

				<p>Youtube est un site web d’hébergement de vidéos dans lequel l’utilisateur, en tant que spectateur ou créateur peuvent faire de nombreuses choses. Gérer les données des utilisateurs est donc crucial : il faut pouvoir organiser, stocker et traiter les données de milliards d’utilisateurs.
					Le meilleur moyen, à ce jour, reste l’utilisation des data center qui est un outil indispensable.</p>

				<h6 id="partie2_sous_partie1">Définition</h6>

					<p>Il s’agit d’une infrastructure qui est composée d’espaces de stockage de données, de réseaux de serveurs ainsi que tout ce dont ces éléments ont besoin pour fonctionner : câbles, routeurs et même systèmes de distribution d’énergie mais également de refroidissement. Effectivement, ces data centers sont très gourmands en électricité et chauffent énormément.<p>

						<div class="image sept">
						   <img src="images/ytbdatacenter1.jpg" alt="">
						</div>

						<div class="image huit">
					      <img src="images/ytbdatacenter2.jpg" alt="">
					  </div>

					  <div class="image neuf">
						    <img src="images/ytbdatacenter3.jpg" alt="">
						</div>


				<h7 id="partie2_sous_partie2">Localisation</h7>

					<p>Google est une énorme boîte qui de ce fait possède beaucoup de DATA centers à travers le monde. En 2012, on dénombre environ 36 DATA centers (confidentiel).
						Les serveurs des data centers fonctionnent en permanence et stockent toutes les données nécessaires à l’entreprise Google dont celles de sa filiale Youtube.</p>

						<div class="image dix">
								<img src="images/local1.jpg" alt="">
						</div>

						<div class="image onze">
								<img src="images/local2.jpg" alt="">
						</div>

						<div class="image douze">
								<img src="images/local3.jpg" alt="">
						</div>

					<p>On remarque que les Data centers de Google se concentrent plus vers les zones peuplées mais surtout là où Youtube est le plus utilisé (Europe/USA), cependant il y en a partout à travers le monde.</p>
					<br><br>
					<p>Là où une petite entreprise n’a besoin que d’une petite salle pour juxtaposer plusieurs serveurs et espaces de stockage, gérer un data center pour une grosse entreprise comme Google, même “seulement” pour sa filiale nécessite une équipe nombreuse, compétente et diversifiée. Cette équipe doit jouer un rôle très important. Elle travaille sur différents domaines tels que la sécurité, la gestion du réseau, la gestion de base de données , l’ingénierie thermique… Par conséquent, elle doit être le plus efficace possible pour éviter tout problème et les résoudre le plus rapidement possible (un moindre bug pouvant mettre en panne l’ensemble de Youtube et générer des pertes). Une équipe dans un data center serait composée d’en général entre 100 et 300 employés selon la taille du site.</p>

			 <h8 id="partie2_sous_partie3">Consommation</h8>

			 		<p>Les data centers sont très énergivores, surtout ceux de Google. Qui dit beaucoup de serveurs dit énorme consommation d’électricité (en moyenne 37 fois celle d’une maison soit 5,15 MWh au m²) d’autant plus que cette même consommation d’électricité génère une chaleur ambiante. Les data centers de grosse boîtes type Google produisent une énorme quantité de chaleur qui se doit d’être constamment refroidie. Les systèmes alors actuellement les plus répandus et utilisés sont le water cooling (refroidissement par l’eau) et les ventilateurs.</p>

					<div class="image treize">
							<img src="images/ytbdatacenter4.jpg" alt="">
					</div>

					<p>Il est donc requis d’être à proximité de points d’eau important ainsi que de construire un réseau de tuyaux très vaste et complexe afin de refroidir la totalité du serveur.  La consommation d’électricité, la production de chaleur et son refroidissement constituent la quasi totalité des coûts énergétiques.</p>

			</div>

<!-- A PRENDRE -->


	</body>
</html>
