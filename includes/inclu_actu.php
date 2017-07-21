
<?php

//connexion BDD
include_once "modele/connexion_bdd.php"; 
//Selection de tous les champs de la table evenement et affeter à une variable
$result = $bdd->query('SELECT * FROM evenement');

?>

	<div id="section2" class="container-fluid contActu">

		<div class="row rowActu">
			<div class="panel panel-default paneldef">

			<!--panel header-->
				<div class="panel-heading panelH"> 
					<span class="glyphicon glyphicon-list-alt">	
					</span>News
				</div>
			<!--panel body-->
				<div class="panel-body panelB">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>EVENT</th>
								<th>DESCRIPTION</th>
								<th>DATE</th>
								<th>Delete</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>

<?php 		while($donnee = $result->fetch()) 
//récupération des données à l'aide de la fonction fetch qui va chercher toutes les donnees jusqu'à ce qu'il ny en ai plus
		{ ?>
		       				<tr>  
	                    		<td><?php echo $donnee['event']; ?></td>    
	                   			<td><?php echo $donnee['description']; ?></td>
	             				<td><?php echo $donnee['date']; ?></td>
	                    		<td><a href="delete.php?id=<?php echo $donnee['id']; ?>">Delete</a></td>
	                    		<td><a href="edit.php?id=<?php echo $donnee['id']; ?>">Edit</a></td>
	                		</tr>
	                	
<?php   } ?>				
						</tbody>

					</table>

					

				</div>	
			</div>	
		</div>
		<div class="row rowBt">
		<a href="form.php"><input type="button" name="submit" value="WRITE YOUR OWN NEWS"></a>
		</div>
	</div>