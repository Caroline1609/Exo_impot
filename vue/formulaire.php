<form method="GET" action=" <?php $_SERVER['PHP_SELF'];?>" enctype="text/plain" >

<fieldset><legend>Informations contribuable :</legend>
<label for="nom">Nom :</label>
<input type="text" id="nom" name="nom" required>
<label>Revenu annuel (€) :</label>
<input type="number" step="0.01" name="revenu" required>
<button type="submit">Calculer</button>


 <?php
        require_once './model/Contribuable.php';

        if (isset($_GET['nom'], $_GET['revenu'])) {
            $nom = htmlspecialchars($_GET['nom']);
            $revenu = (float) $_GET['revenu'];

            $contribuable = new Contribuable($nom, $revenu);
            $impot = $contribuable->calculImpot();

            $texteResultat = "Bonjour {$contribuable->getNom()}, votre impôt est de " . number_format($impot, 2, ',', ' ') . " €";
            echo '<label for="rendu">Résultat :</label>';
            echo '<input type="text" id="rendu" name="rendu" readonly value="' . $texteResultat . '">';
        }
        ?>



</fieldset>




</form>