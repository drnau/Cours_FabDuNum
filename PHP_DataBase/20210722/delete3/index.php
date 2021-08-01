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
    echo "ID : ".$info['id'].", Nom : ".$info['nom'].", Prenom : ".$info['prenom']." <a href='delete.php?id=$id'><button>X</button></a><br>";
}

?>