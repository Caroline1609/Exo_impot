<form method="GET" action=" <?php $_SERVER['PHP_SELF'];?>" enctype="text/plain" >

<fieldset><legend>Informations contribuable :</legend>
<label for="nom">Nom :</label>
<input type="text" id="nom" name="nom" required>
<label>Revenu annuel (€) :</label>
<input type="number" step="0.01" name="revenu" required>

<label for="">:</label>
<input id="" name="" readonly></input>
<button type="submit">Calculer</button>




</fieldset>




</form>