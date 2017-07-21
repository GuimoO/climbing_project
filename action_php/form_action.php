

<?php

// Connexion à la base de données
include'../modele/connexion_bdd.php';

//Verification si il y a un contenu dans les Post
if (empty($_POST['event']) || empty($_POST['description']))
{
	echo "remplir les champs"; ?>
	<center>
 			<a href="../form.php"><input type="submit" name="Submit" action="../form.php" value="Envoyer"><a>
 	</center>

	<?php
}
else
{
//récupération des champs dans des variables ou l'on aura vérifier la validité des champs
	$event = htmlspecialchars($_POST['event']);
	$description = htmlspecialchars($_POST['description']);
	

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO evenement (event, description, date) VALUES(?, ?, NOW())');

// execution de l'Insertion du message à l'aide d'une requête préparée
$req->execute(array($event, $description));

$req->closeCursor();

}
// REnvoi vers la page principale
header('location: ../P1.php');


