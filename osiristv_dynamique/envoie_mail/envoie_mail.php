<!DOCTYPE html>
<html lang="fr">

	<head>
		<title>Envoi de mail...</title>
        <meta charset="utf-8" />		
		<meta name="author" content="Jean-Luc Husson" />
		<meta name="keywords" content="mail, php, query string" />
		<meta name="description" content="Exemple d'envoi d'un mail avec la fonction mail de php" />

		<style>
			p.ok {
				color : #0c0 ;
			}

			p.ko {
				color : #c00 ;
			}
		</style>
    </head>
    
    <body>
  
<?php

	// Les lignes suivantes récupèrent les valeurs associés aux noms des champs et 
	// les stocke dans des variables PHP (commencent par un $).

	// Si les champs avaient été transmis en POST, il aurait juste fallu écrire $_POST à la place de $_GET dans le script lié.

	// Attention : lsur le serveur WEBETU, 'usage de la fonction php mail() est restreinte aux destinataires du domaine .univ-lorraine.fr
	// ça ne marchera donc pas si le destinataire est par exemple une adresse @gmail.com, @orange.fr ou autre...  
	
	$destinataire = $_GET ['dest'] ;
	$expediteur  = $_GET ['exped'] ;
	$nom = $_GET ['nom'] ;
	$prenom = $_GET ['prenom'] ;
	$objet = $_GET ['objet'] ;

	$message = htmlspecialchars($_GET ['message']) ;
	$avis = $_GET ['avis'] ;


	if ( isset($_GET['notifs'])) {
		$accordnotifs="L'utilisateur accepte de recevoir des notifications par mail" ;
	}
	else {
		$accordnotifs="L'utilisateur refuse de recevoir des notifications par mail" ;
	}

	
	if ( isset($_GET['conditions'] )) {
		$accordconditions="L'utilisateur accepte les Conditions Générales et la politique de confidentialité" ;
	}
	else {
		$accordconditions="L'utilisateur refuse les Conditions Générales et la politique de confidentialité" ;
	}

	// Ici on ne fait aucun contrôle, on espère que tous les champs sont bien remplis à la soumission du formulaire
	
	// Exemple d'appel  https://webetu.iutnc.univ-lorraine.fr/~husson7/sae105/formMail/envoieMail.php?dest=jean-luc.husson@univ-lorraine.fr&exped=jeanluc.husson@gmail.com&sujet=test&message=coucou

	$headers = 'From: ' . $expediteur ; 

	// On peut facilement ici construire le mail qui sera envoyé en concaténant des chaines et des variables...
	// Le \n provoque un retour à la ligne

	$messageEnvoye = "Nouveau message reçu de la part de " . $prenom . " " . $nom . " (". $expediteur . ")" . 
					 "\n pour " . $destinataire . " : " .
					 "\n-------------------------------" .
					 "\n Objet : " . $objet .
					 "\n-------------------------------" .
					 $message .
					 "\n-------------------------------" .
					 "Niveau de satisfaction : " . $avis . "/5" ;
	
	// Puis on appelle simplement la fonction mail() prédéfinie en php en lui transmettant les paramètres qu'elle attend
	// Le résultat de la fonction est 1 si l'envoi du mail s'est bien passé.

	$resultat = mail ( $destinataire , $objet , $messageEnvoye , $headers ) ;
	
	// On teste le résultat pour afficher un message de succès ou d'erreur

	echo ( nl2br($messageEnvoye) ) ;
	echo ( $accordnotifs . ' - ' . $accordconditions) ;


	if ($resultat==1) {
		echo ( '<p class="ok">Votre message a bien été envoyé. Merci !</p>' ) ;
	}
	else {
		echo ( '<p class="ko">Un souci a eu lieu durant l\'envoi du message, désolé.</p>' ) ;
	}


	// On génère quoi qu'il arrive un petit bouton de retour

	echo ( '<div><a href="javascript:history.back();">Retour à la page précédente.</a></div>')

?>    
	
	</body>
	
</html>