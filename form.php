
<?php include "includes/inclu_head.php"; ?>
<!--formulaire avant d'envoyer sur la base de donnée-->

<div class="container-fluid">
    <form action="action_php/form_action.php" method="post" name="formulaire">
  		<p>The form below contains two input elements; one of type text and one of type password:</p>
    	<div class="form-group">
      		<label>EVENT:</label>
      		<input type="text" name="event" class="form-control">
    	</div>
    	<div class="form-group">
      		<label>DESCRIPTION:</label>
     	 	<textarea class="form-control" name="description"></textarea>
    	</div>
    	
      		<input type="reset" name="submit" value="Réinitialiser le formulaire">
      		<input href="action_php/form_action.php" type="submit" name="submit" action="action_php/form_action.php" value="Envoyer">
    
    </form>
</div>

</body>
</html>
