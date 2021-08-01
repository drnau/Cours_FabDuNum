<?php
require_once('connexion.php');
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$statut = $_GET["statut"];
    $requete="INSERT INTO `famille_tbl` (`nom`, `prenom`, `statut`) VALUES ('$nom', '$prenom', '$statut') ";
    $bdd->query($requete); // réalisation de la requête
    header ('Location: index.php');
