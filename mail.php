<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" href="projet.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Projet tuteuré : YouTube</title>
	<meta charset="utf-8"/>
</head>
<body>

	<header>
			<?php include('headerPartie.php') ?>
	</header>

	<div class="corps" id="padding">
		<form class="form-horizontal decalage">
			<fieldset>

			<!-- Form Name -->
			<legend> Écrivez-nous:</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="contactMail">Adresse mail</label>
			  <div class="col-md-5">
			  <input id="contactMail" name="contactMail" type="text" placeholder="exemple : azerty@france.fr" class="form-control input-md" required="">

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nom">Nom &amp; Prénom</label>
			  <div class="col-md-5">
			  <input id="nom" name="nom" type="text" placeholder="exemple : DUPOND Pierre" class="form-control input-md" required="">

			  </div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="text">Entrez votre message</label>
			  <div class="col-md-4">
			    <textarea class="form-control" id="text" name="text"></textarea>
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSend"></label>
			  <div class="col-md-4">
			    <button id="btnSend" name="btnSend" class="btn btn-info">Envoyer</button>
			  </div>
			</div>

			</fieldset>
		</form>

	</div>

	<footer>
			<?php include('footer.php') ?>
	</footer>

</body>
</html>
