<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="youtube.css">
		<title></title>
	</head>
	<body>
		<header>
			<?php include('header.php'); ?>
		</header>

		<?php
		$title="Nous contacter";
		echo $title;
		?>
			<div class="mailEnvoi">
				<form method="post" action="envoimail.php" enctype="multipart/form-data">
					<fieldset>
					<legend> Écrivez-nous:</legend>
						<div>
							 	<label>Votre adresse mail :</label>
						</div>

						<div>
								<input type="text" name="mailexpediteur" placeholder="xyz@domaine.com" required>
						</div>
						<div>
								<label for ="text">Nom et Prénom :</label>
						</div>
						<div>
								<input type="text" name="nomprenom" placeholder="NOM Prénom" required>
						</div>

						<div>
								<label for="Sujet">Sujet :</label>
						</div>

						<div>
								<input type="text" placeholder="Sujet" name="subject" required>
						</div>

						<div>
						 		<label for="text" name="message" placeholder="Message">Entrez votre message :</label>
					 	</div>

					 	<div>
								<textarea rows="10" cols="70" name="message" required></textarea>
						</div>

						<div>
								<label for="text">Pièce Jointe :</label>
						</div>
						<div>
								<input name="attach" type="file" />
						</div>
						<br>
						<div>
								<input type="submit" value="Envoyer">
				      	<input type="reset" value="Annuler">
						</div>
					</fieldset>
				</div>
			</form>
			<?php

		if(isset($_POST['mailexpediteur'],$_POST['subject'],$_POST['message'],$_POST['nomprenom']))
		{
			$mailexpediteur=$_POST['mailexpediteur'];
			$subject=$_POST['subject'];
			$message=$_POST['message'];
			$nomprenom=$_POST['nomprenom'];



			require('PHPmailer.php');
			require('SMTP.php');
			require('Exception.php');


			$mail             = new PHPMailer\PHPMailer\PHPMailer();
			$mail->isSMTP();

			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->SMTPAuth = true;
			$mail->Username   = "projettutbm@gmail.com";  // GMAIL username
			$mail->Password   = "phpmailerbm";
			$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
			$mail->Port       = 587;              // set the SMTP port for the GMAIL server
			$mail->SMTPOptions = array(
			                    'ssl' => array(
			                        'verify_peer' => false,
			                        'verify_peer_name' => false,
			                        'allow_self_signed' => true
			                    )
			                );
			$mail->SetFrom($mailexpediteur, $nomprenom);

			$mail->addCC('alexandre.bomont@gmail.com',"Alexandre Bomont");
			$mail->addCC('Florent.fli@gmail.com', 'Florent Fliedner');
			$mail->addCC('aherkens@gmail.com', 'Antoine Herkens');
			$mail->addCC('elliot.anthonioz@aol.com', 'Elliot Anthonioz');
			$mail->addCC('romain25.nintendo@gmail.com', 'Romain Vermot');

			$mail->addReplyTo($mailexpediteur,$nomprenom);

			$mail->IsHTML(true);

			// Objet
			$mail->Subject = $subject;

			// Ajouter une pièce jointe
			$chemin_destination = '../Temp/';

			$mail->AddAttachment($_FILES['attach']['tmp_name'], $chemin_destination.$_FILES['attach']['name']);
			// Votre message
			$mail->MsgHTML($message);

			// Envoi du mail avec gestion des erreurs
			if(!$mail->Send()) {
			  echo 'Erreur : ' . $mail->ErrorInfo;
			} else {
			  echo 'Message envoyé !';
			}
		}


			?>
			<footer><?php include('footer.php') ?></footer>

	</body>
</html>
