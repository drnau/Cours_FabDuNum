<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Ville;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$requete='SELECT * FROM villes_france_free '; // écriture de la requête
$reponse=$bdd->query($requete); // réalisation de la requête
foreach ($reponse as $info) {
    echo "Nom : ".$info['ville_nom']."<br>";
}
