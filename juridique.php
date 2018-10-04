<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" href="youtube.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Projet tuteuré : YouTube</title>
	<meta charset="utf-8"/>
	<link rel="icon" href="favicon.ico" />
</head>
<body>

	<header>
		<?php include('headerPartie.php') ?>
	</header>
	<aside>
        <p class="Sommaire">Les lois et Youtube:</p>
        <ul style="list-style-type:none">
          <li id="li1"><a class="soulign" href="#partie1">Le droit d'auteur</a>
              <ul style="list-style-type:none">
                <li id="li2"><a href="#sous_partie1">Qu'est-ce que c'est?</a></li>
                <li id="li2"><a href="#sous_partie2">Ce qu'il protège</a></li>
                <li id="li2"><a href="#sous_partie3">Comment protèger son oeuvre?</a></li>
              </ul>
            </li>
          <li id="li1"><a class="soulign" href="#partie2">Youtube et le droit d'auteur</a>
              <ul style="list-style-type:none">
                <li id="li2"><a href="#sous_partie4">Content ID</a></li>
                <li id="li2"><a href="#sous_partie5">Fonctionnement de Content ID</a></li>
                <li id="li2"><a href="#sous_partie6">Les problèmes engendrés</a></li>
              </ul>
          </li>
      </aside>

	<div class="corps center" id="paddingPasFlo">
		<div class="marginleft">
			<h1 class="paddingPartie" id="partie1">Le droit d'auteur</h1>
				<h2 id="sous_partie1">Qu'est-ce que le droit d'auteur?</h2>
					<p class="Intro">Le droit d'auteur représente les droits exclusifs de l'auteur d'une œuvre. Le droit d'auteur peut s'appliquer peu importe le domaine de cette œuvre.</p>
					<div class="Images">
						<img src="Elliot/Images/DoNotCopy.jpeg" alt="commentcamarche.net" id="donotcopy">
					</div>
					<h2 id="sous_partie2">Qu'est-ce qu'il protège?</h2>
					<div class="blocs">
						<div class="droitPatrimonial">
							<p class="ppp">Le droit patrimonial:</p> <br>
							<p>L'argent que rapporte l'oeuvre, le droit à la diffusion et à l'addition. Il dure jusqu'à la fin de la vie de l'auteur ainsi que 70 ans après sa mort. Ce sera sa famille qui toucheront l'argent produit grâce à son œuvre. </p>
						</div>
						<div class="droitMoral">
							<p class="ppp">Le droit moral: </p> <br>
							<p>L'oeuvre ne peut pas être prise à l'artiste et cela dure indéfiniment. Il garantit également le droit à la paternité.</p>
						</div>
					</div>
				<h2 id="sous_partie3">Comment protéger son oeuvre?</h2>
					<p>Pour que votre œuvre soit soumise aux droits d'auteurs, il faut que celle-ci soit datée et signée. Sur Youtube, les vidéos sont datées et signées. À quelques exceptions près (qui seront abbordées ci-dessous), toutes les oeuvres (ce qui comprends les vidéos sur Youtube) sont soumises à des droits d'auteurs.</p>
					<br><br><br>
					<div class="blocs">
						<div class="LiExcep">
					 		<p class="ppp" id="exceptions">Les exceptions au droit d'auteur :</p><p>
							<ul>
								<li>Le droit à la copie privée : copier une œuvre pour un usage personnel</li>Le droit à la copie privée : copier une œuvre pour un usage personnel
								<li>Utiliser une courte citation</li>
								<li>Représentation d'une œuvre dans le cercle familial</li>
								<li>La parodie est autorisée</li>
							</ul>
							</p>
						</div>
					</div>


				<h1 class="paddingPartie" id="partie2">YouTube et le droit d'auteur</h1> <br> <br>
					<p>Chaque fois qu'une vidéo est mise en ligne sur Youtube, celle-ci est soumise à des droits d'auteurs.
					Chaque contenu créé et posté sur Youtube est daté et possède un auteur.  </p>
				<h2 id="sous_partie4">Content ID</h2>
					<p>Content ID est un système mis en place par Youtube (Google) gouverné par les accords conclus entre Youtube et les propriétaires de contenus qui ont été publiés sur Youtube.  D'après Google, « content ID est un outil que nous avons développé pour aider les titulaires de droits d'auteur à identifier et à gérer en toute facilité leur contenu sur Youtube. Les vidéos sont comparées à une base de données de fichiers fournis par les propriétaires de contenu. »</p>
					<div class="Images">
						<img src="Elliot/Images/ContentID.png" alt="">
					</div>
					<h3>À quoi sert-il?</h3>
					<p>Il permet aux propriétaires du contenu de s'assurer que leurs œuvres ne sont pas utilisées. Si le Robot Content Id trouve une vidéo qui contient une autre œuvre, le propriétaire de l'oeuvre sera prévenu par Youtube et il pourra choisir de laisser en ligne cette vidéo et de la monétiser ou bien de bloquer la vidéo et d'empêcher le visionnage de celle-ci et d'infliger un avertissement à celui qui à utilisé ce contenu soumis aux droits d'auteur.</p>
				<h2 id="sous_partie5">Le fonctionnement de Content ID</h2>
					<p>Le robot va analyser chaque seconde de votre vidéo et vérifier si il n'y a pas un passage de votre vidéo qui ressemble aux contenus dans sa base de données. Par exemple, si quelqu'un essaye de publier un film Disney en entier sur Youtube. Cette vidéo sera bloquée par Content ID et ne pourra donc pas être visionnée par les autres. Dès la diffusion de son film, Disney l'a transmis à Youtube pour que le système Content ID puisse l'avoir dans sa base de données. Le robot a donc pu comparer la vidéo mise en ligne au film et à décidé que la vidéo avait trop de ressemblance avec ce que lui avait transmis Disney (dans ce cas c'est exactement la même chose entre les deux). Disney sera donc averti que cette personne à voulu publier son film sur sa chaîne YouTube. Disney pourra donc choisir de laisser la vidéo en ligne et de la monétiser, ou bien de la bloquer et d'envoyer un avertissement à cette personne.</p>
				<h2 id="sous_partie6">Les problèmes de ce système</h2>
				<p>Content ID a donc l'air d'un système révolutionnaire très pratique mais il reste un robot et peut donc faire des erreurs, beaucoup d'erreurs...</p>
				<div class="blocs">
					<div class="problemes">
						<h3>Un problème juridique</h3>
						<p>En effet, Content ID peut se tromper. Lorsqu'il analyse les passages, le robot ne cherche pas à savoir si vous possédez le droit ou non d'utiliser ce passage. C'est ici le coeur du problème, Contend ID est une sorte de système de censure aveugle. Comme tout robot, ses capacités sont limitées et lui ne sert qu'à comparer des données. Le robot ne peut donc pas appliquer les exceptions sur le copyright ou le droit d'auteur. Il ne fait pas non plus la différence entre quelqu'un qui publie un film en entier sur Youtube à quelqu'un qui utilise 20 secondes d'un reportage pour son documentaire de deux heures. Or dans ce cas là, la vidéo ne devrait pas être bloquée juridiquement car elle a un but pédagogique.</p>
					</div>
				</div>
				<div class="blocs">
					<div class="problemes">
						<h3>Un problème de fonctionnement du robot</h3>
						<p>Il y a un problème au niveau de la rentabilité de la vidéo. Si l'auteur qui dépose la plainte souhaite monétiser la vidéo à son compte, il récupère tout l'argent de cette vidéo même si le passage utilisé ne fait que ¼  de la vidéo. <br>
							Voici un exemple très concret de la part du Youtubeur MisterJDay : une vidéo qu'il avait mise en ligne  contenait 8 secondes d'une émission de télévision. Sa vidéo durait 36 minutes et 46 secondes. Ce passage correspondait donc à 0,36% de la vidéo. Tout l'argent gagné grâce à cette vidéo allait à l'ayant droit de ce passage de 8 secondes alors que la plupart des personnes qui ont cliqué sur la vidéo ne sont même pas arrivés à ce passage. Il dénonce donc très froidement le problème qu'il y'a avec les flous juridiques et le système de Content ID.</p>
					</div>
				</div>
				<div class="blocs">
					<div class="problemes">
						<h3>Un désaccord entre le fonctionnement de ContentID et la loi sur le droit d'auteur</h3>
						<p>Le fonctionnement de Content ID n'est pas toujours en accord avec ce que dit la loi sur le droit d'auteur ou le copyright. Personne ne sait exactement ce qu'il a le droit de mettre dans ses vidéos. Sa vidéo peut très bien respecter ce que dit la loi sur le droit d'auteur ou le copyright mais celle-ci peut quand même être bloqué par Content ID.</p>
					</div>
				</div>







		</div>
	</div>

	<footer>
		<?php include('footer.php') ?>
	</footer>

</body>
</html>
