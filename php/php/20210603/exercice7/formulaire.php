<form action="destination.php" method="get">
Genre :
<select name="genre">
    <option value="">--Choisissez une option--</option>
    <option value="Monsieur">Homme</option>
    <option value="Madame">Femme</option>
    <option value="Monsieur/Madame">Inconnu</option> <br><br>
Nom :<input type="text" name="nom"><br>
Prénom :<input type="text" name="prenom"><br>
Code Postale :<input type="number" name="codePostal"><br>
Ville :<input type="text" name="ville"><br>
Carte Bancaire :<input type="radio" name="paiement" value="carte bancaire">
Paypal :<input type="radio" name="paiement" value="paypal"><br>
Accepter les conditions d'utilisation :<input type="checkbox" name="condition"><br>
<input type="submit">
</form>