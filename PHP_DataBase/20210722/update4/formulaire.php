<form action="traitement.php" method="GET">
    <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
    Nom :<input type="text" name="nom"><br>
    Prénom :<input type="text" name="prenom"><br>
    Status dans la famille :<input type="text" name="statut"><br>
    <input type="submit">
</form>