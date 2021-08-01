<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=famille;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$requete="INSERT INTO `famille_tbl` (`id`, `nom`, `prenom`, `statut`, `dateNaissance`) VALUES (NULL, 'Dupont', 'Manu', 'Enfant', '2001-05-17')";
$reponse=$bdd->query($requete); // réalisation de la requête

?>
