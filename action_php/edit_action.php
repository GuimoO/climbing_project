

<?php

// Connexion à la base de données
include'../modele/connexion_bdd.php';

//Verification si il y a un contenu dans les Post
if (empty($_POST['event']) || empty($_POST['description']))
{
	echo "remplir les champs"; ?>
	<center>
 			<a href="../edit.php"><input type="submit" name="Submit" action="../edit.php" value="Envoyer"><a>
 	</center>

	<?php
}
else
{
//récupération des champs dans des variables ou l'on aura vérifier la validité des champs
	

// mise a jour de la bdd

$req = $bdd->prepare('UPDATE evenement SET event = ?, description = ? WHERE id = ?');

//insertion des nouvelles valeures
$req->execute(array($_POST['event'], $_POST['description'], $_GET['id']));
$req->closeCursor();
header('location: ../P1.php');
}
// REnvoi vers la page principale



