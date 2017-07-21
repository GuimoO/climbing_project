
<?php include "includes/inclu_head.php"; ?>
<!--formulaire avant d'envoyer sur la base de donnée-->
<?php 
$id = $_GET['id']; 

//connexion BDD
include_once "modele/connexion_bdd.php"; 
//Selection de tous les champs de la table evenement et affeter à une variable
$result = $bdd->prepare('SELECT * FROM evenement WHERE id = ?');
$result->execute(array($_GET['id']));
$donnee = $result->fetch();

?>		
<div class="container-fluid">
    <form action="action_php/edit_action.php?id=<?php echo $id; ?>" method="post" name="formulaire">
  		<p>The form below contains two input elements; one of type text and one of type password:   </p>
    	<div class="form-group">
      		<label>EVENT:</label>
      		<input type="text" name="event" class="form-control" placeholder="<?php echo $donnee['event']; ?>">
    	</div>
    	<div class="form-group">
      		<label>DESCRIPTION:</label>
     	 	<textarea class="form-control" name="description" placeholder="<?php echo $donnee['description']; ?>"></textarea>
    	</div>
   	
      		<input type="reset" name="submit" value="Réinitialiser le formulaire">
      		<input href="action_php/edit_action.php?id=<?php echo $id; ?>" type="submit" name="submit" action="action_php/edit_action.php?id=<?php echo $id; ?>" value="Envoyer">
    </form>
</div>


</body>
</html>

