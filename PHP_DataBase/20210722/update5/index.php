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
    $id=$info['id'];
    $nom=$info['nom'];
    $prenom=$info['prenom'];
    $statut=$info['statut'];
    echo "ID : ".$info['id'].", Nom : ".$info['nom'].", Prenom : ".$info['prenom']."<a href='formulaire.php?id=$id&nom=$nom&prenom=$prenom&statut=$statut'><button>Modifier</button></a><br>";
}

?>
