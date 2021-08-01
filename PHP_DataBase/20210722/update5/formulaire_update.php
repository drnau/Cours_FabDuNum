
<form action="traitement.php" method="GET">
    <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
    Nom :<input type="text" name="nom" value="<?php echo $_GET["nom"] ?>"><br>
    Prénom :<input type="text" name="prenom" value="<?php echo $_GET["prenom"] ?>"><br>
    Status dans la famille :<input type="text" name="statut" value="<?php echo $_GET["statut"] ?>"><br>
    <input type="submit">
</form>