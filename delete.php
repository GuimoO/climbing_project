<?php


if (is_numeric($_GET['id'])) 
{

include "modele/connexion_bdd.php";

$query = $bdd->prepare('DELETE FROM evenement WHERE id = ? ');

$query->execute(array($_GET['id']));                       

$query->closeCursor();

header('Location: P1.php');

}
	
 

else
{
	echo "id n'est pas un nombre";
}
