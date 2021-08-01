<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=famille;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$requete='SELECT * FROM famille_tbl '; // écriture de la requête
$reponse=$bdd->query($requete); // réalisation de la requête
foreach ($reponse as $info) {
    echo "ID : ".$info['id'].", Nom : ".$info['nom'].", Prenom : ".$info['prenom']."<br>";
}

?>
