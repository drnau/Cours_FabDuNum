<?php
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$statut = $_GET["statut"];
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=famille;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    $requete="INSERT INTO `famille_tbl` (`nom`, `prenom`, `statut`) VALUES ('$nom', '$prenom', '$statut') ";
    $bdd->query($requete); // réalisation de la requête
    
?>